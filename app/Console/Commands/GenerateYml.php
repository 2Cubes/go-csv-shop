<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GenerateYml extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-yml';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate YML files with categories and products split into multiple files if necessary';

    private $maxProductsPerFile = 100000;

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting YML generation...');

        $ymlFolder = 'public/yml/';
        Storage::disk('local')->deleteDirectory($ymlFolder);
        Storage::disk('local')->makeDirectory($ymlFolder);
        chmod(Storage::disk('local')->path($ymlFolder), 0755);

        $this->generateYmlFiles($ymlFolder);

        $this->info('YML generation completed.');
    }

    private function generateYmlFiles($ymlFolder)
    {
        $fileIndex = 1;
        $filePath = $this->getYmlFileName($ymlFolder, $fileIndex);
        $this->startXml($filePath);

        $productCount = 0;

        Product::with(['category', 'brand'])->chunk(50000, function ($products) use (&$fileIndex, &$productCount, $ymlFolder, &$filePath) {
            $batchXml = '';

            foreach ($products as $product) {
                $product->sku = trim(preg_replace('/[^A-Za-z0-9\-_]/', '', $product->sku));
                if(!$product->sku) continue;

                if ($productCount >= $this->maxProductsPerFile) {
                    $this->endXml($filePath);
                    $fileIndex++;
                    $filePath = $this->getYmlFileName($ymlFolder, $fileIndex);
                    $this->startXml($filePath);
                    $productCount = 0;
                }

                $batchXml .= '<offer id="' . $product->id . '" available="' . ($product->stock > 0 ? 'true' : 'false') . '">';
                $batchXml .= '<url>' . route('product', ["sku" => $product->sku, "id" => $product->id]) . '</url>';
                $batchXml .= '<price>' . $product->price . '</price>';
                $batchXml .= '<currencyId>RUB</currencyId>';

                if ($product->category) {
                    $batchXml .= '<categoryId>' . $product->category->id . '</categoryId>';
                }
                if ($product->brand) {
                    $batchXml .= '<vendor>' . htmlspecialchars($product->brand->name) . '</vendor>';
                }

                $batchXml .= '<stock>' . $product->stock . '</stock>';
                $batchXml .= '<name>' . htmlspecialchars($product->name) . '</name>';
                $batchXml .= '<description>' . htmlspecialchars($product->description) . '</description>';
                $batchXml .= '</offer>' . "\n";

                $productCount++;
            }

            File::append(Storage::disk('local')->path($filePath), $batchXml);
            echo '.';
        });

        $this->endXml($filePath);
    }

    private function startXml($file)
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<yml_catalog date="' . now()->format('Y-m-d H:i') . '">';
        $xml .= '<shop>';
        $xml .= '<name>' . env('APP_NAME') . '</name>';
        $xml .= '<company>' . env('COMPANY_NAME') . '</company>';
        $xml .= '<url>' . config('app.url') . '</url>';
        $xml .= '<currencies><currency id="RUB" rate="1"/></currencies>';
        $xml .= '<categories>';

        $categories = Category::all();
        foreach ($categories as $category) {
            $xml .= '<category id="' . $category->id . '"';
            if ($category->parent_id) {
                $xml .= ' parentId="' . $category->parent_id . '"';
            }
            $xml .= '>' . htmlspecialchars($category->name) . '</category>';
        }

        $xml .= '</categories><offers>';

        File::append(Storage::disk('local')->path($file), $xml);
    }

    private function endXml($file)
    {
        $xml = '</offers></shop></yml_catalog>';
        File::append(Storage::disk('local')->path($file), $xml);
    }

    private function getYmlFileName($folder, $index)
    {
        return $folder . 'yml_export_' . $index . '.xml';
    }
}

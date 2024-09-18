<?php

namespace App\Console\Commands;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap for products, categories, brands, and static pages, and split into smaller sitemaps if necessary';
    protected $sitemapFolder = 'public/sitemaps/';

    // Количество URL в одном sitemap
    private $maxUrlsPerSitemap = 100000;

    public function handle()
    {
        $this->info('Generating sitemap...');

        // Папка для хранения карт сайта
        Storage::disk('local')->deleteDirectory($this->sitemapFolder);
        Storage::disk('local')->makeDirectory($this->sitemapFolder);

        $this->generateSitemaps();

        $this->generateMainSitemap();

        $this->info('Sitemap generation completed.');
    }

    private function generateSitemaps()
    {
        $sitemapIndex = 1;
        $urlCount = 0;
        $fileName = $this->getSitemapFileName($sitemapIndex);
        $this->startSitemapFile($fileName);

        $staticRoutes = $this->getStaticRoutes();
        foreach ($staticRoutes as $route) {
            if ($urlCount >= $this->maxUrlsPerSitemap) {
                $this->endSitemapFile($fileName);
                $sitemapIndex++;
                $urlCount = 0;
                $fileName = $this->getSitemapFileName($sitemapIndex);
                $this->startSitemapFile($fileName);
            }
            $this->appendUrlToSitemap($fileName, $route);
            $urlCount++;
        }

        $categories = Category::all();
        foreach ($categories as $category) {
            if ($urlCount >= $this->maxUrlsPerSitemap) {
                $this->endSitemapFile($fileName);
                $sitemapIndex++;
                $urlCount = 0;
                $fileName = $this->getSitemapFileName($sitemapIndex);
                $this->startSitemapFile($fileName);
            }
            $this->appendUrlToSitemap($fileName, route('category', ['slug' => $category->slug]));
            $urlCount++;
        }

        $brands = Brand::all();
        foreach ($brands as $brand) {
            if ($urlCount >= $this->maxUrlsPerSitemap) {
                $this->endSitemapFile($fileName);
                $sitemapIndex++;
                $urlCount = 0;
                $fileName = $this->getSitemapFileName($sitemapIndex);
                $this->startSitemapFile($fileName);
            }
            $this->appendUrlToSitemap($fileName, route('brand', ['slug' => $brand->id]));
            $urlCount++;
        }

        Product::chunk(10000, function ($products) use (&$sitemapIndex, &$urlCount, &$fileName) {
            foreach ($products as $product) {
                $product->sku = trim(preg_replace('/[^A-Za-z0-9\-_]/', '', $product->sku));
                if(!$product->sku) continue;

                if ($urlCount >= $this->maxUrlsPerSitemap) {
                    $this->endSitemapFile($fileName);
                    $sitemapIndex++;
                    $urlCount = 0;
                    $fileName = $this->getSitemapFileName($sitemapIndex);
                    $this->startSitemapFile($fileName);
                }

                $this->appendUrlToSitemap($fileName, route('product', ["sku" => $product->sku, "id" => $product->id]));
                $urlCount++;
            }
        });

        $this->endSitemapFile($fileName);
    }

    private function getStaticRoutes()
    {
        return [
            route('index'),
            route('catalog'),
            route('store'),
            route('manufacturers'),
            route('delivery'),
            route('guaranties'),
            route('suppliers'),
            route('about-us'),
            route('contacts'),
        ];
    }

    private function generateMainSitemap()
    {
        $sitemapFolder = 'public/sitemaps/';
        $mainSitemapFile = $sitemapFolder . 'sitemap.xml';
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        $sitemapFiles = Storage::disk('local')->files($sitemapFolder);
        foreach ($sitemapFiles as $sitemapFile) {
            if (strpos($sitemapFile, 'sitemap-') !== false) {
                $url = asset(str_replace('public/', 'storage/', $sitemapFile));
                $xml .= '<sitemap>';
                $xml .= '<loc>' . htmlspecialchars($url) . '</loc>';
                $xml .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
                $xml .= '</sitemap>';
            }
        }

        $xml .= '</sitemapindex>';

        File::append(Storage::disk('local')->path($mainSitemapFile), $xml);
    }

    private function getSitemapFileName($index)
    {
        return 'public/sitemaps/sitemap-' . $index . '.xml';
    }

    private function startSitemapFile($fileName)
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        File::append(Storage::disk('local')->path($fileName), $xml);
    }

    private function appendUrlToSitemap($fileName, $url)
    {
        $xml = '<url>';
        $xml .= '<loc>' . htmlspecialchars($url) . '</loc>';
        $xml .= '<lastmod>' . now()->toAtomString() . '</lastmod>';
        $xml .= '</url>';
        File::append(Storage::disk('local')->path($fileName), $xml);
    }

    private function endSitemapFile($fileName)
    {
        $xml = '</urlset>';
        File::append(Storage::disk('local')->path($fileName), $xml);
    }
}

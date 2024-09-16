<?php

namespace App\Console\Commands;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate_slug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function handle()
    {
        $this->generateSlugsForModel(Brand::class);

        $this->generateSlugsForModel(Category::class);

        $this->info('Slugs have been generated successfully!');
    }

    private function generateSlugsForModel($model)
    {
        $items = $model::whereNull('slug')->get();

        foreach ($items as $item) {
            $slug = Str::slug($item->name);

            // Проверяем, существует ли уже такой slug
            if ($model::where('slug', $slug)->exists()) {
                // Если существует, добавляем id
                $slug .= '-' . $item->id;
            }

            // Сохраняем slug
            $item->slug = $slug;
            $item->save();
        }
    }
}

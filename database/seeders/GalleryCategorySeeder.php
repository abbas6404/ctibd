<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GalleryCategory;
use Illuminate\Support\Str;

class GalleryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Welding',
                'order' => 1,
            ],
            [
                'name' => 'Pipe Fitter',
                'order' => 2,
            ],
            [
                'name' => 'Steel Fitter',
                'order' => 3,
            ],
            [
                'name' => 'Scaffolding',
                'order' => 4,
            ],
            [
                'name' => 'Mechanical Fitter',
                'order' => 5,
            ],
            [
                'name' => 'Machinist',
                'order' => 6,
            ],
            [
                'name' => 'Electrician',
                'order' => 7,
            ],
            [
                'name' => 'Blaster Painter',
                'order' => 8,
            ],
        ];

        foreach ($categories as $index => $category) {
            GalleryCategory::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'order' => $category['order'],
            ]);
        }
    }
}

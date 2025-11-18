<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 12 gallery entries (you can add images later)
        for ($i = 1; $i <= 12; $i++) {
            Gallery::create([
                'img' => null, // You can add image paths later
            ]);
        }
    }
}

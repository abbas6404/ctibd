<?php

namespace Database\Seeders;

use App\Models\ShortCourse;
use Illuminate\Database\Seeder;

class ShortCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'img' => null,
                'description' => 'Learn masonry skills including brick laying, block work, and stone masonry. This course covers both theoretical knowledge and hands-on practical training.',
            ],
            [
                'img' => null,
                'description' => 'Master electric house wiring techniques. Learn about electrical circuits, safety measures, and installation of electrical systems in residential buildings.',
            ],
            [
                'img' => null,
                'description' => 'Comprehensive training on sewing machine operation. Learn pattern making, cutting, and garment construction techniques for the textile industry.',
            ],
            [
                'img' => null,
                'description' => 'Professional painting techniques for interior and exterior surfaces. Learn about different types of paints, surface preparation, and application methods.',
            ],
            [
                'img' => null,
                'description' => 'Training on air conditioning and refrigeration systems. Learn installation, maintenance, and troubleshooting of AC and fridge units.',
            ],
            [
                'img' => null,
                'description' => 'Bakery and pastry making course. Learn bread making, cake decoration, and various baking techniques for professional bakery operations.',
            ],
            [
                'img' => null,
                'description' => 'Plumbing and pipe fitting course covering water supply systems, drainage, and pipe installation techniques for residential and commercial buildings.',
            ],
            [
                'img' => null,
                'description' => 'Welding training program covering various welding techniques including arc welding, gas welding, and modern welding technologies.',
            ],
            [
                'img' => null,
                'description' => 'Scaffolding safety and construction course. Learn proper scaffolding setup, safety protocols, and construction site management.',
            ],
            [
                'img' => null,
                'description' => 'Steel binding and reinforcement work training. Learn about steel structures, reinforcement techniques, and construction standards.',
            ],
            [
                'img' => null,
                'description' => 'Tiles and marble works course covering installation techniques, cutting, polishing, and maintenance of tiles and marble surfaces.',
            ],
        ];

        foreach ($courses as $course) {
            ShortCourse::create($course);
        }
    }
}

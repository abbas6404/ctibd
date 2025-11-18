<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Users
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed all other data
        $this->call([
            AdminSeeder::class,
            EmployeeSeeder::class,
            ShortCourseSeeder::class,
            NotificationSeeder::class,
            GallerySeeder::class,
        ]);
    }
}

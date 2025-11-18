<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Management Team
        Employee::create([
            'name' => 'Dr. Mohammad Rahman',
            'pic' => null,
            'designation' => 'Principal',
            'type' => 'management',
        ]);

        Employee::create([
            'name' => 'Eng. Fatima Begum',
            'pic' => null,
            'designation' => 'Vice Principal',
            'type' => 'management',
        ]);

        Employee::create([
            'name' => 'Mr. Karim Uddin',
            'pic' => null,
            'designation' => 'Administrative Officer',
            'type' => 'management',
        ]);

        Employee::create([
            'name' => 'Ms. Ayesha Khan',
            'pic' => null,
            'designation' => 'Academic Coordinator',
            'type' => 'management',
        ]);

        // Trainers
        Employee::create([
            'name' => 'Eng. Hasan Ali',
            'pic' => null,
            'designation' => 'Senior Instructor - Civil Engineering',
            'type' => 'trainer',
        ]);

        Employee::create([
            'name' => 'Mr. Rashed Ahmed',
            'pic' => null,
            'designation' => 'Instructor - Computer Technology',
            'type' => 'trainer',
        ]);

        Employee::create([
            'name' => 'Eng. Salma Akter',
            'pic' => null,
            'designation' => 'Instructor - Electrical Engineering',
            'type' => 'trainer',
        ]);

        Employee::create([
            'name' => 'Mr. Kamal Hossain',
            'pic' => null,
            'designation' => 'Instructor - Mechanical Engineering',
            'type' => 'trainer',
        ]);

        Employee::create([
            'name' => 'Ms. Nusrat Jahan',
            'pic' => null,
            'designation' => 'Instructor - Garments Technology',
            'type' => 'trainer',
        ]);

        Employee::create([
            'name' => 'Mr. Sohel Rana',
            'pic' => null,
            'designation' => 'Instructor - Bakery & Food Technology',
            'type' => 'trainer',
        ]);
    }
}

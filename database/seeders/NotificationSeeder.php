<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::create([
            'title' => 'Admission Open for 2025 Session',
            'img' => null,
            'description' => 'Admission is now open for the 2025 academic session. We are accepting applications for Diploma in Civil, Computer, Electrical, and Mechanical Engineering. Apply now and secure your future!',
        ]);

        Notification::create([
            'title' => 'Scholarship Program Available',
            'img' => null,
            'description' => 'Government scholarship of 32,000/- BDT is available for eligible students. Apply now to avail this opportunity. Limited seats available.',
        ]);

        Notification::create([
            'title' => 'New Short Course Batch Starting Soon',
            'img' => null,
            'description' => 'New batches for short courses in Masonry, Electric Wiring, Sewing Machine Operation, and other technical courses will start next month. Register now!',
        ]);

        Notification::create([
            'title' => 'Campus Tour Available',
            'img' => null,
            'description' => 'Visit our campus to see our modern facilities, laboratories, and infrastructure. Campus tours are available every Saturday from 10 AM to 2 PM.',
        ]);

        Notification::create([
            'title' => 'Job Placement Program',
            'img' => null,
            'description' => 'Our job placement program helps graduates find employment opportunities. Many of our students have been successfully placed in leading companies.',
        ]);

        Notification::create([
            'title' => 'Holiday Notice - Eid-ul-Fitr',
            'img' => null,
            'description' => 'The institute will remain closed from April 10-12, 2025 for Eid-ul-Fitr celebrations. Classes will resume on April 13, 2025.',
        ]);
    }
}

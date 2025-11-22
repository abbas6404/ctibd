<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Top Notification (Title Only)
        Notification::create([
            'type' => 'top_notification',
            'title' => '🎓 Admission Open for 2025 Session - Apply Now!',
            'img' => null,
            'description' => null,
        ]);

        // Popup Notification (Image Only)
        // Copy an image from public/img to storage for popup notification
        $popupImagePath = null;
        $sourceImage = public_path('img/WhatsApp Image 2025-11-18 at 10.05.41 AM.jpeg');
        if (File::exists($sourceImage)) {
            // Ensure notifications directory exists
            Storage::disk('public')->makeDirectory('notifications');
            
            // Copy image to storage
            $destinationPath = 'notifications/popup-notification-' . time() . '.jpeg';
            File::copy($sourceImage, storage_path('app/public/' . $destinationPath));
            $popupImagePath = $destinationPath;
        }
        
        Notification::create([
            'type' => 'popup_notification',
            'title' => null,
            'img' => $popupImagePath,
            'description' => null,
        ]);

        // Notification Page (Title, Image & Description)
        // Ensure notifications directory exists
        Storage::disk('public')->makeDirectory('notifications');
        
        // List of available images from public/img
        $availableImages = [
            'WhatsApp Image 2025-11-18 at 10.05.41 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.42 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.43 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.44 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.45 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.46 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.47 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.48 AM.jpeg',
        ];
        
        // Helper function to copy image
        $copyImage = function($imageName) {
            $sourceImage = public_path('img/' . $imageName);
            if (File::exists($sourceImage)) {
                $destinationPath = 'notifications/notification-' . time() . '-' . rand(1000, 9999) . '.jpeg';
                File::copy($sourceImage, storage_path('app/public/' . $destinationPath));
                return $destinationPath;
            }
            return null;
        };
        
        Notification::create([
            'type' => 'notification_page',
            'title' => 'Admission Open for 2025 Session',
            'img' => $copyImage($availableImages[0]),
            'description' => 'Admission is now open for the 2025 academic session. We are accepting applications for Diploma in Civil, Computer, Electrical, and Mechanical Engineering. Apply now and secure your future!',
        ]);

        Notification::create([
            'type' => 'notification_page',
            'title' => 'Scholarship Program Available',
            'img' => $copyImage($availableImages[1]),
            'description' => 'Government scholarship of 32,000/- BDT is available for eligible students. Apply now to avail this opportunity. Limited seats available.',
        ]);

        Notification::create([
            'type' => 'notification_page',
            'title' => 'New Short Course Batch Starting Soon',
            'img' => $copyImage($availableImages[2]),
            'description' => 'New batches for short courses in Masonry, Electric Wiring, Sewing Machine Operation, and other technical courses will start next month. Register now!',
        ]);

        Notification::create([
            'type' => 'notification_page',
            'title' => 'Campus Tour Available',
            'img' => $copyImage($availableImages[3]),
            'description' => 'Visit our campus to see our modern facilities, laboratories, and infrastructure. Campus tours are available every Saturday from 10 AM to 2 PM.',
        ]);

        Notification::create([
            'type' => 'notification_page',
            'title' => 'Job Placement Program',
            'img' => $copyImage($availableImages[4]),
            'description' => 'Our job placement program helps graduates find employment opportunities. Many of our students have been successfully placed in leading companies.',
        ]);

        Notification::create([
            'type' => 'notification_page',
            'title' => 'Holiday Notice - Eid-ul-Fitr',
            'img' => $copyImage($availableImages[5]),
            'description' => 'The institute will remain closed from April 10-12, 2025 for Eid-ul-Fitr celebrations. Classes will resume on April 13, 2025.',
        ]);
        
        Notification::create([
            'type' => 'notification_page',
            'title' => 'Workshop on Industrial Safety',
            'img' => $copyImage($availableImages[6]),
            'description' => 'Join our free workshop on Industrial Safety and Workplace Hazards. Learn essential safety protocols and best practices. Registration is open now!',
        ]);
        
        Notification::create([
            'type' => 'notification_page',
            'title' => 'Graduation Ceremony 2025',
            'img' => $copyImage($availableImages[7]),
            'description' => 'We are pleased to announce our Annual Graduation Ceremony will be held on December 15, 2025. All graduates and their families are cordially invited.',
        ]);
    }
}

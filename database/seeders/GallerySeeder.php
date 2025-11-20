<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure the gallery directory exists
        $storagePath = storage_path('app/public/gallery');
        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true);
        }

        // Available images from img folder (excluding logo and favicon)
        $availableImages = [
            'WhatsApp Image 2025-11-18 at 10.05.41 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.41 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.42 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.42 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.43 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.43 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.44 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.44 AM (2).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.44 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.45 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.45 AM (2).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.45 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.46 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.46 AM (2).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.46 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.47 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.47 AM (2).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.47 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.48 AM (1).jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.48 AM.jpeg',
        ];

        $titles = [
            'Training Session',
            'Classroom Learning',
            'Practical Workshop',
            'Student Activities',
            'Professional Training',
            'Hands-on Experience',
            'Team Collaboration',
            'Skill Development',
            'Interactive Learning',
            'Certificate Ceremony',
            'Graduation Day',
            'Workshop Session',
            'Expert Training',
            'Student Success',
            'Learning Environment',
            'Professional Development',
            'Practical Skills',
            'Training Program',
            'Educational Event',
            'Student Achievement',
        ];

        // Create gallery entries with images
        for ($i = 0; $i < min(count($availableImages), 20); $i++) {
            $imageName = $availableImages[$i];
            $imgPath = $this->copyImage($imageName);
            
            Gallery::create([
                'title' => $titles[$i] ?? 'Gallery Image ' . ($i + 1),
                'img' => $imgPath,
            ]);
        }
    }

    /**
     * Copy image from public/img to storage/app/public/gallery
     */
    private function copyImage(?string $imageName): ?string
    {
        if (!$imageName) {
            return null;
        }

        $sourcePath = public_path('img/' . $imageName);
        $destinationPath = 'gallery/' . $imageName;

        if (File::exists($sourcePath)) {
            Storage::disk('public')->put($destinationPath, File::get($sourcePath));
            return $destinationPath;
        }

        return null;
    }
}

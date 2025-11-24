<?php

namespace Database\Seeders;

use App\Models\HomeSlider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure the sliders directory exists
        $sliderPath = public_path('img/sliders');
        if (!File::exists($sliderPath)) {
            File::makeDirectory($sliderPath, 0755, true);
        }

        // Get all images from img/sliders folder
        $availableImages = [];
        
        if (File::exists($sliderPath)) {
            $files = File::files($sliderPath);
            foreach ($files as $file) {
                $extension = strtolower($file->getExtension());
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    $availableImages[] = $file->getFilename();
                }
            }
        }

        // If no images in sliders folder, try to use gallery images as fallback
        if (empty($availableImages)) {
            $galleryPath = public_path('img/gallery');
            if (File::exists($galleryPath)) {
                $files = File::files($galleryPath);
                $galleryImages = [];
                foreach ($files as $file) {
                    $extension = strtolower($file->getExtension());
                    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                        $galleryImages[] = $file->getFilename();
                    }
                }
                
                // Copy first 8 gallery images to sliders folder
                $imagesToCopy = array_slice($galleryImages, 0, 8);
                foreach ($imagesToCopy as $imageName) {
                    $sourcePath = $galleryPath . '/' . $imageName;
                    $destPath = $sliderPath . '/' . $imageName;
                    
                    if (File::exists($sourcePath) && !File::exists($destPath)) {
                        File::copy($sourcePath, $destPath);
                        $availableImages[] = $imageName;
                    }
                }
            }
        }

        // If still no images found, return
        if (empty($availableImages)) {
            $this->command->warn('No images found in public/img/sliders folder or public/img/gallery folder.');
            return;
        }

        // Create slider entries with images
        foreach ($availableImages as $index => $imageName) {
            // Check if image exists
            $imagePath = public_path('img/sliders/' . $imageName);
            if (!File::exists($imagePath)) {
                $this->command->warn("Image not found: {$imageName}");
                continue; // Skip if image doesn't exist
            }

            // Generate title from image name
            $title = $this->generateTitle($imageName, $index);
            
            // Store path as img/sliders/filename.jpg
            $imgPath = 'img/sliders/' . $imageName;
            
            // Check if slider already exists with this image
            $existingSlider = HomeSlider::where('img', $imgPath)->first();
            if ($existingSlider) {
                $this->command->info("Slider already exists for: {$imageName}");
                continue;
            }
            
            HomeSlider::create([
                'title' => $title,
                'img' => $imgPath,
                'order' => $index,
                'is_active' => true,
            ]);
        }

        $this->command->info('Home sliders seeded successfully!');
    }

    /**
     * Generate a title from image filename
     */
    private function generateTitle(string $imageName, int $index): string
    {
        // Remove extension
        $nameWithoutExt = pathinfo($imageName, PATHINFO_FILENAME);
        
        // Clean up common patterns
        $nameWithoutExt = str_replace(['_', '-'], ' ', $nameWithoutExt);
        
        // Remove common prefixes
        $nameWithoutExt = preg_replace('/^(whatsapp image|img|image|photo|pic|slider)\s*/i', '', $nameWithoutExt);
        
        // Remove dates and times
        $nameWithoutExt = preg_replace('/\d{4}-\d{2}-\d{2}/', '', $nameWithoutExt);
        $nameWithoutExt = preg_replace('/at \d+\.\d+\.\d+ (AM|PM)/i', '', $nameWithoutExt);
        $nameWithoutExt = preg_replace('/\(\d+\)/', '', $nameWithoutExt);
        
        // Clean up multiple spaces
        $nameWithoutExt = preg_replace('/\s+/', ' ', $nameWithoutExt);
        $nameWithoutExt = trim($nameWithoutExt);
        
        // Convert to title case
        $title = ucwords($nameWithoutExt);
        
        // If title is empty or too short, use default
        if (empty($title) || strlen($title) < 3) {
            $title = 'Slider Image ' . ($index + 1);
        }
        
        // Limit title length
        if (strlen($title) > 100) {
            $title = substr($title, 0, 97) . '...';
        }
        
        return $title;
    }
}


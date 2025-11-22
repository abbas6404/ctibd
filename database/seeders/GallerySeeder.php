<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryCategory;
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

        // Get all images from img/gallery folder automatically
        $galleryPath = public_path('img/gallery');
        $availableImages = [];
        
        if (File::exists($galleryPath)) {
            $files = File::files($galleryPath);
            foreach ($files as $file) {
                $extension = strtolower($file->getExtension());
                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    $availableImages[] = $file->getFilename();
                }
            }
        }

        // If no images found, return
        if (empty($availableImages)) {
            $this->command->warn('No images found in public/img/gallery folder.');
            return;
        }

        // Default titles for common image names
        $titleMap = [
            'career-support-services' => 'Career Support Services',
            'chairman' => 'Chairman',
            'training' => 'Training Session',
            'workshop' => 'Practical Workshop',
            'graduation' => 'Graduation Ceremony',
            'student' => 'Student Activities',
            'classroom' => 'Classroom Learning',
            // Welding images
            '3g' => 'Welding 3G',
            '4g' => 'Welding 4G',
            '6g' => 'Welding 6G',
            'welding' => 'Welding Training',
            'ssw' => 'SSW Welding',
            // Pipe Fitter images
            'pipe f' => 'Pipe Fitter Training',
            'pipe fitter' => 'Pipe Fitter',
            // Steel Fitter images
            'steel fitter' => 'Steel Fitter Training',
            // Mechanical Fitter images
            'm1' => 'Mechanical Fitter Training',
            'm3' => 'Mechanical Fitter',
            'm4' => 'Mechanical Fitter Workshop',
            'm5' => 'Mechanical Fitter Session',
            'm6' => 'Mechanical Fitter Practice',
            'm7' => 'Mechanical Fitter Skills',
            'm.jpg' => 'Mechanical Fitter',
        ];

        // Get all categories
        $categories = GalleryCategory::all();
        if ($categories->isEmpty()) {
            // If no categories exist, create gallery without categories
            $categoryIds = [null];
        } else {
            $categoryIds = $categories->pluck('id')->toArray();
            $categoryIds[] = null; // Allow some galleries without categories
        }

        // Create gallery entries with images
        foreach ($availableImages as $index => $imageName) {
            $imgPath = $this->copyImage($imageName);
            
            if (!$imgPath) {
                continue; // Skip if image copy failed
            }

            // Generate title from image name
            $title = $this->generateTitle($imageName, $titleMap, $index);
            
            // Assign category based on image filename and title
            $categoryId = $this->assignCategory($imageName, $title, $categoryIds);
            
            Gallery::create([
                'title' => $title,
                'img' => $imgPath,
                'category_id' => $categoryId,
            ]);
        }
    }

    /**
     * Generate a title from image filename
     */
    private function generateTitle(string $imageName, array $titleMap, int $index): string
    {
        // Remove extension
        $nameWithoutExt = pathinfo($imageName, PATHINFO_FILENAME);
        $nameLower = strtolower($nameWithoutExt);
        
        // Check if we have a mapped title (check longer matches first)
        $matchedTitle = null;
        $matchedLength = 0;
        foreach ($titleMap as $keyword => $title) {
            if (str_contains($nameLower, $keyword)) {
                // Prefer longer matches
                if (strlen($keyword) > $matchedLength) {
                    $matchedTitle = $title;
                    $matchedLength = strlen($keyword);
                }
            }
        }
        
        if ($matchedTitle) {
            // For welding images, add the type (3G, 4G, 6G, etc.)
            if (str_contains($nameLower, 'welding') || str_contains($nameLower, '3g') || str_contains($nameLower, '4g') || str_contains($nameLower, '6g')) {
                if (str_contains($nameLower, '3g')) {
                    return 'Welding 3G Training';
                } elseif (str_contains($nameLower, '4g')) {
                    return 'Welding 4G Training';
                } elseif (str_contains($nameLower, '6g')) {
                    return 'Welding 6G Training';
                } elseif (str_contains($nameLower, 'ssw')) {
                    return 'SSW Welding Training';
                }
                return 'Welding Training';
            }
            
            // For pipe fitter images
            if (str_contains($nameLower, 'pipe')) {
                if (preg_match('/pipe\s*f\s*(\d+)/i', $nameLower, $matches)) {
                    return 'Pipe Fitter Training ' . $matches[1];
                }
                return 'Pipe Fitter Training';
            }
            
            // For steel fitter images
            if (str_contains($nameLower, 'steel')) {
                if (preg_match('/steel\s*fitter\s*(\d+)/i', $nameLower, $matches)) {
                    return 'Steel Fitter Training ' . $matches[1];
                }
                return 'Steel Fitter Training';
            }
            
            // For mechanical fitter images
            if (str_contains($nameLower, 'm') && (str_contains($nameLower, 'm1') || str_contains($nameLower, 'm3') || str_contains($nameLower, 'm4') || str_contains($nameLower, 'm5') || str_contains($nameLower, 'm6') || str_contains($nameLower, 'm7'))) {
                return $matchedTitle;
            }
            
            return $matchedTitle;
        }
        
        // Clean up WhatsApp image names
        if (str_contains($nameLower, 'whatsapp')) {
            return 'Training Activity ' . ($index + 1);
        }
        
        // Convert filename to title (replace underscores/hyphens with spaces, capitalize)
        $title = str_replace(['_', '-'], ' ', $nameWithoutExt);
        $title = ucwords($title);
        
        // Limit title length
        if (strlen($title) > 50) {
            $title = substr($title, 0, 47) . '...';
        }
        
        return $title ?: 'Gallery Image ' . ($index + 1);
    }

    /**
     * Assign category based on image filename and title
     */
    private function assignCategory(string $imageName, string $title, array $categoryIds): ?int
    {
        if (empty($categoryIds) || (count($categoryIds) === 1 && $categoryIds[0] === null)) {
            return null;
        }

        $imageNameLower = strtolower($imageName);
        $titleLower = strtolower($title);
        
        // First, check for exact Welding filenames (most reliable - these are known welding images)
        $weldingFiles = [
            '3g.jpg', 
            '4g.jpg', 
            '4g 2.jpg', 
            '6g.jpg', 
            'ssw.jpg', 
            'welding 3g.jpg', 
            'welding 6g.jpg'
        ];
        foreach ($weldingFiles as $weldingFile) {
            if ($imageNameLower === strtolower($weldingFile)) {
                $category = GalleryCategory::where('slug', 'welding')->first();
                if ($category) {
                    return $category->id;
                }
            }
        }
        
        // Also check if filename starts with known welding patterns
        if (preg_match('/^(3g|4g|6g|ssw|welding)\./i', $imageNameLower)) {
            $category = GalleryCategory::where('slug', 'welding')->first();
            if ($category) {
                return $category->id;
            }
        }
        
        // Map image filenames and titles to category slugs (based on 8 course categories)
        // Order matters - more specific patterns first
        $categoryMapping = [
            // Welding - only match if "welding" is clearly in the filename as a whole word
            'welding 3g' => 'welding',
            'welding 4g' => 'welding',
            'welding 6g' => 'welding',
            // Only match "welding" as a whole word (not part of another word)
            'welding' => 'welding',
            // Pipe Fitter - check full name first
            'pipe fitter' => 'pipe-fitter',
            'pipefitter' => 'pipe-fitter',
            'pipe f 4.jpg' => 'pipe-fitter',
            'pipe f 5.jpg' => 'pipe-fitter',
            'pipe f 6.jpg' => 'pipe-fitter',
            'pipe f 7.jpg' => 'pipe-fitter',
            'pipe f' => 'pipe-fitter',
            'pipef' => 'pipe-fitter',
            // Steel Fitter - check full name first
            'steel fitter' => 'steel-fitter',
            'steelfitter' => 'steel-fitter',
            'steel fitter 2.jpg' => 'steel-fitter',
            'steel fitter 3.jpg' => 'steel-fitter',
            'steel fitter.jpg' => 'steel-fitter',
            // Scaffolding (Scrab Holding) - check WhatsApp images from 2025-11-20
            'scaffolding' => 'scaffolding',
            'scrab holding' => 'scaffolding',
            'scrabholding' => 'scaffolding',
            // Mechanical Fitter - check specific M patterns
            'mechanical fitter' => 'mechanical-fitter',
            'mechanicalfitter' => 'mechanical-fitter',
            'm.jpg' => 'mechanical-fitter',
            'm1.jpg' => 'mechanical-fitter',
            'm3.jpg' => 'mechanical-fitter',
            'm4.jpg' => 'mechanical-fitter',
            'm5.jpg' => 'mechanical-fitter',
            'm6.jpg' => 'mechanical-fitter',
            'm7.jpg' => 'mechanical-fitter',
            // Machinist (if any images exist)
            'machinist' => 'machinist',
            // Electrician (if any images exist)
            'electrician' => 'electrician',
            // Blaster Painter (if any images exist)
            'blaster painter' => 'blaster-painter',
            'blasterpainter' => 'blaster-painter',
            'painter' => 'blaster-painter',
        ];

        // First, try to match image filename (more reliable)
        // Check longer/more specific patterns first
        $sortedMapping = $categoryMapping;
        uksort($sortedMapping, function($a, $b) {
            return strlen($b) - strlen($a); // Sort by length descending
        });
        
        foreach ($sortedMapping as $keyword => $slug) {
            // For Welding category, be more strict - only match if it's clearly a welding image
            if ($slug === 'welding') {
                // Check if keyword is "welding" - must be in filename
                if ($keyword === 'welding') {
                    // Only match if "welding" appears as a word (not part of another word)
                    if (preg_match('/\bwelding\b/i', $imageNameLower)) {
                        $category = GalleryCategory::where('slug', $slug)->first();
                        if ($category) {
                            return $category->id;
                        }
                    }
                } else {
                    // For specific patterns like "3g.jpg", "4g.jpg", etc., match exactly
                    if (str_contains($imageNameLower, $keyword)) {
                        $category = GalleryCategory::where('slug', $slug)->first();
                        if ($category) {
                            return $category->id;
                        }
                    }
                }
            } else {
                // For other categories, use normal matching
                if (str_contains($imageNameLower, $keyword)) {
                    $category = GalleryCategory::where('slug', $slug)->first();
                    if ($category) {
                        return $category->id;
                    }
                }
            }
        }

        // Then try to match title
        foreach ($categoryMapping as $keyword => $slug) {
            if (str_contains($titleLower, $keyword)) {
                $category = GalleryCategory::where('slug', $slug)->first();
                if ($category) {
                    return $category->id;
                }
            }
        }

        // For WhatsApp images from Scrab Holding folder (dated 2025-11-20), assign to Scaffolding
        if (str_contains($imageNameLower, 'whatsapp') && str_contains($imageNameLower, '2025-11-20')) {
            $category = GalleryCategory::where('slug', 'scaffolding')->first();
            if ($category) {
                return $category->id;
            }
        }
        
        // For older WhatsApp images (2025-11-18), they might be general training activities
        // But we'll let them fall through to default assignment

        // If no match found, assign to first category or null
        if (!empty($categoryIds) && $categoryIds[0] !== null) {
            return $categoryIds[0];
        }
        
        return null;
    }

    /**
     * Copy image from public/img/gallery to storage/app/public/gallery
     */
    private function copyImage(?string $imageName): ?string
    {
        if (!$imageName) {
            return null;
        }

        $sourcePath = public_path('img/gallery/' . $imageName);
        $destinationPath = 'gallery/' . $imageName;

        if (File::exists($sourcePath)) {
            Storage::disk('public')->put($destinationPath, File::get($sourcePath));
            return $destinationPath;
        }

        return null;
    }
}

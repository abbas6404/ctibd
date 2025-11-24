<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure the gallery directory exists
        $galleryPath = public_path('img/gallery');
        if (!File::exists($galleryPath)) {
            File::makeDirectory($galleryPath, 0755, true);
        }

        // Get all images from img/gallery folder automatically
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
            // Scaffolding images
            'scaffolding_001' => 'Scaffolding Training 1',
            'scaffolding_002' => 'Scaffolding Training 2',
            'scaffolding_003' => 'Scaffolding Training 3',
            'scaffolding_004' => 'Scaffolding Training 4',
            'scaffolding_005' => 'Scaffolding Training 5',
            'scaffolding_006' => 'Scaffolding Training 6',
            'scaffolding_007' => 'Scaffolding Training 7',
            'scaffolding_008' => 'Scaffolding Training 8',
            'scaffolding_009' => 'Scaffolding Training 9',
            'scaffolding_010' => 'Scaffolding Training 10',
            'scaffolding' => 'Scaffolding Training',
            // Welding images
            '3g' => 'Welding 3G Training',
            '4g' => 'Welding 4G Training',
            '6g' => 'Welding 6G Training',
            'welding 3g' => 'Welding 3G Training',
            'welding 6g' => 'Welding 6G Training',
            'welding' => 'Welding Training',
            'ssw' => 'SSW Welding Training',
            // Pipe Fitter images
            'pipe f 4' => 'Pipe Fitter Training 4',
            'pipe f 5' => 'Pipe Fitter Training 5',
            'pipe f 6' => 'Pipe Fitter Training 6',
            'pipe f 7' => 'Pipe Fitter Training 7',
            'pipe fitter 1' => 'Pipe Fitter Training 1',
            'pipe fitter 3' => 'Pipe Fitter Training 3',
            'pipe f' => 'Pipe Fitter Training',
            'pipe fitter' => 'Pipe Fitter Training',
            // Steel Fitter images
            'steel fitter 2' => 'Steel Fitter Training 2',
            'steel fitter 3' => 'Steel Fitter Training 3',
            'steel fitter' => 'Steel Fitter Training',
            // Mechanical Fitter images
            'm1' => 'Mechanical Fitter Training 1',
            'm3' => 'Mechanical Fitter Training 3',
            'm4' => 'Mechanical Fitter Training 4',
            'm5' => 'Mechanical Fitter Training 5',
            'm6' => 'Mechanical Fitter Training 6',
            'm7' => 'Mechanical Fitter Training 7',
            'm' => 'Mechanical Fitter Training',
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
            // Check if image exists in public/img/gallery
            $imagePath = public_path('img/gallery/' . $imageName);
            if (!File::exists($imagePath)) {
                $this->command->warn("Image not found: {$imageName}");
                continue; // Skip if image doesn't exist
            }

            // Generate title from image name
            $title = $this->generateTitle($imageName, $titleMap, $index);
            
            // Assign category based on image filename and title
            $categoryId = $this->assignCategory($imageName, $title, $categoryIds);
            
            // Store path as img/gallery/filename.jpg
            $imgPath = 'img/gallery/' . $imageName;
            
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
            return $matchedTitle;
        }
        
        // Handle specific file patterns
        // Scaffolding images
        if (preg_match('/scaffolding[_\s]?(\d+)/i', $nameLower, $matches)) {
            $num = (int)$matches[1];
            return 'Scaffolding Training ' . $num;
        }
        
        // Welding images with specific patterns
        if (preg_match('/welding\s*(\d+g)/i', $nameLower, $matches)) {
            return 'Welding ' . strtoupper($matches[1]) . ' Training';
        }
        if (preg_match('/^(\d+g)\s*(\d+)?/i', $nameLower, $matches)) {
            $type = strtoupper($matches[1]);
            $num = isset($matches[2]) ? ' ' . $matches[2] : '';
            return 'Welding ' . $type . $num . ' Training';
        }
        if (str_contains($nameLower, 'ssw')) {
            return 'SSW Welding Training';
        }
        
        // Pipe Fitter images
        if (preg_match('/pipe\s*f\s*(\d+)/i', $nameLower, $matches)) {
            return 'Pipe Fitter Training ' . $matches[1];
        }
        if (preg_match('/pipe\s*fitter\s*(\d+)?/i', $nameLower, $matches)) {
            $num = isset($matches[1]) ? ' ' . $matches[1] : '';
            return 'Pipe Fitter Training' . $num;
        }
        
        // Steel Fitter images
        if (preg_match('/steel\s*fitter\s*(\d+)?/i', $nameLower, $matches)) {
            $num = isset($matches[1]) ? ' ' . $matches[1] : '';
            return 'Steel Fitter Training' . $num;
        }
        
        // Mechanical Fitter images
        if (preg_match('/^m(\d+)?$/i', $nameLower, $matches)) {
            $num = isset($matches[1]) ? ' ' . $matches[1] : '';
            return 'Mechanical Fitter Training' . $num;
        }
        
        // Clean up WhatsApp image names - Scaffolding from 2025-11-20
        if (str_contains($nameLower, 'whatsapp') && str_contains($nameLower, '2025-11-20')) {
            // Extract time or number from filename for better title
            if (preg_match('/\((\d+)\)/', $nameLower, $matches)) {
                return 'Scaffolding Training Activity ' . $matches[1];
            }
            return 'Scaffolding Training Activity';
        }
        
        // Older WhatsApp images from 2025-11-18
        if (str_contains($nameLower, 'whatsapp') && str_contains($nameLower, '2025-11-18')) {
            if (preg_match('/\((\d+)\)/', $nameLower, $matches)) {
                return 'Training Activity ' . $matches[1];
            }
            return 'Training Activity';
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
        
        // First, check for exact filenames (most reliable)
        // Welding images
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
        
        // Scaffolding images
        $scaffoldingFiles = [
            'scaffolding_001.jpeg',
            'scaffolding_002.jpeg',
            'scaffolding_003.jpeg',
            'scaffolding_004.jpeg',
            'scaffolding_005.jpeg',
            'scaffolding_006.jpeg',
            'scaffolding_007.jpeg',
            'scaffolding_008.jpeg',
            'scaffolding_009.jpeg',
            'scaffolding_010.jpeg'
        ];
        foreach ($scaffoldingFiles as $scaffoldingFile) {
            if ($imageNameLower === strtolower($scaffoldingFile)) {
                $category = GalleryCategory::where('slug', 'scaffolding')->first();
                if ($category) {
                    return $category->id;
                }
            }
        }
        
        // Pipe Fitter images
        $pipeFitterFiles = [
            'pipe f 4.jpg',
            'pipe f 5.jpg',
            'pipe f 6.jpg',
            'pipe f 7.jpg',
            'pipe fitter.jpg',
            'pipe fitter 1.jpg',
            'pipe fitter 3.jpg'
        ];
        foreach ($pipeFitterFiles as $pipeFitterFile) {
            if ($imageNameLower === strtolower($pipeFitterFile)) {
                $category = GalleryCategory::where('slug', 'pipe-fitter')->first();
                if ($category) {
                    return $category->id;
                }
            }
        }
        
        // Steel Fitter images
        $steelFitterFiles = [
            'steel fitter.jpg',
            'steel fitter 2.jpg',
            'steel fitter 3.jpg'
        ];
        foreach ($steelFitterFiles as $steelFitterFile) {
            if ($imageNameLower === strtolower($steelFitterFile)) {
                $category = GalleryCategory::where('slug', 'steel-fitter')->first();
                if ($category) {
                    return $category->id;
                }
            }
        }
        
        // Mechanical Fitter images
        $mechanicalFitterFiles = [
            'm.jpg',
            'm1.jpg',
            'm3.jpg',
            'm4.jpg',
            'm5.jpg',
            'm6.jpg',
            'm7.jpg'
        ];
        foreach ($mechanicalFitterFiles as $mechanicalFitterFile) {
            if ($imageNameLower === strtolower($mechanicalFitterFile)) {
                $category = GalleryCategory::where('slug', 'mechanical-fitter')->first();
                if ($category) {
                    return $category->id;
                }
            }
        }
        
        // Also check if filename starts with known welding patterns
        if (preg_match('/^(3g|4g|6g|ssw|welding)/i', $imageNameLower)) {
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
            'pipe f 4' => 'pipe-fitter',
            'pipe f 5' => 'pipe-fitter',
            'pipe f 6' => 'pipe-fitter',
            'pipe f 7' => 'pipe-fitter',
            'pipe fitter 1' => 'pipe-fitter',
            'pipe fitter 3' => 'pipe-fitter',
            'pipe f' => 'pipe-fitter',
            'pipef' => 'pipe-fitter',
            // Steel Fitter - check full name first
            'steel fitter' => 'steel-fitter',
            'steelfitter' => 'steel-fitter',
            'steel fitter 2' => 'steel-fitter',
            'steel fitter 3' => 'steel-fitter',
            // Scaffolding - check specific files and WhatsApp images from 2025-11-20
            'scaffolding_001' => 'scaffolding',
            'scaffolding_002' => 'scaffolding',
            'scaffolding_003' => 'scaffolding',
            'scaffolding_004' => 'scaffolding',
            'scaffolding_005' => 'scaffolding',
            'scaffolding_006' => 'scaffolding',
            'scaffolding_007' => 'scaffolding',
            'scaffolding_008' => 'scaffolding',
            'scaffolding_009' => 'scaffolding',
            'scaffolding_010' => 'scaffolding',
            'scaffolding' => 'scaffolding',
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

}

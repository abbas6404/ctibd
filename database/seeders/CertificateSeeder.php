<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure certificates directory exists
        Storage::disk('public')->makeDirectory('certificates');
        
        // List of sample registration IDs
        $registrationIds = [
            'CTI-2025-001',
            'CTI-2025-002',
            'CTI-2025-003',
            'CTI-2025-004',
            'CTI-2025-005',
            'CTI-2025-006',
            'CTI-2025-007',
            'CTI-2025-008',
            'CTI-2025-009',
            'CTI-2025-010',
            'CTI-2025-011',
            'CTI-2025-012',
            'CTI-2025-013',
            'CTI-2025-014',
            'CTI-2025-015',
        ];
        
        // Available images to use as certificate placeholders
        $availableImages = [
            'WhatsApp Image 2025-11-18 at 10.05.48 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.49 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.50 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.51 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.52 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.53 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.54 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.55 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.56 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.57 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.58 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.05.59 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.06.00 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.06.01 AM.jpeg',
            'WhatsApp Image 2025-11-18 at 10.06.02 AM.jpeg',
        ];
        
        foreach ($registrationIds as $index => $registrationId) {
            $certificateFile = null;
            
            // Copy image as certificate file
            if (isset($availableImages[$index])) {
                $sourceImage = public_path('img/' . $availableImages[$index]);
                if (File::exists($sourceImage)) {
                    $destinationPath = 'certificates/certificate-' . $registrationId . '-' . time() . '-' . rand(1000, 9999) . '.pdf';
                    // Copy as PDF (in real scenario, this would be an actual PDF file)
                    // For now, we'll copy the image and rename extension
                    $destinationPath = 'certificates/certificate-' . $registrationId . '-' . time() . '-' . rand(1000, 9999) . '.jpeg';
                    File::copy($sourceImage, storage_path('app/public/' . $destinationPath));
                    $certificateFile = $destinationPath;
                }
            }
            
            Certificate::create([
                'registration_id' => $registrationId,
                'certificate_file' => $certificateFile,
            ]);
        }
    }
}


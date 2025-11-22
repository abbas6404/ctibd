<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = Certificate::latest()->paginate(10);
        return view('admin.certificates.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Check if file input exists in request
            if (!$request->hasFile('certificate_file')) {
                // Check if it might be a post_max_size issue (file selected but not uploaded due to size)
                $postMaxSize = ini_get('post_max_size');
                $contentLength = $request->header('Content-Length');
                
                if ($contentLength && $contentLength > $this->convertToBytes($postMaxSize)) {
                    return back()->withErrors(['certificate_file' => 'File too large: The file exceeds PHP post_max_size limit (' . $postMaxSize . '). Please upload a smaller file.'])->withInput();
                }
                
                // Check if file was actually selected but not uploaded
                if ($request->input('certificate_file')) {
                    return back()->withErrors(['certificate_file' => 'File upload failed: The file was selected but could not be uploaded. Please check file size and try again.'])->withInput();
                }
                
                return back()->withErrors(['certificate_file' => 'No file was selected. Please choose a PDF file to upload.'])->withInput();
            }

            $file = $request->file('certificate_file');
            
            // Check if file upload was successful
            if (!$file || !$file->isValid()) {
                $errorCode = $file ? $file->getError() : UPLOAD_ERR_NO_FILE;
                $errorMessages = [
                    UPLOAD_ERR_INI_SIZE => 'File too large: The file exceeds PHP upload_max_filesize limit (' . ini_get('upload_max_filesize') . '). Please upload a smaller file.',
                    UPLOAD_ERR_FORM_SIZE => 'File too large: The file exceeds the maximum allowed size (5MB). Please upload a smaller file.',
                    UPLOAD_ERR_PARTIAL => 'Upload incomplete: The file was only partially uploaded. Please try again.',
                    UPLOAD_ERR_NO_FILE => 'No file selected: Please choose a PDF file to upload.',
                    UPLOAD_ERR_NO_TMP_DIR => 'Server error: Missing temporary folder. Please contact administrator.',
                    UPLOAD_ERR_CANT_WRITE => 'Server error: Failed to write file to disk. Please check server permissions.',
                    UPLOAD_ERR_EXTENSION => 'Server error: A PHP extension stopped the file upload. Please contact administrator.',
                ];
                
                $errorMessage = $errorMessages[$errorCode] ?? 'Upload failed: Unknown error (Code: ' . $errorCode . '). Please try again or contact support.';
                $fileName = $file ? $file->getClientOriginalName() : 'unknown';
                $fileSize = $file ? $file->getSize() : 0;
                \Log::error('File upload error: ' . $errorMessage . ' | File: ' . $fileName . ' | Size: ' . $fileSize);
                
                return back()->withErrors(['certificate_file' => $errorMessage])->withInput();
            }

            // Check file type before validation
            $allowedMimes = ['application/pdf', 'application/x-pdf'];
            $fileMime = $file->getMimeType();
            $fileExtension = strtolower($file->getClientOriginalExtension());
            
            if (!in_array($fileMime, $allowedMimes) && $fileExtension !== 'pdf') {
                return back()->withErrors(['certificate_file' => 'Invalid file type: Only PDF files are allowed. Your file type is: ' . $fileMime . '. Please upload a PDF file.'])->withInput();
            }

            // Check file size (in KB, max 5120 KB = 5MB)
            $fileSizeKB = $file->getSize() / 1024;
            if ($fileSizeKB > 5120) {
                $fileSizeMB = round($fileSizeKB / 1024, 2);
                return back()->withErrors(['certificate_file' => 'File too large: Your file is ' . $fileSizeMB . 'MB. Maximum allowed size is 5MB. Please compress or use a smaller file.'])->withInput();
            }

            // Now validate with Laravel validation
            $validated = $request->validate([
                'registration_id' => 'required|string|max:255',
                'certificate_file' => 'required|file|mimes:pdf|max:5120',
            ], [
                'registration_id.required' => 'The registration ID field is required.',
                'certificate_file.required' => 'Please select a certificate file to upload.',
                'certificate_file.file' => 'The uploaded file is not valid. Please select a valid PDF file.',
                'certificate_file.mimes' => 'Only PDF files are allowed. Please upload a PDF file.',
                'certificate_file.max' => 'The file size must not exceed 5MB. Please upload a smaller file.',
            ]);

            // Ensure storage directory exists and is writable
            $storagePath = storage_path('app/public/certificates');
            if (!is_dir($storagePath)) {
                try {
                    \Storage::disk('public')->makeDirectory('certificates');
                } catch (\Exception $e) {
                    \Log::error('Directory creation error: ' . $e->getMessage());
                    return back()->withErrors(['certificate_file' => 'Server error: Cannot create storage directory. Please contact administrator.'])->withInput();
                }
            }

            // Check if directory is writable
            if (!is_writable($storagePath)) {
                \Log::error('Storage directory not writable: ' . $storagePath);
                return back()->withErrors(['certificate_file' => 'Server error: Storage directory is not writable. Please contact administrator.'])->withInput();
            }

            // Store the file
            try {
                $path = $file->store('certificates', 'public');
                
                if (!$path) {
                    \Log::error('File store returned false. File: ' . $file->getClientOriginalName());
                    return back()->withErrors(['certificate_file' => 'Storage error: Failed to save the certificate file. Please check storage permissions or try again.'])->withInput();
                }

                $validated['certificate_file'] = $path;
            } catch (\Exception $e) {
                \Log::error('File storage error: ' . $e->getMessage() . ' | File: ' . $file->getClientOriginalName() . ' | Trace: ' . $e->getTraceAsString());
                return back()->withErrors(['certificate_file' => 'Storage error: ' . $e->getMessage() . '. Please try again or contact support.'])->withInput();
            }

            Certificate::create($validated);

            return redirect()->route('admin.certificates.index')->with('success', 'Certificate uploaded successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            \Log::error('Certificate upload error: ' . $e->getMessage());
            return back()->withErrors(['certificate_file' => 'An error occurred while uploading the certificate. Please try again.'])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'registration_id' => 'required|string|max:255',
            'certificate_file' => 'nullable|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('certificate_file')) {
            if ($certificate->certificate_file) {
                Storage::disk('public')->delete($certificate->certificate_file);
            }
            $validated['certificate_file'] = $request->file('certificate_file')->store('certificates', 'public');
        } else {
            unset($validated['certificate_file']);
        }

        $certificate->update($validated);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        if ($certificate->certificate_file) {
            Storage::disk('public')->delete($certificate->certificate_file);
        }

        $certificate->delete();

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate deleted successfully.');
    }

    /**
     * Convert PHP ini size string to bytes
     */
    private function convertToBytes($size)
    {
        $size = trim($size);
        $last = strtolower($size[strlen($size) - 1]);
        $size = (int) $size;
        
        switch ($last) {
            case 'g':
                $size *= 1024;
            case 'm':
                $size *= 1024;
            case 'k':
                $size *= 1024;
        }
        
        return $size;
    }
}

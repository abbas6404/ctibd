<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = HomeSlider::orderBy('order')->orderBy('created_at', 'desc')->get();
        return view('admin.home-sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home-sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'nullable|string|max:255',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'order' => 'nullable|integer|min:0',
                'is_active' => 'nullable|boolean',
            ]);

            $file = $request->file('img');
            
            // Check if file is valid
            if (!$file->isValid()) {
                $errorCode = $file->getError();
                $errorMessages = [
                    UPLOAD_ERR_INI_SIZE => 'File too large: The file exceeds PHP upload_max_filesize limit (' . ini_get('upload_max_filesize') . ').',
                    UPLOAD_ERR_FORM_SIZE => 'File too large: The file exceeds the maximum allowed size (2MB).',
                    UPLOAD_ERR_PARTIAL => 'Upload incomplete: The file was only partially uploaded.',
                    UPLOAD_ERR_NO_FILE => 'No file selected.',
                    UPLOAD_ERR_NO_TMP_DIR => 'Server error: Missing temporary folder.',
                    UPLOAD_ERR_CANT_WRITE => 'Server error: Failed to write file to disk. Please check server permissions.',
                    UPLOAD_ERR_EXTENSION => 'Server error: A PHP extension stopped the file upload.',
                ];
                
                $errorMessage = $errorMessages[$errorCode] ?? 'Upload failed: Unknown error (Code: ' . $errorCode . ').';
                Log::error('Home slider image upload error: ' . $errorMessage);
                
                return back()->withErrors(['img' => $errorMessage])->withInput();
            }

            // Ensure the slider directory exists
            $sliderPath = public_path('img/sliders');
            if (!file_exists($sliderPath)) {
                if (!File::makeDirectory($sliderPath, 0755, true)) {
                    Log::error('Failed to create slider directory: ' . $sliderPath);
                    return back()->withErrors(['img' => 'Failed to create slider directory. Please check server permissions.'])->withInput();
                }
            }

            // Store the image
            try {
                $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($sliderPath, $fileName);
                $validated['img'] = 'img/sliders/' . $fileName;
                
                // Verify the file was actually stored
                if (!file_exists($sliderPath . '/' . $fileName)) {
                    Log::error('Home slider image storage failed: File was not stored properly');
                    return back()->withErrors(['img' => 'Failed to store image. Please check server permissions and try again.'])->withInput();
                }
            } catch (\Exception $e) {
                Log::error('Home slider image storage exception: ' . $e->getMessage());
                return back()->withErrors(['img' => 'Failed to store image: ' . $e->getMessage()])->withInput();
            }

            $validated['is_active'] = $request->has('is_active') ? true : false;
            $validated['order'] = $validated['order'] ?? 0;

            HomeSlider::create($validated);

            return redirect()->route('admin.home-sliders.index')->with('success', 'Slider image uploaded successfully.');
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            throw $e;
        } catch (\Exception $e) {
            Log::error('Home slider store error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            
            return back()->withErrors(['error' => 'An error occurred while uploading the slider image. Please try again.'])->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeSlider $homeSlider)
    {
        return view('admin.home-sliders.edit', compact('homeSlider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeSlider $homeSlider)
    {
        try {
            $validated = $request->validate([
                'title' => 'nullable|string|max:255',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'order' => 'nullable|integer|min:0',
                'is_active' => 'nullable|boolean',
            ]);

            if ($request->hasFile('img')) {
                $file = $request->file('img');
                
                // Check if file is valid
                if (!$file->isValid()) {
                    $errorCode = $file->getError();
                    $errorMessages = [
                        UPLOAD_ERR_INI_SIZE => 'File too large: The file exceeds PHP upload_max_filesize limit (' . ini_get('upload_max_filesize') . ').',
                        UPLOAD_ERR_FORM_SIZE => 'File too large: The file exceeds the maximum allowed size (2MB).',
                        UPLOAD_ERR_PARTIAL => 'Upload incomplete: The file was only partially uploaded.',
                        UPLOAD_ERR_NO_FILE => 'No file selected.',
                        UPLOAD_ERR_NO_TMP_DIR => 'Server error: Missing temporary folder.',
                        UPLOAD_ERR_CANT_WRITE => 'Server error: Failed to write file to disk. Please check server permissions.',
                        UPLOAD_ERR_EXTENSION => 'Server error: A PHP extension stopped the file upload.',
                    ];
                    
                    $errorMessage = $errorMessages[$errorCode] ?? 'Upload failed: Unknown error (Code: ' . $errorCode . ').';
                    Log::error('Home slider image upload error: ' . $errorMessage);
                    
                    return back()->withErrors(['img' => $errorMessage])->withInput();
                }

                // Ensure the slider directory exists
                $sliderPath = public_path('img/sliders');
                if (!file_exists($sliderPath)) {
                    if (!File::makeDirectory($sliderPath, 0755, true)) {
                        Log::error('Failed to create slider directory: ' . $sliderPath);
                        return back()->withErrors(['img' => 'Failed to create slider directory. Please check server permissions.'])->withInput();
                    }
                }

                // Delete old image if exists
                if ($homeSlider->img) {
                    try {
                        $oldImagePath = public_path($homeSlider->img);
                        if (file_exists($oldImagePath)) {
                            File::delete($oldImagePath);
                        }
                    } catch (\Exception $e) {
                        Log::warning('Failed to delete old slider image: ' . $homeSlider->img . ' - ' . $e->getMessage());
                        // Continue even if deletion fails
                    }
                }

                // Store the new image
                try {
                    $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move($sliderPath, $fileName);
                    $validated['img'] = 'img/sliders/' . $fileName;
                    
                    // Verify the file was actually stored
                    if (!file_exists($sliderPath . '/' . $fileName)) {
                        Log::error('Home slider image storage failed: File was not stored properly');
                        return back()->withErrors(['img' => 'Failed to store image. Please check server permissions and try again.'])->withInput();
                    }
                } catch (\Exception $e) {
                    Log::error('Home slider image storage exception: ' . $e->getMessage());
                    return back()->withErrors(['img' => 'Failed to store image: ' . $e->getMessage()])->withInput();
                }
            }

            $validated['is_active'] = $request->has('is_active') ? true : false;
            if (!isset($validated['order'])) {
                $validated['order'] = $homeSlider->order;
            }

            $homeSlider->update($validated);

            return redirect()->route('admin.home-sliders.index')->with('success', 'Slider image updated successfully.');
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            throw $e;
        } catch (\Exception $e) {
            Log::error('Home slider update error: ' . $e->getMessage(), [
                'slider_id' => $homeSlider->id,
                'trace' => $e->getTraceAsString()
            ]);
            
            return back()->withErrors(['error' => 'An error occurred while updating the slider image. Please try again.'])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeSlider $homeSlider)
    {
        if ($homeSlider->img) {
            $imagePath = public_path($homeSlider->img);
            if (file_exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $homeSlider->delete();

        return redirect()->route('admin.home-sliders.index')->with('success', 'Slider image deleted successfully.');
    }
}


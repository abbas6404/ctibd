<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShortCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShortCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = ShortCourse::latest()->paginate(10);
        return view('admin.short-courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.short-courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('img')) {
            $validated['img'] = $request->file('img')->store('short-courses', 'public');
        }

        ShortCourse::create($validated);

        return redirect()->route('admin.short-courses.index')->with('success', 'Short course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ShortCourse $shortCourse)
    {
        return view('admin.short-courses.show', compact('shortCourse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShortCourse $shortCourse)
    {
        return view('admin.short-courses.edit', compact('shortCourse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShortCourse $shortCourse)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('img')) {
            if ($shortCourse->img) {
                Storage::disk('public')->delete($shortCourse->img);
            }
            $validated['img'] = $request->file('img')->store('short-courses', 'public');
        }

        $shortCourse->update($validated);

        return redirect()->route('admin.short-courses.index')->with('success', 'Short course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShortCourse $shortCourse)
    {
        if ($shortCourse->img) {
            Storage::disk('public')->delete($shortCourse->img);
        }

        $shortCourse->delete();

        return redirect()->route('admin.short-courses.index')->with('success', 'Short course deleted successfully.');
    }
}

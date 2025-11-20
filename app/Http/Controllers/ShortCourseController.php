<?php

namespace App\Http\Controllers;

use App\Models\ShortCourse;
use Illuminate\Http\Request;

class ShortCourseController extends Controller
{
    public function index()
    {
        $courses = ShortCourse::latest()->get();
        
        return view('short-courses', compact('courses'));
    }

    public function courses()
    {
        $courses = ShortCourse::latest()->get();
        
        return view('courses', compact('courses'));
    }

    public function show($id = null)
    {
        if ($id) {
            $course = ShortCourse::find($id);
            return view('course-detail', compact('course'));
        }
        
        // If no ID provided, redirect to courses page
        return redirect()->route('courses');
    }
}

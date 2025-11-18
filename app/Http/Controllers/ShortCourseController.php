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
}

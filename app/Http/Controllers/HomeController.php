<?php

namespace App\Http\Controllers;

use App\Models\ShortCourse;
use App\Models\Notification;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = ShortCourse::latest()->take(11)->get();
        $shortCourses = ShortCourse::latest()->take(6)->get();
        $notifications = Notification::latest()->take(3)->get();
        $management = Employee::where('type', 'management')->latest()->take(4)->get();
        
        return view('home', compact('courses', 'shortCourses', 'notifications', 'management'));
    }
}

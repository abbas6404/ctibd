<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\ShortCourse;
use App\Models\Notification;
use App\Models\Gallery;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'employees' => Employee::count(),
            'management' => Employee::where('type', 'management')->count(),
            'trainers' => Employee::where('type', 'trainer')->count(),
            'short_courses' => ShortCourse::count(),
            'notifications' => Notification::count(),
            'gallery' => Gallery::count(),
            'certificates' => Certificate::count(),
        ];

        $recent_employees = Employee::latest()->take(5)->get();
        $recent_courses = ShortCourse::latest()->take(5)->get();
        $recent_notifications = Notification::latest()->take(5)->get();
        $recent_gallery = Gallery::latest()->take(5)->get();
        $recent_certificates = Certificate::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recent_employees', 'recent_courses', 'recent_notifications', 'recent_gallery', 'recent_certificates'));
    }

    /**
     * Show the admin profile page.
     */
    public function profile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }

    /**
     * Update the admin profile.
     */
    public function updateProfile(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email,' . $admin->id,
            'current_password' => 'nullable|required_with:password',
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Check current password if trying to change password
        if ($request->filled('password')) {
            if (!Hash::check($request->current_password, $admin->password)) {
                return back()->withErrors(['current_password' => 'The current password is incorrect.'])->withInput();
            }
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        unset($validated['current_password']);

        $admin->update($validated);

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully.');
    }
}

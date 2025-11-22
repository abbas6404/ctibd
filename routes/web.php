<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ShortCourseController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CertificateController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/courses', [ShortCourseController::class, 'courses'])->name('courses');
Route::get('/course-detail/{id?}', [ShortCourseController::class, 'show'])->name('course-detail');
Route::get('/management', [ManagementController::class, 'index'])->name('management');
Route::get('/admission', function () {
    return view('admission');
})->name('admission');
Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
Route::get('/notification/{id}', [NotificationController::class, 'show'])->name('notification.show');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates');

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    });
    Route::get('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Admin\AdminAuthController::class, 'logout'])->name('logout');
    
    // Protected Admin Routes
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
        
        // Profile Management
        Route::get('/profile', [App\Http\Controllers\Admin\AdminController::class, 'profile'])->name('profile');
        Route::put('/profile', [App\Http\Controllers\Admin\AdminController::class, 'updateProfile'])->name('profile.update');
        
        // Settings Management
        Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('settings');
        Route::put('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('settings.update');
        
        // Employee Management
        Route::resource('employees', App\Http\Controllers\Admin\EmployeeController::class);
        
        // Short Courses Management
        Route::resource('short-courses', App\Http\Controllers\Admin\ShortCourseController::class);
        
        // Notifications Management
        Route::resource('notifications', App\Http\Controllers\Admin\NotificationController::class);
        
        // Gallery Management
        Route::resource('gallery', App\Http\Controllers\Admin\GalleryController::class);
        
        // Certificates Management
        Route::resource('certificates', App\Http\Controllers\Admin\CertificateController::class);
    });
});

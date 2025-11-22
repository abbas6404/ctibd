<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        // Only show notification_page type on the notification page
        $notifications = Notification::where('type', 'notification_page')->latest()->get();
        
        return view('notification', compact('notifications'));
    }
    
    public function show($id)
    {
        $notification = Notification::where('type', 'notification_page')->findOrFail($id);
        
        return view('notification-detail', compact('notification'));
    }
}

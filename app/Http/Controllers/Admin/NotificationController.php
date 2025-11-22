<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::latest()->paginate(10);
        return view('admin.notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'type' => 'required|in:top_notification,popup_notification,notification_page',
        ];

        // Conditional validation based on type
        if ($request->type === 'top_notification') {
            $rules['title'] = 'required|string|max:255';
            $rules['img'] = 'nullable';
            $rules['description'] = 'nullable';
        } elseif ($request->type === 'popup_notification') {
            $rules['img'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
            $rules['title'] = 'nullable';
            $rules['description'] = 'nullable';
        } else { // notification_page
            $rules['title'] = 'required|string|max:255';
            $rules['img'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048';
            $rules['description'] = 'nullable|string';
        }

        $validated = $request->validate($rules);

        if ($request->hasFile('img')) {
            $validated['img'] = $request->file('img')->store('notifications', 'public');
        }

        Notification::create($validated);

        return redirect()->route('admin.notifications.index')->with('success', 'Notification created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        return view('admin.notifications.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        return view('admin.notifications.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notification $notification)
    {
        $rules = [
            'type' => 'required|in:top_notification,popup_notification,notification_page',
        ];

        // Conditional validation based on type
        if ($request->type === 'top_notification') {
            $rules['title'] = 'required|string|max:255';
            $rules['img'] = 'nullable';
            $rules['description'] = 'nullable';
        } elseif ($request->type === 'popup_notification') {
            // For popup, require image if no existing image and no new image uploaded
            if (!$notification->img && !$request->hasFile('img')) {
                $rules['img'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
            } else {
                $rules['img'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048';
            }
            $rules['title'] = 'nullable';
            $rules['description'] = 'nullable';
        } else { // notification_page
            $rules['title'] = 'required|string|max:255';
            $rules['img'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048';
            $rules['description'] = 'nullable|string';
        }

        $validated = $request->validate($rules);

        if ($request->hasFile('img')) {
            if ($notification->img) {
                Storage::disk('public')->delete($notification->img);
            }
            $validated['img'] = $request->file('img')->store('notifications', 'public');
        } elseif ($request->type === 'popup_notification' && !$notification->img) {
            // If popup type and no image exists, this should have been caught by validation
            return back()->withErrors(['img' => 'Image is required for popup notifications.']);
        }

        $notification->update($validated);

        return redirect()->route('admin.notifications.index')->with('success', 'Notification updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        if ($notification->img) {
            Storage::disk('public')->delete($notification->img);
        }

        $notification->delete();

        return redirect()->route('admin.notifications.index')->with('success', 'Notification deleted successfully.');
    }
}

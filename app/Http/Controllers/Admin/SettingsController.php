<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display the settings page.
     */
    public function index()
    {
        $settings = Setting::orderBy('group')->orderBy('key')->get()->groupBy('group');
        
        // Get default settings if none exist
        $defaultSettings = $this->getDefaultSettings();
        
        // Ensure default settings exist
        foreach ($defaultSettings as $key => $setting) {
            Setting::firstOrCreate(
                ['key' => $key],
                $setting
            );
        }
        
        $settings = Setting::orderBy('group')->orderBy('key')->get()->groupBy('group');
        
        return view('admin.settings', compact('settings'));
    }

    /**
     * Update settings.
     */
    public function update(Request $request)
    {
        $settings = $request->except(['_token', '_method']);
        
        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }
        
        return redirect()->route('admin.settings')->with('success', 'Settings updated successfully.');
    }

    /**
     * Get default settings.
     */
    private function getDefaultSettings()
    {
        return [
            // General Settings
            'site_name' => [
                'value' => 'Training Institute',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Name of the training institute',
            ],
            'site_email' => [
                'value' => 'info@traininginstitute.com',
                'type' => 'email',
                'group' => 'general',
                'description' => 'Contact email address',
            ],
            'site_phone' => [
                'value' => '+1234567890',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Contact phone number',
            ],
            'site_address' => [
                'value' => '',
                'type' => 'textarea',
                'group' => 'general',
                'description' => 'Physical address',
            ],
            'site_description' => [
                'value' => '',
                'type' => 'textarea',
                'group' => 'general',
                'description' => 'Site description',
            ],
            
            // Social Media Settings
            'facebook_url' => [
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'description' => 'Facebook page URL',
            ],
            'twitter_url' => [
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'description' => 'Twitter profile URL',
            ],
            'instagram_url' => [
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'description' => 'Instagram profile URL',
            ],
            'linkedin_url' => [
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'description' => 'LinkedIn profile URL',
            ],
            'youtube_url' => [
                'value' => '',
                'type' => 'text',
                'group' => 'social',
                'description' => 'YouTube channel URL',
            ],
            
            // Email Settings
            'mail_from_name' => [
                'value' => 'Training Institute',
                'type' => 'text',
                'group' => 'email',
                'description' => 'Email sender name',
            ],
            'mail_from_address' => [
                'value' => 'noreply@traininginstitute.com',
                'type' => 'email',
                'group' => 'email',
                'description' => 'Email sender address',
            ],
        ];
    }
}

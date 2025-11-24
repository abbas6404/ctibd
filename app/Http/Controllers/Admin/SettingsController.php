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
                'value' => 'Confidence Training Institute',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Name of the training institute',
            ],
            'site_email' => [
                'value' => 'ikarimptc@gmail.com',
                'type' => 'email',
                'group' => 'general',
                'description' => 'Primary contact email address',
            ],
            'site_phone' => [
                'value' => '+88 01716 986 585',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Primary contact phone number',
            ],
            'site_address' => [
                'value' => 'House # 114, Kuripara, Uttarkhan, Dhaka-1230, Bangladesh',
                'type' => 'textarea',
                'group' => 'general',
                'description' => 'Physical address',
            ],
            'site_description' => [
                'value' => 'Confidence Training Institute (CTI) is a BTEB approved technical training center established in 2021, licensed by Dhaka North City Corporation. We offer practical hands-on training in 8 high-demand trades: welding, electrical, steel fitting, pipe fitting, scaffolding, mechanical fitting, machinist, and blaster painter. Our mission is to empower individuals through transformative training, building skilled futures with industry-relevant knowledge and confidence-building programs.',
                'type' => 'textarea',
                'group' => 'general',
                'description' => 'Site description',
            ],
            
            // SEO Settings
            'seo_meta_title' => [
                'value' => 'Confidence Training Institute (CTI) - BTEB Approved Vocational Training Center in Dhaka | Welding, Pipe Fitter, Steel Fitter Courses',
                'type' => 'text',
                'group' => 'seo',
                'description' => 'Default meta title for SEO (appears in search results) - Recommended: 50-60 characters',
            ],
            'seo_meta_description' => [
                'value' => 'Confidence Training Institute (CTI) - BTEB approved technical training center in Dhaka, Bangladesh. Offering practical hands-on training in welding, electrical, steel fitting, pipe fitting, scaffolding, mechanical fitting, machinist, and blaster painter. Licensed by Dhaka North City Corporation. Established 2021. Contact: +88 01716 986 585',
                'type' => 'textarea',
                'group' => 'seo',
                'description' => 'Default meta description for SEO (appears in search results) - Recommended: 150-160 characters',
            ],
            'seo_meta_keywords' => [
                'value' => 'Confidence Training Institute, CTI, BTEB approved training center, vocational training Dhaka, welding training Bangladesh, pipe fitter course, steel fitter training, scaffolding training, mechanical fitter course, machinist training, blaster painter course, technical training center, practical training institute, Dhaka North City Corporation licensed, Uttarkhan training center, Kuripara training institute, Iqbal Karim, TRAD/DNCC/048187/2022, 2021 established training center',
                'type' => 'text',
                'group' => 'seo',
                'description' => 'Meta keywords (comma-separated) - Include relevant search terms',
            ],
            'seo_og_image' => [
                'value' => '',
                'type' => 'text',
                'group' => 'seo',
                'description' => 'Open Graph image URL (for social media sharing)',
            ],
            'seo_google_analytics' => [
                'value' => '',
                'type' => 'text',
                'group' => 'seo',
                'description' => 'Google Analytics tracking ID (e.g., G-XXXXXXXXXX)',
            ],
            'seo_google_site_verification' => [
                'value' => '',
                'type' => 'text',
                'group' => 'seo',
                'description' => 'Google Search Console verification code',
            ],
            'seo_facebook_pixel' => [
                'value' => '',
                'type' => 'text',
                'group' => 'seo',
                'description' => 'Facebook Pixel ID',
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

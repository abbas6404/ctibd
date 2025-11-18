<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'description',
    ];

    /**
     * Get a setting value by key
     */
    public static function get($key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Set a setting value by key
     */
    public static function set($key, $value, $type = null, $group = null, $description = null)
    {
        $setting = self::where('key', $key)->first();
        
        if ($setting) {
            $setting->value = $value;
            if ($type) $setting->type = $type;
            if ($group) $setting->group = $group;
            if ($description) $setting->description = $description;
            $setting->save();
            return $setting;
        }
        
        return self::create([
            'key' => $key,
            'value' => $value,
            'type' => $type ?? 'text',
            'group' => $group ?? 'general',
            'description' => $description,
        ]);
    }
}

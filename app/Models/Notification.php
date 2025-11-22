<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'type',
        'title',
        'img',
        'description',
    ];

    /**
     * Get the user-friendly type name.
     */
    public function getTypeNameAttribute(): string
    {
        return match($this->type) {
            'top_notification' => 'Top Notification',
            'popup_notification' => 'Popup Notification',
            'notification_page' => 'Notification Page',
            default => 'Notification Page',
        };
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'img',
        'category_id',
    ];

    /**
     * Get the category that owns the gallery.
     */
    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id');
    }
}

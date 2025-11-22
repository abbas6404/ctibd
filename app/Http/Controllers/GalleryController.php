<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        // Get all categories with their galleries
        $categories = GalleryCategory::with(['galleries' => function($query) {
            $query->latest();
        }])->orderBy('order')->orderBy('name')->get();
        
        // Get galleries without category
        $uncategorizedGalleries = Gallery::whereNull('category_id')->latest()->get();
        
        return view('gallery', compact('categories', 'uncategorizedGalleries'));
    }
}

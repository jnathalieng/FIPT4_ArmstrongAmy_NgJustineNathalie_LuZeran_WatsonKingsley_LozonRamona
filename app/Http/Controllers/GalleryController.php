<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        // Fetch all galleries with their images
        $galleries = Gallery::with('images')
            ->orderBy('order')
            ->get();
        
        // Pass to the view
        return view('gallery', [
            'galleries' => $galleries
        ]);
    }
    
    public function getGallery($slug)
    {
        $gallery = Gallery::where('slug', $slug)
            ->with('images')
            ->firstOrFail();
        
        return response()->json($gallery);
    }
}
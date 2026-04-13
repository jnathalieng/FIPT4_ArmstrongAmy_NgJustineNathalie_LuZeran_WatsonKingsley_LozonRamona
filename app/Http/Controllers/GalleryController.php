<?php
namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('images')
            ->orderBy('order')
            ->get();
        
        // Return JSON for API requests
        return response()->json($galleries);
    }
    
    public function show($slug)
    {
        $gallery = Gallery::where('slug', $slug)
            ->with('images')
            ->firstOrFail();
        
        return response()->json($gallery);
    }
}
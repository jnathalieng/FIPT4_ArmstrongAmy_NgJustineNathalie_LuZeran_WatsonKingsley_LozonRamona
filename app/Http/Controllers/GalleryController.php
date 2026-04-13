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

    // MISSING GALLERY CRUD FUNCTIONALITY - ZERAN
    public function store(Request $request)
    {
        $gallery = Gallery::create($request->all());

        return response()->json($gallery);
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->update($request->all());

        return response()->json($gallery);
    }

    public function destroy($id)
    {
        Gallery::findOrFail($id)->delete();

        return response()->json(['message' => 'This image has been successfully deleted.']);
    }
}
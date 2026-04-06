<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;

class SearchController extends Controller
{
    public function apiSearch(Request $request) {
        $query = $request->input('q');
        $results = Blog::where('title', 'like', "%$query%")
                        ->orWhere('content', 'like', "%$query%")
                        ->get();
        return response()->json($results);
    }
}
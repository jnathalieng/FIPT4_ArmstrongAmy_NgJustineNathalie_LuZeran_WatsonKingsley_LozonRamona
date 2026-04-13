<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return response()->json($blogs);
    }

    public function show(Blog $blog) {
        return view('blog-post', ['blog' => $blog]);
    }

    public function getLatest(){
        $blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        return response()->json($blogs);
    }

    // REMAINING CRUD ADDITIONS
    public function store(Request $request)
    {
        // create a new blog
        $blog = Blog::create($request->all());

        return response()->json($blog);
    }

    public function update(Request $request, $id)
    {
        // updating a blog
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());

        return response()->json($blog);
    }

    public function destroy($id)
    {
        // delete a blog
        Blog::findOrFail($id)->detele();
        
        return response()->json(['message' => 'This blog was deleted successfully']);
    }
}

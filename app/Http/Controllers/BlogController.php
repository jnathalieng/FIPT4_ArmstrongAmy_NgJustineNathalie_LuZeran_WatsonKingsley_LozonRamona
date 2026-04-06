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
}

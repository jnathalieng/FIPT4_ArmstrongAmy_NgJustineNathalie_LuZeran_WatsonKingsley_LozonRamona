<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Create a new blog post
     */


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB
            'featured_image_alt' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('blog-images', $filename, 'public');
            $validated['featured_image'] = $filename;
        }

        $blog = Blog::create($validated);
        
        return response()->json(['message' => 'Blog created successfully', 'blog' => $blog], 201);
    }

    //Update an existing blog post
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
        ]);

        $blog->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'content' => $request->content
        ]);

        // Handle image upload and deletion of old image
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($blog->featured_image && \Storage::disk('public')->exists('blog-images/' . $blog->featured_image)) {
                \Storage::disk('public')->delete('blog-images/' . $blog->featured_image);
            }
            
            $file = $request->file('featured_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('blog-images', $filename, 'public');
            $validated['featured_image'] = $filename;
            $blog->featured_image = $filename;
            $blog->save();  
        }
        
        return response()->json(['message' => 'Blog updated successfully', 'blog' => $blog]);
    }

    //Delete a blog post and its featured image
    public function destroy(Blog $blog)
    {
        // Delete featured image if exists
        if ($blog->featured_image && \Storage::disk('public')->exists('blog-images/' . $blog->featured_image)) {
            \Storage::disk('public')->delete('blog-images/' . $blog->featured_image);
        }

        $blog->delete();
        
        return response()->json(['message' => 'Blog deleted successfully'], 200);
    }

    //Get a single blog for editing
    public function edit(Blog $blog)
    {
        return response()->json($blog);
    }

    //Get all blogs
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return response()->json($blogs);
    }

    //Get a single blog post for viewing

    public function show(Blog $blog)
    {
        return response()->json($blog);
    }

    public function showPost(Blog $blog)
    {
            //dd($blog); 
        return view('blog-post', ['blog' => $blog]);
    }

    //Get the 3 most recent blogs
    public function getLatest()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        return response()->json($blogs);
    }
}
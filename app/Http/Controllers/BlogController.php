<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //show the blog page
    public function index()
    {
        return view('partials.blogs.index');
    }
    //display a single post
    public function show($id)
    {
        $post = Blog::findOrFail($id);
        return view('partials.blogs.blog-details', ['post' => $post]);
    }
    // blog upload form

    public function create()
    {
        return view('partials.blogs.create');
    }

    // Store a blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|255',
            'content' => 'required',
            'image' => 'nullable|image',
        ]);
        //image path

        $imagePath = $request->file('image') ? $request->file('image')->store('blog_images', 'public') : null;

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //show the blog page
    public function index()
    {
        $blogs = Blog::get();
        return view('partials.blogs.index', compact('blogs'));
    }
    //display a single post
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('partials.blogs.index', ['blog' => $blog]);
    }
    // blog upload form

    public function create()
    {
        return view('partials.blogs.create');
    }

    // Store a blog
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
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

            return redirect('home');
            // return response()->json(['message' => 'Votre blog post été ajouté avec succès!']);
        } catch (ValidationException $e) {

            return response()->json(['message' => $e->getMessage()]);
        }
    }
}

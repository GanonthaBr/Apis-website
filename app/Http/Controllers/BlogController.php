<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Events\BlogPosted;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('partials.blogs.index', ['blogs' => $blogs]);
    }
    //show the recent blogs
    public function recentBlogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('partials.blogs.blogs', ['blogs' => $blogs]);
    }
    //display a single post
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('partials.blogs.blog-details', ['blog' => $blog]);
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
                'image' => 'nullable|image|max:5120',
            ]);
            //image path

            $imagePath = $request->file('image') ? $request->file('image')->store('blog_images', 'public') : null;
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->content = $request->content;
            $blog->image = $imagePath;
            $blog->save();
            //register Listener
            $blg = Blog::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $imagePath,

            ]);
            event(new BlogPosted($blg));


            return redirect('home');
            // return response()->json(['message' => 'Votre blog post été ajouté avec succès!']);
        } catch (ValidationException $e) {

            return response()->json(['message' => $e->getMessage()]);
        }
    }
}

<?php


namespace App\Http\Controllers;

// use HTMLPurifier;
use HTMLPurifier;
use App\Models\Blog;
use HTMLPurifier_Config;
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
        // $blog = Blog::findOrFail($id);
        //get blog with comments
        $blog  = Blog::with('comments')->findOrFail($id);
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
                'images.*' => 'image|mimes:jpeg,jpg,png,gif,svg|max:4096'
            ]);
            //image path

            $imagePath = $request->file('image') ? $request->file('image')->store('blog_images', 'public') : null;

            //sanitize with HTMLPurifier
            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $dirty_html = $request->content;
            $clean_html = $purifier->purify($dirty_html);

            //create blog
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->content = $clean_html;
            $blog->image = $imagePath;
            $blog->save();

            // dd($request->images);
            if ($request->file('images')) {
                foreach ($request->file('images') as $image) {

                    $imagePaths = $image->store('cause_images_list', 'public');
                    $blog->images()->create([
                        'image' => $imagePaths,
                    ]);
                }
            }
            //register Listener
            // event(new BlogPosted($blog));
            return redirect()->route('admin.allblogs')->with('blog-created', 'Votre blog post été ajouté avec succès!');
        } catch (ValidationException $e) {

            return response()->json(['message' => $e->getMessage()]);
        }
    }
    // delete a blog with id
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.allblogs')->with('blog-deleted', 'Votre article post été supprimé avec succès!');
    }
    //edit
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('partials.admin.blog_edit', ['blog' => $blog]);
    }
    // update with title, content and image
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'image' => 'nullable|image|max:5120',
            ]);
            //sanitize with HTMLPurifier
            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $dirty_html = $request->content;
            $clean_html = $purifier->purify($dirty_html);

            $blog = Blog::findOrFail($id);
            $blog->title = $request->title;
            $blog->content = $clean_html;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('blog_images', 'public');
                $blog->image = $imagePath;
            }
            $blog->save();
            return redirect()->route('admin.allblogs')->with('blog-updated', 'Votre article post été modifié avec succès!');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}

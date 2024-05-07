<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Events;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        //get all blogs and events in order from the last added

        // $blogs = Blog::all();
        $events = Events::all();
        return view('admin_home', ['$events' => $events]);
    }
    // all blogs
    public function allbogs()
    {
        $blogs = Blog::all();
        return view('partials.admin.blog_list', ['blogs' => $blogs]);
    }
    // create a new blog
    public function create()
    {
        return view('partials.admin.create_blog');
    }
}

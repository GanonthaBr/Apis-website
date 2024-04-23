<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Events;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::get();
        $events = Events::all();

        return view('home', ['blogs' => $blogs, 'events' => $events]);
    }
}

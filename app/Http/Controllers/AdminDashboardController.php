<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        //get all blogs and events in order from the last added

        $blogs = Blog::all();
        $events = Blog::all();
        return view('admin_home', ['$blogs' => $blogs, '$events' => $events]);
    }
}

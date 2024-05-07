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
}

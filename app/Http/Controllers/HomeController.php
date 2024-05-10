<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Stats;
use App\Models\Events;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $blogs = Blog::latest()->limit(3)->get();
        $stats = Stats::all();
        $testimonials = Testimonials::all();
        $events = Events::orderBy('created_at', 'desc')->take(2)->get();


        return view('home', ['events' => $events, 'stats' => $stats, 'blogs' => $blogs, 'testimonials' => $testimonials,]);
    }
    public function getStats()
    {
        $stats = Stats::all();
        return view('partials.admin.stats', ['stats' => $stats]);
    }
}

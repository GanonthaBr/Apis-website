<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //show the blog page
    public function index()
    {
        return view('partials.blogs.index');
    }
}

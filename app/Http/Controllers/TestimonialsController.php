<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    //get last three testimonials
    public function index()
    {
        $testimonials = Testimonials::latest()->take(3)->get();
        return view('testimonials', compact('testimonials'));
    }
}

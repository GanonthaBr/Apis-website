<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;

class TestimonialsController extends Controller
{
    //get last three testimonials
    public function index()
    {
        $testimonials = Testimonials::latest()->take(3)->get();
        return view('testimonials', compact('testimonials'));
    }
    //create new testimonial
    public function create()
    {
        return view('partial.testimonials.create');
    }

    // store a new testimonial
    // the authorImage should be optional and have a default value
    public function store(Request $request)
    {
        try {
            $request->validate([
                'authorName' => 'required',
                'authorPosition' => 'required',
                'content' => 'required'
            ]);
            $testimonial = new Testimonials();
            $testimonial->authorName = $request->authorName;
            $testimonial->authorImage = $request->authorImage ?? 'default.jpg';
            $testimonial->authorPosition = $request->authorPosition;
            $testimonial->content = $request->content;
            $testimonial->save();
            return redirect('home');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}

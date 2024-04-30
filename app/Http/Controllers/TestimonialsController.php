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
        $testimonials = Testimonials::all();
        return view('partials.testimonials.testimonials', compact('testimonials'));
    }
    //create new testimonial
    public function create()
    {
        return view('partials.testimonials.create');
    }

    // store a new testimonial
    // the authorImage should be optional and have a default value
    public function store(Request $request)
    {
        try {
            $request->validate([
                'authorName' => 'required',
                'authorImage' => 'nullable|image|max:5120',
                'content' => 'required',

            ]);
            //image path

            $imagePath = $request->file('authorImage') ? $request->file('authorImage')->store('testimonials_images', 'public') : null;

            //create element
            Testimonials::create([
                'authorName' => $request->authorName,
                'authorImage' => $imagePath,
                'content' => $request->content,
                'authorPosition' => $request->authorPosition,
            ]);

            return redirect('home');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}

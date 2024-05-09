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

    //testimonial edit
    public function edit($id)
    {
        $testimonial = Testimonials::find($id);
        return view('partials.testimonials.testimonial_edit', compact('testimonial'));
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

            return redirect()->route('admin.allTestimonials')->with('testimonial-success', 'Votre temoignage  été ajouté avec succès! ');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
    //update
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'authorName' => 'required',
                'authorImage' => 'nullable|image|max:5120',
                'content' => 'required',

            ]);
            //image path

            // $imagePath = $request->file('authorImage') ? $request->file('authorImage')->store('testimonials_images', 'public') : null;

            //create element
            $testimonial = Testimonials::findOrFail($id);
            $testimonial->authorName = $request->authorName;
            $testimonial->content = $request->content;
            $testimonial->authorPosition = $request->authorPosition;
            if ($request->has('authorImage')) {
                $imagePath = $request->file('AuthorImage')->store('testimonials_images', 'public');
                $testimonial->image = $imagePath;
            }
            $testimonial->save();

            return redirect()->route('admin.allTestimonials')->with('testimonial-success', 'Votre temoignage  été modifié avec succès!');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
    //delete
    public function destroy($id)
    {
        Testimonials::find($id)->delete();
        return redirect()->route('admin.allTestimonials')->with('testimonial-deleted', 'Votre temoignage  été supprimé avec succès!');
    }
}

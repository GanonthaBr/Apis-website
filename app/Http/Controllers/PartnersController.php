<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class PartnersController extends Controller
{

    //create
    public function create()
    {
        return view('partials.admin.partners.create_partner');
    }

    //edit
    public function edit($id)
    {
        $partner = Partners::find($id);
        return view('partials.admin.partners.edit', ['partner' => $partner]);
    }
    //delete
    public function destroy($id)
    {
        $partner = Partners::find($id);
        $partner->delete();
        return redirect()->route('admin')->with('success', 'Partner deleted successfully.');
    }
    //update    
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'nullable',
            ]);

            $partner = Partners::find($id);
            $imagePath = $request->file('image') ? $request->file('image')->store('partners_images', 'public') : null;

            $partner->update([
                'image' => $imagePath,
                'name' => $request->name,
            ]);

            return redirect()->route('admin')->with('success', 'Partner updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }
    //store
    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'nullable',
            ]);

            $imagePath = $request->file('image') ? $request->file('image')->store('partners_images', 'public') : null;


            Partners::create([
                'image' => $imagePath,
                'name' => $request->name,
            ]);

            return redirect()->route('admin')->with('success', 'Partner created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }
}

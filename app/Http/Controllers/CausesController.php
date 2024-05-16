<?php

namespace App\Http\Controllers;

use App\Models\Causes;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    public function index()
    {
        $causes = Causes::all();
        return view('partials.causes', ['causes' => $causes]);
    }
    //create
    public function create()
    {
        return view('partials.admin.create_causes');
    }
    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        //imagepath
        $imagePath = $request->file('image') ? $request->file('image')->store('cause_images', 'public') : null;
        //create
        $causes = new Causes();
        $causes->name = $request->name;
        $causes->description = $request->description;
        $causes->image = $imagePath;
        $causes->save();
        return redirect()->route('admin.allcauses')->with('cause-created', 'La cause a été ajoutée avec succès.');
    }
}

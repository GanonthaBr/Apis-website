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
    // destroy
    public function destroy($id)
    {
        $cause = Causes::find($id);
        $cause->delete();
        return redirect()->route('admin.allcauses')->with('cause-deleted', 'La cause a été supprimée avec succès.');
    }
    // edit
    public function edit($id)
    {
        $cause = Causes::find($id);
        return view('partials.admin.causes_edit', ['cause' => $cause]);
    }
    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $cause = Causes::find($id);
        $cause->name = $request->name;
        $cause->description = $request->description;
        if ($request->file('image')) {
            $cause->image = $request->file('image')->store('cause_images', 'public');
        }
        $cause->save();
        return redirect()->route('admin.allcauses')->with('cause-updated', 'La cause a été mise à jour avec succès.');
    }
}

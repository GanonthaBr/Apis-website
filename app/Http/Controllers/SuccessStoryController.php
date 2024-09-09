<?php

namespace App\Http\Controllers;

use HTMLPurifier;
use HTMLPurifier_Config;
use App\Models\SuccessStory;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;

class SuccessStoryController extends Controller
{
    public function index()
    {
        $success_story_list = SuccessStory::all();

        return view('partails.success_story.index', ['success_story_list' => $success_story_list]);
    }
    //show
    public function show($id)
    {
        $success_story = SuccessStory::findOrFail($id);

        return view('partails.success_story.show', ['success_story' => $success_story]);
    }
    //create
    public function create()
    {
        return view('partials.admin.success_story.create');
    }
    //store
    public function store(Request $request)
    {
        try {

            //validate requests
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'video' => 'nullable',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:4096'
            ]);

            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('success_story_images', 'public') : null;

            // sanitize with HTMLPurifier
            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $dirty_description = $request->description;
            $clean_description = $purifier->purify($dirty_description);

            //create 
            $success_story = new SuccessStory();
            $success_story->title = $request->title;
            $success_story->description = $clean_description;
            $success_story->image = $imagePath;
            $success_story->video = $request->video;
            $success_story->save();

            // add more images if request contains images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePath = $image->store('success_story_images', 'public');
                    $success_story->images()->create(['image' => $imagePath]);
                }
            }

            //return
            return redirect()->route('admin.allSuccessStories')->with('story-success', 'Success Story created successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.allSuccessStories')->with('story-error', 'Une erreur est survenue');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
    //edit
    public function edit($id)
    {
        $success_story = SuccessStory::findOrFail($id);

        return view('partials.admin.success_story.edit', ['success_story' => $success_story]);
    }
    //update
    public function update(Request $request, $id)
    {
        try {
            //validate requests
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'video' => 'nullable',
                'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:4096',
                'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:4096'
            ]);

            //sanitize with HTMLPurifier
            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $dirty_description = $request->description;
            $clean_description = $purifier->purify($dirty_description);

            //process the requests and make the SuccessStory Model body
            $success_story = SuccessStory::findOrFail($id);
            $success_story->title = $request->title;
            $success_story->description = $clean_description;
            $success_story->video = $request->video;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('success_story_images', 'public');
                $success_story->image = $imagePath;
            }
            // add new images to the existing ones
            if ($request->file('images')) {
                foreach ($request->file('images') as $image) {

                    $imagePaths = $image->store('success_story_images', 'public');
                    $success_story->images()->create([
                        'image' => $imagePaths,
                    ]);
                }
            }
            //save success_story after updating
            $success_story->save();
            return redirect()->route('admin.allSuccessStories')->with('update-success', 'Success Story updated successfully');
        } catch (\Throwable $e) {
            dd($e->getMessage());
            return redirect()->route('admin.allSuccessStories')->with('update-error', 'Une erreur est survenue');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    //delete
    public function destroy($id)
    {
        $success_story = SuccessStory::findOrFail($id);
        $success_story->delete();

        return redirect()->route('admin.allsuccessStories')->with('delete-success', 'Success Story deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    public function index()
    {
        $success_story_list = SuccessStory::all();

        return view('partails.success_story.index', ['success_story_list' => $success_story_list]);
    }
}

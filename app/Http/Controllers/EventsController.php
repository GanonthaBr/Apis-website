<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::all();
        return view('partials.events.index', compact('events'));
    }

    //create 
    public function create()
    {
        return view('partials.events.create');
    }
}

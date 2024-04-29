<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::orderBy('created_at', 'desc')->get();
        return view('partials.events.index', ['events' => $events]);
    }
    //all events
    public function recentEvents()
    {
        $events = Events::orderBy('created_at', 'desc')->take(2)->get();
        return view('partials.events.events', ['events' => $events]);
    }
    //show one event
    public function show($id)
    {
        $event = Events::find($id);
        return view('partials.events.event-details', ['event' => $event]);
    }
    //create 
    public function create()
    {
        return view('partials.events.create');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'location' => 'required',
                'image' => 'required',
            ]);
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('event_images', 'public') : null;

            //create element
            Events::create([
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'location' => $request->location,
                'image' => $imagePath,
            ]);
            return redirect('home');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}

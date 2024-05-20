<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;
use HTMLPurifier;
use HTMLPurifier_Config;
use Illuminate\Console\Scheduling\Event;

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
            //sanitize user input
            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $dirty_html = $request->description;
            $clean_html = $purifier->purify($dirty_html);
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('event_images', 'public') : null;

            //create element
            Events::create([
                'title' => $request->title,
                'description' => $clean_html,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'location' => $request->location,
                'image' => $imagePath,
            ]);
            return redirect()->route('admin.allEvents')->with('event-created', 'Votre événement été créé avec succès!');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    //edit view
    public function edit($id)
    {
        $event = Events::findOrFail($id);
        return view('partials.events.event_edit', ['event' => $event]);
    }
    //delete an event

    public function destroy($id)
    {
        $event = Events::findOrFail($id);
        $event->delete();
        return redirect()->route('admin.allEvents')->with('event-deleted', 'Votre événement été retiré avec succès!');
    }
    //update event
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'location' => 'required',
                'image' => 'nullable|image|max:5120',
            ]);
            //sanitize user input
            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $dirty_html = $request->description;
            $clean_html = $purifier->purify($dirty_html);



            $event = Events::findOrFail($id);
            $event->title = $request->title;
            $event->description = $clean_html;
            $event->date = $request->date;
            $event->start_time = $request->start_time;
            $event->end_time = $request->end_time;
            $event->location = $request->location;
            // $event->image = $imagePath;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('event_images', 'public');
                $event->image = $imagePath;
            }

            $event->save();
            return redirect()->route('admin.allEvents')->with('event-updated', 'Votre  événement été mis à jour avec succès!');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}

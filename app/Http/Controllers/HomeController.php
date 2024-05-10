<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Stats;
use App\Models\Events;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $blogs = Blog::latest()->limit(3)->get();
        $stats = Stats::all();
        $testimonials = Testimonials::all();
        $events = Events::orderBy('created_at', 'desc')->take(2)->get();


        return view('home', ['events' => $events, 'stats' => $stats, 'blogs' => $blogs, 'testimonials' => $testimonials,]);
    }
    public function getStats()
    {
        $stats = Stats::all();
        return view('partials.admin.stats', ['stats' => $stats]);
    }
    public function edit($id)
    {
        $stats = Stats::find($id);
        return view('partials.admin.stats_edit', ['stats' => $stats]);
    }
    // update stats with  nombre de beneficiaires aides, nombre de departement intervenus, nombre d'annees d'existence, nombre de communes aides 
    public function update(Request $request, $id)
    {
        $stats = Stats::find($id);
        $stats->number_of_beneficiaries = $request->beneficiaires;
        $stats->departments_helped = $request->departments;
        $stats->year_of_experience = $request->year;
        $stats->communities_helped = $request->communities;
        $stats->save();

        return redirect()->route('stats')->with('stats-updated', 'Stats updated successfully');
    }
}

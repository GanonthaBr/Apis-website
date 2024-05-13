<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Stats;
use App\Models\Events;
use App\Models\Report;
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
    //report list
    public function reportList()
    {
        $reports = Report::all();
        return view('partials.report', ['reports' => $reports]);
    }
    //create report
    public function createReport()
    {
        return view('partials.admin.report_create');
    }
    //store report
    //upload report with a title, description, image and a file in pdf format
    public function reportStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|mimes:pdf|max:4096',
        ]);
        //image path
        $imagePath = $request->file('image') ? $request->file('image')->store('report_images', 'public') : null;
        //PDF path 
        $pdfPath = $request->file('file') ? $request->file('file')->store('report_files', 'public') : null;

        $report = new Report();
        $report->title = $request->title;
        $report->description = $request->description;
        $report->image = $imagePath;
        $report->file = $pdfPath;
        $report->save();

        return redirect()->route('report')->with('report-created', 'Report created successfully');
    }
}

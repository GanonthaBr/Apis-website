<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Causes;
use App\Models\Stats;
use App\Models\Events;
use App\Models\Report;
use App\Models\Testimonials;
use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Check if the session variable 'key' is not set and set a default value
        if (!session()->has('locale')) {
            session(['locale' => 'fr']);
        }
        // $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $blogs = Blog::latest()->limit(3)->get();
        $stats = Stats::all();
        $causes = Causes::all();
        $testimonials = Testimonials::all();
        $events = Events::orderBy('created_at', 'desc')->take(2)->get();


        return view('home', ['events' => $events, 'stats' => $stats, 'causes' => $causes, 'blogs' => $blogs, 'testimonials' => $testimonials,]);
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
        return view('partials.admin.create_report');
    }
    //store report
    //upload report with a title, description, image and a file in pdf format
    public function reportStore(Request $request)
    {
        try {

            $request->validate([
                'title' => 'required',
                'author' => 'nullable',
                'description' => 'required',
                'image' => 'nullable|image|max:5120',
                'file' => 'required|mimes:pdf|max:10240',
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
            $report->author = $request->author;
            $report->save();

            return redirect()->route('admin.allreports')->with('report-created', 'Report created successfully');
        } catch (Exception $e) {
            return redirect()->route('admin.allreports')->with('report-error', 'An error occured while creating the report');
        }
    }
    // delete a report with id
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->route('admin.allreports')->with('report-deleted', 'Report has been deleted');
    }
    // edit a report
    public function reportEdit($id)
    {
        $report = Report::find($id);
        return view('partials.admin.report_edit', ['report' => $report]);
    }
    //update a report
    public function reportUpdate(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'author' => 'nullable',
                'description' => 'required',
                'image' => 'nullable|image|max:5120',
                'file' => 'nullable|mimes:pdf|max:10240',
            ]);
            $report = Report::find($id);
            $report->title = $request->title;
            $report->description = $request->description;
            $report->author = $request->author;
            if ($request->file('image')) {
                $imagePath = $request->file('image')->store('report_images', 'public');
                $report->image = $imagePath;
            }
            if ($request->file('file')) {
                $pdfPath = $request->file('file')->store('report_files', 'public');
                $report->file = $pdfPath;
            }
            $report->save();
            return redirect()->route('admin.allreports')->with('report-updated', 'Report updated successfully');
        } catch (Exception $e) {
            return redirect()->route('admin.allreports')->with('report-error', 'An error occured while updating the report');
        }
    }
}

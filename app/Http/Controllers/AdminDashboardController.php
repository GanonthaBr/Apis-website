<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogImages;
use App\Models\Causes;
use App\Models\Events;
use App\Models\Report;
use App\Models\Contact;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        //get all blogs and events in order from the last added
        $images = BlogImages::all();
        $blogs = Blog::all();
        $events = Events::all();
        return view('admin_home', ['events' => $events, 'images' => $images, 'blogs' => $blogs]);
    }
    // all blogs
    public function allbogs()
    {
        $blogs = Blog::all();
        return view('partials.admin.blog_list', ['blogs' => $blogs]);
    }
    // all events
    public function allEvents()
    {
        $events = Events::all();
        return view('partials.admin.event_list', ['events' => $events]);
    }
    // create a new blog
    public function create()
    {
        return view('partials.admin.create_blog');
    }
    //create a new event
    public function createEvent()
    {
        return view('partials.admin.create_event');
    }
    //all testimonials
    public function allTestimonials()
    {
        $testimonials = Testimonials::all();
        return view('partials.admin.testimonials_list', ['testimonials' => $testimonials]);
    }
    //create testimonial
    public function createTestimonial()
    {
        return view('partials.admin.create_testimonial');
    }
    //user requests
    public function userRequests()
    {
        $messages = Contact::all();
        return view('partials.admin.messages_list', ['messages' => $messages]);
    }
    //all reports
    public function allreports()
    {
        $reports = Report::all();
        return view('partials.admin.report_list', ['reports' => $reports]);
    }
    // all causes
    public function allCauses()
    {
        $causes = Causes::all();
        return view('partials.admin.causes_list', ['causes' => $causes]);
    }
}

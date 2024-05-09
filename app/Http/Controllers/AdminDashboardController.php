<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Events;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        //get all blogs and events in order from the last added

        $blogs = Blog::all();
        $events = Events::all();
        return view('admin_home', ['events' => $events, 'blogs' => $blogs]);
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
}

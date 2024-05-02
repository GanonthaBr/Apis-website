<?php

namespace App\Listeners;

use App\Events\BlogPosted;
use App\Models\Newsletter;
use App\Mail\BlogPostedMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBlogPostedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BlogPosted $event): void
    {
        // send email to all subscribers
        $subscribers = Newsletter::all();
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new BlogPostedMail($event->blog));
        }
    }
}

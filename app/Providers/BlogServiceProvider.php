<?php

namespace App\Providers;

use App\Model\Contacts;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer(['includes.sidebar', 'partials.admin.header', 'partials.admin.right_side_column'], function ($view) {
            $view->with('blogs', \App\Models\Blog::orderBy('created_at', 'desc')->take(3)->get())
                ->with('events', \App\Models\Events::all()->take(2))
                ->with('messages', \App\Models\Contact::latest()->get()->map(
                    function ($message) {
                        $message->created_at_human = $message->created_at->diffForHumans();
                        return $message;
                    }
                ));
        });
    }
}

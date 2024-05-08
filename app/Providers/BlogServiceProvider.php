<?php

namespace App\Providers;

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
        view()->composer(['includes.sidebar', 'partials.admin.right_side_column'], function ($view) {
            $view->with('blogs', \App\Models\Blog::orderBy('created_at', 'desc')->take(3)->get())
                ->with('events', \App\Models\Events::all()->take(2));
        });
    }
}

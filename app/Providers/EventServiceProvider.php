<?php

namespace App\Providers;

use App\Events\BlogPosted;
use Illuminate\Support\Facades\Event;
use App\Listeners\SendBlogPostedNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Your event listener mappings
        BlogPosted::class => [
            SendBlogPostedNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

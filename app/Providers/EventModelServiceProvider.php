<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EventModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Event::observe(\App\Observers\EventObserver::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

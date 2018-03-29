<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ParticipationModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Participation::observe(\App\Observers\ParticipationObserver::class);
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

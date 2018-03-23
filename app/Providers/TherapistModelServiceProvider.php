<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TherapistModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Therapist::observe(\App\Observers\TherapistObserver::class);
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

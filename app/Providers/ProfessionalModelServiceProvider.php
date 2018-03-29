<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProfessionalModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Professional::observe(\App\Observers\ProfessionalObserver::class);
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

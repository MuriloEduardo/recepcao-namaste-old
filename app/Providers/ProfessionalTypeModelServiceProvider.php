<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProfessionalTypeModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\ProfessionalType::observe(\App\Observers\ProfessionalTypeObserver::class);
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

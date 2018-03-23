<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerTypeModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\CustomerType::observe(\App\Observers\CustomerTypeObserver::class);
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

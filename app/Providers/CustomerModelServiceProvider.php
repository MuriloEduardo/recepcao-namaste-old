<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Customer::observe(\App\Observers\CustomerObserver::class);
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

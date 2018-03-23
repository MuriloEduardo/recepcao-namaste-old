<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HowDidFindOutModelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\HowDidFindOut::observe(\App\Observers\HowDidFindOutObserver::class);
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

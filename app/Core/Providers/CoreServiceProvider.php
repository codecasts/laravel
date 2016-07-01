<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'core');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Domains\Users\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Illuminate\Support\Collection;

/**
 * Abstract ServiceProvider for Domains
 */
abstract class ServiceProvider extends LaravelServiceProvider
{
    /**
     * @var array $bindings
     */
    protected $bindings = [];

    /**
     * 
     */
    protected $migrations = [];

    /**
     *
     */
    public function register()
    {
        $this->registerBindings(collect($this->bindings));
    }

    /**
     * @param Collection $bindings
     */
    protected function registerBindings(Collection $bindings)
    {
        $bindings->each(function($abstraction, $concrete) {
            $this->app->bindShared($abstraction, $concrete);
        });
    }
}

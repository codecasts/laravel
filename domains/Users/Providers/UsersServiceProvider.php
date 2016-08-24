<?php

namespace App\Domains\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;

/**
 *
 */
class UsersServiceProvider extends ServiceProvider
{
    /**
     * @var array $bindings
     */
    protected $bindings = [

    ];

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

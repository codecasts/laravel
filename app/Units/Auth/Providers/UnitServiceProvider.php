<?php

namespace App\Units\Auth\Providers;

use App\Support\UnitServiceProvider as ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    protected $alias = 'auth';

    protected $hasViews = true;

    protected $hasTranslations = true;

    protected $providers = [
        AuthServiceProvider::class,
        RouteServiceProvider::class,
    ];
}

<?php

namespace App\Domains;

use App\Domains\Users\Providers\UsersServiceProvider;
use Illuminate\Support\ServiceProvider;

class DomainsServiceProvider extends ServiceProvider
{
    /**
     * Main register method.
     */
    public function register()
    {
        $this->registerDomains();
    }

    /**
     * Register domains.
     */
    protected function registerDomains()
    {
        // Users Domain
        $this->app->register(UsersServiceProvider::class);
    }
}

<?php

namespace App\Core\Providers;

use Illuminate\Contracts\Routing\Registrar as Router;
use Illuminate\Support\ServiceProvider;

abstract class AbstractApplicationServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->registerRoutes($this->app['router']);
    }

    /**
     * Register application routes.
     *
     * @param Router $router
     */
    abstract protected function registerRoutes(Router $router);

    /**
     * Get dir of application.
     *
     * @return string
     */
    abstract protected function getApplicationDir();
}

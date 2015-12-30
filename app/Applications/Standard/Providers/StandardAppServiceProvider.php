<?php

namespace App\Applications\Standard\Providers;

use App\Core\Providers\AbstractApplicationServiceProvider;
use Illuminate\Contracts\Routing\Registrar as Router;

class StandardAppServiceProvider extends AbstractApplicationServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom($this->getApplicationDir() . '/resources/views', 'standard');
    }

    public function register()
    {
        parent::register();
    }

    /**
     * Register application routes
     *
     * @param Router $router
     * @return void
     */
    function registerRoutes(Router $router)
    {
        $attributes = [
            'namespace' => 'App\Applications\Standard\Http\Controllers',
            'middleware' => ['web']
        ];

        $router->group($attributes, function ($router) {
            require $this->getApplicationDir() . '/Http/routes.php';
        });
    }

    /**
     * Get dir of application
     *
     * @return string
     */
    protected function getApplicationDir()
    {
        return app_path('Applications/Standard');
    }
}
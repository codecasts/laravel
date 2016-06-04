<?php

namespace App\Domains;

use Illuminate\Support\ServiceProvider;
use App\Domains\Users\Repositories\UsersRepository;
use App\Domains\Users\Contracts\UsersRepository as UsersRepositoryContract;

class DomainsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUsers();
    }

    /**
     * User Domain
     */
    private function registerUsers()
    {
        $this->app->singleton(UsersRepositoryContract::class, UsersRepository::class);
    }


}
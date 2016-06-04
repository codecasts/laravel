<?php

namespace App\Domains;

use Illuminate\Support\ServiceProvider;
use App\Domains\Users\Repositories\UsersRepository;
use App\Domains\Users\Contracts\UsersRepository as UsersRepositoryContract;
use Migrator\MigratorTrait;

class DomainsServiceProvider extends ServiceProvider
{
    // Declare Migrations
    use MigratorTrait;
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUsers();
        
        $this->registerMigrations();
    }

    protected function registerMigrations()
    {
        $this->migrations([
            
        ]);
    }
    
    /**
     * User Domain
     */
    protected function registerUsers()
    {
        $this->app->singleton(UsersRepositoryContract::class, UsersRepository::class);
    }


}
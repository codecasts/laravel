<?php

namespace App\Domains\Users\Providers;

use App\Domains\Users\Contracts;
use App\Domains\Users\Repositories;
use App\Domains\Users\Database\Migrations;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;

class UsersServiceProvider extends ServiceProvider
{
    use HasMigrations;

    /**
     * Main register method.
     */
    public function register()
    {
        // Register migrations.
        $this->registerMigrations();

        // Bind repositories contracts with implementations.
        $this->bindRepositories();
    }

    /**
     * Load migrations.
     */
    protected function registerMigrations()
    {
        $this->migrations([
            Migrations\CreateUsersTable::class,
            Migrations\CreatePasswordResetsTable::class,
        ]);
    }

    protected function bindRepositories()
    {
        // Users
        $this->app->bind(Contracts\UsersRepository::class, Repositories\UsersRepository::class);
    }
}
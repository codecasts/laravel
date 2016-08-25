<?php

namespace App\Domains\Users\Providers;

use App\Support\Domains\ServiceProvider;
use App\Domains\Users\Database\Factories\UserFactory;
use App\Domains\Users\Database\Migrations\CreateUsersTable;
use App\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use App\Domains\Users\Database\Seeders\UsersSeeder;

/**
 *
 */
class UsersServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'users';

    /**
     * @var array $bindings
     */
    protected $bindings = [

    ];

    protected $migrations = [
        CreateUsersTable::class,
        CreatePasswordResetsTable::class,
    ];

    protected $seeders = [
        UsersSeeder::class,
    ];

    protected $factories = [
        UserFactory::class,
    ];

}

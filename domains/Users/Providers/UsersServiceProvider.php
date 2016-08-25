<?php

namespace App\Domains\Users\Providers;

use App\Domains\Base\Providers\ServiceProvider;
use App\Domains\Users\Database\Factories\UserFactory;
use App\Domains\Users\Database\Migrations\CreateUsersTable;
use App\Domains\Users\Database\Migrations\CreatePasswordResetsTable;

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

    protected $factories = [
        UserFactory::class,
    ];

}

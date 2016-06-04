<?php

namespace App\Domains\Users\Repositories;

use Artesaos\Warehouse\AbstractCrudRepository;
use Artesaos\Warehouse\Traits\ImplementsFractal;
use App\Domains\Users\User;
use App\Domains\Users\Transformers\UsersTransformers;
use App\Domains\Users\Contracts\UsersRepository as UsersRepositoryContract;

class UsersRepository extends AbstractCrudRepository implements UsersRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass = User::class;

    protected $transformerClass = UsersTransformers::class;
}
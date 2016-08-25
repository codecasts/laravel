<?php

namespace App\Support\Factory;

use Illuminate\Database\Eloquent\Factory;

/**
 * Class BaseFactory.
 */
abstract class BaseFactory
{
    /**
     * @var Factory
     */
    protected $factory;

    /**
     * BaseFactory constructor.
     */
    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
    }

    /**
     * @return mixed
     */
    abstract public function define();
}
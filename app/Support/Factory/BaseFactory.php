<?php

namespace App\Support\Factory;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Model;

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
     * @var Model
     */
    protected $model;

    /**
     * @var Faker
     */
    protected $faker;

    /**
     * BaseFactory constructor.
     */
    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
        $this->faker = app()->make(Generator::class);
    }

    /**
     * @return mixed
     */
    public function define()
    {
        $this->factory->define($this->model, function() {
            return $this->fields();
        });
    }

    abstract public function fields();
}
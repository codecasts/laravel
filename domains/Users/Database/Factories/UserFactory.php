<?php

namespace App\Domains\Users\Database\Factories;

use App\Domains\Users\User;
use App\Support\Factory\BaseFactory;

/**
 * Class UserFactory.
 */
class UserFactory extends BaseFactory
{
    /**
     * @var User Factory for the User Model.
     */
    protected $model = User::class;

    /**
     * Define the User's Model Factory
     */
    public function fields()
    {
        static $password;

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}
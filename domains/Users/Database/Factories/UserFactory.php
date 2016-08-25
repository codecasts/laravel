<?php

namespace App\Domains\Users\Database\Factories;

use App\Domains\Users\User;
use App\Support\Factory\BaseFactory;
use Faker\Generator as Faker;


/**
 * Class UserFactory.
 */
class UserFactory extends BaseFactory
{
    /**
     * Define the User's Model Factory
     */
    public function define()
    {
        $this->factory->define(User::class, function (Faker $faker) {
            static $password;

            return [
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => $password ?: $password = bcrypt('secret'),
                'remember_token' => str_random(10),
            ];
        });
    }
}
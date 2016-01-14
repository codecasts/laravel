<?php

namespace App\Domains\Users\Transformers;

use League\Fractal\TransformerAbstract;
use App\Domains\Users\User;

class UsersTransformers extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ];
    }
}
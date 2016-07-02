<?php

namespace App\Domains\Users\Rules;

use Artesaos\Shield\Rules;

class UserRules extends Rules
{
    public function defaultRules()
    {
        return [
            'name' => 'required',
        ];
    }

    public function creating()
    {
        return $this->returnRules([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }

    public function updating()
    {
        return $this->returnRules([
            'email' => 'email',
        ]);
    }
}

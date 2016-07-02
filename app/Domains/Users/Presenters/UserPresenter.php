<?php

namespace App\Domains\Users\Presenters;

use App\Support\ViewPresenter\Presenter;
use Illuminate\Support\Str;

class UserPresenter extends Presenter
{
    public function normalizedName()
    {
        return ucwords(Str::lower($this->entity->name));
    }
}
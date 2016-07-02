<?php

namespace App\Domains\Users;

use App\Domains\Users\Presenters\UserPresenter;
use App\Domains\Users\Rules\UserRules;
use App\Support\ViewPresenter\Presentable;
use Artesaos\Shield\HasRules;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Presentable, HasRules;

    protected static $rulesFrom = UserRules::class;

    /**
     * @var string View presenter class name.
     */
    protected $presenter = UserPresenter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

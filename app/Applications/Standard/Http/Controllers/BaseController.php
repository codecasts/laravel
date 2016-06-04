<?php

namespace App\Applications\Standard\Http\Controllers;

use App\Core\Http\Controllers\CoreController;

abstract class BaseController extends CoreController
{
    protected $view_namespace = 'standard::';
}
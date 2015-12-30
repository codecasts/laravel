<?php

namespace App\Applications\Standard\Http\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return $this->view('home');
    }
}
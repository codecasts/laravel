<?php

/** @var \Illuminate\Routing\Router $router */

$router->get('', ['as' => 'home', 'uses' => 'HomeController@index']);
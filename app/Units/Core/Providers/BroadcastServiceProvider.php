<?php

namespace App\Units\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Broadcast::routes();
        
        Broadcast::channel('App.User.{userId}', function ($user, $userId) {
            return (int) $user->id === (int) $userId;
        });
    }
}

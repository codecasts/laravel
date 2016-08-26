<?php

namespace App\Core\Routes;

use Codecasts\Support\Console\Routing\RouteFile;
use Illuminate\Foundation\Inspiring;

/**
 * Console Routes.
 *
 * This file is where you may define all of your Closure based console
 * commands. Each Closure is bound to a command instance allowing a
 * simple approach to interacting with each command's IO methods.
 */
class Console extends RouteFile
{
    /**
     * Declare Console Routes.
     */
    public function routes()
    {
        $this->artisan->command('inspire', function() {
            $this->comment(Inspiring::quote());
        });
    }
}
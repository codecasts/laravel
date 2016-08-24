<?php

namespace App\Domains;

use App\Domains\Users\Providers\UsersServiceProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Collection;

/**
 * class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var array $domains
     */
    protected $domains = [
        UsersServiceProvider::class,
    ];

    /**
     *
     */
    public function register()
    {
        $this->registerDomains(collect($this->domains));
    }

    /**
     * @param Collection $domains
     */
    protected function registerDomains(Collection $domains)
    {
        $domains->each(function($domain) {
            $this->app->register($domain);
        });
    }
}

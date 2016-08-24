<?php

namespace App\Domains\Base\Providers;

use ReflectionClass;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Illuminate\Support\Collection;
use Migrator\MigratorTrait as HasMigrations;

/**
 * Abstract ServiceProvider for Domains
 */
abstract class ServiceProvider extends LaravelServiceProvider
{
    // Enable migrations trait
    use HasMigrations;

    /**
     * @var string Domain alias for translations and other keys.
     */
    protected $alias;

    /**
     * @var array Contract bindings.
     */
    protected $bindings = [];

    /**
     * @var array List of migrations provided by Domain.
     */
    protected $migrations = [];

    /**
     * @var bool Enable translations for this Domain.
     */
    protected $hasTranslations = false;

    /**
     * Register the current Domain.
     */
    public function register()
    {
        // Register bindings.
        $this->registerBindings(collect($this->bindings));

        // Register migrations.
        $this->registerMigrations(collect($this->migrations));

        // Register translations
        if ($this->hasTranslations) {
            $this->registerTranslations();
        }
    }

    /**
     * Register the defined domain bindings.
     *
     * @param Collection $bindings
     */
    protected function registerBindings(Collection $bindings)
    {
        $bindings->each(function($abstraction, $concrete) {
            $this->app->bindShared($abstraction, $concrete);
        });
    }

    /**
     * Register the defined migrations.
     *
     * @param Collection $migrations
     */
    protected function registerMigrations(Collection $migrations)
    {
        $this->migrations($migrations->all());
    }

    /**
     * Register domain translations.
     */
    protected function registerTranslations()
    {
        $this->loadTranslationsFrom(
            $this->domainPath('Resources/Lang'),
            $this->alias
        );
    }

    /**
     * @param string $append
     *
     * @return string
     */
    protected function domainPath($append = null)
    {
        $reflection = new ReflectionClass($this);

        $realPath = realpath(dirname($reflection->getFileName()).'/../');

        if (!$append) {
            return $realPath;
        }

        return $realPath.'/'.$append;
    }
}

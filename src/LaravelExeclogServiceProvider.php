<?php

namespace Codebyray\LaravelExeclog;

use Illuminate\Support\ServiceProvider;

class LaravelExeclogServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
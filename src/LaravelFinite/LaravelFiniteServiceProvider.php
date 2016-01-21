<?php

namespace AM2Studio\LaravelFinite;

use Illuminate\Support\ServiceProvider;

class LaravelFiniteServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/../../vendor/autoload.php';

        /*
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('finite.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php', 'finite'
        );
        */

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path(
                'migrations'
            )
        ], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFinite();

        /*
        config([
            'config/finite.php',
        ]);
        */
    }

    private function registerFinite()
    {
        $this->app->bind('finite', function ($app) {
            return new Finite($app);
        });
    }
}

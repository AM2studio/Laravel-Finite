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

        // use this if your package needs a config file
        // $this->publishes([
        //         __DIR__.'/config/config.php' => config_path('skeleton.php'),
        // ]);

        // use the vendor configuration file as fallback
        // $this->mergeConfigFrom(
        //     __DIR__.'/config/config.php', 'skeleton'
        // );
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFinite();

        // use this if your package has a config file
        // config([
        //         'config/skeleton.php',
        // ]);
    }

    private function registerFinite()
    {
        $this->app->bind('finite',function($app){
            return new Finite($app);
        });
    }
}





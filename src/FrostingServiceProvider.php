<?php

namespace Mission4\Frosting;

use Illuminate\Support\ServiceProvider;

class FrostingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        $this->publishes([
            __DIR__ . '/config/frosting.php' => config_path('frosting.php'),
        ], 'frosting');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}

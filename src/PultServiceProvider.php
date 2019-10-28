<?php

namespace BrainySoft\Pult;

use Illuminate\Support\ServiceProvider;


class PultServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'bs-pult');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register the service provider.
     * Merge config, load routes
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
    }

}
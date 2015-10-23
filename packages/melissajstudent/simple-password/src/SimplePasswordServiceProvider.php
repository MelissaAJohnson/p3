<?php

namespace Melissajstudent\SimplePassword;

use Illuminate\Support\ServiceProvider;

class SimplePasswordServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'SimplePassword');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Melissajstudent\SimplePassword\SimplePasswordController');
    }
}

<?php

namespace sedaaydin360drc\greetings\Providers;

use Illuminate\Support\ServiceProvider;
use sedaaydin360drc\greetings\Controllers\PackageController;

class ApexServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(PackageController::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '../../routes/routes.php');
        $this->loadViewsFrom(__DIR__ . '../../views', 'sedaaydin360drc');
    }
}

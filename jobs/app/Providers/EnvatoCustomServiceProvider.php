<?php

namespace App\Providers;

use Http\Services\JobServiceInterfaceImpl;
use Illuminate\Support\ServiceProvider;

class EnvatoCustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind('\Http\Services\JobServiceInterface', function ($app) {
            return new JobServiceInterfaceImpl();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

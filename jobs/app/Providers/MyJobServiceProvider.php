<?php

namespace App\Providers;

use App\Service\MyJobService;
use Illuminate\Support\ServiceProvider;
use MyJobServiceImpl;

class MyJobServiceProvider extends ServiceProvider
{


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind('App\Interfaces\JobService', 'App\Service\JobServiceImpl');
        $this->app->bind('App\Interfaces\JobRepository', 'App\Service\JobRepositoryImpl');

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

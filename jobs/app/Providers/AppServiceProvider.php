<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Queue;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Schema::defaultStringLength(191);

        Queue::failing(function (JobFailed $event) {
             $event->connectionName;
             $event->job;
             $event->exception;

            Log::error('There has been an error with job: ' . $event->job .  '. Connection Name : '  . $event->connectionName  . '. Exception: ' . $event->exception);
        });

    }
}

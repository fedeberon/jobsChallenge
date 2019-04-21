<?php
/**
 * Created by IntelliJ IDEA.
 * User: erwin
 * Date: 20/4/2019
 * Time: 12:02
 */

namespace Http\Services;


use Carbon\Laravel\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }


    public function register()
    {
        $this->app->bind('\Http\Services\JobService', function ($app) {
            return new JobServiceInterfaceImpl();
        });
    }


}

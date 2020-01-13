<?php

namespace App\Providers;

use App\MyClass\MyClassB;
use Illuminate\Database\Connection;
use Illuminate\Support\ServiceProvider;

class myProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MyClassB::class, function(){
            return new MyClassB('MyAction');
        });
    }
}

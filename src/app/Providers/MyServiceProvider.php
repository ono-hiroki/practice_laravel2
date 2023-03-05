<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        app()->singleton('myservice', 'App\MyClasses\PowerMyService');
        app()->singleton('App\MyClasses\MyServiceInterface', 'App\MyClasses\PowerMyService');
        echo '<b>MyServiceProvider register() called.</b><br>';
    }

    public function boot(): void
    {
        echo "<b>MyServiceProvider boot() called.</b><br>";
    }
}

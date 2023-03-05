<?php

namespace App\Providers;

use App\MyClasses\MyService;
use App\MyClasses\PowerMyService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
    }

    public function boot()
    {
    }
}

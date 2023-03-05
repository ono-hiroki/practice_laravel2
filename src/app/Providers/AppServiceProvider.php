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
        app()->resolving(function ($object, $app) {
            if (is_object($object)) {
                echo get_class($object) . "<br>";
            } else {
                echo $object . "<br>";
            }
        });

        app()->resolving(PowerMyService::class, function ($object, $app) {
            $newdata = ['ハンバーグ', 'カレー', 'ラーメン'];
            $object->setData($newdata);
            $object->setId(rand(0, count($newdata)));
        });

        app()->singleton('App\MyClasses\MyServiceInterface', 'App\MyClasses\PowerMyService');
    }
}

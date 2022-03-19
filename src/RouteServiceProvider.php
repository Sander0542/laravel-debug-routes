<?php

namespace Sander0542\LaravelDebugRoutes;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Sander0542\LaravelDebugRoutes\Middlewares\DebugMiddleware;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        Route::prefix('debug')->middleware([DebugMiddleware::class])->group(function () {
            Route::get('phpinfo', function () {
                phpinfo();
            });
            Route::get('config', function () {
                return Response::json(Config::all());
            });
        });
    }
}
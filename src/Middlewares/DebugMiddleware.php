<?php

namespace Sander0542\LaravelDebugRoutes\Middlewares;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class DebugMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Config::get('app.debug', false) == true) {
            return $next($request);
        }

        App::abort(404);
    }
}
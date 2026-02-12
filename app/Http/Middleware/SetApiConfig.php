<?php

namespace App\Http\Middleware;

use Closure;

class SetApiConfig
{
    public function handle($request, Closure $next)
    {
        if ($request->is('api/*')) {
            config([
                'session.domain' => 'https://webbitech.co.in/PHP-BETA/vista',
                'sanctum.stateful' => ['https://webbitech.co.in/PHP-BETA/vista'],
            ]);
        }

        return $next($request);
    }
}
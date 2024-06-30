<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->query('key') && !$request->header('key'))
            abort(401, 'Нет ключа авторизации');

        if (
            ($request->query('key') && $request->query('key') !== config('api.api_key')) ||
            ($request->header('key') && $request->header('key') !== config('api.api_key'))
        )
            abort(401, 'Нет ключа авторизации');

        return $next($request);
    }
}

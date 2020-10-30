<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class EmpresaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::user()) {
            abort(404);
        }
        if (!Auth::user()->empresa) {
            abort(404);
        }
        return $next($request);
    }
}

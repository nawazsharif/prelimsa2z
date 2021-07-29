<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if (! $request->expectsJson()) {
        //     return route('login');
        // }
        if(auth()->check() && auth()->user()->is_admin ==1 ){
            return $next($request);
        }
        return false;
    }
}

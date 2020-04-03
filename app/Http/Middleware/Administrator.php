<?php

namespace App\Http\Middleware;

use Closure;

class Administrator
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
        if (auth()->check()) {
            if (in_array(auth()->user()->email, config('app.administrators'))) {
                dd('Eres administrador');
            } else {
                dd('No eres un administrador');
            }
        } else {
            dd('logeate');
        }
        return $next($request);
    }
}

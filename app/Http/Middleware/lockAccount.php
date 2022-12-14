<?php

namespace App\Http\Middleware;

use Closure;

class lockAccount
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
        if ($request->session()->has('locked')) {

            return redirect()->route("user.lock");

        }
            return $next($request);
    }
}

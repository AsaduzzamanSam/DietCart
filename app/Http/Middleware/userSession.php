<?php

namespace App\Http\Middleware;

use Closure;

class userSession
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
        if($request->session()->has('register'))
        {
            return $next($request);
        }
        else
        {
            return redirect('/login');
        }
    }
}

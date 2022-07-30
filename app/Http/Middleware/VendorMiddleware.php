<?php

namespace App\Http\Middleware;

use Closure;

class VendorMiddleware
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
        if(Auth::user()->role_as=='vendor')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','You are not allowed to access the Dashboard!');
        }

    }
}

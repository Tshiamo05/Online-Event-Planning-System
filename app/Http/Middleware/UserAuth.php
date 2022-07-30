<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class UserAuth
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
       /* if( Auth::check() )
        {
            // if user admin take him to his dashboard
            if ( Auth::user()->isAdmin() ) {
                 return redirect(route('admin_dashboard'));
            }

            // allow user to proceed with request
            else if ( Auth::user()->isUser() ) {*/
                if($request->path()=="login" && $request->session()->has('user'))
                {
                    return redirect('/');
                }
                return $next($request);
            /*}
        }

        abort(404);  // for other user throw 404 error*/
    }
        
}

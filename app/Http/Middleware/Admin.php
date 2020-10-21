<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class Admin
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
        // if (Auth::user()) {

        //     if(Auth::user()->is_admin){
        //         return $next($request);
        //     }
        //     else{
        //         return redirect('/user/shop');
        //     }
        // }
        // else{
        //     return redirect('/login');
        // }

        if ( Auth::check() && Auth::user()->is_admin )
        {
            return $next($request);
        }

        return redirect('/login');
    }
}

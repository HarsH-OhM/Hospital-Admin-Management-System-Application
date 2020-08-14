<?php

namespace App\Http\Middleware;

use Closure;

class RedirectifnotUser2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard="User2")
    {
        // if(!auth()->guard($guard)->check()) {
        //     return redirect(route('User2.login'));
        // }
       


        if (Auth::user()->role == 'User2') {
            return redirect()->route('dashboard');
        }

        return $next($request);
        
    }
}





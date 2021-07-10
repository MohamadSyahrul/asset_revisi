<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

        if (Auth::user() && Auth::user()->roles == 'admin') {
            return $next($request);
        }
        return redirect('/');
        // if(! $request->user()->roles == 'admin'){
        //     return $next($request);
        
        // }
        // elseif(! $request->user()->roles == 'satuan-kerja'){
        //     return $next($request);
        // }
       
        // return redirect('/');
    }
}

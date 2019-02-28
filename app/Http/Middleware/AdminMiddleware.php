<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if ( auth()->user()->admin ) {  
            return $next($request);
        }
        Session::flash('permisions', "Lo sentimos, pero no dispone de los permisos requeridos");
        return redirect(route('home'));
    }
}

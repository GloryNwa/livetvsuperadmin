<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     Public function handle($request,Closure $next){
        if(session('user')){
          return $next($request);
        }else{
          return redirect(route('/'));
        }
    }

}
     
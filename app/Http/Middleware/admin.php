<?php

namespace App\Http\Middleware;

use Closure;

class admin
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
     $user=auth()->guard('web')->user()->type;
     if($user==1)

        return $next($request);
        else {
            return redirect('/index');
        }
    }
}

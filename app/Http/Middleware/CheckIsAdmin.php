<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
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
        $user = \Illuminate\Support\Facades\Auth::user();
        if (!(Auth::check() && Auth::user()->isAdmin()))
        {
            return redirect('/')->withErrors('Access denied to ADMIN functionality!');
        }
        return $next($request);
    }
}

        
        
       /* if(!$user->isAdmin()){
           return redirect()->route('index');
        }
        return $next($request);*/
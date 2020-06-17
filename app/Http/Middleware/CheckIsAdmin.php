<?php

namespace App\Http\Middleware;

use Closure;

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
        if(!$user->isAdmin()){
           return redirect()->route('index');
        }
        if($user->isAdmin()){
           return redirect()->route('home');
        }
        return $next($request);
    }
}
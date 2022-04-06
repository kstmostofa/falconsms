<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IsUser
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
        if (Auth::check()) {
            if (Auth::user()->type == 'user') {
                if (Auth::user()->status) {
                    return $next($request);
                } else {
                    Session::flush();
                    Auth::logout();
                    return redirect('login')->with('error', "Your Account is Inactive");
                }
            } else {
                return redirect('login')->with('error', "Only User can access!");
            }
        }
    }
}


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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (auth()->user() && auth()->user()->usertype == 'admin') {
            // If the user is authenticated and has the 'admin' usertype, allow access to the route
            return $next($request);
        }
    
        // If the user is not authenticated or doesn't have the 'admin' usertype, return a 401 Unauthorized response
        abort(401);
    }
    
}

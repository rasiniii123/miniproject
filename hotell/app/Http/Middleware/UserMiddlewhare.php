<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // If authenticated, redirect to logout route only if current route is not logout
            if ($request->route()->getName() !== 'logout') {
                return redirect()->route('logout');
            }
        }

        // If not authenticated or if current route is logout, proceed with the request
        return $next($request);
    }
}

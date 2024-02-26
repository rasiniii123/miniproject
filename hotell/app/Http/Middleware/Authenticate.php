<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::check() && $request->routeIs('login')) {
            return redirect('/dashboard');
        }
        return $next($request);
    }
}

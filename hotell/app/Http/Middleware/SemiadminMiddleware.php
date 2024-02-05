<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SemiadminMiddleware
{

    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        return redirect()->route('/dashboard')->with('error', 'Anda tidak memiliki izin sebagai semiadmin.');
    }
}
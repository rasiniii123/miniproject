<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!$request->user() || $request->user()->role !== $role) {
            // Jika pengguna tidak memiliki peran yang diizinkan, arahkan mereka ke halaman yang sesuai
            return redirect()->route('dashboard')->with('error', 'Anda tidak diizinkan mengakses halaman ini.');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SemiAdminmiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah pengguna memiliki peran "semiadmin"
        if (Auth::check() && Auth::user()->hasRole('semiadmin')) {
            return $next($request);
        }

        // Redirect atau response sesuai kebijakan Anda jika pengguna tidak memiliki peran "semiadmin"
        return redirect()->route('home')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}

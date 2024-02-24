<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Periksa peran pengguna
            if ($user->role === 'admin') {
                // Jika pengguna adalah admin, arahkan kembali ke dashboard admin
                return redirect()->route('admin.dashboard')->with('error', 'Anda tidak dapat mengakses halaman pengguna sebagai admin.');
            }
        } else {
            // Pengguna belum login, arahkan ke halaman login
            return redirect()->route('auth.login');
        }

        // Jika bukan admin atau pengguna belum login, lanjutkan ke handler selanjutnya
        return $next($request);
    }
}
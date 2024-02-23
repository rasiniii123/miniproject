<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna sudah terotentikasi
        if (Auth::check()) {
            // Cek apakah peran pengguna adalah 'admin'
            if (Auth::user()->role === 'admin') {
                // Jika iya, lanjutkan permintaan
                return $next($request);
            } else {
                // Jika peran pengguna bukan 'admin', alihkan ke dashboard dengan pesan kesalahan
                return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki izin sebagai admin.');
            }
        } else {
            // Jika pengguna belum terotentikasi, alihkan ke halaman login
            return redirect()->route('auth.login')->with('error', 'Anda harus masuk untuk mengakses halaman ini.');
        }
    }
}

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
            return redirect('/home'); // Ubah '/home' sesuai dengan halaman setelah login yang diinginkan
        }

        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddlewhare
{
    public function handle($request,Closure $next)
    {
    if (Auth::check() && Auth::user()->role == 'User') {

        return $next($request);
    }


    return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini');
    }
}


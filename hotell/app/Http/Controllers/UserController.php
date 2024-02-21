<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6|max:255',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus di isi',
            'password.min' => 'Password minimal 6 karakter',
            'password.max' => 'Maksimal panjang password adalah 255 karakter',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Jika pengguna berhasil login, periksa peran mereka
            if (Auth::user()->role === 'admin') {
                // Jika pengguna memiliki peran admin, arahkan ke dashboard admin
                return redirect()->route('admin.dashboard');
            } else {
                // Jika pengguna memiliki peran lain atau tidak memiliki peran, arahkan ke dashboard utama
                return redirect()->route('dashboard');
            }
        } else {
            // Login gagal, tampilkan pesan kesalahan
            return back()->withErrors(['email' => 'Login gagal. Email atau password salah.']);
        }        
}

    function logout()
    {
        Auth::logout();
        return redirect('login')->with('logout_success', 'Berhasil LogOut');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

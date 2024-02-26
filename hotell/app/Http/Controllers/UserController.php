<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
 * Display a listing of the resource.
 */
public function index()
{
    if (Auth::check()) {
        return redirect('/'); // Ubah '/' sesuai dengan halaman beranda yang diinginkan
    }

    return view('auth.login');
}

    /**
     * Show the form for creating a n   ew resource.
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
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard')->with('admin_success', 'Selamat datang di dashboard admin!');
            } else {
                return redirect()->route('dashboard')->with('login_success', 'Selamat datang di dashboard admin!');
            }
        } else {
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

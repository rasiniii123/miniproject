<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display the registration form.
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage (Handle registration).
     */
    public function store(Request $request)
    {
        // Validation rules

        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // Konfirmasi password
        ], [
            'username.required' => 'Username harus diisi',
            'username.unique' => 'Username sudah digunakan',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter',
            'password.confirmed' => 'Konfirmasi password tidak cocok', // Pesan untuk konfirmasi password yang tidak cocok
        ]);


        // Create a new user with the provided data
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'admin',
        ]);

        // Redirect the user to the login page with a success message
        return redirect()->route('auth.login')->with('success', 'Data berhasil disimpan');
    }
}

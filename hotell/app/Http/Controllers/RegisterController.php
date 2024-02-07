<?php

namespace App\Http\Controllers;

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
        // Validation
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // Tambahkan aturan validasi untuk konfirmasi password
        ], [
            'username.required' => 'username wajib diisi',
            'username.unique' => 'username sudah digunakan',
            'email.required' => 'email wajib diisi',
            'email.unique' => 'email sudah digunakan',
            'password.required' => 'password wajib diisi',
            'password.min' => 'password minimal 6 karakter',
            'password.confirmed' => 'konfirmasi password tidak cocok', // Pesan validasi untuk konfirmasi password
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Create a new user!!
        $user = User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => 'admin',
        ]);
        return redirect()->route('auth.login')->with('success', 'Data berhasil disimpan');
    }
}

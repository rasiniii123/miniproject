<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

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
        $credentials = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        // dd( $credentials);

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

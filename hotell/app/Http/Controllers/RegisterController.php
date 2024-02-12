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
        // Validation rules

        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
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

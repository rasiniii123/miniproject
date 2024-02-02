<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;

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
        $user = User::create($credentials);
        return redirect()->route('auth.login')->with('success', 'Data berhasil disimpan');
      
    }
}

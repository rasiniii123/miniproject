<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // Mendapatkan data pengguna yang sedang login
        $user = auth()->user();

        // Menampilkan profil pengguna
        return view('profile.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // Mendapatkan data pengguna yang sedang login
        $user = auth()->user();

        // Menampilkan formulir pengeditan profil pengguna
        return view('profile.edit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Mendapatkan data pengguna yang sedang login
        $user = auth()->user();

        // Validasi data yang dikirimkan dari formulir
        $request->validate([
            // Atur aturan validasi sesuai kebutuhan Anda
        ]);

        // Perbarui profil pengguna dengan data baru
        $user->update([
            // Atur atribut profil pengguna yang ingin diperbarui sesuai dengan data dari $request
        ]);

        // Redirect pengguna kembali ke halaman profil dengan pesan sukses
        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

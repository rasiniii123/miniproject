<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{

    public function index(User $profil)
    {
        $userID = Auth::id();
        $user = User::find($userID);
        return view('user.profile', compact('user', 'profil'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $userID = Auth::id();
        $user = User::find($userID);
        return view('user.profileedit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    try {
        $request->validate([
            'username' => 'nullable',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'address' => 'nullable',
            'telp' => 'nullable|numeric|min:0',
            'password' => 'nullable|min:8',
        ], [
            'profile.image' => 'Profil harus file gambar',
            'profile.mimes' => 'Hanya bisa gambar dengan format: jpeg,jpg,png,webp',
            'telp.numeric' => 'Nomor telepon harus berupa angka',
            'telp.min' => 'Harap masukkan data yang valid',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $user = User::find($id);

        if (!$user) {
            return redirect()->route('user.index');
        }

        $userData = [];

        if ($request->filled('username')) {
            $userData['username'] = $request->input('username');
        }

        if ($request->filled('address')) {
            $userData['address'] = $request->input('address');
        }

        if ($request->filled('telp')) {
            $userData['telp'] = $request->input('telp');
        }

        if ($request->filled('password')) {
            $userData['password'] = bcrypt($request->input('password'));
        }

        if ($request->file('profile')) {
            $userData['profile'] = $request->file('profile')->store('profile', 'public');

            if ($user->profile) {
                Storage::disk('public')->delete($user->profile);
            }
        }

        $user->update($userData);

        return redirect()->route('profile')->with('profile_success', 'Profil berhasil diperbarui.');
    } catch (\Exception $e) {
        \Log::error('Error updating profile: ' . $e->getMessage());

        return redirect()->route('profile')->with('profile_error', 'Gagal memperbarui profil. Silakan coba lagi nanti.');
    }
}




    public function destroy(string $id)
    {
        //
    }
}

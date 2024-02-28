<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ulasan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = Auth::id();
        $user = User::find($userID); // Anda mungkin perlu menggunakannya di view Anda
        $pesanan = Pesanan::all(); // Mengambil semua pesanan
        return view('user.ulasan', compact('pesanan', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ulasan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required|string|max:255',
            'pesanan_id' => 'required|exists:pesanan,id',
            'user_id' => 'required|exists:users,id',
            'rooms_id' => 'required|exists:rooms,id', // Perbaikan penamaan di sini
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cari ulasan berdasarkan pesanan_id dan user_id
        $ulasan = Ulasan::where('rooms_id', $request->rooms_id)
                        ->where('user_id', $request->user_id)
                        ->first();

        // Jika ulasan sudah ada, update ulasan tersebut
        if ($ulasan) {
            $ulasan->update([
                'rating' => $request->rating,
                'ulasan' => $request->ulasan,
            ]);
        } else {
            // Jika ulasan belum ada, buat ulasan baru
            Ulasan::create([
                'rating' => $request->rating,
                'ulasan' => $request->ulasan,
                'pesanan_id' => $request->pesanan_id,
                'user_id' => $request->user_id,
                'rooms_id' => $request->rooms_id, // Perbaikan penamaan di sini
            ]);
        }

        // Redirect ke halaman detail kamar dengan ID kamar yang sesuai
        return redirect()->route('detail.index', ['id' => $request->rooms_id])->with("success", "Review data added successfully!");
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

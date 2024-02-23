<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\User;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index()
    {
        // Ambil semua data pesanan
        $pesanan = Pesanan::all();
        return view('user.pesanan', compact('pesanan'));
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
    public function show(string $id)
    {
        // Mendapatkan detail pesanan berdasarkan ID
        $pesanan = Pesanan::findOrFail($id);
    
        // Mendapatkan informasi profil
        $profil = User::where('email', $pesanan->email)->select('username', 'email', 'telp')->first();
    
        // Inisialisasi $data dengan array kosong sebagai nilai default
        $data = [];
    
        // Jika profil ditemukan, isi data dengan informasi dari pesanan dan profil
        if ($profil) {
            $data = [
            
       
                'nama' => $profil->username ?? '', // Pastikan untuk menambahkan null coalescing operator untuk mencegah kesalahan jika username tidak tersedia
                            
                         
                'email' => $profil->email ?? '', // Sama seperti sebelumnya
            
                'no_tlp' => $profil->telp ?? '', // Sama seperti sebelumnya                
                'tanggal_awal' => $pesanan->tanggal_awal,
                'tanggal_akhir' => $pesanan->tanggal_akhir,
                'fasilitas' => $pesanan->fasilitas,
                'metode_pembayaran' => $pesanan->metode_pembayaran,
            ];
        }
    
        // Menampilkan halaman detail pesanan dengan informasi profil
        return view('user.pesanan', ['data' => $data]);
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

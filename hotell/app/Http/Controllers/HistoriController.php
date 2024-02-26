<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $query = DB::table('rooms')
            ->join('pesanan', 'rooms.id', '=', 'pesanan.roooms_id')
            ->join('kategori', 'kategori.id', '=', 'rooms.kategori_id')
            ->select(
                'pesanan.id',
                'pesanan.harga_pesanan',
                'rooms.nama_kamar',
                'rooms.path_kamar',
                'rooms.status',
                'kategori.nama_kategori',
                DB::raw('rooms.id AS id_kamar')
            )
            ->where(
                'pesanan.email', $user->email
            );
        $pesanan = $query->get();
        // dd($pesanan);
        return view('user.histori', compact('pesanan', 'user'));
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

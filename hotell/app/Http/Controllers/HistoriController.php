<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ulasan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = Auth::id();
        $users = User::find($userID);
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
                'pesanan.adaulasan',
                DB::raw('rooms.id AS id_kamar')
            )
            ->where(
                'pesanan.email',
                $user->email
            );
        $pesanan = $query->get();
        // dd($pesanan);
        return view('user.histori', compact('pesanan', 'user', 'users', 'userID'));
    }

    /**
     * Show the form for creating a new resource.
     */
        public function create(Request $request)

        {
            //
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ulasan = new Ulasan();
    
        $ulasan->pesanan_id = $request->pesanan_id;
        $ulasan->save();

        $pesanan = Pesanan::find($request->pesanan_id);
        if ($pesanan) {
            $pesanan->adaulasan = true;
            $pesanan->save();
        }
    
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

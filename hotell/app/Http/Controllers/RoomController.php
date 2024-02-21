<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $kamar = Room::all();
        return view("admin.kamar.index", compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view("admin.kamar.create", compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('path_kamar');
        $fileName = Str::random(10) . '.' .  $file->getClientOriginalExtension();
        $file->storeAs('public/kamar', $fileName);

        Room::create([
            "path_kamar" => $fileName,
            "nama_kamar" => $request->nama_kamar,
            "deskripsi"=> $request->deskripsi,
            "harga"=> $request->harga,
            "kategori_id"=> $request->kategori_id,
        ]);

        return redirect()->route('room')->with("success", "Product data added successfully!");
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

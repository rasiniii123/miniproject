<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.ulasan');
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
        {
            // Validasi data ulasan
            $validatedData = $request->validate([
                'rating' => 'required|integer|min:1|max:5',
                'ulasan' => 'required|string',
                'produk_id' => 'required|exists:produk,id',
                'user_id' => 'required|exists:users,id',
            ]);

            // Simpan ulasan ke dalam database
            // Contoh:
            $Ulasan = new Ulasan();
            $Ulasan->rating = $validatedData['rating'];
             $Ulasan->ulasan = $validatedData['ulasan'];
             $Ulasan->produk_id = $validatedData['produk_id'];
            $Ulasan->user_id = $validatedData['user_id'];
             $Ulasan->save();

             return redirect()->route('histori')->with("success", "Product data added successfully!");
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

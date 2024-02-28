<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ulasan;
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
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'rating' => 'required|integer|min:1|max:5',
        'ulasan' => 'required|string|max:255',
        'pesanan_id' => 'required|exists:pesanan,id',
        'user_id' => 'required|exists:users,id',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }







    // Buat ulasan baru atau perbarui jika sudah ada
    Ulasan::updateOrCreate(
        ['pesanan_id' => $request->pesanan_id], // Jika ulasan untuk pesanan ini sudah ada, perbarui, jika tidak, buat baru
        [
            'rating' => $request->rating,
            'ulasan' => $request->ulasan,
            'user_id' => $request->user_id,
        ]
    );

    // Redirect ke halaman detail kamar dengan ID kamar yang sesuai
    return redirect()->route('detail.index', ['id' => $request->pesanan_id])->with("success", "Review data added successfully!");
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

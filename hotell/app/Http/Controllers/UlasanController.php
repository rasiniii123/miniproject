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


        // Validate the request data
        // dd($request);
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'ulasan' => 'required|string',
            'pesanan_id' => 'required|exists:pesanan,id', // Assuming pesanan_id is the correct field name
            'user_id' => 'required|exists:users,id',
        ]);

        // Create a new Ulasan instance
        $ulasan = new Ulasan();
        $ulasan->rating = $validatedData['rating'];
        $ulasan->ulasan = $validatedData['ulasan'];
        $ulasan->pesanan_id = $validatedData['pesanan_id'];
        $ulasan->user_id = $validatedData['user_id'];

        // Save the Ulasan instance to the database
        $ulasan->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Ulasan berhasil disimpan.');
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

<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
            'rating' => 'required|numeric',
            'ulasan' => 'required|string',
            'pesanan_id' => 'required|exists:pesanan,id',
            'user_id' => 'required|exists:users,id',
        ]);
    
        try {
            $semuaKamar = Room::all();

            // Simpan ulasan ke dalam database
            foreach ($semuaKamar as $kamar) {
            $ulasan = new Ulasan;
            $ulasan->rating = $validatedData['rating'];
            $ulasan->ulasan = $validatedData['ulasan'];
            $ulasan->pesanan_id = $validatedData['pesanan_id'];
            $ulasan->user_id = $validatedData['user_id'];
            $ulasan->save();
            }
            // Jika penyimpanan berhasil, arahkan ke halaman detail
            return Redirect::route('detail.index', ['id' => $validatedData['pesanan_id']])
                ->with('success', 'Ulasan berhasil disimpan');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, tangani dengan memberikan pesan kesalahan
            return response()->json(['error' => $e->getMessage()], 500);
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

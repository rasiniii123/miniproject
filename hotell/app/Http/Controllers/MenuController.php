<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Room;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $menu = Room::all();
        $minPrice = $request->input('minPrice', 0);
        $maxPrice = $request->input('maxPrice', PHP_INT_MAX);

        // Ambil data kamar sesuai dengan rentang harga yang dipilih
        $menu = Room::whereBetween('harga', [$minPrice, $maxPrice])->get();

        return view('user.menu', compact('menu', 'minPrice', 'maxPrice'));
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
         $validatedData = $request->validate([
             'room_id' => 'required',
             'path_kamar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'nama_kamar' => 'required',
             'deskripsi' => 'required',
             'harga' => 'required|numeric',
         ]);

         if ($request->hasFile('path_kamar')) {
             $image = $request->file('path_kamar');
             $imageName = time() . '.' . $image->getClientOriginalExtension();
             $image->storeAs('public/kamar', $imageName);

             Room::create([
                 'room_id' => $validatedData['room_id'],
                 'path_kamar' => 'kamar/' . $imageName,
                 'nama_kamar' => $validatedData['nama_kamar'],
                 'deskripsi' => $validatedData['deskripsi'],
                 'harga' => $validatedData['harga'],
             ]);
            // Redirect pengguna ke halaman yang sesuai atau berikan pesan sukses
            return redirect()->route('rooms.index')->with('success', 'Room berhasil ditambahkan.');
        }

        // Jika tidak ada file gambar diunggah, berikan pesan kesalahan
        return back()->with('error', 'Gagal menambahkan room. Harap unggah file gambar.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255', // Tambahkan aturan lain sesuai kebutuhan
        ], [
            'nama_kategori.required' => 'The Category Name column is mandatory.',
            // 'nama_kategori.string' => 'Category Name must be text.',
        ]);

        Kategori::create($request->all());
        return redirect()->route('kategori')->with("success", "Category data added successfully!");
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
        return view('admin.kategori.edit');
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
        $kategori = kategori::find($id);
        try {
            //code...
            $kategori->delete();
            return redirect()->route("kategori")->with("success", "Category data has been successfully deleted!");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('kategori')->with("error", "Failed to delete because category data is in use!");
        }
    }
}

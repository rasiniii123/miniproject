<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Room;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user();
        $query = DB::table('rooms')
            ->join('pesanan', 'rooms.id', '=', 'pesanan.roooms_id')
            ->select(
                'pesanan.roooms_id',
                'pesanan.tanggal_akhir',
            )
            ->where(
                'rooms.status', 'booked'
            );
        $datapesanan = $query->get();
        $pesanan = [];
        foreach ($datapesanan as $value) {
            $pesanan[$value->roooms_id] = $value->tanggal_akhir;
        }
        $kamar = Room::all();
        // dd($datapesanan);
        $userID = Auth::id();
        $users = User::find($userID);
        return view("admin.kamar.index", compact('kamar', 'pesanan','users','userID'));
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
        $request->validate([
            'nama_kamar' => 'required',
            'deskripsi' => 'required',
            'path_kamar' => 'required|image|mimes:jpeg,png,jpg|max:10048',
            'kategori_id' => 'required',
            'harga' => 'required|numeric',
        ], [
            'nama_kamar.required' => 'Room name is required.',
            'deskripsi.required' => 'Room description is required.',
            'path_kamar.required' => 'Room image is required.',
            'path_kamar.image' => 'The uploaded file must be an image.',
            'path_kamar.mimes' => 'The image must be in jpeg, png, or jpg format.',
            'path_kamar.max' => 'The image size must not exceed 10MB.',
            'kategori_id.required' => 'Room category is required.',
            'harga.required' => 'Room price is required.',
            'harga.numeric' => 'Room price must be a number.',
        ]);

        $file = $request->file('path_kamar');
        $fileName = Str::random(10) . '.' .  $file->getClientOriginalExtension();
        $file->storeAs('public/kamar', $fileName);

        Room::create([
            "path_kamar" => $fileName,
            "nama_kamar" => $request->nama_kamar,
            "deskripsi" => $request->deskripsi,
            "harga" => $request->harga,
            "kategori_id" => $request->kategori_id,
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
        $kategori = Kategori::all();
        $kamar = Room::findOrFail($id);
        return view('admin.kamar.edit', compact('kamar', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kamar' => 'required',
            'deskripsi' => 'required',
            'path_kamar' => 'required|image|mimes:jpeg,png,jpg|max:10048',
            'kategori_id' => 'required',
            'harga' => 'required|numeric',
        ], [
            'nama_kamar.required' => 'Room name is required.',
            'deskripsi.required' => 'Room description is required.',
            'path_kamar.required' => 'Room image is required.',
            'path_kamar.image' => 'The uploaded file must be an image.',
            'path_kamar.mimes' => 'The image must be in jpeg, png, or jpg format.',
            'path_kamar.max' => 'The image size must not exceed 10MB.',
            'kategori_id.required' => 'Room category is required.',
            'harga.required' => 'Room price is required.',
            'harga.numeric' => 'Room price must be a number.',
        ]);

        $produk = Room::find($id);
        $existingimage = $produk->path_produk;

        $produk->update([
            'nama_kamar' => $request->nama_kamar,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'kategori_id' => $request->kategori_id,
        ]);

        if ($request->hasFile('path_kamar')) {
            $file = $request->file('path_kamar');
            $fileName = Str::random('10') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/kamar'), $fileName);

            $produk->update(['path_kamar' => $fileName]);

            if ($existingimage) {
                Storage::delete('path_kamar/' . $existingimage);
            }
        }

        return redirect()->route('room')->with("success", "Room data updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kamar = Room::findOrfail($id);
        // return dd($kamar);

        if ($kamar) {
            $path_buku = $kamar->path_kamar;
            $path = public_path($path_buku);

            // return dd($path);

            if (File::exists($path)) {
                File::delete($path);
            }

            $kamar->delete();

            return redirect()->route("room")->with("success", "Data produk berhasil dihapus!");
        }

        return redirect()->route("room")->with("warning", "Produk not found or already deleted.");
    }
}

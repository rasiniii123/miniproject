<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::orderBy('id', 'desc')->get();
        return view('semiRoom.Room', compact('rooms'));
    }


    public function create()
    {
        return view('semiRoom.create'); // Ubah ke tampilan rooms.create
    }

    public function store(Request $request)
{
    $request->validate([
        'alamat' => 'required|string',
        'harga_permalam' => 'required|numeric',
        'type_kamar' => 'required|string',
        'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk setiap file gambar
    ]);

    $imagePaths = [];

    // Jika ada gambar yang diunggah
    if ($request->hasFile('foto')) {
        foreach ($request->file('foto') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $imagePaths[] = 'images/' . $imageName; // Store the path to the image
        }
    }

    // Create a new room record with the image paths
    $room = new Room([
        'alamat' => $request->alamat,
        'harga_permalam' => $request->harga_permalam,
        'type_kamar' => $request->type_kamar,
        // Convert the array of image paths into a comma-separated string
        'foto' => implode(',', $imagePaths),
    ]);
    $room->save();

    return redirect()->route('rooms.index')
        ->with('success', 'Room created successfully.');
}

    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'alamat' => 'required|string',
            'harga_permalam' => 'required|numeric',
            'type_kamar' => 'required|string',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk gambar (opsional)
        ]);

        // Jika ada gambar yang diunggah
        if ($request->hasFile('foto')) {
            // Menghapus gambar lama
            $oldImage = public_path('images').'/'.$room->foto;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            // Menyimpan gambar baru
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $imageName);
            $room->foto = $imageName;
        }

        // Memperbarui informasi kamar
        $room->alamat = $request->alamat;
        $room->harga_permalam = $request->harga_permalam;
        $room->type_kamar = $request->type_kamar;
        $room->keterangan = $request->keterangan;
        $room->fasilitas = $request->fasilitas;
        $room->save();

        return redirect()->route('rooms.index')
            ->with('success', 'Room updated successfully.');
    }

    public function destroy(Room $room)
{
    // Hapus gambar terkait jika ada
    if ($room->foto) {
        $imagePath = public_path('images').'/'.$room->foto;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Hapus data kamar dari database
    $room->delete();

    return redirect()->route('rooms.index')
        ->with('success', 'Room deleted successfully.');
}

}

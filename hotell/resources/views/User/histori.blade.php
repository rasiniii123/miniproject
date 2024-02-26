@extends('layouts.yss');
@section('content')
    
    <style>
        .gambar-kamar {
            max-width: 100px;
            /* Atur lebar maksimum gambar */
            max-height: 100px;
            /* Atur tinggi maksimum gambar */
        }

        .status-terisi {
            background-color: #FAF2DF;
            /* Warna latar belakang */
            color: #FFBF43;
            /* Warna teks */
            padding: 5px 40px;
            /* Ukuran padding (atas/bawah, kiri/kanan) */
            border-radius: 20px;
            /* Menjadikan sudut elemen membulat */
            display: inline-block;
            /* Menjadikan elemen sebagai blok yang memungkinkan pengaturan lebar */
        }

        .accept-terisi {
            background-color: #CAFCB9;
            /* Warna latar belakang */
            color: #20EC4D;
            /* Warna teks */
            padding: 5px 40px;
            /* Ukuran padding (atas/bawah, kiri/kanan) */
            border-radius: 20px;
            /* Menjadikan sudut elemen membulat */
            display: inline-block;
            /* Menjadikan elemen sebagai blok yang memungkinkan pengaturan lebar */
        }

        .reject-terisi {
            background-color: #F0B2B2;
            /* Warna latar belakang */
            color: #F02020;
            /* Warna teks */
            padding: 5px 40px;
            /* Ukuran padding (atas/bawah, kiri/kanan) */
            border-radius: 20px;
            /* Menjadikan sudut elemen membulat */
            display: inline-block;
            /* Menjadikan elemen sebagai blok yang memungkinkan pengaturan lebar */
        }
    </style>
    <h2 style="text-align: center; font-weight:bold;">HISTORY</h2>
    <table class="table" style="margin-top: 50px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto Kamar</th>
                <th scope="col">Nama Kamar</th>
                <th scope="col">KAtegori</th>
                <th scope="col">Status</th>
                <th scope="col">Total</th>
                <th scope="col">Ulasan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesanan as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/kamar/' . $item->path_kamar) }}" alt="Foto Kamar 1"
                            class="gambar-kamar">
                    </td>
                    <td>{{ $item->nama_kamar }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td><span class="accept-terisi">{{ $item->status }}</span></td>
                    <td>Rp {{ number_format($item->harga_pesanan, 0, ',', '.') }}</td>
                    <td>
                        {{-- <a href="{{ route('ulasan', ['id_user' => $user->id, 'id_kamar' => $item->id_kamar]) }}"> --}}
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $item->id }}">
                            Tambah Ulasan
                        </button>
                        {{-- </a> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Ulasan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form untuk tambah ulasan -->
                        <form>
                            <div class="mb-3">
                                <label for="ulasan" class="form-label">Ulasan Anda:</label>
                                <textarea class="form-control" id="ulasan" rows="3"></textarea>
                            </div>
                            <!-- Tambahan elemen form lainnya bisa ditambahkan di sini -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan Ulasan</button>
                    </div>
                </div>
            </div>
        </div>
@endsection

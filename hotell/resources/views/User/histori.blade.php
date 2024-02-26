@extends('layouts.yss')

@section('content')

<style>
    .gambar-kamar {
        max-width: 100px;
        max-height: 100px;
    }

    .status-terisi {
        background-color: #FAF2DF;
        color: #FFBF43;
        padding: 5px 40px;
        border-radius: 20px;
        display: inline-block;
    }

    .accept-terisi {
        background-color: #CAFCB9;
        color: #20EC4D;
        padding: 5px 40px;
        border-radius: 20px;
        display: inline-block;
    }

    .reject-terisi {
        background-color: #F0B2B2;
        color: #F02020;
        padding: 5px 40px;
        border-radius: 20px;
        display: inline-block;
    }
</style>

<h2 style="text-align: center; font-weight:bold;">HISTORY</h2>

<table class="table" style="margin-top: 50px;">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Foto Kamar</th>
            <th scope="col">Nama Kamar</th>
            <th scope="col">Kategori</th>
            <th scope="col">Status</th>
            <th scope="col">Total</th>
            <th scope="col">Ulasan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pesanan as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td><img src="{{ asset('storage/kamar/' . $item->path_kamar) }}" alt="Foto Kamar" class="gambar-kamar"></td>
            <td>{{ $item->nama_kamar }}</td>
            <td>{{ $item->nama_kategori }}</td>
            <td><span class="accept-terisi">{{ $item->status }}</span></td>
            <td>Rp {{ number_format($item->harga_pesanan, 0, ',', '.') }}</td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                    Tambah Ulasan
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Ulasan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form untuk tambah ulasan -->
                                <form id="commentForm" method="POST" action="{{ route('ulasan.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="rating">
                                            <input type="radio" name="rating" id="star5" value="5">
                                            <label for="star5">&#9733;</label>
                                            <input type="radio" name="rating" id="star4" value="4">
                                            <label for="star4">&#9733;</label>
                                            <input type="radio" name="rating" id="star3" value="3">
                                            <label for="star3">&#9733;</label>
                                            <input type="radio" name="rating" id="star2" value="2">
                                            <label for="star2">&#9733;</label>
                                            <input type="radio" name="rating" id="star1" value="1">
                                            <label for="star1">&#9733;</label>
                                        </div>
                                        <div>
                                            <label for="commentInput">Your Comment</label>
                                            <textarea class="form-control" id="commentInput" rows="3" name="ulasan"></textarea>
                                            <input type="hidden" name="pesanan_id" value="{{ $item->id }}">
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

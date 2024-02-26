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
    .rating {
    display: flex;
}

.star-label {
    color: #ccc; /* Warna default untuk bintang tidak dipilih */
    font-size: 24px;
    cursor: pointer;
}

input[type="radio"] {
    display: none; /* Sembunyikan input radio */
}

/* Warna kuning untuk bintang yang dipilih */
input[type="radio"]:checked ~ .star-label {
    color: #ffc107;
}

/* Warna kuning untuk bintang yang dipilih atau sedang dihover */
.star-label:hover,
input[type="radio"]:hover ~ .star-label:checked ~ .star-label {
    color: #ffc107;
}

/* Warna abu-abu untuk bintang yang belum dipilih */
.star-label:hover ~ .star-label,
input[type="radio"]:hover ~ .star-label {
    color: #ccc;
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $item->id }}">
                    Tambah Ulasan
                </button>

                <!-- Modal -->
                <div class="modal" style="z-index: 100000000" id="exampleModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Ulasan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Form untuk tambah ulasan -->
                                <form id="commentForm-{{ $item->id }}" method="POST" action="{{ route('ulasan.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="rating">
                                            <input type="radio" name="rating-{{ $item->id }}" id="star5-{{ $item->id }}" value="5">
                                            <label for="star5-{{ $item->id }}" class="star-label">&#9733;</label>
                                            <!-- Sisipkan input radio lainnya di sini -->
                                        </div>
                                    </div>
                                    <label for="commentInput-{{ $item->id }}">Your Comment</label>
                                    <textarea class="form-control" id="commentInput-{{ $item->id }}" rows="3" name="ulasan-{{ $item->id }}"></textarea>
                                    <input type="hidden" name="pesanan_id" value="{{ $item->id }}">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

        @push('scripts')
        <script>
            $(document).ready(function(){
                // Prevent the default form submission
                $("form#commentForm-{{ $item->id }}").submit(function(event){
                    event.preventDefault();

                    // AJAX form submission logic
                    $.ajax({
                        url: $(this).attr('action'), // URL from the form's action attribute
                        method: 'POST', // HTTP method set to 'POST'
                        data: $(this).serialize(), // Serialize form data
                        success: function(response){
                            // Show a success message
                            alert('Ulasan berhasil disimpan!');

                            // Redirect to the detail page
                            window.location.href = "{{ route('detail.index', ['id' => $item->id]) }}"; // Assuming this is the correct route
                        },
                        error: function(xhr, status, error) {
                            // Show an error message
                            alert('Terjadi kesalahan saat menyimpan ulasan: ' + error);
                        }
                    });
                });
            });
        </script>
        @endpush

        @endforeach
    </tbody>
</table>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5vIOIj46qvYIu1z9r1T+rPqLWj+2jz5qmi1gg" crossorigin="anonymous"></script>


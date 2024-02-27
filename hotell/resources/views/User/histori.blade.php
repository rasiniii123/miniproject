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
    .star-label.checked {
        color: yellow; /* Atur warna kuning untuk bintang yang dipilih */
    }
    .rating {
    display: inline-block;
}

.rating input{
    display:none;
}

.rating label{
    font-size: 24px;
    color: #dddddd
    cursor: pointer;
}

.rating label:hover,
.rating label:hover~label,
.rating input:checked~label{
    color: #ffcc00
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
                                        <div class="rating" style="rotate: 180deg">
                                            <input type="radio" name="rating" class="star-rating" id="star5" value="5">
                                            <label for="star5" class="star-label" style="rotate: 35deg">&#9733;</label>
                                            <input type="radio" name="rating" class="star-rating" id="star4" value="4" >
                                            <label for="star4" class="star-label" style="rotate: 35deg">&#9733;</label>
                                            <input type="radio" name="rating" class="star-rating" id="star3" value="3" >
                                            <label for="star3" class="star-label" style="rotate: 35deg">&#9733;</label>
                                            <input type="radio" name="rating" class="star-rating" id="star2" value="2" >
                                            <label for="star2" class="star-label" style="rotate: 35deg">&#9733;</label>
                                            <input type="radio" name="rating" class="star-rating" id="star1" value="1" >
                                            <label for="star1" class="star-label" style="rotate: 35deg">&#9733;</label>
                                        </div>
                                    </div>
                                    <label for="commentInput-{{ $item->id }}">Your Comment</label>
                                    <textarea class="form-control" id="commentInput-{{ $item->id }}" rows="3" name="ulasan"></textarea>
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
                        method: 'GET', // HTTP method set to 'POST'
                        data: $(this).serialize(), // Serialize form data
                        success: function(response){
                            // Show a success message
                            alert('Ulasan berhasil disimpan!');

                            // Redirect to the detail page
                            window.location.href = "{{ route('ulasan', ['id' => $item->id]) }}"; // Assuming this is the correct route
                        },
                        error: function(xhr, status, error) {
                            // Show an error message
                            alert('Terjadi kesalahan saat menyimpan ulasan: ' + error);
                        }
                    });
                });
            });
        </script>
    <script>
       const ratingInputs = document.querySelectorAll('.rating input');

       ratingInputs.forEach(input =>{
        input.addEventListener('change', (event ) =>);
       });
    </script>

        @endpush
        @endforeach
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5vIOIj46qvYIu1z9r1T+rPqLWj+2jz5qmi1gg" crossorigin="anonymous"></script>
@endsection

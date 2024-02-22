@extends('layouts.yss')
@section('content')
    <div class="main-content container">
        <h1 style="text-transform: uppercase; margin-bottom: 10px">Data Profile Anda</h1>
        <hr>

        <div class="row align-items-center">
            @csrf
            <div class="col-md-4 text-center">
                @if ($user->profile)
                {{-- <img src="{{ asset('storage/' . $user->profile) }}" class="rounded-circle" style="margin-left: 1%; margin-bottom: 12px width: 300%; height: 300px; object-fit: cover; border-radius: 50%;" id="avatarFile"/> --}}
                <img class="rounded-circle" id="avatarPreview" style="margin-left: 1%; margin-bottom: 12px; width: 300px; height: 300px; object-fit: cover;" src="{{ asset('storage/' . $user->profile) }}" alt="" />
                @else
                <img src="{{asset('images/user2.png')}}" class="rounded-circle" style="margin-left: 1%; margin-bottom: 12px width: 300px; height: 300px; object-fit: cover;" id="avatarFile"/>
                @endif
            </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <h4>Nama: {{ $user->username }}</h4>
                        </div>

                        <div class="col-md-12">
                            <h4>Email: {{ $user->email }}</h4>
                        </div>
                        
                        <div class="col-md-12">
                            <h4>No.Telp: {{ $user->telp }}</h4>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <h4>Alamat: {{ $user->address }}</h4>
                        </div>
                        <hr>


                    </div>
                    <div class="col-md-12" style="margin-bottom: 100px;">
                        <button onclick="redirectToProfile()" class="btn btn-secondary btn-lg" style=" margin-left: 10%;">Edit Profile</button>
                        <a href="{{route('dashboard')}}" class="btn btn-danger btn-lg" style="margin-left: 60%;">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        @endsection

    <style>
        /* Styling for form elements */
    .form-container {

        /* Adjust as needed */


    }

    .{
        margin-bottom: 20px;
    }

    .label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #283E58;
        /* Sesuaikan dengan warna teks lainnya di layout */
    }

    .text-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #B3BDC7;
        border-radius: 5px;
        font-size: 16px;
    }

    .submit-button {
        padding: 10px 20px;
        background-color: #3A86FF;
        color: #FFFFFF;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    .vertical-line-right {
        border-right: 2px solid black; /* Garis vertikal di sebelah kanan */
        height: 100px; /* Atur tinggi garis sesuai kebutuhan */
    }
</style>
<script>
    function previewImage() {
        var input = document.getElementById('avatarFile');
        var preview = document.getElementById('avatarPreview');

        if (input.files.length > 0) {
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
                preview.style.borderRadius = '50%'; // Menambahkan gaya border-radius langsung dari JavaScript
                preview.style.width = '240px'; // Menetapkan lebar gambar
                preview.style.height = '240px'; // Menetapkan tinggi gambar
            }

            reader.readAsDataURL(file);

        } else {
            // Jika tidak ada file yang dipilih, tampilkan gambar placeholder atau default
            preview.src = '{{ asset('images/user2.png') }}';
            preview.style.borderRadius = '50%'; // Menambahkan gaya border-radius langsung dari JavaScript
            preview.style.width = '240px'; // Menetapkan lebar gambar
            preview.style.height = '240px'; // Menetapkan tinggi gambar
        }
    }
</script>
<script>
    function redirectToProfile() {
        var userId = "{{ $user->id }}"; // Ambil ID pengguna dari variabel Blade
        window.location.href = "{{ route('profile.edit', ['id' => ':id']) }}".replace(':id', userId);
    }
</script>


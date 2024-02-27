@extends('layouts.yss')
@section('content')
    <div class="main-content container">
        <h1 style="text-transform: uppercase; margin-bottom: 10px">Data Profile Anda</h1>
        <hr>

        <div class="row align-items-center">
            @csrf
            <div class="col-md-4 text-center">
                {{-- <div class="vertical-line-right" style="margin-left: -10px;"></div> <!-- Tambahkan garis vertikal di sini --> --}}
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
                        <hr>
                        <div class="col-md-12">
                            <h4>Email: {{ $user->email }}</h4>
                        </div>
                        @if ($user->telp)
                        <div class="col-md-12">
                            <h4>No.Telp: {{ $user->telp }}</h4>
                        </div>
                        @else
                        <div class="col-md-12">
                            <h4>No.Telp: (Belum diisi)</h4>
                        </div>
                        @endif
                        @if ($user->address)
                        <div class="col-md-12">
                            <h4>Alamat: {{ $user->address }}</h4>
                        </div>
                        @else
                        <div class="col-md-12">
                            <h4>Alamat: (Belum diisi)</h4>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-12" style="margin-bottom: 100px;">
                        <a href="{{ route('profile.edit', ['id' => ':id']) }}" class="btn btn-secondary btn-lg" style=" margin-left: 10%;">Edit Profile</a>
                        <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-danger btn-lg" style="margin-left: 60%;">Kembali</a>                    </div>
                </div>
            </div>
        </div>
        @endsection

    <style>
    .form-container {

    }

    .{
        margin-bottom: 20px;
    }

    .label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #283E58;
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
        border-right: 2px solid black;
        height: 100px;
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
                preview.style.borderRadius = '50%';
                preview.style.width = '240px';
                preview.style.height = '240px';
            }

            reader.readAsDataURL(file);

        } else {
            preview.src = '{{ asset('images/user2.png') }}';
            preview.style.borderRadius = '50%';
            preview.style.width = '240px';
            preview.style.height = '240px';
        }
    }
</script>
<script>
    function redirectToProfile() {
        var userId = "{{ $user->id }}";
        window.location.href = "{{ route('profile.edit', ['id' => ':id']) }}".replace(':id', userId);
    }
</script>


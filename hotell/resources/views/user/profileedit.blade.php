@extends('layouts.yss')

@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            appearance: textfield;
        }
    </style>
    <div class="main-content container">
        <h1 style="text-transform: uppercase; margin-bottom: 10px">Data Profile Anda</h1>
        <hr>
        <div class="row d-flex">
            <div class="col-md-12">
                <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data"
                    class="form-container col-md-12">
                    @csrf
                    @method('PUT')
                    <div class="mx-auto">
                        <input class="d-none" id="avatarFile" type="file" name="profile" accept="image/*"
                            onchange="previewImage()" />
                        <label class="cursor-pointer avatar avatar-5xl"
                            style="margin-left: 30%; margin-bottom: 12px width: 300px; height: 400px; object-fit: cover;"
                            for="avatarFile">
                            @if ($user->profile)
                                <img class="rounded-circle cursor-pointer avatar avatar-5xl" id="avatarPreview"
                                    style="margin-left: 30%; margin-bottom: 12px; width: 300px; height: 300px; object-fit: cover;"
                                    src="{{ asset('storage/' . $user->profile) }}" alt="" />
                            @else
                                <img id="avatarPreview" src="{{ asset('images/user2.png') }}" alt="Default Avatar"
                                    style="margin-left: 30%; margin-bottom: 12px; width: 300px; height: 300px; object-fit: cover;" />
                            @endif
                        </label>
                    </div>

                    {{-- Input fields --}}
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="input-field">
                                <label for="username">Nama:</label>
                                <input type="text" id="username" name="username" class="form-control text-input"
                                    value="{{ Auth::user()->username }}" placeholder="Masukkan nama anda">
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}"
                                    class="form-control text-input" disabled>
                            </div>

                            <div class="input-field">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" class="form-control text-input"
                                    placeholder="Masukkan password baru anda">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-field">
                                <label for="telp">No.Telp:</label>
                                <input type="number" id="telp" name="telp" value="{{ Auth::user()->telp }}"
                                    class="form-control text-input" placeholder="Masukkan Nomor telepon anda">
                                @error('telp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="input-field">
                                <label for="address">Alamat:</label>
                                <textarea id="address" name="address" class="form-control text-input" placeholder="Masukkan alamat anda"
                                    rows="5">{{ Auth::user()->address }}</textarea>
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary"> Kembali</a>
                        <button type="submit" class="btn btn-secondary">Simpan perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<style>
    .form-container {}

    .input-field {
        margin-bottom: 20px;
    }

    .input-field label {
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
                preview.style.width = '300px';
                preview.style.height = '300px';
            }

            reader.readAsDataURL(file);

        } else {
            preview.src = '{{ asset('images/user2.png') }}';
            preview.style.borderRadius = '50%';
            preview.style.width = '310px';
            preview.style.height = '310px';
        }
    }
</script>

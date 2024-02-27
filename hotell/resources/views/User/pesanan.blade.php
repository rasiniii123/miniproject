@extends('layouts.yss')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('pesanan.store') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="card card-sm">
                            <div class="card-header">Detail Pesanan</div>
                            <div class="card-body">
                                    <input type="hidden" name="id_kamar" value="{{ $kamar->id }}">
                                    <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">Username:</label>
                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control"
                                                value="{{ auth()->user()->username }}" disabled>
                                            <input type="hidden" name="username" value="{{ auth()->user()->username }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control"
                                                value="{{ auth()->user()->email }}" disabled>
                                            <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="no_tlp" class="col-md-4 col-form-label text-md-right">No Telepon:</label>
                                        <div class="col-md-6">
                                            <input id="no_tlp" type="text" class="form-control"
                                                value="{{ auth()->user()->telp }}" disabled>
                                            <input type="hidden" name="no_tlp" value="{{ auth()->user()->telp }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal_awal" class="col-md-4 col-form-label text-md-right">Tanggal Awal:</label>
                                        <div class="col-md-6">
                                            <input id="tanggal_awal" type="datetime-local" class="form-control  @error('tanggal_awal') is-invalid @enderror" name="tanggal_awal"
                                                value="{{ old('tanggal_awal', $data['tanggal_awal'] ?? '') }}">
                                                @error('tanggal_awal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tanggal_akhir" class="col-md-4 col-form-label text-md-right">Tanggal
                                            Akhir:</label>
                                        <div class="col-md-6">
                                            <input id="tanggal_akhir" type="datetime-local" class="form-control" name="tanggal_akhir"
                                                value="{{ old('tanggal_akhir', $data['tanggal_akhir'] ?? '') }}">
                                                @error('tanggal_akhir')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                        {{-- <div class="form-group row">
                                            <label for="fasilitas" class="col-md-4 col-form-label text-md-right">Fasilitas:</label>
                                            <div class="col-md-6">
                                                <input id="fasilitas" type="text" class="form-control" name="fasilitas"
                                                    value="{{ $data['fasilitas'] ?? '' }}">
                                            </div>
                                        </div> --}}

                                    <div class="form-group row">
                                        <label for="metode_pembayaran" class="col-md-4 col-form-label text-md-right">Metode
                                            Pembayaran:</label>
                                        <div class="col-md-6">
                                            <input id="metode_pembayaran" type="text" class="form-control"
                                                name="metode_pembayaran" value="{{ old('metode_pembayaran', $data['metode_pembayaran'] ?? '') }}">
                                                @error('metode_pembayaran')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="card card-sm">
                            <div class="card-header">Every Where</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('storage/kamar/' . $kamar->path_kamar) }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <span>{{ $kamar->nama_kamar }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Tipe kamar</p>
                                        <strong><span>{{$kamar->kategori->nama_kategori}}</span></strong>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Nomor Kamar</p>
                                        <strong><span>{{ $kamar->id }}</span></strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Harga Kamar :</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>{{ 'Rp ' . number_format($kamar->harga, 0, ',', '.') }}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary col-md-12">
                                            Pesan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

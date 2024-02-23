@extends('layouts.yss')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-sm">
                    <div class="card-header">Detail Pesanan</div>

                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username:</label>
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username"
                                        value="{{ auth()->user()->username }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ auth()->user()->email }}" disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_tlp" class="col-md-4 col-form-label text-md-right">No Telepon:</label>
                                <div class="col-md-6">
                                    <input id="no_tlp" type="text" class="form-control" name="no_tlp"
                                        value="{{ auth()->user()->telp }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_awal" class="col-md-4 col-form-label text-md-right">Tanggal
                                    Awal:</label>
                                <div class="col-md-6">
                                    <input id="tanggal_awal" type="date" class="form-control" name="tanggal_awal"
                                        value="{{ $data['tanggal_awal'] ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_akhir" class="col-md-4 col-form-label text-md-right">Tanggal
                                    Akhir:</label>
                                <div class="col-md-6">
                                    <input id="tanggal_akhir" type="date" class="form-control" name="tanggal_akhir"
                                        value="{{ $data['tanggal_akhir'] ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fasilitas" class="col-md-4 col-form-label text-md-right">Fasilitas:</label>
                                <div class="col-md-6">
                                    <input id="fasilitas" type="text" class="form-control" name="fasilitas"
                                        value="{{ $data['fasilitas'] ?? '' }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="metode_pembayaran" class="col-md-4 col-form-label text-md-right">Metode
                                    Pembayaran:</label>
                                <div class="col-md-6">
                                    <input id="metode_pembayaran" type="text" class="form-control"
                                        name="metode_pembayaran" value="{{ $data['metode_pembayaran'] ?? '' }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

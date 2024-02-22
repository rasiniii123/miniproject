@extends('layouts.yss');
@section('content')
    ;
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
                                    @isset($data['username'])
                                        <input id="username" type="text" class="form-control" name="username"
                                            value="{{ $data['username'] }}" disabled>
                                    @else
                                        <input id="username" type="text" class="form-control" name="username" value=""
                                            disabled>
                                    @endisset
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                                <div class="col-md-6">
                                    @isset($data['email'])
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ $data['email'] }}" disabled>
                                    @else
                                        <input id="email" type="email" class="form-control" name="email" value=""
                                            disabled>
                                    @endisset
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="no_tlp" class="col-md-4 col-form-label text-md-right">No Telepon:</label>

                                <div class="col-md-6">
                                    @isset($data['no_tlp'])
                                        <input id="no_tlp" type="text" class="form-control" name="no_tlp"
                                            value="{{ $data['no_tlp'] }}" disabled>
                                    @else
                                        <input id="no_tlp" type="text" class="form-control" name="no_tlp" value=""
                                            disabled>
                                    @endisset
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_awal" class="col-md-4 col-form-label text-md-right">Tanggal Awal:</label>
                                <div class="col-md-6">
                                    @isset($data['tanggal_awal'])
                                        <input id="tanggal_awal" type="text" class="form-control" name="tanggal_awal"
                                            value="{{ $data['tanggal_awal'] }}">
                                    @else
                                        <input id="tanggal_awal" type="text" class="form-control" name="tanggal_awal" value="">
                                    @endisset
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="tanggal_akhir" class="col-md-4 col-form-label text-md-right">Tanggal Akhir:</label>
                                <div class="col-md-6">
                                    @isset($data['tanggal_akhir'])
                                        <input id="tanggal_akhir" type="text" class="form-control" name="tanggal_akhir"
                                            value="{{ $data['tanggal_akhir'] }}">
                                    @else
                                        <input id="tanggal_akhir" type="text" class="form-control" name="tanggal_akhir" value="">
                                    @endisset
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="fasilitas" class="col-md-4 col-form-label text-md-right">Fasilitas:</label>
                                <div class="col-md-6">
                                    @isset($data['fasilitas'])
                                        <input id="fasilitas" type="text" class="form-control" name="fasilitas"
                                            value="{{ $data['fasilitas'] }}">
                                    @else
                                        <input id="fasilitas" type="text" class="form-control" name="fasilitas" value="">
                                    @endisset
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="metode_pembayaran" class="col-md-4 col-form-label text-md-right">Metode Pembayaran:</label>
                                <div class="col-md-6">
                                    @isset($data['metode_pembayaran'])
                                        <input id="metode_pembayaran" type="text" class="form-control" name="metode_pembayaran"
                                            value="{{ $data['metode_pembayaran'] }}">
                                    @else
                                        <input id="metode_pembayaran" type="text" class="form-control" name="metode_pembayaran" value="">
                                    @endisset
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

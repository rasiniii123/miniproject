@extends('layouts.yss')

@section('content')
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body,
        html {
            overflow-x: hidden;
        }
    </style>
    <div class="main-content">
        <div class="page-content">
            <div style="display: flex; justify-content: center;">
                <section class="section-home-about bg-white" style="margin-top: 1%; border: 1px solid #ccc; padding: 20px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 " style="margin-top: 50px;">
                                <div class="hotel" id="room_id{{ $room->id }}">
                                    <!-- Konten di sini -->
                                    <div class="menu-item"
                                        style="display: flex; flex-direction: column; align-items: flex-start;">
                                        <div
                                            style="color: black; font-size: 30px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; text-align: right; margin-left: 300px; margin-top:-50;">
                                            {{ $room->nama_kamar }}
                                        </div>
                                        <!-- Pindahkan gambar di sini -->
                                        <img src="{{ asset('storage/kamar/' . $room->path_kamar) }}"
                                            style="width: 700px; height:300px;  margin-bottom: 20px; margin-left: 80px; margin-top:20px;">
                                        <!-- Tambahkan deskripsi dan informasi lainnya -->
                                        <div
                                            style="margin-left: 100px; font-family: Poppins; width: 750px; word-wrap: break-word; overflow-x: auto;">
                                            <div style="display: flex; align-items: center; margin-top: 20px;">
                                                <img src="/images/uang.png" alt="Gambar Baru"
                                                    style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                <div class="harga"
                                                    style="font-family: Poppins; font-size: 18px; margin-left:10px;">Rp
                                                    {{ number_format($room->harga, 0, ',', '.') }} <span
                                                        style="color: #D88F00;">/Malam</span></div>
                                            </div>
                                            <div style="margin-top: 20px;"></div> <!-- Jarak tambahan -->
                                            <div style="margin-top: 20px; display: flex; justify-content: flex-end;">
                                                <a href="{{ route('pesanan', ['id' => $room->id]) }}"
                                                    class="btn btn-primary float-end"
                                                    style="background-color: #283E58; display: inline-block; margin-right: 580px;">PESAN
                                                    SEKARANG</a>
                                            </div>
                                            <hr style="margin-top: 50px; margin-right:20px;">
                                            <div
                                                style="margin-left: -130px; font-family: Poppins; width: 750px; word-wrap: break-word; margin-top:30; overflow-x: auto;">
                                                <h3
                                                    style="font-size: 24px; font-weight: bold; margin-bottom: 10px; margin-top:30px; margin-right: 500px; text-align: right;">
                                                    Keterangan</h3>
                                                <p style="font-size: 18px; margin-left: 140px;">{{ $room->deskripsi }}</p>
                                            </div>
                                            <!-- Bagian ulasan -->
                                            <hr style="margin-top: 50px; margin-right:20px;">
                                            <div
                                                style="margin-left: -130px; font-family: Poppins; width: 750px; word-wrap: break-word; margin-top:30; overflow-x: auto;">
                                                <h3
                                                    style="font-size: 24px; font-weight: bold; margin-bottom: 10px; margin-top:30px; margin-right: 500px; text-align: right;">
                                                    Ulasan</h3>
                                                @foreach ($ulasans as $ulasan)
                                                    <div>
                                                        <p style="font-size: 18px; margin-left: 140px;">Rating:
                                                            {{ $ulasan->rating }}</p>
                                                        <p style="font-size: 18px; margin-left: 140px;">Ulasan:
                                                            {{ $ulasan->ulasan }}</p>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="preloader">
                        <span class="preloader-dot"></span>
                    </div>
                </section>
            @endsection

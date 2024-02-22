@extends('layouts.yss')

@section('content')
    <section class="section-home-about bg-white" style="margin-top: 1%">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center" style="margin-top: -50px;">
                    @foreach ($details as $room)
                    <div class="hotel" id="room_id{{ $room->id }}">
                        <div class="menu-item" style="display: flex; flex-direction: column; align-items: flex-start;">
                            <div
                                style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                {{ $room->nama_kamar }}
                            </div>
                            <div style="display: flex; align-items: center;">
                                <img src="{{ asset('storage/kamar/'.$room->path_kamar) }}"
                                    style="max-width: 250px; max-height: 150px;">
                                <div style="margin-left: 15px; font-family: Poppins; width: 750px; word-wrap: break-word;">
                                    <p style="font-size: 18px;">{{ $room->deskripsi }}</p>
                                    <div style="display: flex; align-items: center; margin-top: 20px;">
                                        <img src="images/uang.png" alt="Gambar Baru"
                                            style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                        <div class="harga" style="font-family: Poppins; font-size: 18px;">Rp
                                            {{ number_format($room->harga, 0, ',', '.') }} <span style="color: #D88F00;">/Malam</span></div>
                                    </div>
                                    <div style="margin-top: 15px;"></div> <!-- Jarak tambahan -->
                                    <div style="margin-top: 10px; display: flex; justify-content: flex-end;">
                                        <a href="{{ route('detail.index', ['id' => $room->id]) }}" class="btn btn-primary btn-lg float-end" style="background-color: #283E58; margin-right: 50px;">DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambahkan elemen HTML lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>

    <script>
        function handleButtonClick(detailUrl) {
            window.location.href = detailUrl;
        }
    </script>
@endsection

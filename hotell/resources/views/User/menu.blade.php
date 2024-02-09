@extends('layouts.yss')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <!-- Konten yang ingin ditampilkan -->
            <div class="scrollable-container">
                <div style="color: #F43131; font-size: 32px; font-family: Poppins; font-weight: 600; word-wrap: break-word">RESET</div>
                <div style="color: black; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word">HARGA</div>
                <div style="color: black; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word; margin-left: 20px; margin-top: 20px;">HARGA</div>
                <input type="checkbox" id="harga1" name="harga1" value="Rp. 0 - Rp. 500.000" style="margin-top: 10px;">
                <label for="harga1" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 0 - Rp. 500.000</label>

                <input type="checkbox" id="harga2" name="harga2" value="Rp. 500.000 - Rp. 2.000.000" style="margin-top: 10px;">
                <label for="harga2" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 500.000 - Rp. 2.000.000</label>

                <input type="checkbox" id="harga3" name="harga3" value="Rp. 2.000.000 - Rp. 3.000.000" style="margin-top: 10px;">
                <label for="harga3" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 15px;">Rp. 2.000.000 - Rp. 3.000.000</label>
                <input type="checkbox" id="harga3" name="harga3" value="Rp. 2.000.000 - Rp. 3.000.000" style="margin-top: 10px;">
                <label for="harga3" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 3.000.000 - Rp. 4.500.000</label>
                <input type="checkbox" id="harga3" name="harga3" value="Rp. 2.000.000 - Rp. 3.000.000" style="margin-top: 10px;">
                <label for="harga3" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 4.500.000 - Rp. 6.000.000</label>
                <input type="checkbox" id="harga3" name="harga3" value="Rp. 2.000.000 - Rp. 3.000.000" style="margin-top: 10px;">
                <label for="harga3" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 6.000.000 - Rp. 7.000.000</label>
                <input type="checkbox" id="harga3" name="harga3" value="Rp. 2.000.000 - Rp. 3.000.000" style="margin-top: 10px;">
                <label for="harga3" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 7.000.000 - Rp. 10.000.000</label>

                <!-- Tambahkan lebih banyak input checkbox dan label sesuai kebutuhan -->
                <!-- Contoh: -->
                <!-- <input type="checkbox" id="harga2" name="harga2" value="Rp. 500.000 - Rp. 2.000.000">
                <label for="harga2">Rp. 500.000 - Rp. 2.000.000</label><br> -->
            </div>


        </div>
    </div>
@endsection

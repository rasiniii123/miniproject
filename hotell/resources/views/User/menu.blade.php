@extends('layouts.yss')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="page-content" style="display: flex;">
                <!-- Menu content -->
                <div style="width: 350px; padding-right: 10px;">
                    <div style="color: black; font-size: 20px; font-family: Poppins; font-weight: 600; word-wrap: break-word;">MALANG</div>
                    <div style="color: #F43131; font-size: 20px; font-family: Poppins; font-weight: 600; word-wrap: break-word;">RESET</div>
                    <div style="display: flex; flex-direction: column; padding: 10px;">
                        <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: bold; word-wrap: break-word; margin-top: 20px;">HARGA</div>
                        <input type="checkbox" id="harga1" name="harga1" value="Rp. 0 - Rp. 500.000" style="margin-top: 10px;">
                        <label for="harga1" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 0 - Rp. 500.000</label>
                        <input type="checkbox" id="harga2" name="harga2" value="Rp. 500.000 - Rp. 2.000.000" style="margin-top: 10px;">
                        <label for="harga2" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 500.000 - Rp. 2.000.000</label>
                        <input type="checkbox" id="harga3" name="harga3" value="Rp. 2.000.000 - Rp. 3.000.000" style="margin-top: 10px;">
                        <label for="harga3" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 15px;">Rp. 2.000.000 - Rp. 3.000.000</label>
                        <input type="checkbox" id="harga4" name="harga4" value="Rp. 3.000.000 - Rp. 4.500.000" style="margin-top: 10px;">
                        <label for="harga4" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 3.000.000 - Rp. 4.500.000</label>
                        <input type="checkbox" id="harga5" name="harga5" value="Rp. 4.500.000 - Rp. 6.000.000" style="margin-top: 10px;">
                        <label for="harga5" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 4.500.000 - Rp. 6.000.000</label>
                        <input type="checkbox" id="harga6" name="harga6" value="Rp. 6.000.000 - Rp. 7.000.000" style="margin-top: 10px;">
                        <label for="harga6" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 6.000.000 - Rp. 7.000.000</label>
                        <input type="checkbox" id="harga7" name="harga7" value="Rp. 7.000.000 - Rp. 10.000.000" style="margin-top: 10px;">
                        <label for="harga7" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 10px;">Rp. 7.000.000 - Rp. 10.000.000</label>
                        <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: 500; word-wrap: break-word; margin-left: 20px; margin-top: 20px;">Show More+</div>
                        <div style="border-bottom: 1px solid black; width: 90%; margin-left: 20px; margin-top: 10px;"></div>
                        <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: bold; word-wrap: break-word; margin-left: 20px; margin-top: 20px;">PREFENSI TETAP</div>
                        <input type="checkbox" id="bisnis" name="bisnis" value="bisnis" style="margin-top: 10px; font-size: 14px;">
                        <label for="bisnis" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 15px;">BISNIS</label>
                        <input type="checkbox" id="keluarga" name="keluarga" value="keluarga" style="margin-top: 10px; font-size: 14px;">
                        <label for="keluarga" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">KELUARGA</label>
                        <input type="checkbox" id="pasangan" name="pasangan" value="pasangan" style="margin-top: 10px; font-size: 14px;">
                        <label for="pasangan" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">PASANGAN</label>
                        <div style="border-bottom: 1px solid black; width: 90%; margin-left: 20px; margin-top: 10px;"></div>
                        <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: bold; word-wrap: break-word; margin-left: 20px; margin-top: 20px;">PREFENSI TETAP</div>
                        <input type="checkbox" id="parkir mobil" name="parkir mobil" value="parkir mobil" style="margin-top: 10px; font-size: 14px;">
                        <label for="parkir mobil" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 15px;">PARKIR MOBIL</label>
                        <input type="checkbox" id="pelayanan" name="pelayanan" value="pelayanan" style="margin-top: 10px; font-size: 14px;">
                        <label for="pelayanan" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">PELAYANAN RUANG</label>
                        <input type="checkbox" id="wifi" name="wifi" value="wifi" style="margin-top: 10px; font-size: 14px;">
                        <label for="wifi" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">FREE WIFI</label>
                        <input type="checkbox" id="tv" name="tv" value="tv" style="margin-top: 10px; font-size: 14px;">
                        <label for="tv" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">TV</label>
                        <input type="checkbox" id="kolam_renang" name="kolam_renang" value="kolam_renang" style="margin-top: 10px; font-size: 14px;">
                        <label for="kolam_renang" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">KOLAM RENANG</label>
                        <input type="checkbox" id="lemari_es" name="lemari_es" value="lemari_es" style="margin-top: 10px; font-size: 14px;">
                        <label for="lemari_es" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">LEMARI ES</label>
                        <div style="border-bottom: 1px solid black; width: 90%; margin-left: 20px; margin-top: 10px;"></div>
                        <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: bold; word-wrap: break-word; margin-left: 20px; margin-top: 20px;">BAYAR DI HOTEL</div>
                        <div style="display: flex; flex-wrap: wrap;">
                            <input type="checkbox" id="parkir_mobil" name="parkir_mobil" value="parkir_mobil" style="margin-top: 10px; font-size: 14px;">
                            <label for="parkir_mobil" style="width: 370px; color: #382E2E; font-size: 15px; font-family: Poppins; font-weight: 400; word-wrap: break-word; margin-left: 20px;">Membuat reservasi untuk menginap di hotel dan membayarnya setibanya di hotel</label>

                        </div>
                        <div style="border-bottom: 1px solid black; width: 90%; margin-left: 20px; margin-top: 10px;"></div>
                    </div>
                    <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: bold; word-wrap: break-word; margin-left: 20px; margin-top: 20px;">PREFENSI TETAP</div>
                    <input type="checkbox" id="bisnis" name="bisnis" value="bisnis" style="margin-top: 10px; font-size: 14px;">
                    <label for="bisnis" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 15px;">HOTEL</label>

                    <input type="checkbox" id="keluarga" name="keluarga" value="keluarga" style="margin-top: 10px; font-size: 14px;">
                    <label for="keluarga" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">PENGINAPAN PREMIUM</label>

                    <input type="checkbox" id="pasangan" name="pasangan" value="pasangan" style="margin-top: 10px; font-size: 14px;">
                    <label for="pasangan" style="font-size: 14px; font-weight: normal; margin-right: 10px; margin-top: 10px;">KOST-KOSTAN </label>
                </div>

                <!-- Vertical line -->

                <div style="border-left: 1px solid black; flex-grow: 1; margin-right: 20px;"></div>
                <div class="hotel" id="lotus_hotel">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                        LOTUS HOTEL
                    </div>
                    <img src="images/lotus.png" alt="Gambar" style="max-width: 300px; max-height: 150px;">
                    <img src="images/lokasi.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: -150px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">jl.cakrawala no.01 malang,jawa timur indonesia</div>

                    <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <div class="harga" style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">Rp. 0 - Rp. 500.000</div>

                    <img src="images/jempol.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000" style="margin-left: 315px; margin-top: -20px; width: 60px; height: 20px;">

                    <img src="images/waktu.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 15px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">174 review</div>

                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                        <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>
                    </div>
                </div>
                    <div style="border-bottom: 1px solid black; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                    <div class="hotel" id="family_hotel">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                        FAMILY HOTEL
                    </div>
                    <img src="images/family.png" alt="Gambar" style="max-width: 300px; max-height: 150px;">
                    <img src="images/lokasi.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: -150px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">jl.cakrawala no.01 malang,jawa timur indonesia</div>

                    <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">Rp 3.500.000-8.500.000</div>

                    <img src="images/jempol.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000" style="margin-left: 315px; margin-top: -20px; width: 60px; height: 20px;">

                    <img src="images/waktu.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 15px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">174 review</div>

                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                        <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>
                    </div>
                </div>
                    <div style="border-bottom: 1px solid black; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                    <div class="hotel" id="your_hotel">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                        YOUR HOTEL
                    </div>
                    <img src="images/your.png" alt="Gambar" style="max-width: 300px; max-height: 150px;">
                    <img src="images/lokasi.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: -150px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">jl.cakrawala no.01 malang,jawa timur indonesia</div>

                    <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">Rp 3.500.000-8.500.000</div>

                    <img src="images/jempol.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000" style="margin-left: 315px; margin-top: -20px; width: 60px; height: 20px;">

                    <img src="images/waktu.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 15px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">174 review</div>

                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                        <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>
                    </div>
                </div>
                    <div style="border-bottom: 1px solid black; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                    <div class="hotel" id="the_hotel">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                        THE HOTEL
                    </div>
                    <img src="images/the.png" alt="Gambar" style="max-width: 300px; max-height: 150px;">
                    <img src="images/lokasi.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: -150px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">jl.cakrawala no.01 malang,jawa timur indonesia</div>

                    <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">Rp 3.500.000-8.500.000</div>

                    <img src="images/jempol.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000" style="margin-left: 315px; margin-top: -20px; width: 60px; height: 20px;">

                    <img src="images/waktu.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 15px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">174 review</div>

                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                        <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>
                    </div>
                </div>
                    <div style="border-bottom: 1px solid black; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                    <div class="hotel" id="my_hotel">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                        MY HOTEL
                    </div>
                    <img src="images/my.png" alt="Gambar" style="max-width: 300px; max-height: 150px;">
                    <img src="images/lokasi.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: -150px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">jl.cakrawala no.01 malang,jawa timur indonesia</div>

                    <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">Rp 3.500.000-8.500.000</div>

                    <img src="images/jempol.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000" style="margin-left: 315px; margin-top: -20px; width: 60px; height: 20px;">

                    <img src="images/waktu.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 15px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">174 review</div>

                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                        <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>
                    </div>
                </div>
                <div class="hotel" id="mariana_hotel">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <div style="color: black; font-size: 12px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                        MARIANA HOTEL
                    </div>
                    <img src="images/mariana.png" alt="Gambar" style="max-width: 300px; max-height: 150px;">
                    <img src="images/lokasi.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: -150px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">jl.cakrawala no.01 malang,jawa timur indonesia</div>

                    <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">Rp 3.500.000-8.500.000</div>

                    <img src="images/jempol.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000" style="margin-left: 315px; margin-top: -20px; width: 60px; height: 20px;">

                    <img src="images/waktu.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 15px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">174 review</div>

                    <div style="display: flex; justify-content: flex-end; margin-top: 50px;">
                        <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>
                    </div>
                </div>

                </div>
            </div>
    </div>
    </div>



    <script>
        // Ambil semua checkbox harga
        var checkboxes = document.querySelectorAll('input[type="checkbox"][id^="harga"]');
        // Tambahkan event listener untuk setiap checkbox
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // Ambil nilai checkbox yang dipilih
                var selectedPrices = [];
                checkboxes.forEach(function(cb) {
                    if (cb.checked) {
                        selectedPrices.push(cb.value);
                    }
                });

                // Tampilkan/menyembunyikan hotel berdasarkan harga yang dipilih
                var hotels = document.querySelectorAll('.hotel');
                hotels.forEach(function(hotel) {
                    var price = hotel.querySelector('div:nth-of-type(4)').textContent.trim();
                    if (selectedPrices.length === 0 || selectedPrices.includes(price)) {
                        hotel.style.display = 'block';
                    } else {
                        hotel.style.display = 'none';
                    }
                });
            });
        });
    </script>



        </div>
    </div>
@endsection

@extends('layouts.yss')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div class="main-content">
        <div class="page-content">

            <div class="search-bar" style="margin-left: 400px; position: relative;">
                <input type="text" id="searchBar" placeholder="Cari..." style="width: 50%; padding: 5px; border-radius: 20px;">
                <i class="fas fa-search" style="position: absolute; right: 470px; top: 50%; transform: translateY(-50%);"></i>
            </div>

            <div class="page-content" style="display: flex;">
                <!-- Menu content -->
                <div style="width: 350px; padding-right: 10px;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="color: black; font-size: 20px; font-family: Poppins; font-weight: 600; word-wrap: break-word; margin-top: 50px;">MALANG</div>
                        <button id="resetButton" type="button" style="color: white; font-size: 20px; font-family: Poppins; font-weight: 600; word-wrap: break-word; cursor: pointer; background-color: #F43131; padding: 5px 10px; border-radius: 5px; border: none; margin-top: 50px;">RESET</button>
                    </div>
                    <div style="display: flex; flex-direction: column; padding: 10px;">
                        <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: bold; word-wrap: break-word; margin-top: 30px; margin-left: 20px; ">HARGA</div>
                        <input type="checkbox" id="harga" name="harga" value="Rp. 0 - Rp. 500.000" data-price="Rp. 0 - Rp. 500.000" style="margin-top: 20px;">
<label for="harga" style="font-size: 16px; font-weight: normal; margin-right: 10px; margin-top: 20px;" data-price="Rp. 0 - Rp. 500.000">Rp. 0 - Rp. 500.000</label>
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
                </div>

                <!-- Vertical line -->

                <div style="border-left: 2px solid #dfd9d9; flex-grow: 1; margin-right: 30px;  margin-top: 40px;"></div>
                <div class="row">
                    <div class="hotel" id="lotus_hotel" style="margin-top:35px; display: inline-block;">
                    <div class="menu-item" style="display: flex; flex-direction: column; align-items: flex-start;">
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
                        <a href="{{ route('detailmenu') }}">
                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                        <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>
                    </div>
                        </a>
                    <div style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                </div>
                    </div>
                    <div class="hotel" id="family_hotel">
                        <div class="menu-item" style="display: flex; flex-direction: column; align-items: flex-start;">
                            <div style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                FAMILY HOTEL
                            </div>
                    <img src="images/family.png" alt="Gambar" style="max-width: 300px; max-height: 150px;">
                    <img src="images/lokasi.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: -150px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">jl.cakrawala no.01 malang,jawa timur indonesia</div>

                    <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">Rp. 500.000 - Rp. 2.000.000</div>

                    <img src="images/jempol.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 10px;">
                    <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000" style="margin-left: 315px; margin-top: -20px; width: 60px; height: 20px;">

                    <img src="images/waktu.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-left: 290px; margin-top: 15px;">
                    <div style="margin-left: 315px; margin-top: -20px; font-family: Poppins;">174 review</div>

                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                        <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>
                    </div>
                    <div style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                </div>
                    <div style="border-bottom: 1px solid #; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                    <div class="hotel" id="your_hotel">
                        <div class="menu-item" style="display: flex; flex-direction: column; align-items: flex-start;">
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
                    <div style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                </div>
                    <div class="hotel" id="the_hotel">
                        <div class="menu-item" style="display: flex; flex-direction: column; align-items: flex-start;">
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
                    <div style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                </div>
                    <div class="hotel" id="my_hotel">
                        <div class="menu-item" style="display: flex; flex-direction: column; align-items: flex-start;">
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
                    <div style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;"></div>
                </div>
                <div class="hotel" id="mariana_hotel">
                    <div class="menu-item" style="display: flex; flex-direction: column; align-items: flex-start;">
                        <div style="color: black; font-size: 13px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
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
                    <button style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 700px;">DETAIL</button>

                    </div>
                    </div>
                </div>

                </div>
            </div>
    </div>
    </div>



    <script>
        // Function to reset checkboxes
        function resetCheckboxes() {
            // Get all checkboxes
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            // Loop through checkboxes and uncheck them
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }

        // Add event listener to the reset button
        var resetButton = document.getElementById('resetButton');
        resetButton.addEventListener('click', resetCheckboxes);
    </script>

<script>
    // Ambil elemen input pencarian
    const searchBar = document.getElementById('searchBar');

    // Tambahkan event listener untuk event input (ketika pengguna mengetikkan sesuatu)
    searchBar.addEventListener('input', function(event) {
        const searchTerm = event.target.value.toLowerCase(); // Ambil nilai pencarian dan ubah menjadi huruf kecil

        // Ambil semua item menu
        const menuItems = document.querySelectorAll('.menu-item');

        // Iterasi melalui setiap item menu
        menuItems.forEach(function(menuItem) {
            const namaHotel = menuItem.textContent.toLowerCase(); // Ambil teks item menu dan ubah menjadi huruf kecil

            // Periksa apakah teks item menu mengandung kata kunci pencarian
            if (namaHotel.includes(searchTerm)) {
                menuItem.style.display = 'flex'; // Tampilkan item menu jika cocok dengan pencarian
            } else {
                menuItem.style.display = 'none'; // Sembunyikan item menu jika tidak cocok dengan pencarian
            }
        });
    });
</script>
                </div>
            </div>
        </div>
    </div>


        </div>
    </div>
@endsection

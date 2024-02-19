@extends('layouts.yss')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div class="main-content">
        <div class="page-content">
            <div class="search-bar" style="margin-left: 400px; position: relative;">
                <input type="text" id="searchBar" placeholder="Cari..."
                    style="width: 50%; padding: 5px; border-radius: 20px;">
                <i class="fas fa-search"
                    style="position: absolute; right: 500px; top: 50%; transform: translateY(-50%);"></i>
            </div>

                <div class="page-content" style="display: flex; justify-content: center;">
                    <!-- Menu content -->
                    <div style="width: 1100px;">


                <!-- Vertical line -->

                <div style="border-left: 2px solid #dfd9d9; flex-grow: 1; margin-right: 30px;  margin-top: 40px;"></div>
                <div class="row">
                    <div class="hotel" id="lotus_hotel" style="margin-top:35px; display: inline-block;">
                        <div class="menu-item" style="display: flex; flex-direction: column; align-items: flex-start;">
                            <div
                                style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                LUXURY ROOM
                            </div>
                            <div style="display: flex; align-items: center;">
                                <img src="images/kamar1.png" alt="Gambar" style="max-width: 250px; max-height: 150px;">
                                <div style="margin-left: 20px; font-family: Poppins;">
                                    <p>Kamar Hotel Luxur Room adalah jenis kamar hotel yang menawarkan pengalaman menginap mewah dan nyaman bagi para tamu. Kamar ini biasanya merupakan kamar yang lebih besar dari kamar standar dan menawarkan fasilitas dan layanan tambahan yang dirancang untuk meningkatkan kenyamanan dan kepuasan tamu.</p>
                                    <div style="display: flex; align-items: center;">
                                        <div style="margin-top: 20px;"></div>
                                        <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                        <div class="harga" style="font-family: Poppins;">Rp 1.000.000</div>
                                    </div>
                                    <div style="margin-top: 15px;"></div> <!-- Jarak tambahan -->
                                    <div style="display: flex; align-items: center;">
                                        <img src="images/jempol.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                        <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000" style="width: 90px; ">
                                    </div>
                                    <div style="margin-top: 15px;"></div> <!-- Jarak tambahan -->
                                    <div style="display: flex; align-items: center;">
                                        <img src="images/waktu.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                        <div style="font-family: Poppins;">174 review</div>
                                    </div>
                                </div>
                            </div>

                            <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                                <a href="{{ route('detail.index') }}">
                                <button
                                    style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 970px;">DETAIL</button>

                            <div
                                style="border-bottom: 1px solid #ACACAC; width: 105%; margin-left: -15px; margin-top: 10px;">
                            </div>
                        </div>
                        </div>
                        <div class="hotel" id="family_hotel">
                            <div class="menu-item"
                                style="display: flex; flex-direction: column; align-items: flex-start;">
                                <div
                                    style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                    COUPLE ROOM
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <img src="images/kamar2.png" alt="Gambar"
                                        style="max-width: 250px; max-height: 150px;">
                                    <div style="margin-left: 20px; font-family: Poppins;">
                                        <p>Kamar Standard Room yang nyaman ini memberikan pengalaman menginap yang
                                            menyenangkan dengan desain fungsional dan suasana yang hangat. Dilengkapi dengan
                                            fasilitas dasar yang memadai, kamar ini adalah pilihan ideal bagi tamu yang
                                            mencari kenyamanan dan keseimbangan antara kualitas dan nilai.</p>
                                            <div style="margin-top: 15px;"></div>
                                        <div style="display: flex; align-items: center;">
                                            <img src="images/uang.png" alt="Gambar Baru"
                                                style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                            <div class="harga" style="font-family: Poppins;">Rp 1.000.000</div>
                                        </div>
                                        <div style="margin-top: 15px;"></div>
                                        <div style="display: flex; align-items: center;">
                                            <img src="images/jempol.png" alt="Gambar Baru"
                                                style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                            <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000"
                                                style="width: 90px; ">
                                        </div>
                                        <div style="margin-top: 15px;"></div>
                                        <div style="display: flex; align-items: center;">
                                            <img src="images/waktu.png" alt="Gambar Baru"
                                                style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                            <div style="font-family: Poppins;">174 review</div>
                                        </div>
                                    </div>
                                </div>

                                <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                                    <button
                                        style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 970px;">DETAIL</button>
                                </div>
                                <div
                                    style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;">
                                </div>
                            </div>
                            <div style="border-bottom: 1px solid #; width: 100%; margin-left: -15px; margin-top: 10px;">
                            </div>
                            <div class="hotel" id="your_hotel">
                                <div class="menu-item"
                                    style="display: flex; flex-direction: column; align-items: flex-start;">
                                    <div
                                        style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                        STANDART ROOM
                                    </div>
                                    <div style="display: flex; align-items: center;">
                                        <img src="images/kamar3.png" alt="Gambar"
                                            style="max-width: 250px; max-height: 150px;">
                                        <div style="margin-left: 20px; font-family: Poppins;">
                                            <p>Kamar Standard Room yang nyaman ini memberikan pengalaman menginap yang
                                                menyenangkan dengan desain fungsional dan suasana yang hangat. Dilengkapi
                                                dengan fasilitas dasar yang memadai, kamar ini adalah pilihan ideal bagi
                                                tamu yang mencari kenyamanan dan keseimbangan antara kualitas dan nilai.</p>
                                                <div style="margin-top: 15px;"></div>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/uang.png" alt="Gambar Baru"
                                                    style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                <div class="harga" style="font-family: Poppins;">Rp 1.000.000</div>
                                            </div>
                                            <div style="margin-top: 15px;"></div>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/jempol.png" alt="Gambar Baru"
                                                    style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000"
                                                    style="width: 90px; ">
                                            </div>
                                            <div style="margin-top: 15px;"></div>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/waktu.png" alt="Gambar Baru"
                                                    style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                <div style="font-family: Poppins;">174 review</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                                        <button
                                            style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 970px;">DETAIL</button>
                                    </div>
                                    <div
                                        style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;">
                                    </div>
                                </div>
                                <div class="hotel" id="the_hotel">
                                    <div class="menu-item"
                                        style="display: flex; flex-direction: column; align-items: flex-start;">
                                        <div
                                            style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                            FAMILY ROOM
                                        </div>
                                        <div style="display: flex; align-items: center;">
                                            <img src="images/kamar4.png" alt="Gambar"
                                                style="max-width: 250px; max-height: 150px;">
                                            <div style="margin-left: 20px; font-family: Poppins;">
                                                <p>Kamar Hotel Family Room adalah jenis kamar yang dirancang khusus untuk
                                                    keluarga atau tamu dengan jumlah anggota yang lebih besar. Kamar ini
                                                    menyediakan ruang yang luas dan fasilitas tambahan.</p>
                                                    <div style="margin-top: 15px;"></div>
                                                <div style="display: flex; align-items: center;">
                                                    <img src="images/uang.png" alt="Gambar Baru"
                                                        style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                    <div class="harga" style="font-family: Poppins;">Rp 1.115.000</div>
                                                </div>
                                                <div style="margin-top: 15px;"></div>
                                                <div style="display: flex; align-items: center;">
                                                    <img src="images/jempol.png" alt="Gambar Baru"
                                                        style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                    <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000"
                                                        style="width: 90px; ">
                                                </div>
                                                <div style="margin-top: 15px;"></div>
                                                <div style="display: flex; align-items: center;">
                                                    <img src="images/waktu.png" alt="Gambar Baru"
                                                        style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                    <div style="font-family: Poppins;">174 review</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                                            <button
                                                style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 970px;">DETAIL</button>
                                        </div>
                                        <div
                                            style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;">
                                        </div>
                                    </div>
                                    <div class="hotel" id="my_hotel">
                                        <div class="menu-item"
                                            style="display: flex; flex-direction: column; align-items: flex-start;">
                                            <div
                                                style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                                DELUXE ROOM
                                            </div>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/kamar5.jpg" alt="Gambar"
                                                    style="max-width: 250px; max-height: 150px;">
                                                <div style="margin-left: 20px; font-family: Poppins;">
                                                    <p>Deluxe room adalah jenis kamar hotel di atas tipe standar dengan
                                                        ukuran kamar yang lebih luas dan besar, ukuran dan fasilitas lebih
                                                        baik.</p>
                                                        <div style="margin-top: 15px;"></div>
                                                    <div style="display: flex; align-items: center;">
                                                        <img src="images/uang.png" alt="Gambar Baru"
                                                            style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                        <div class="harga" style="font-family: Poppins;">Rp 1.750.000
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 15px;"></div>
                                                    <div style="display: flex; align-items: center;">
                                                        <img src="images/jempol.png" alt="Gambar Baru"
                                                            style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                        <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000"
                                                            style="width: 90px;">
                                                    </div>
                                                    <div style="margin-top: 15px;"></div>
                                                    <div style="display: flex; align-items: center;">
                                                        <img src="images/waktu.png" alt="Gambar Baru"
                                                            style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                        <div style="font-family: Poppins;">174 review</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                                                <button
                                                    style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 970px;">DETAIL</button>
                                            </div>
                                            <div
                                                style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;">
                                            </div>
                                        </div>
                                        <div class="hotel" id="the_hotel">
                                            <div class="menu-item"
                                                style="display: flex; flex-direction: column; align-items: flex-start;">
                                                <div
                                                    style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                                    FAMILY ROOM
                                                </div>
                                                <div style="display: flex; align-items: center;">
                                                    <img src="images/kamar4.png" alt="Gambar"
                                                        style="max-width: 250px; max-height: 150px;">
                                                    <div style="margin-left: 20px; font-family: Poppins;">
                                                        <p>Kamar Hotel Family Room adalah jenis kamar yang dirancang khusus untuk
                                                            keluarga atau tamu dengan jumlah anggota yang lebih besar. Kamar ini
                                                            menyediakan ruang yang luas dan fasilitas tambahan.</p>
                                                            <div style="margin-top: 15px;"></div>
                                                        <div style="display: flex; align-items: center;">
                                                            <img src="images/uang.png" alt="Gambar Baru"
                                                                style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                            <div class="harga" style="font-family: Poppins;">Rp 1.115.000</div>
                                                        </div>
                                                        <div style="margin-top: 15px;"></div>
                                                        <div style="display: flex; align-items: center;">
                                                            <img src="images/jempol.png" alt="Gambar Baru"
                                                                style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                            <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000"
                                                                style="width: 90px; ">
                                                        </div>
                                                        <div style="margin-top: 15px;"></div>
                                                        <div style="display: flex; align-items: center;">
                                                            <img src="images/waktu.png" alt="Gambar Baru"
                                                                style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                            <div style="font-family: Poppins;">174 review</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                                                    <button
                                                        style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 970px;">DETAIL</button>
                                                </div>
                                                <div
                                                    style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;">
                                                </div>
                                            </div>
                                            <div class="hotel" id="my_hotel">
                                                <div class="menu-item"
                                                    style="display: flex; flex-direction: column; align-items: flex-start;">
                                                    <div
                                                        style="color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                                                      SINGLE ROOM
                                                    </div>
                                                    <div style="display: flex; align-items: center;">
                                                        <img src="images/kamar6.jpg" alt="Gambar"
                                                            style="max-width: 250px; max-height: 150px;">
                                                        <div style="margin-left: 20px; font-family: Poppins;">
                                                            <p>Deluxe room adalah jenis kamar hotel di atas tipe standar dengan
                                                                ukuran kamar yang lebih luas dan besar, ukuran dan fasilitas lebih
                                                                baik. kamar yang dirancang khusus untuk keluarga atau tamu dengan jumlah anggota yang lebih besar. Kamar ini menyediakan ruang yang luas dan fasilitas tambahan</p>
                                                                <div style="margin-top: 15px;"></div>
                                                            <div style="display: flex; align-items: center;">
                                                                <img src="images/uang.png" alt="Gambar Baru"
                                                                    style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                                <div class="harga" style="font-family: Poppins;">Rp 1.750.000
                                                                </div>
                                                            </div>
                                                            <div style="margin-top: 15px;"></div>
                                                            <div style="display: flex; align-items: center;">
                                                                <img src="images/jempol.png" alt="Gambar Baru"
                                                                    style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                                <img src="images/bintang.png" alt="Rp 3.500.000-8.500.000"
                                                                    style="width: 90px; ">
                                                            </div>
                                                            <div style="margin-top: 15px;"></div>
                                                            <div style="display: flex; align-items: center;">
                                                                <img src="images/waktu.png" alt="Gambar Baru"
                                                                    style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                                                <div style="font-family: Poppins;">174 review</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                                                        <button
                                                            style="background-color: #283E58; color: white; font-family: Poppins; font-size: 16px; font-weight: 600; padding: 10px 20px; border: none; border-radius: 5px; margin-left: 970px;">DETAIL</button>
                                                    </div>
                                                    <div
                                                        style="border-bottom: 1px solid #ACACAC; width: 100%; margin-left: -15px; margin-top: 10px;">
                                                    </div>
                                                </div>

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
                            const searchTerm = event.target.value
                        .toLowerCase(); // Ambil nilai pencarian dan ubah menjadi huruf kecil

                            // Ambil semua item menu
                            const menuItems = document.querySelectorAll('.menu-item');

                            // Iterasi melalui setiap item menu
                            menuItems.forEach(function(menuItem) {
                                const namaHotel = menuItem.textContent
                            .toLowerCase(); // Ambil teks item menu dan ubah menjadi huruf kecil

                                // Periksa apakah teks item menu mengandung kata kunci pencarian
                                if (namaHotel.includes(searchTerm)) {
                                    menuItem.style.display = 'flex'; // Tampilkan item menu jika cocok dengan pencarian
                                } else {
                                    menuItem.style.display =
                                    'none'; // Sembunyikan item menu jika tidak cocok dengan pencarian
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
    </div>
@endsection

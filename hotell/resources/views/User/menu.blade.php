@extends('layouts.yss')

@section('content')
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <div class="main-content">
        <div class="page-content">
            <div class="search-bar" style="margin-left: 400px; position: relative;">
                <input type="text" id="searchBar" placeholder="Cari..."
                    style="width: 50%; padding: 5px; border-radius: 20px;">
                <i class="fas fa-search"
                    style="position: absolute; right: 500px; top: 50%; transform: translateY(-50%);"></i>
            </div>
        </div>

        <div style="display: flex; overflow-x: hidden;">
            <!-- Filter menu -->
            <div style="width: 300px; margin-right: 50px;">
                <!-- Filter content here -->
                <div style=" 1px solid #ccc;  padding-left: 20px; padding-right: 20px; margin-top:60px;">
                    <!-- Filter by price -->
                    <form>
                        <div class="d-flex" id="collapsePriceRange">
                            <div class="d-flex align-items-center">
                                <label for="minPrice" class="me-2" style="font-size: 12px;">Min:</label>
                                <input class="form-control me-2" type="number" placeholder="Min" id="minPrice"
                                    name="min" value="{{ old('min', $minPrice) }}">
                                <label for="maxPrice" class="me-2" style="font-size: 12px;">Max:</label>
                                <input class="form-control me-2" type="number" placeholder="Max" id="maxPrice"
                                    name="max" value="{{ old('max', $maxPrice) }}">
                                <button class="btn btn-phoenix-primary border-300 px-3" type="submit">Go</button>
                            </div>
                        </div>
                    </form>

                    <!-- Filter by room category -->
                    <h3 style="margin-top: 20px; font-size:20px;"> Category</h3>
                    <div>
                        <input type="checkbox" id="category-1">
                        <label for="category-1" style="font-size: 15px;">Standard Room</label>
                    </div>
                    <div>
                        <input type="checkbox" id="category-2">
                        <label for="category-2" style="font-size: 15px;">Luxury Room</label>
                    </div>
                    <div>
                        <input type="checkbox" id="category-3">
                        <label for="category-3" style="font-size: 15px;">Suite</label>
                    </div>
                </div>
            </div>

            <!-- Menu content -->
            <div style="width: 1000px;">


                <!-- Vertical line -->

                <div style="border-left: 2px solid #dfd9d9; flex-grow: 1; margin-right: 30px;  margin-top: 40px;"></div>
                @foreach ($menu as $room)
                    <div class="hotel" id="room_{{ $room->id }}">
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
                                  <a href="{{ route('detail.index', ['id' => $room->id]) }}" class="btn btn-primary btn-lg float-end" style="background-color: #283E58; width: -100px;">DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tambahkan elemen HTML lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div id="preloader">
                <span class="preloader-dot"></span>
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

        <
        script >
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
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="price-"]');
        const rooms = document.querySelectorAll('.hotel');

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const selectedPrices = Array.from(checkboxes)
                    .filter(chk => chk.checked)
                    .map(chk => parseInt(chk.dataset.price));

                rooms.forEach(function(room) {
                    const harga = parseInt(room.dataset.price);

                    // Mengecek apakah harga kamar berada dalam setiap rentang harga yang dipilih
                    const showRoom = selectedPrices.length === 0 || selectedPrices.some(
                        price => harga <= price);

                    // Menampilkan atau menyembunyikan kamar berdasarkan hasil pengecekan
                    room.style.display = showRoom ? 'flex' : 'none';
                });
            });
        });
    });
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
@endsection
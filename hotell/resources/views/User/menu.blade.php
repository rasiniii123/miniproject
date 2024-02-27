@extends('layouts.yss')

@section('content')
@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: "{{ session('error') }}"
    });
</script>
@endif

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
                    <h3 style="font-size: 25px; margin-bottom: 20px; font-weight: bold;">Filter</h3>

                    <!-- Filter by price -->
                    <form>
                        <details open>
                            <summary style="margin-top: 20px; font-size: 15px; font-weight: bold; cursor: pointer; position: relative;"> Kategory
                                <span style="position: absolute; right: 0; top: 50%; transform: translateY(-50%); font-size: 20px;">▾</span>
                            </summary>
                        <div>
                            <input type="checkbox" id="category-1" onclick="toggleCheckbox('category-1')">
                            <label for="category-1" style="font-size: 15px; margin-top:10px;">Standard Room</label>
                        </div>
                        <div>
                            <input type="checkbox" id="category-2" onclick="toggleCheckbox('category-2')">
                            <label for="category-2" style="font-size: 15px;">Luxury Room</label>
                        </div>
                        <div>
                            <input type="checkbox" id="category-3" onclick="toggleCheckbox('category-3')">
                            <label for="category-3" style="font-size: 15px;">Suite</label>
                        </div>
                        <div>
                            <input type="checkbox" id="category-4" onclick="toggleCheckbox('category-4')">
                            <label for="category-4" style="font-size: 15px;">family</label>
                        </div>
                        <div>
                            <input type="checkbox" id="category-5" onclick="toggleCheckbox('category-5')">
                            <label for="category-5" style="font-size: 15px;">room</label>
                        </div>
                        </details>
                    </form>
                    <details open>
                        <summary style="margin-top: 20px; font-size: 15px; font-weight: bold; cursor: pointer; position: relative;"> Harga
                            <span style="position: absolute; right: 0; top: 50%; transform: translateY(-50%); font-size: 20px;">▾</span>
                        </summary>
                    <div class="d-flex" id="collapsePriceRange">
                        <div class="d-flex align-items-center">
                            <input class="form-control me-2" type="number" placeholder="Min" id="minPrice" name="min" style="margin-bottom: 10px;">
                            <input class="form-control me-2" type="number" placeholder="Max" id="maxPrice" name="max" style="margin-bottom: 10px;">
                            <button class="btn btn-phoenix-primary border-300 px-3" type="button" id="filterButton" style="border: 1px solid #ccc; padding: 8px 15px; margin-top: -10px;">Go</button>
                        </div>
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
                        <div style="margin-bottom: 15px; color: black; font-size: 15px; font-family: Poppins; font-weight: 600; line-height: 36px; letter-spacing: 0.20px; word-wrap: break-word; margin-right: 800px;">
                            <span>
                                {{ $room->nama_kamar }}
                            </span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <img src="{{ asset('storage/kamar/' . $room->path_kamar) }}" style="max-width: 250px; max-height: 150px; margin-top: -20px;">
                            <div style="margin-left: 15px; font-family: Poppins; width: 700px; word-wrap: break-word;">
                                <p style="font-size: 18px;">{{ $room->deskripsi }}</p>
                                <div style="display: flex; align-items: center; margin-top: 10px;">
                                    <img src="images/uang.png" alt="Gambar Baru" style="max-width: 20px; max-height: 20px; margin-right: 5px;">
                                    <div class="harga" style="font-family: Poppins; font-size: 18px;">Rp {{ number_format($room->harga, 0, ',', '.') }}<span style="color: #D88F00;">/Malam</span></div>
                                </div>
                                <div style="display: flex; align-items: center; margin-top: 10px;">
                                    <i class="fas fa-bed" style="color: #000; font-size: 20px; margin-right: 10px; margin-top: -3px;"></i>
                                    <p style="font-size: 18px;">{{ $room->kategori->nama_kategori }}</p>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 30px;"></div>
                        <div style="margin-top: -20px; margin-left:800px;">
                            <a href="{{ route('detail.index', ['id' => $room->id]) }}" class="btn btn-primary btn-lg" style="background-color: #283E58;">DETAIL</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div id="preloader">
                <span class="preloader-dot"></span>
            </div>
        </div>
    </div>

    <script>
        // Ambil elemen input pencarian
        const searchBar = document.getElementById('searchBar');
        const filterButton = document.getElementById('filterButton');

        // Tambahkan event listener untuk event input pada searchBar
        searchBar.addEventListener('input', function(event) {
            const searchTerm = event.target.value.toLowerCase();

            // Ambil semua item menu
            const menuItems = document.querySelectorAll('.menu-item');

            // Iterasi melalui setiap item menu
            menuItems.forEach(function(menuItem) {
                const namaHotel = menuItem.querySelector('div:first-child').textContent.toLowerCase();
                if (namaHotel.includes(searchTerm)) {
                    menuItem.style.display = 'flex';
                } else {
                    menuItem.style.display = 'none';
                }
            });
        });

        // Tambahkan event listener untuk event click pada tombol Go
        filterButton.addEventListener('click', function() {
            filterRooms();
        });

function filterRooms() {
    const minPrice = document.getElementById('minPrice').value.trim(); // Menghilangkan spasi di awal dan akhir string
    const maxPrice = document.getElementById('maxPrice').value.trim(); // Menghilangkan spasi di awal dan akhir string
    const rooms = document.querySelectorAll('.hotel');

    rooms.forEach(function(room) {
        const roomPrice = parseInt(room.querySelector('.harga').textContent.replace(/\D/g, ''));
        if ((minPrice === '' || roomPrice >= parseInt(minPrice)) && (maxPrice === '' || roomPrice <= parseInt(maxPrice))) {
            room.style.display = 'flex';
        } else {
            room.style.display = 'none';
        }
    });
}

        function toggleCheckbox(checkboxId) {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                if (checkbox.id !== checkboxId) {
                    checkbox.checked = false;
                }
            });

            // Mengambil nilai status (checked atau tidak) dari checkbox yang dipilih
            const isChecked = document.getElementById(checkboxId).checked;
            const categoryName = document.getElementById(checkboxId).nextElementSibling.textContent.toLowerCase();

            // Ambil semua item kamar
            const rooms = document.querySelectorAll('.hotel');

            rooms.forEach(function(room) {
                const roomCategory = room.querySelector('.menu-item p:last-child').textContent.toLowerCase();
                if (isChecked) {
                    // Jika checkbox dicentang, tampilkan kamar yang memiliki kategori yang sesuai
                    if (roomCategory === categoryName) {
                        room.style.display = 'flex';
                    } else {
                        room.style.display = 'none';
                    }
                } else {
                    // Jika checkbox tidak dicentang, tampilkan kembali semua kamar
                    room.style.display = 'flex';
                }
            });
        }
    </script>
@endsection

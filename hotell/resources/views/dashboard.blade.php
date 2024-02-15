@extends('layouts.app')
@section('content')
    <section>
        <li data-transition="fade" style="list-style-type: none">
            <div class="slider-container">
                <div class="logo">
                    <img src="images/kologo.png" alt="Logo" width="100">
                </div>


                <script>
                    // Fungsi untuk menambahkan efek loading
                    function addLoadingEffect() {
                        // Tampilkan elemen loading (Anda perlu memiliki elemen loading dalam HTML)
                        document.getElementById("loading").style.display = "block";

                        // Set waktu tunggu sebelum menuju ke bagian yang dituju (dalam milidetik)
                        setTimeout(function() {
                            // Sembunyikan elemen loading
                            document.getElementById("loading").style.display = "none";
                        }, 1500); // Ubah angka ini sesuai kebutuhan waktu tunggu Anda
                    }
                </script>


        <li data-transition="fade" style="list-style-type: none">
            <div class="slider-container">
                <div class="logo">
                    <img src="images/kologo.png" alt="Logo" width="100">
                </div>
                <div class="menu" style="margin-left: 100px;">
                    <ul>
                        <li><a href="#beranda-section" onclick="addLoadingEffect()">Beranda</a></li>
                        <li><a href="#hotel-section" onclick="addLoadingEffect()">Hotel</a></li>
                        <li><a href="#about-section" onclick="addLoadingEffect()">Tentang Kami</a></li>
                    </ul>
                    <div class="user-actions" style="display: flex; align-items: center; margin-left: 500px;">
                        @auth <!-- Cek apakah pengguna sudah login -->
                            <span style="font-size: 20px; color: #fff; margin-right: 10px;">{{ auth()->user()->username }}</span>
                            <div class="dropdown">
                                <img onclick="toggleDropdown()" src="{{ asset('user-2.png') }}" width="40" height="40"
                                    style="margin-right: 10px; cursor: pointer;">
                                <div id="myDropdown" class="dropdown-content">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" style="font-size: 14px;">Logout</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <!-- Jika pengguna belum login -->
                            <a href="{{ route('auth.register') }}" style="margin-right: 10px;">Register</a> <!-- Tautan untuk register -->
                            <a href="{{ route('auth.login') }}">Login</a> <!-- Tautan untuk login -->
                        @endauth
                    </div>
                    
                </li>





        {{-- <div style="position: relative; overflow: hidden; margin-top: -50px;"> --}}
        {{-- <div style="position: relative; overflow: hidden; margin-top: -30px;"> --}}
        <div id="beranda-section">
            <img src="images/backround.png" data-bgposition="left center" data-duration="14000"
                data-bgpositionend="right center" alt="">
            <div class="description"
                style="position: absolute; top: 30%; left: 35%; transform: translateX(-50%); text-align: left; padding: 0 20px;">
                <p style="font-size: 24px; font-weight: bold; margin-top: 0;"><em>Selamat Datang Di</em></p>
                <p style="font-size: 36px; font-weight: bold; margin-top: 0;">EVERYWHERE HOTEL</p>
                <p style="font-size: 18px; max-width: 600px; margin-top: 0;">
                    Lebih dari Sekadar Penginapan, Kami Mengajak Anda untuk Mengeksplorasi Dunia dengan Pilihan Hotel yang
                    Melimpah.
                    Temukan Ketenangan, Kenyamanan, dan Inspirasi di Setiap Perjalanan Anda Bersama Kami.
                <p>
                    @auth
                        <!-- Jika pengguna sudah login, arahkan ke halaman menu -->
                        <a href="{{ route('menu') }}">
                            <button
                                style="background-color: #283E58; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 10px;">
                                PESAN SEKARANG
                            </button>
                        </a>
                    @else
                        <!-- Jika pengguna belum login, arahkan ke halaman login -->
                        <a href="{{ route('auth.login') }}">
                            <button
                                style="background-color: #283E58; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 10px;">
                                MENU LAINNYA
                            </button>
                        </a>
                    @endauth
                </p>
            </div>
        </div>
        </div>
    </section>

    <section class="section-home-about bg-white">
        <div class="container">
            <div id="about-section">
                <div class="home-about">
                    <div class="row align-items-start">
                        <div class="col-md-6">
                            <div class="img mb-4">
                                <a href="#"><img src="images/about/img-1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">TENTANG KAMI</h2>
                                <p>
                                    "Kami menawarkan berbagai Pilihan Hotel Terbaik di 'everywhere',
                                    memberikanmu kemudahan dan kenyamanan dalam merencanakan liburan impianmu.
                                    Tak perlu ribet, karena hanya dengan satu aplikasi khusus,
                                    kamu bisa dengan mudah melakukan pemesanan hotel sesuai dengan destinasi pilihanmu.
                                    Tidak hanya itu, sebagai tambahan keuntungan, kami juga menyediakan berbagai promo
                                    menarik
                                    yang pastinya akan membuat liburanmu semakin istimewa.
                                    Dapatkan JAMINAN HARGA TERMURAH di 'everywhere' dan nikmati pengalaman liburan yang tak
                                    terlupakan.
                                    Jadi, tunggu apalagi? Segera siapkan liburanmu dan pesan hotel pilihanmu di 'everywhere'
                                    sekarang juga!"
                                </p>
                                @auth
                                    <a href="{{ route('tentang.index') }}">
                                        <button
                                            style="background-color: #283E58; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 30px;">
                                            Baca Selengkapnya
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('auth.login') }}">
                                        <button
                                            style="background-color: #283E58; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 30px;">
                                            Baca Selengkapnya
                                        </button>
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- ACCOMD ODATIONS -->
    <section class="section-accomd awe-parallax">
        <div class="container">
            <div id="hotel-section">
                <div class="accomd-modations">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accomd-modations-header">
                                <h2 class="heading">HOTEL DAN RATING</h2>
                                <img src="images/icon-1.png" alt="icon">
                                <p>Nikmati kenyamanan dan kemewahan di setiap kamar kami yang elegan dan modern,
                                    dirancang dengan perhatian terhadap detail untuk memenuhi kebutuhan dan keinginan Anda.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="accomd-modations-content owl-single">

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a><img src="images/room/img-11.png" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <a href="#" style="font-weight: bold; font-size: 16px;">LOTUS
                                                        HOTEL</a>
                                                    <div>
                                                        <p class="price"
                                                            style="font-size: 14px; margin-top: 6px; font-weight: bold; color: #000000;">
                                                            Rp 3.500.000-8.500.000</p>

                                                    </div>
                                                </h2>
                                                <div style="display: flex; justify-content:">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#B30000"
                                                            d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.437 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125M12 12q.825 0 1.413-.587T14 10q0-.825-.587-1.412T12 8q-.825 0-1.412.588T10 10q0 .825.588 1.413T12 12" />
                                                    </svg>
                                                    <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                    <p style="margin-top: -13px; color: #FFBF43; font-size: 14px;">
                                                        PER-MALAM
                                                    </p>
                                                </div>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                        Sekarang</button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-22.png" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <a href="#" style="font-weight: bold; font-size: 16px;">FAMILY
                                                        HOTEL</a>
                                                    <div>
                                                        <p class="price"
                                                            style="font-size: 14px; margin-top: 6px; font-weight: bold; color: #000000;">
                                                            Rp 3.500.000-8.500.000</p>

                                                    </div>
                                                </h2>
                                                <div style="display: flex; justify-content:">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#B30000"
                                                            d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.437 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125M12 12q.825 0 1.413-.587T14 10q0-.825-.587-1.412T12 8q-.825 0-1.412.588T10 10q0 .825.588 1.413T12 12" />
                                                    </svg>
                                                    <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                    <p style="margin-top: -13px; color: #FFBF43; font-size: 14px;">
                                                        PER-MALAM
                                                    </p>
                                                </div>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                        Sekarang</button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-33.png" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <a href="#" style="font-weight: bold; font-size: 16px;">YOUR
                                                        HOTEL</a>
                                                    <div>
                                                        <p class="price"
                                                            style="font-size: 14px; margin-top: 6px; font-weight: bold; color: #000000;">
                                                            Rp 3.500.000-8.500.000</p>

                                                    </div>
                                                </h2>
                                                <div style="display: flex; justify-content:">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#B30000"
                                                            d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.437 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125M12 12q.825 0 1.413-.587T14 10q0-.825-.587-1.412T12 8q-.825 0-1.412.588T10 10q0 .825.588 1.413T12 12" />
                                                    </svg>
                                                    <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                    <p style="margin-top: -13px; color: #FFBF43; font-size: 14px;">
                                                        PER-MALAM
                                                    </p>
                                                </div>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                        Sekarang</button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-44.png" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <a href="#" style="font-weight: bold; font-size: 16px;">THE
                                                        HOTEL</a>
                                                    <div>
                                                        <p class="price"
                                                            style="font-size: 14px; margin-top: 6px; font-weight: bold; color: #000000;">
                                                            Rp 3.500.000-8.500.000</p>

                                                    </div>
                                                </h2>
                                                <div style="display: flex; justify-content:">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#B30000"
                                                            d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.437 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125M12 12q.825 0 1.413-.587T14 10q0-.825-.587-1.412T12 8q-.825 0-1.412.588T10 10q0 .825.588 1.413T12 12" />
                                                    </svg>
                                                    <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                    <p style="margin-top: -13px; color: #FFBF43; font-size: 14px;">
                                                        PER-MALAM
                                                    </p>
                                                </div>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                        Sekarang</button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-55.png" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <a href="#" style="font-weight: bold; font-size: 16px;">JASMINE
                                                        HOTEL</a>
                                                    <div>
                                                        <p class="price"
                                                            style="font-size: 14px; margin-top: 6px; font-weight: bold; color: #000000;">
                                                            Rp 3.500.000-8.500.000</p>

                                                    </div>
                                                </h2>
                                                <div style="display: flex; justify-content:">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#B30000"
                                                            d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.437 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125M12 12q.825 0 1.413-.587T14 10q0-.825-.587-1.412T12 8q-.825 0-1.412.588T10 10q0 .825.588 1.413T12 12" />
                                                    </svg>
                                                    <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                    <p style="margin-top: -13px; color: #FFBF43; font-size: 14px;">
                                                        PER-MALAM
                                                    </p>
                                                </div>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                        Sekarang</button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->


                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room">
                                            <div class="img">
                                                <a href="#"><img src="images/room/img-66.png" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <a href="#" style="font-weight: bold; font-size: 16px;">MARIANA
                                                        HOTEL</a>
                                                    <div>
                                                        <p class="price"
                                                            style="font-size: 14px; margin-top: 6px; font-weight: bold; color: #000000;">
                                                            Rp 3.500.000-8.500.000</p>

                                                    </div>
                                                </h2>
                                                <div style="display: flex; justify-content:">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#B30000"
                                                            d="M12 21.325q-.35 0-.7-.125t-.625-.375Q9.05 19.325 7.8 17.9t-2.087-2.762q-.838-1.338-1.275-2.575T4 10.2q0-3.75 2.413-5.975T12 2q3.175 0 5.588 2.225T20 10.2q0 1.125-.437 2.363t-1.275 2.575Q17.45 16.475 16.2 17.9t-2.875 2.925q-.275.25-.625.375t-.7.125M12 12q.825 0 1.413-.587T14 10q0-.825-.587-1.412T12 8q-.825 0-1.412.588T10 10q0 .825.588 1.413T12 12" />
                                                    </svg>
                                                    <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                    <p style="margin-top: -13px; color: #FFBF43; font-size: 14px;">
                                                        PER-MALAM
                                                    </p>
                                                </div>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                        Sekarang</button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#FFBF43"
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12" style="margin-top: 70px; text-align: center;">
                                        <p style="font-size: 16px; font-weight: bold;">Jelajahi Hotel Lainnya untuk
                                            Menemukan
                                            Penginapan Impian Anda!</p>
                                        <div style="margin-top: 30px;">
                                            <p>
                                                @auth
                                                    <!-- Jika pengguna sudah login, arahkan ke halaman menu -->
                                                    <a href="{{ route('menu') }}">
                                                        <button
                                                            style="background-color: #283E58; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 10px;">
                                                            LIHAT MENU LAINNNYA
                                                        </button>
                                                    </a>
                                                @else
                                                    <!-- Jika pengguna belum login, arahkan ke halaman login -->
                                                    <a href="{{ route('auth.login') }}">
                                                        <button
                                                            style="background-color: #283E58; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 10px;">
                                                            LIHAT MENU LAINNYA
                                                        </button>
                                                    </a>
                                                @endauth
                                            </p>
                                        </div>
                                        <div class="col-xs-12" style="margin-top: 50px; text-align: center;">
                                            <img src="images/icon.png" alt="icon">
                                        </div>
                                    </div>
                                </div>
    </section>
                <!-- GALLERY -->
                {{-- <section class="section-gallery" style="text-align: center; position: relative;">
                    <div id="kontak-section">
                        <div class="gallery no-padding">
                            <div style="position: relative; display: flex; justify-content: center;">
                                <img src="images/gp-1.png" alt="Gambar" style="width: 100%; max-width: 1200px;">
                                <div
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px #000; font-family: 'Poppins', sans-serif;">
                                    <h2 class="heading" style="font-size: 48px; color: white;">LAYANAN KAMI</h2>
                                    <p style="font-size: 24px;">Ada kendala? atau ingin memberikan masukan,</p>
                                    <p style="font-size: 24px;">silahkan isi kolom dibawah ini.</p>
                                    @auth
                                    <a href="{{ route('kontak.index') }}">
                                        <button style="background-color: #283E58; width: 199px; height: 38px; border-radius: 32px;">
                                            <span style="color: white; font-weight: bold;">HUBUNGI KAMI</span>
                                        </button>
                                    </a>
                                @else
                                    <a href="{{ route('auth.login') }}">
                                        <button style="background-color: #283E58; width: 199px; height: 38px; border-radius: 32px;">
                                            <span style="color: white; font-weight: bold;">HUBUNGI KAMI</span>
                                        </button>
                                    </a>
                                @endauth
                                </div>
                            </div>
                        </div>
                </section> --}}


    <!-- LOAD JQUERY -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <!-- validate -->
    <script type="text/javascript" src="js/lib/jquery.form.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.validate.min.js"></script>
    <!-- Custom jQuery -->
    <script type="text/javascript" src="js/scripts.js"></script>
    </body>
@endsection

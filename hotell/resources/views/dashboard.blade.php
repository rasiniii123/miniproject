@extends('layouts.app')
@section('content')
    <section>
        <li data-transition="fade" style="list-style-type: none">
            <div class="slider-container">
                <div class="logo">
                    <img src="images/kologo.png" alt="Logo" width="100">
                </div>

                <style>
                    .dropdown-container {
                        position: absolute;
                        background-color: white;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        padding: 10px;
                        z-index: 1000;
                    }
                </style>


                <script>
                    function addLoadingEffect() {
                        var loading = document.getElementById("loading");
                        if (loading) {
                            loading.style.display = "block";

                            setTimeout(function() {
                                loading.style.display = "none";
                            }, 3000);
                        } else {
                            console.error("Element with id 'loading' is not found.");
                        }
                    }
                </script>


        <li data-transition="fade" style="list-style-type: none">
            <div class="slider-container">
                <div class="logo">
                    <img src="images/kologo.png" alt="Logo" width="100">
                </div>
                <div class="menu" style="margin-left: 80px; ">
                    <ul>

                        <li><a href="#beranda-section" onclick="addLoadingEffect()">Beranda</a></li>
                        <li><a href="{{ route('menu') }}" onclick="addLoadingEffect()">Kamar</a></li>
                        <li><a href="{{ route('tentang.index') }}" onclick="addLoadingEffect()">Tentang Kami</></li>
                        @auth <!-- Check if the user is authenticated -->
                            <li><a  href="{{ route('histori') }}" onclick="addLoadingEffect()">History</a></li>
                        @endauth
                    </ul>
                    <div class="user-actions" style="display: flex; align-items: center;">
                        @auth
                            <div class="dropdown" onclick="toggleDropdown()" style="border-radius: 50px;">
                                @If (auth()->user()->profile)
                                <img src="{{ asset('storage/' . auth()->user()->profile) }}" class="rounded-circle"
                                    style="margin-right: 40px; cursor: pointer; border-radius: 50px; width: 50px; height: 50px" alt="profile">
                                    @else
                                <img src="{{asset('images/user2.png')}}" class="rounded-circle"
                                    style="margin-right: 40px; cursor: pointer; border-radius: 50px; width: 50px; height: 50px" alt="profile">
                                    @endif
                                <ul id="userDropdown" class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown"
                                style="display: none; text-align: center; left: auto; right: 50px; position: absolute; border-radius: 8px; width: 200px; height: 200px;">
                                    <li class="mx-auto flex-col">
                                        <form class="bg-transparent" class="" style="margin-top: 10px;">
                                            <a href="{{route('profile')}}" type="button" class="btn btn-link"
                                                style="padding: 0; border: none; background: none;">
                                                <div class="mx-auto"
                                                    style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                                    @if (auth()->user()->profile)
                                                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" class="rounded-circle"
                                                        style="margin-bottom: 5px; object-fit: cover; border-radius: 50px; width: 50px; height: 50px" alt="profile">
                                                        @else
                                                    <img src="{{asset('images/user2.png')}}" class="rounded-circle"
                                                        style="margin-bottom: 5px; object-fit: cover; border-radius: 50px; width: 50px; height: 50px" alt="profile">
                                                        @endif
                                                    <span
                                                        style="font-size: 20px; color: black; font-weight: bold">{{ auth()->user()->username }}</span>


                                                </div>
                                            </a>
                                        </form>
                                        <div style="display: flex; align-items: center; margin-top: 10px; margin-left: 40px;">
                                            <button onclick="redirectToProfileEdit()" class="btn btn-secondary btn-sm" style="margin-left: 10%; font-size: 14px; padding: 5px 10px;">Edit Profile</button>
                                        </div>

                                            {{-- <a href="#" onclick="showPhotoDetail()" class="btn btn-link"
                                                style="margin-left: 10px; font-size: 13px; border: 1px solid #ccc; border-radius: 8px; background-color: #ccc; color: black;">Lihat
                                                Foto</a> --}}

                                        <div style="margin-right: 0px;">
                                            <hr style="border-top: 1px solid #ccc; margin-top: 10px; width: 100%;">
                                        </div>
                                        <form action="{{ route('logout') }}" method="get" class="bg-transparent"
                                            style="margin-top: 10px; margin-right: 20px">
                                            @csrf
                                            <div style="display: flex; justify-content: center; margin-right: -20px;">
                                                <button type="submit" class="btn btn-link"
                                                    style="padding: 6px 10px; border: 1px solid #ccc; border-radius: 8px; background: none; font-size: 15px; color: #ccc;">
                                                    <i class="fas fa-sign-out-alt fa-lg"></i> Logout
                                                </button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>

                            </div>
                        @else
                            <a href="{{ route('auth.register') }}" style="margin-right: 10px;">Registrasi</a>
                            <a href="{{ route('login') }}">Login</a>
                        @endauth
                    </div>


                     <script>
                        function redirectToProfile() {
                            @auth

                            var userId = "{{ auth()->user()->id }}";
                            window.location.href = "{{ route('profile', ['id' => ':id']) }}".replace(':id', userId);
                            @endauth
                        }
                    </script>

                    <script>
                        function toggleDropdown() {
                            var dropdown = document.getElementById("userDropdown");
                            if (dropdown.style.display === "none") {
                                dropdown.style.display = "block";
                            } else {
                                dropdown.style.display = "none";
                            }
                        }
                    </script>
                    <script>
                        function redirectToProfileEdit() {
                            @auth
                            var userId = "{{ auth()->user()->id }}";
                            window.location.href = "{{ route('profile.edit', ['id' => ':id']) }}".replace(':id', userId);
                            @endauth
                        }
                    </script>
        </li>


        <div id="beranda-section">
            <img src="images/backround.png" data-bgposition="left center" data-duration="14000"
                data-bgpositionend="right center" alt="">
            <div class="description"
                style="position: absolute; top: 30%; left: 35%; transform: translateX(-50%); text-align: left; padding: 0 20px;">
                <p style="font-size: 24px; font-weight: bold; margin-top: 0;"><em>Selamat Datang Di</em></p>
                <p style="font-size: 36px; font-weight: bold; margin-top: 0;">EVERYWHERE HOTEL</p>
                <p style="font-size: 18px; max-width: 600px; margin-top: 0;">
                    Lebih dari Sekadar Penginapan, Kami Mengajak Anda untuk Mengeksplorasi Dunia dengan Pilihan kamar yang
                    Melimpah.
                    Temukan Ketenangan, Kenyamanan, dan Inspirasi di Setiap Perjalanan Anda Bersama Kami.
                <p>
                    @auth
                        <a href="{{ route('menu') }}">
                            <button onclick="addLoadingEffect()"
                                style="background-color: #283E58; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 10px;">
                                PESAN SEKARANG
                            </button>
                        </a>
                    @else
                        <a href="{{ route('login') }}">
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
                                <p style="font-size: 17px;">
                                    "Kami menawarkan berbagai Pilihan kamar Terbaik di 'everywhere',
                                    memberikanmu kemudahan dan kenyamanan dalam merencanakan liburan impianmu.
                                    Tak perlu ribet, karena hanya dengan satu aplikasi khusus,
                                    kamu bisa dengan mudah melakukan pemesanan kamar sesuai dengan destinasi pilihanmu.
                                    Tidak hanya itu, sebagai tambahan keuntungan, kami juga menyediakan berbagai promo
                                    menarik
                                    yang pastinya akan membuat liburanmu semakin istimewa.
                                    Dapatkan JAMINAN HARGA TERMURAH di 'everywhere' dan nikmati pengalaman liburan yang tak
                                    terlupakan.
                                    Jadi, tunggu apalagi? Segera siapkan liburanmu dan pesan kamar pilihanmu di 'everywhere'
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
                                    <a href="{{ route('login') }}">
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
            <div id="kamar-section">
                <div class="accomd-modations">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accomd-modations-header">
                                <h2 class="heading">KAMAR DAN RATING</h2>
                                <img src="images/icon-1.png" alt="icon">
                                <p style="font-size: 20px;">
                                    Nikmati kenyamanan dan kemewahan di setiap kamar kami yang elegan dan modern, dirancang
                                    dengan perhatian terhadap detail untuk memenuhi kebutuhan dan keinginan Anda.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="accomd-modations-content owl-single">

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-xs-4">
                                        <div class="accomd-modations-room"
                                            style="box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
                                            <div class="img">
                                                <a><img src="images/room/img-3.jpg" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <div>
                                                        <a style="font-weight: bold; font-size: 16px;">LUXURY ROOM</a>
                                                        <div style="display: flex; align-items: center;">
                                                            <p class="price"
                                                                style="font-size: 17px; font-weight: bold; color: #000000; margin-top: 6px;">
                                                                Rp 4.500.000</p>
                                                            <p
                                                                style="margin-top: 8px; color: #FFBF43; font-size: 17px; margin-left: 10px;">
                                                                / malam
                                                            </p>
                                                        </div>
                                                    </div>
                                                </h2>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px; font-size: 14px;">Pesan
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
                                        <div class="accomd-modations-room"
                                            style="box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
                                            <div class="img">
                                                <a><img src="images/room/img-1.jpg" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <div>
                                                        <a style="font-weight: bold; font-size: 16px;">COUPLE ROOM</a>
                                                        <div style="display: flex; align-items: center;">
                                                            <p class="price"
                                                                style="font-size: 17px; font-weight: bold; color: #000000; margin-top: 6px;">
                                                                Rp 5.500.000</p>
                                                            <p
                                                                style="margin-top: 8px; color: #FFBF43; font-size: 17px; margin-left: 10px;">
                                                                / malam
                                                            </p>
                                                        </div>
                                                    </div>
                                                </h2>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px; font-size: 14px;">Pesan
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
                                        <div class="accomd-modations-room"
                                            style="box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
                                            <div class="img">
                                                <a><img src="images/room/img-2.jpg" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <div>
                                                        <a style="font-weight: bold; font-size: 16px;">STANDAR ROOM</a>
                                                        <div style="display: flex; align-items: center;">
                                                            <p class="price"
                                                                style="font-size: 17px; font-weight: bold; color: #000000; margin-top: 6px;">
                                                                Rp 3.900.000</p>
                                                            <p
                                                                style="margin-top: 8px; color: #FFBF43; font-size: 17px; margin-left: 10px;">
                                                                / malam
                                                            </p>
                                                        </div>
                                                    </div>
                                                </h2>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px; font-size: 14px;">Pesan
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
                                    <div class="col-xs-4" style="margin-bottom: 30px;">
                                        <div class="accomd-modations-room"
                                            style="box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
                                            <div class="img">
                                                <a><img src="images/room/img-9.jpg" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <div>
                                                        <a style="font-weight: bold; font-size: 16px;">FAMILY ROOM</a>
                                                        <div style="display: flex; align-items: center;">
                                                            <p class="price"
                                                                style="font-size: 17px; font-weight: bold; color: #000000; margin-top: 6px;">
                                                                Rp 4.900.000</p>
                                                            <p
                                                                style="margin-top: 8px; color: #FFBF43; font-size: 17px; margin-left: 10px;">
                                                                / malam
                                                            </p>
                                                        </div>
                                                    </div>
                                                </h2>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px; font-size: 14px;">Pesan
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
                                        <div class="accomd-modations-room"
                                            style="box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
                                            <div class="img">
                                                <a><img src="images/room/img-8.jpg" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <div>
                                                        <a style="font-weight: bold; font-size: 16px;">DELUXE ROOM</a>
                                                        <div style="display: flex; align-items: center;">
                                                            <p class="price"
                                                                style="font-size: 17px; font-weight: bold; color: #000000; margin-top: 6px;">
                                                                Rp 6.700.000</p>
                                                            <p
                                                                style="margin-top: 8px; color: #FFBF43; font-size: 17px; margin-left: 10px;">
                                                                / malam
                                                            </p>
                                                        </div>
                                                    </div>
                                                </h2>
                                                <div class="d-flex" style="display: flex; justify-content: space-between">
                                                    <button class="btn btn-primary"
                                                        style="background-color: #382E2E; width: 199px; height: 38px; font-size: 14px;">Pesan
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
                                        <div class="accomd-modations-room"
                                            style="box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);">
                                            <div class="img">
                                                <a><img src="images/room/img-4.jpg" alt=""></a>
                                            </div>
                                            <div class="">
                                                <h2 style="display: flex; justify-content: space-between;">
                                                    <a style="font-weight: bold; font-size: 16px;">SINGLE
                                                        ROOM</a>
                                                </h2>
                                                <div style="display: flex; align-items: center;">
                                                    <p class="price"
                                                        style="font-size: 20px; font-weight: bold; color: #000000; margin-top: 6px;">
                                                        RRp 2.200.000</p>
                                                    <p
                                                        style="margin-top: 8px; color: #FFBF43; font-size: 20px; margin-left: 10px;">
                                                        / malam
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex" style="display: flex; justify-content: space-between">
                                                <button class="btn btn-primary"
                                                    style="background-color: #382E2E; width: 199px; height: 38px; font-size: 14px;">Pesan
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
                                    <p style="font-size: 20px; font-weight: bold;">Jelajahi kamar Lainnya untuk
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
                                                <a href="{{ route('login') }}">
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
    {{-- GALLERY
<section class="section-gallery" style="text-align: center; position: relative; margin-top: -90px;">
        <div id="kontak-section">
            <div class="gallery" style="padding-top: 10px; margin-button: 50px">
                <div style="position: relative; display: flex; justify-content: center;">
                    <img src="images/gp-1.png" alt="Gambar">
                    <div
                        style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px #000; font-family: 'Poppins', sans-serif;">
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
    {{-- <script type="text/javascript" src="js/lib/owl.carousel.js"></script> --}}
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

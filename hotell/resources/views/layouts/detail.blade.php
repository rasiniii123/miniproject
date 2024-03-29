<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>detailmenu</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700" rel='stylesheet'
        type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha256-TkuZP5anekbHsP5QhG9UcxV1UiN06dF0VrH2eW2vbqA=" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header id="header">
        <div class="header-wrap">
            <body>
                <!-- HEADER -->
                <header id="header" >
                    <div class="header-wrap" style="background-color: #283E58;">
                        <div class="slider-container">
                            <div class="logo">
                                <img src="images/kologo.png" alt="Logo" width="100">
                            </div>
                            <div class="menu">
                                <ul>
                                    <li><a href="#beranda-section" onclick="addLoadingEffect()">Beranda</a></li>
                                    <li><a href="#hotel-section" onclick="addLoadingEffect()">Hotel</a></li>
                                    <li><a href="#about-section" onclick="addLoadingEffect()">Tentang Kami</a></li>
                                    <li><a href="#kontak-section" onclick="addLoadingEffect()">Kontak</a></li>
                                </ul>
                                <div class="user-actions">
                                    @auth <!-- Cek apakah pengguna sudah login -->
                                        <a href="{{ route('profile.show') }}">Profile</a> <!-- Tautan untuk profil -->
                                        <span>{{ auth()->user()->name }}</span> <!-- Menampilkan nama pengguna -->
                                        <form action="{{ route('logout') }}" method="post"> <!-- Form untuk logout -->
                                            @csrf
                                            <button type="submit">Logout</button>
                                        </form>
                                    @else
                                        <!-- Jika pengguna belum login -->
                                        <a href="{{ route('auth.register') }}">Register</a> <!-- Tautan untuk register -->
                                        <a href="{{ route('auth.login') }}">Login</a> <!-- Tautan untuk login -->
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

            <div class="main-content">
                <div class="page-content">
                    @yield('content')
                </div>
            </div>

    <!-- Footer -->
    <footer id="footer">
        <!-- Footer Top -->
        <div class="footer-top" style="background: #283646;padding: 2rem 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#"><img src="images/kologo.png"></a>
                        <div style="width: 613.65px; height: 32px; padding-top: 4.33px; padding-bottom: 3.67px; padding-left: 0.26px; padding-right: 168.39px; justify-content: flex-start; align-items: flex-start; gap: 51px; display: inline-flex">
                            <div style="color: white; font-size: 15px; font-family: Arial; font-weight: 400; line-height: 24px; letter-spacing: 0.30px; word-wrap: break-word">Beranda</div>
                            <div style="color: white; font-size: 15px; font-family: Arial; font-weight: 400; line-height: 24px; letter-spacing: 0.30px; word-wrap: break-word">Hotel</div>
                            <div style="color: white; font-size: 15px; font-family: Arial; font-weight: 400; line-height: 24px; letter-spacing: 0.30px; word-wrap: break-word">Tentang Kami</div>
                            <div style="color: white; font-size: 15px; font-family: Arial; font-weight: 400; line-height: 24px; letter-spacing: 0.30px; word-wrap: break-word">Kontak</div>
                        </div>
                        <div style="width: 1170px; height: 2.67px; border: 1px #71777D solid"></div>
                        <div style="display: flex; align-items: center; justify-content: flex-end; margin-top: 10px; margin-right: -600px;">
                            <a href="#" style="color: #fff; margin-right: 10px;"><img src="images/Vector.png" alt="YouTube" style="width: 18px; height: 18px;"></a>
                            <a href="#" style="color: #fff; margin-right: 10px;"><img src="images/instragram.png" alt="Instagram" style="width: 18px; height: 18px;"></a>
                            <a href="#" style="color: #fff; margin-right: 10px;"><img src="images/twiter.png" alt="Twitter" style="width: 18px; height: 18px;"></a>
                            <a href="#" style="color: #fff; margin-right: 10px;"><img src="images/gmail.png" alt="Email" style="width: 18px; height: 18px;"></a>
                        </div>
                    </div>

                    <div class="col-md-6" style="display: flex; justify-content: flex-end;  margin-top: 50px;">
                        <div style="width: 300px; height: 70px; padding-bottom: 10px; display: flex; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 10px; margin-top: -20px;">
                            <div style="width: 300px; color: white; font-size: 14px; font-family: Arial; font-weight: 400; line-height: 20px; text-align: right; margin-right: -80px;">Hubungi Kami</div>
                        </div>
                        <div style="width: 300px; height: 40px; position: relative;">
                            <div style="width: 90px; height: 40px; position: absolute; right: 0; top: 0; display: flex; justify-content: center; align-items: center;">
                                <div style="width: 90px; height: 40px; background: #3A86FF; border-radius: 6px; margin-right: 10px; display: flex; justify-content: center; align-items: center;">
                                    <span style="color: white; font-size: 14px;">Kontak</span>
                                </div>
                                <div style="width: 210px; height: 40px; position: absolute; right: 100px; top: 0; background: white; border-radius: 6px; border: 1px #B3BDC7 solid; display: flex; justify-content: center; align-items: center;">
                                    <span style="color: #333; font-size: 14px;">hello@everywhere.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom" style="padding: 7px 0;"> <!-- Atur padding untuk memperbesar footer -->
            <div class="container">
                <div class="text-center" style="color: white;">Design with love © TanahAirStudio 2020. All right reserved</div>
            </div>
        </div>
    </footer>
            <!-- END / FOOTER -->

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

            @if (session('success'))
            <script>
                Swal.fire({
                    title: 'Registrasi Berhasil',
                    text: 'Selamat datang di situs kami!',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                });
            </script>
            @endif

            @if (session('logout_success'))
            <script>
                Swal.fire({
                    title: 'Logout Berhasil',
                    text: 'Anda telah berhasil keluar.',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                });
            </script>
            @endif

</body>

</html>

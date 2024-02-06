<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Index 1</title>

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

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>

    <div id="page-wrap">
        <header id="header">
            <div class="header_top">
                <div class="container">

                    <div class="header_right float-right">

                        <span class="login-register">
                            <a href="{{ route('auth.register') }}">Register</a>
                            <a href="{{ route('auth.login') }}">Login</a>
                        </span>

                        <div class="dropdown currency">
                            <span>USD <i class="fa fa"></i></span>
                            <ul>
                                <li class="{{ Request::is('logout') ? 'active' : '' }}">
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                <li class="active">
                                    <a href="#" onclick="document.getElementById('logout-form').submit();">Log
                                        out</a>
                                </li>
                                </form>
                                </li>
                            </ul>
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
        <script type="text/javascript" src="js/lib/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/lib/jquery.validate.min.js"></script>
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

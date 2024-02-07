<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>EveryWhere</title>

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
                    <div class="col-xs-12 col-lg-5">
                        <div class="img">
                            <a href="#"><img src="images/logologo.png" alt=""></a>
                        </div>

                        <div class="header_right float-right">

                            <span class="login-register">
                                <a href="{{ route('auth.login') }}">Login</a>
                                <a href="{{ route('auth.register') }}">Register</a>
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

                <div class="col-xs-12 col-lg-5">
                    <div class="widget widget_logo">
                        <div class="widget-logo">
        </header>
        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>
            <footer id="footer">

                <div class="footer_top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-9">
                                <div class="mailchimp">
                                    <h4>News &amp; Offers</h4>
                                    <div class="mailchimp-form">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer_center">
                    <div class="container">
                        <div class="row">

                            <div class="col-xs-12 col-lg-5">
                                <div class="widget widget_logo">
                                    <div class="widget-logo">
                                        <div class="img">
                                            <a href="#"><img src="images/logoevery.png" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                            <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                            <p><i class="fa fa-envelope-o"></i> <a
                                                    href="https://landing.engotheme.com/cdn-cgi/l/email-protection#365e535a5a5976425e535a594243455e5942535a1855595b"><span
                                                        class="__cf_email__"
                                                        data-cfemail="6d05080101022d190508010219181e0502190801430e0200">[email&#160;protected]</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">Page site</h4>
                                    <ul>
                                        <li><a href="#">Guest Book</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Event</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">ABOUT</h4>
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Comming Soon</a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="container">
                        <p>&copy; EveryWhere</p>
                    </div>
                </div>
            </footer>

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

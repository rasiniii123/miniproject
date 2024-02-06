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

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700" rel='stylesheet'
        type='text/css'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

   
</head>

<body> <!--<![endif]-->

    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header">

            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">

                    <div class="header_right float-right">
                        <section class="section-slider">

                        <span class="login-register">
                            <a href="{{ route('auth.register') }}">Register</a>
                            <a href="{{ route('auth.login') }}">Login</a>
                        </span>

                        {{-- <div class="dropdown currency">
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
                        </div> --}}


                    </div>
                </div>
            </div>

            <!-- END / HEADER TOP -->

            <!-- HEADER LOGO & MENU -->
            {{-- <div class="header_content" id="header_content"> --}}

                {{-- <div class="container"> --}}
                    <!-- HEADER LOGO -->
                    {{-- <div class="header_logo">
                        <a href="#"><img src="images/everywhere.png" alt="" width="200" height="200"></a>
                    </div> --}}
                    <!-- END / HEADER LOGO -->

                    <!-- HEADER MENU -->
                    {{-- <nav class="header_menu">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <a href="index.html">Home </a> --}}
                                {{-- <ul class="sub-menu">
                                    <li class="current-menu-item"><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="about.html">About</a></li>

                            <li>
                                <a href="#">Room </a> --}}
                                {{-- <ul class="sub-menu">
                                    <li><a href="room-1.html">Room 1</a></li>
                                    <li><a href="room-2.html">Room 2</a></li>
                                    <li><a href="room-3.html">Room 3</a></li>
                                    <li><a href="room-4.html">Room 4</a></li>
                                    <li><a href="room-5.html">Room 5</a></li>
                                    <li><a href="room-6.html">Room 6</a></li>
                                    <li><a href="room-detail.html">Room Detail</a></li>
                                </ul> --}}
                                {{-- </li>
                                    <li> --}}
                                        {{-- <a href="#">Restaurant</a> --}}
                                        {{-- <ul class="sub-menu">
                                            <li><a href="restaurants-1.html">Restaurant 1</a></li>
                                            <li><a href="restaurants-2.html">Restaurant 2</a></li>
                                            <li><a href="restaurants-3.html">Restaurant 3</a></li>
                                            <li><a href="restaurants-4.html">Restaurant 4</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li>
                                        <a href="#">Reservation </a> --}}
                                        {{-- <ul class="sub-menu">
                                    <li><a href="reservation-step-1.html">Reservation Step 1</a></li>
                                    <li><a href="reservation-step-2.html">Reservation Step 2</a></li>
                                    <li><a href="reservation-step-3.html">Reservation Step 3</a></li>
                                    <li><a href="reservation-step-4.html">Reservation Step 4</a></li>
                                    <li><a href="reservation-step-5.html">Reservation Step 5</a></li>
                                </ul> --}}
                                {{-- </li> --}}
                            {{-- <li>
                                <a href="#">Page </a> --}}
                                {{-- <ul class="sub-menu">
                                    <li>
                                        <a href="#">Guest Book <span class="fa fa-caret-right"></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="guest-book.html">Guest Book 1</a></li>
                                            <li><a href="guest-book-2.html">Guest Book 2</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#">Event <span class="fa fa-caret-right"></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-fullwidth.html">Events Fullwidth</a></li>
                                            <li><a href="events-detail.html">Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="attractions.html">Attractions</a>
                                    </li>
                                    <li>
                                        <a href="#">Term Condition <span class="fa fa-caret-right"></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="term-condition.html">Term Condition 1</a></li>
                                            <li><a href="term-condition-2.html">Term Condition 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Activiti <span class="fa fa-caret-down"></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="activiti.html">Activiti</a></li>
                                            <li><a href="activiti-detail.html">Activiti Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="check-out.html">Check Out</a></li>
                                    <li><a href="shortcode.html">ShortCode</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                    <li><a href="comingsoon.html">Comming Soon</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li>
                                <a href="#">Gallery </a> --}}
                                {{-- <ul class="sub-menu">
                                    <li><a href="gallery.html">Gallery Style 1</a></li>
                                    <li><a href="gallery-2.html">Gallery Style 2</a></li>
                                    <li><a href="gallery-3.html">Gallery Style 3</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li>
                                <a href="#">Blog </a> --}}
                                {{-- <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                    <li><a href="blog-detail-fullwidth.html">Blog Detail Fullwidth</a></li>
                                </ul> --}}
                            {{-- </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav> --}}
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    {{-- <span class="menu-bars">
                        <span></span>
                    </span> --}}
                    <!-- END / MENU BAR -->
{{--
                </div>
            </div> --}}
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>
            <!-- END / GALLERY -->

            <!-- FOOTER -->
            <footer id="footer">


                <!-- FOOTER CENTER -->
                <div class="footer_center">
                    <div class="container">
                        <div class="row">

                            <div class="footer_center">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-xs-12 col-lg-5" style="margin-bottom: 20px; margin-top: -30px;">
                                            <div class="widget custom-logo">
                                                <div class="widget-logo">
                                                    <div class="img">
                                                        <a href="#"><img src="images/logoevery.png" alt="" style="margin-top: -30px"></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12" style="text-align: right;">
                                                <div class="menu">
                                                    <ul style="display: flex;" >
                                                        <li style=""><a href="#" style="color: #fff;">Beranda</a></li>
                                                        <li style=""><a href="#" style="color: #fff;">Hotel</a></li>
                                                        <li style="white-space: nowrap;"><a href="#" style="color: #fff;">Tentang Kami</a></li>
                                                        <li><a href="#" style="color: #fff;">Kontak</a></li>
                                                    </ul>
                                                    <div class="underline"></div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-xs-4 col-lg-2">
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
                            </div> --}}



                            </div>
                        </div>
                    </div>
                </div>
            </footer>
                        </div>
                    </div>
                </div>

                <div class="footer_bottom" style="text-align: center;">
                    <div class="container">
                        <p>&copy; EveryWhere</p>
                    </div>
                </div>


            </footer>


        </div>
        <!-- END / PAGE WRAP -->


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

<!-- Mirrored from landing.engotheme.com/html/lotus/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 12:43:53 GMT -->

</html>

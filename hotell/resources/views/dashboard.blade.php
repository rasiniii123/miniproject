@extends('layouts.app')
@section('content')
<section>
{{-- <li data-transition="fade">
    <img src="images/slider/img-5.jpg" data-bgposition="left center" data-duration="14000"
    data-bgpositionend="right center" alt="">

    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="100"
                        data-speed="700" data-start="1500" data-easing="easeOutBack">
                        <img src="images/slider/hom1-slide1.png" alt="icons">
                    </div>

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240"
                    data-speed="700" data-start="1500" data-easing="easeOutBack">
                    WELCOME TO
                </div>



                <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center"
                data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
            </li> --}}


            <li data-transition="fade" style="list-style-type: none">
                <div class="slider-container">
                    <div class="logo">
                        <img src="images/kologo.png" alt="Logo" width="100">
                    </div>
                        <div class="menu">
                            <ul>
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Kontak</a></li>
                           </ul>
                        </div>
                </div>
            </li>




            {{-- <div style="position: relative; overflow: hidden; margin-top: -50px;"> --}}
                {{-- <div style="position: relative; overflow: hidden; margin-top: -30px;"> --}}
                    <img src="images/backround.png" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">
                    <div class="description" style="position: absolute; top: 30%; left: 35%; transform: translateX(-50%); text-align: left; padding: 0 20px;">
                        <p style="font-size: 24px; font-weight: bold; margin-top: 0;"><em>Selamat Datang Di</em></p>
                        <p style="font-size: 36px; font-weight: bold; margin-top: 0;">EVERYWHERE HOTEL</p>
                        <p style="font-size: 18px; max-width: 600px; margin-top: 0;">
                            Lebih dari Sekadar Penginapan, Kami Mengajak Anda untuk Mengeksplorasi Dunia dengan Pilihan Hotel yang Melimpah.
                            Temukan Ketenangan, Kenyamanan, dan Inspirasi di Setiap Perjalanan Anda Bersama Kami.
                        </p>
                        <button style="background-color: #283E58; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 10px;">PESAN SEKARANG</button>
                    </div>
                </div>
            </div>



                    {{-- <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300"
                        data-easing="easeOutBack">
                        <img src="images/icon-slider-1.png" alt="">
                    </div>

                    <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                        data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                        EACH HOTEL IS
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260"
                        data-speed="700" data-easing="easeOutBack" data-start="2000">
                        UNIQUE 60%
                    </div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                        data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">JUST LIKE YOU</div>

                    <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center"
                        data-y="395" data-easing="easeOutBack" data-speed="700" data-start="2400"><img
                            src="images/icon-slider-2.png" alt=""></div>
                </li>

            </ul>
        </div> --}}

    </section>
    <!-- END / BANNER SLIDER -->

    <!-- CHECK AVAILABILITY -->
    {{-- <section class="section-check-availability">
        <div class="container">
            <div class="check-availability">
                <div class="row">
                    <div class="col-lg-3">
                        <h2>CHECK AVAILABILITY</h2>
                    </div>
                    <div class="col-lg-9">
                        <form id="ajax-form-search-room"
                            action="https://landing.engotheme.com/html/lotus/demo/search_step_2.php" method="post">
                            <div class="availability-form">
                                <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                                <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                                <select class="awe-select" name="adults">
                                    <option>Adults</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="awe-select" name="children">
                                    <option>Children</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="vailability-submit">
                                    <button class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- END / CHECK AVAILABILITY -->

    <!-- ACCOMD ODATIONS -->
    <section class="section-accomd awe-parallax bg-14">
        <div class="container">
            <div class="accomd-modations">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accomd-modations-header">
                            <h2 class="heading">ROOMS & RATES</h2>
                            <img src="images/icon-accmod.png" alt="icon">
                            <p>Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna
                                vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="accomd-modations-content owl-single">

                            <div class="row">

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-1.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Luxury Room</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/days
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-2.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Family Room</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/days
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-3.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Couple Room</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/days
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-4.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Standard</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/day
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-5.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Standard</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/day
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->


                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-6.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Standard</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/day
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->


                            </div>

                            <div class="row">

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-6.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Luxury Room</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/days
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-5.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Family Room</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/days
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-4.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Couple Room</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/days
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-3.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Standard</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/day
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-2.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Standard</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/day
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="col-xs-4">
                                    <div class="accomd-modations-room">
                                        <div class="img">
                                            <a href="#"><img src="images/room/img-1.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <h2><a href="#">Standard</a></h2>
                                            <p class="price">
                                                <span class="amout">$320</span>/day
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END / ACCOMD ODATIONS -->

    <!-- ABOUT -->
    <section class="section-home-about bg-white">
        <div class="container">
            <div class="home-about">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <a href="#"><img src="images/home/about/img-1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text">
                            <h2 class="heading">ABOUT US</h2>
                            <span class="box-border"></span>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the
                                word in classical literature, discovered the undoubtable source</p>
                            <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / ABOUT -->

    <!-- OUR BEST -->
    <section class="section-our-best bg-white">
        <div class="container">

            <div class="our-best">
                <div class="row">

                    <div class="col-md-6 col-md-push-6">
                        <div class="img">
                            <img src="images/home/ourbest/img-1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 col-md-pull-6 ">
                        <div class="text">
                            <h2 class="heading">Our Best</h2>
                            <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of
                                Avalon's leading hotels with gracious island hospitality, thoughtful amenities and
                                distinctive .</p>
                            <ul>
                                <li><img src="images/home/ourbest/icon-3.png" alt="icon">250 Best Rooms 5 Star</li>
                                <li><img src="images/home/ourbest/icon-2.png" alt="icon">Wet Bar with Refrigerator
                                </li>
                                <li><img src="images/home/ourbest/icon-4.png" alt="icon">Double Whirlpool Jacuzzi Tub
                                </li>
                                <li><img src="images/home/ourbest/icon-5.png" alt="icon">Luxurious High Thread Count
                                </li>
                                <li><img src="images/home/ourbest/icon-1.png" alt="icon">Breakfast each morning</li>
                                <li><img src="images/home/ourbest/icon-6.png" alt="icon">Ocean Views to lotus Hotel
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END / OUR BEST -->

    <!-- HOME GUEST BOOK -->
    <div class="section-home-guestbook awe-parallax bg-13">
        <div class="container">
            <div class="home-guestbook">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="guestbook-content owl-single">
                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="img">
                                    <img src="images/avatar/img-5.jpg" alt="">
                                </div>

                                <div class="text">
                                    <p>This is the only place to stay in Catalina! I have stayed in the cheaper hotels and
                                        they were fine, but this is just the icing on the cake! After spending the day bike
                                        riding and hiking to come back and enjoy a glass of wine while looking out your
                                        ocean view window and then to top it all off...</p>
                                    <span><strong>Seelentag</strong></span><br>
                                    <span>From Los Angeles, California</span>
                                </div>
                            </div>
                            <!-- ITEM -->

                            <!-- ITEM -->
                            <div class="guestbook-item">
                                <div class="img">
                                    <img src="images/avatar/img-5.jpg" alt="">
                                </div>

                                <div class="text">
                                    <p>This is the only place to stay in Catalina! I have stayed in the cheaper hotels and
                                        they were fine, but this is just the icing on the cake! After spending the day bike
                                        riding and hiking to come back and enjoy a glass of wine while looking out your
                                        ocean view window and then to top it all off...</p>
                                    <span><strong>Seelentag</strong></span><br>
                                    <span>From Los Angeles, California</span>
                                </div>
                            </div>
                            <!-- ITEM -->

                        </div>
                    </div>
                </div>

            </div>
            </section>
            <!-- END / GALLERY -->

            <!-- FOOTER -->
            {{-- <footer id="footer">

            <!-- FOOTER TOP -->
            <div class="footer_top">
                <div class="container">
                    <div class="row">

                        <!-- WIDGET MAILCHIMP -->
                        <div class="col-lg-9">
                            <div class="mailchimp">
                                <h4>News &amp; Offers</h4>
                                <div class="mailchimp-form">
                                    <form action="#" method="POST">
                                        <input type="text" name="email" placeholder="Your email address" class="input-text">
                                        <button class="awe-btn">SIGN UP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET MAILCHIMP -->

                        <!-- WIDGET SOCIAL -->
                        <div class="col-lg-3">
                            <div class="social">
                                <div class="social-content">
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / WIDGET SOCIAL -->

                    </div>
                </div>
            </div>
            <!-- END / FOOTER TOP -->

            <!-- FOOTER CENTER -->
            <div class="footer_center">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-lg-5">
                            <div class="widget widget_logo">
                                <div class="widget-logo">
                                    <div class="img">
                                        <a href="#"><img src="images/logo-footer.png" alt=""></a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                        <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#365e535a5a5976425e535a594243455e5942535a1855595b"><span class="__cf_email__" data-cfemail="6d05080101022d190508010219181e0502190801430e0200">[email&#160;protected]</span></a></p>
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
                                    <li><a href="#">Restaurant</a></li>
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

                        <div class="col-xs-4 col-lg-3">
                            <div class="widget widget_tripadvisor">
                                <h4 class="widget-title">Tripadvisor</h4>
                                <div class="tripadvisor">
                                    <p>Now with hotel reviews by</p>
                                    <img src="images/tripadvisor.png" alt="">
                                    <span class="tripadvisor-circle">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i class="part"></i>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END / FOOTER CENTER -->

            <!-- FOOTER BOTTOM -->
            <div class="footer_bottom">
                <div class="container">
                    <p>&copy; 2016 Lotus Hotel All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer> --}}
            <!-- END / FOOTER -->

        </div>
        <!-- END / HOME GUEST BOOK -->

        <!-- HOME NEW -->
        {{-- <section class="section-event-news bg-white">
            <div class="container">

                <div class="event-news">
                    <div class="row">

                        <!-- EVENT -->
                        <div class="col-md-6">
                            <div class="event">
                                <h2 class="heading">EVENT &amp; DEAL</h2>
                                <span class="box-border w350"></span>

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="event-slide owl-single">

                                            <div class="event-item">
                                                <div class="img hover-zoom">
                                                    <a href="#">
                                                        <img src="images/home/eventdeal/img-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="event-item">
                                                <div class="img hover-zoom">
                                                    <a href="#">
                                                        <img src="images/home/eventdeal/img-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-6">
                                        <div class="event-item">
                                            <div class="img">
                                                <a class="hover-zoom" href="#">
                                                    <img src="images/home/eventdeal/img-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="text">
                                                <div class="text-cn">
                                                    <h2>SAVE THE DATE</h2>
                                                    <span>BECCA &amp; ROBERT</span>
                                                    <a href="#" class="awe-btn awe-btn-12">VIEW MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-xs-6">
                                        <div class="event-item">
                                            <div class="img">
                                                <a class="hover-zoom" href="#">
                                                    <img src="images/home/eventdeal/img-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="text">
                                                <div class="text-cn">
                                                    <h2>GO ON BEACH. lotus </h2>
                                                    <a href="#" class="awe-btn awe-btn-12">VIEW MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>
                            </div>
                        </div>
                        <!-- END / EVENT -->

                        <!-- NEWS -->
                        <div class="col-md-6">
                            <div class="news">
                                <h2 class="heading">NEWS</h2>
                                <span class="box-border w350 space-5"></span>

                                <div class="row">

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="#"><img src="images/home/lotusnews/img-1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">21 / March</span>
                                                <h2><a href="#">UPDATE MENU FOOD IN lotus HOTEL</a></h2>
                                                <a href="#" class="read-more">[ Read More ]</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="#"><img src="images/home/lotusnews/img-2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">8 / March</span>
                                                <h2><a href="#">WEDDING DAY JONATHA &amp; JESSICA</a></h2>
                                                <a href="#" class="read-more">[ Read More ]</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="img">
                                                <a href="#"><img src="images/home/lotusnews/img-3.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="text">
                                                <span class="date">16 / February</span>
                                                <h2><a href="#">THE BEST WEDDING GUIDE 2015</a></h2>
                                                <a href="#" class="read-more">[ Read More ]</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                                <a href="#" class="awe-btn awe-btn-default">VIEW MORE</a>

                            </div>

                        </div>
                        <!-- END / NEWS -->

                    </div>

                    <div class="hr"></div>

                </div>

            </div>
        </section> --}}
        <!-- END / HOME NEW -->

        <!-- GALLERY -->
        <section class="section-gallery bg-white">

            <div class="gallery  no-padding">
                <h2 class="heading text-center">GALLERY</h2>

                <!-- FILTER -->
                <div class="gallery-cat text-center">
                    <ul class="list-inline">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                        <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                        <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                        <li><a href="#" data-filter=".dining">DINING</a></li>
                    </ul>
                </div>
                <!-- END / FILTER -->

                <!-- GALLERY CONTENT -->
                <div class="gallery-content hover-img">
                    <div class="row">
                        <div class="gallery-isotope col-6 pd-0">

                            <!-- ITEM SIZE -->
                            <div class="item-size"></div>
                            <!-- END / ITEM SIZE -->
                            <!-- ITEM -->

                            <div class="item-isotope suite dining ">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom suite">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-7.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope bathroom suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-8.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope bathroom suite dining">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-9.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-10.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom suite ">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-11.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom">
                                <div class="gallery_item">
                                    <a href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image"
                                        title="Luxury Room view all">
                                        <img src="images/gallery/img-12.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                        </div>
                    </div>

                    <div class="our-gallery text-center">
                        <a href="#" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
                    </div>

                </div>
                <!-- GALLERY CONTENT -->

            </div>
        </section>


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

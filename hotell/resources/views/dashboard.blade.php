@extends('layouts.app')
@section('content')
    <section class="section-slider">
        <h1 class="element-invisible">Slider</h1>
        <div id="slider-revolution">
            <ul>
                <li data-transition="fade">
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

                    <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280"
                        data-speed="700" data-easing="easeOutBack" data-start="2000">THE LOTUS HOTEL</div>

                    <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center"
                        data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                </li>

                <li data-transition="fade">
                    <img src="images/slider/img-4.jpg" data-bgposition="left center" data-duration="14000"
                        data-bgpositionend="right center" alt="">

                    <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300"
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
        </div>

    </section>

    <section class="section-home-about bg-white">
        <div class="container">
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
                                Tidak hanya itu, sebagai tambahan keuntungan, kami juga menyediakan berbagai promo menarik
                                yang pastinya akan membuat liburanmu semakin istimewa.
                                Dapatkan JAMINAN HARGA TERMURAH di 'everywhere' dan nikmati pengalaman liburan yang tak
                                terlupakan.
                                Jadi, tunggu apalagi? Segera siapkan liburanmu dan pesan hotel pilihanmu di 'everywhere'
                                sekarang juga!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ACCOMD ODATIONS -->
    <section class="section-accomd awe-parallax bg-14">
        <div class="container">
            <div class="accomd-modations">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accomd-modations-header">
                            <h2 class="heading">HOTEL DAN RATING</h2>
                            <img src="images/icon-1.png" alt="icon">
                            <p>Nikmati kenyamanan dan kemewahan di setiap kamar kami yang elegan dan modern,
                                dirancang dengan perhatian terhadap detail untuk memenuhi kebutuhan dan keinginan Anda.</p>
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
                                                        style="font-size: 14px; margin-top: 0; font-weight: bold; color: #000000;">
                                                        Rp 3.500.000-8.500.000</p>
                                                    <p style="margin-top: 5px; font-size: 14px;">per malam</p>
                                                </div>
                                            </h2>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/icon-pt.png" alt="icon"
                                                    style="margin-bottom: -1px; margin-kanan: 2px ;">
                                                <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; width: 15px;">
                                            </div>
                                            <button class="btn btn-primary"
                                                style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                Sekarang</button>
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
                                                        style="font-size: 14px; margin-top: 0; font-weight: bold; color: #000000;">
                                                        Rp 2.200.000-4.500.000</p>
                                                    <p style="margin-top: 5px; font-size: 14px;">per malam</p>
                                                </div>
                                            </h2>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/icon-pt.png" alt="icon"
                                                    style="margin-bottom: -1px; margin-kanan: 2px ;">
                                                <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; width: 15px;">
                                            </div>
                                            <button class="btn btn-primary"
                                                style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                Sekarang</button>
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
                                                        style="font-size: 14px; margin-top: 0; font-weight: bold; color: #000000;">
                                                        Rp 3.900.000-6.700.000</p>
                                                    <p style="margin-top: 5px; font-size: 14px;">per malam</p>
                                                </div>
                                            </h2>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/icon-pt.png" alt="icon"
                                                    style="margin-bottom: -1px; margin-kanan: 2px ;">
                                                <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; width: 15px;">
                                            </div>
                                            <button class="btn btn-primary"
                                                style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                Sekarang</button>
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
                                                        style="font-size: 14px; margin-top: 0; font-weight: bold; color: #000000;">
                                                        Rp 5.000.000-9.000.000</p>
                                                    <p style="margin-top: 5px; font-size: 14px;">per malam</p>
                                                </div>
                                            </h2>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/icon-pt.png" alt="icon"
                                                    style="margin-bottom: -1px; margin-kanan: 2px ;">
                                                <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; width: 15px;">
                                            </div>
                                            <button class="btn btn-primary"
                                                style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                Sekarang</button>
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
                                                        style="font-size: 14px; margin-top: 0; font-weight: bold; color: #000000;">
                                                        Rp 5.000.000-3.000.000</p>
                                                    <p style="margin-top: 5px; font-size: 14px;">per malam</p>
                                                </div>
                                            </h2>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/icon-pt.png" alt="icon"
                                                    style="margin-bottom: -1px; margin-kanan: 2px ;">
                                                <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; width: 15px;">
                                            </div>
                                            <button class="btn btn-primary"
                                                style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                Sekarang</button>
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
                                                        style="font-size: 14px; margin-top: 0; font-weight: bold; color: #000000;">
                                                        Rp 4.5000.000-12.000.000</p>
                                                    <p style="margin-top: 5px; font-size: 14px;">per malam</p>
                                                </div>
                                            </h2>
                                            <div style="display: flex; align-items: center;">
                                                <img src="images/icon-pt.png" alt="icon"
                                                    style="margin-bottom: -1px; margin-kanan: 2px ;">
                                                <p style="margin-top: 5px;">Malang, Jawa Timur Indonesia</p>
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; margin-right: 2px; width: 15px;">
                                                <img src="images/vc.png" alt="star"
                                                    style="margin-bottom: -1px; width: 15px;">
                                            </div>
                                            <button class="btn btn-primary"
                                                style="background-color: #382E2E; width: 199px; height: 38px;">Pesan
                                                Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12" style="margin-top: 20px; text-align: center;">
                                    <p style="font-size: 16px; font-weight: bold;">
                                        Jelajahi Hotel Lainnya untuk Menemukan Penginapan Impian Anda!
                                    </p>
                                    <div>
                                        <button class="btn btn-primary"
                                            style="background-color: #382E2E; width: 199px; height: 38px; border-radius: 10px;">
                                            LIHAT MENU LAINNYA
                                        </button>
                                    </div>
                                    <div>
                                        <img src="images/icon.png" alt="icon">
                                    </div>
                                </div>
    </section>
    <!-- GALLERY -->
    <section class="section-gallery" style="text-align: center; position: relative;">
        <div class="gallery no-padding">
            <div style="position: relative; display: flex; justify-content: center;">
                <img src="images/gp-1.png" alt="Gambar" style="width: 100%; max-width: 1200px;">
                <div
                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-shadow: 2px 2px 4px #000; font-family: 'Poppins', sans-serif;">
                    <h2 class="heading" style="font-size: 48px; color: white;">LAYANAN KAMI</h2>
                    <p style="font-size: 24px;">Ada kendala? atau ingin memberikan masukan,</p>
                    <p style="font-size: 24px;">silahkan isi kolom dibawah ini.</p>
                    <button 
                    style="background-color: #283E58; width: 199px; height: 38px; border-radius: 32px;">
                    HUBUNGI KAMI
                </button>
                </div>
            </div>
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

@extends ('layouts.yss')
@section('content')
    <section class="section-home-about bg-white">
        <div class="container" style="overflow-y: auto;">
            <div id="about-section">
                <div class="home-about">
                    <div class="row align-items-start">
                            <div class="text text-center">
                                <h2 class="heading">LAYANAN KAMI</h2>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <input type="text" name="nama" id="nama" class="form-control" style="color: black; font-size: 24px; font-family: Poppins; font-weight: 300; word-wrap: break-word;" placeholder="Nama">
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <input type="email" name="email" id="email" class="form-control" style="color: black; font-size: 24px; font-family: Poppins; font-weight: 300; word-wrap: break-word;" placeholder="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="pesan" id="pesan" class="form-control" style="color: black; font-size: 24px; font-family: Poppins; font-weight: 300; word-wrap: break-word; height: 100px;" placeholder="Pesan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="img">
                                        <a><img src="images/detail.png" alt="" style="width: 70%;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

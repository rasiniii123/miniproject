@extends('layouts.yss')
@section('content')
    <section class="section-home-about bg-white" style="margin-top: 1%">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center" style="margin-top: -50px;">
                    <h2 class="heading">LUXURY ROOM</h2>
                    <div class="img" style="margin-top: 2px">
                        <a><img src="images/frame.png" alt="" style="width: 100%; margin-top : 20px"></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                            style="margin-top: -8px; float: left; margin-right: 10px;">
                            <path fill="currentColor"
                                d="M12 18.6q-.25 0-.488-.075t-.437-.225q-2.025-1.575-4.05-3.963T5 9.15q0-1.775.638-3.113T7.275 3.8q1-.9 2.25-1.35T12 2q1.225 0 2.475.45t2.25 1.35q1 .9 1.638 2.238T19 9.15q0 2.8-2.025 5.188t-4.05 3.962q-.2.15-.437.225T12 18.6m0-7.6q.825 0 1.413-.587T14 9q0-.825-.587-1.412T12 7q-.825 0-1.412.588T10 9q0 .825.588 1.413T12 11M6 22q-.425 0-.712-.288T5 21q0-.425.288-.712T6 20h12q.425 0 .713.288T19 21q0 .425-.288.713T18 22z" />
                        </svg>
                        <p style="float: left; margin-top: 0; margin-left: 5px;">Jl. Cakrawala no.01 Malang, Jawa Timur
                            Indonesia</p>
                        <div
                            style="float: left; color: #232323; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word;clear: both;">
                            Rp. 4.500.000</div>
                        <div
                            style="float: left; color: #D88F00; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word; clear: both; margin-left: 130px; margin-top:-25px;">
                            / Malam</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            style="margin-top: 80px; margin-left: -1535px;">
                            <path fill="#FFBF43"
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2L9.19 8.63L2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <div
                            style="float: left; color: #D88F00; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word; clear: both; margin-left: 25px; margin-top:-35px;">
                            4/5</div>
                        <div
                            style="float: left; color: #5A5A5A; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word; clear: both; margin-left: 60px; margin-top:-35px;">
                            (3021)</div>
                        <button
                            style="float: left; margin-left: -6px; margin-top: 20px; margin-bottom: 20px; background-color: #283E58; color: white; border: none; padding: 15px 25px; font-size: 20px; font-family: Poppins; font-weight: 400; cursor: pointer; width: 270px; height: 40px; text-align: center; display: flex; align-items: center; justify-content: center; border-radius: 10px;">Pesan
                            Sekarang</button>
                    </div>
                    <img src="images/Vector-2.png" alt="Garis bawah" style="width: 100%; margin-top: -5px; color:#92989F">
                    <h2 style="font-weight: bold; margin-right: 1000px; margin-top: 10px;">KETERANGAN</h2>
                    <p style="margin-top: 20px; text-align: justify;">
                        Dengan desain elegan dan layanan berkualitas tinggi, hotel ini menawarkan fasilitas luxury room yang
                        memanjakan tamu dengan kenyamanan dan kemewahan. Setiap luxury room di hotel ini dirancang dengan
                        detail yang sempurna. Dari tempat tidur mewah yang lembut dan nyaman hingga linen berkualitas
                        tinggi, tamu hotel dapat menikmati tidur malam yang mendalam dan istirahat yang nyaman. Ruang tamu
                        yang luas dilengkapi dengan sofa empuk, kursi bergaya, dan meja kopi yang elegan, menciptakan
                        suasana santai untuk bersantai atau menghibur tamu.
                    </p>
                    <img src="images/Vector-2.png" alt="Garis bawah"
                        style="width: 100%; margin-top: 20px; margin-bottom: 20px; color:#92989F">
                    <h2 style="font-weight: bold; float: left; margin-top: 10px;">FASILITAS YANG DISEDIAKAN</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        style="margin-top: 70px; margin-right: 1200px;">
                        <path fill="currentColor"
                            d="M12 21q-1.05 0-1.775-.725T9.5 18.5q0-1.05.725-1.775T12 16q1.05 0 1.775.725T14.5 18.5q0 1.05-.725 1.775T12 21m0-11q1.875 0 3.563.6t3.062 1.65q.5.375.513.988T18.7 14.3q-.425.425-1.05.438t-1.125-.338q-.95-.65-2.1-1.025T12 13q-1.275 0-2.425.375t-2.1 1.025q-.5.35-1.125.325t-1.05-.45q-.425-.45-.425-1.062t.5-.988q1.375-1.05 3.063-1.638T12 10m0-6q3.125 0 5.888 1.025t4.962 2.9q.5.425.525 1.05t-.425 1.075q-.425.425-1.05.438t-1.125-.388q-1.8-1.475-4.037-2.287T12 7q-2.5 0-4.737.813T3.225 10.1q-.5.4-1.125.388t-1.05-.438Q.6 9.6.625 8.975t.525-1.05q2.2-1.875 4.963-2.9T12 4" />
                    </svg>
                    <div
                        style="float: left; color: #5A5A5A; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word; clear: both; margin-left: 50px; margin-top: -35px;">
                        Wifi Gratis
                    </div>
                    <div
                        style="display: flex; align-items: center; margin-top: -35px; justify-content: flex-start; margin-left: 500px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            style="margin-right: 10px;">
                            <path fill="currentColor"
                                d="M3 3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h4v-4H3V5h18v2h2V5c0-1.1-.9-2-2-2zm18 6h-5c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h5c1.1 0 2-.9 2-2v-9c0-1.1-.9-2-2-2m-2.5 1.5c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5S17 12.8 17 12s.7-1.5 1.5-1.5m0 10c-1.7 0-3-1.3-3-3c0-1.6 1.3-3 2.9-3h.1c1.7 0 3 1.3 3 3s-1.3 3-3 3m0-4.5c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5s1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5" />
                        </svg>
                        <div style="color: #5A5A5A; font-size: 20px; font-family: Poppins; font-weight: 400;">
                            Televisi
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        style="margin-top: 50px; margin-right: 1200px;">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M22 3.6V11H2V3.6a.6.6 0 0 1 .6-.6h18.8a.6.6 0 0 1 .6.6M18 7h1M2 11l.79 2.584A2 2 0 0 0 4.702 15H6m16-4l-.79 2.584A2 2 0 0 1 19.298 15H18m-8.5-.5s0 7-3.5 7m8.5-7s0 7 3.5 7m-6-7v7" />
                    </svg>
                    <div
                        style="float: left; color: #5A5A5A; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word; clear: both; margin-left: 50px; margin-top:-35px;">
                        Pendingin Ruangan</div>
                </div>
                <div
                    style="display: flex; align-items: center; margin-top: -35px; justify-content: flex-start; margin-left: 500px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M182 98.48V88a30 30 0 0 0-30-30h-18V30h34a10 10 0 0 1 10 10a6 6 0 0 0 12 0a22 22 0 0 0-22-22h-64a6 6 0 0 0 0 12h18v28h-18a30 30 0 0 0-30 30v10.48A38.05 38.05 0 0 0 42 136v80a14 14 0 0 0 14 14h144a14 14 0 0 0 14-14v-80a38.05 38.05 0 0 0-32-37.52M104 70h48a18 18 0 0 1 18 18v10H86V88a18 18 0 0 1 18-18m98 146a2 2 0 0 1-2 2H56a2 2 0 0 1-2-2v-80a26 26 0 0 1 26-26h96a26 26 0 0 1 26 26Z" />
                    </svg>
                    <div style="color: #5A5A5A; font-size: 20px; font-family: Poppins; font-weight: 400;">
                        Perlengkapan Mandi
                    </div>
                </div>
            </div>
    </section>
@endsection

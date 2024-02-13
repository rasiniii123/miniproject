@extends('layouts.yss')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <h1 class="text-center">LOTUS HOTEL</h1>
            <br>
            <br>
            <h2 style="font-size: 20px; font-weight: bold; margin-left : 100px;">LUXURY ROOM</h2>
            <div style="position: absolute; top: 100px; left: 20px;">
                <a href="{{ route('menu') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                        style="transform: rotate(180deg);">
                        <path fill="currentColor" d="M10 17l5-5-5-5v10z" />
                    </svg>
                </a>
            </div>
            <div style="display: flex; align-items: center; margin-top: 10px;">
                <img src="images/kamar1.png" alt="Logo" width="500" style="margin-right: 20px; margin-left: 100px;">
                <div style="margin-left: 30px; margin-bottom: 50px;">
                    <p style="font-family: 'Poppins', sans-serif; width: 580px;">
                        Kamar Hotel Luxur Room adalah jenis kamar hotel yang menawarkan pengalaman menginap mewah dan nyaman
                        bagi para tamu. Kamar ini biasanya merupakan kamar yang lebih besar dari kamar standar dan
                        menawarkan fasilitas dan layanan tambahan yang dirancang untuk meningkatkan kenyamanan dan kepuasan
                        tamu.
                    </p>
                    <div style="margin-left: -2px;">
                        <div style="margin-left: 10px;">
                            <p style="display: inline-block; margin-top: 5px; font-family: 'Poppins', sans-serif;">
                                jl.cakrawala no.01 malang, jawa timur indonesia
                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 24 24"
                                style="margin-top: -0px; float: left; margin-right: 10px;">
                                <path fill="currentColor"
                                    d="M12 18.6q-.25 0-.488-.075t-.437-.225q-2.025-1.575-4.05-3.963T5 9.15q0-1.775.638-3.113T7.275 3.8q1-.9 2.25-1.35T12 2q1.225 0 2.475.45t2.25 1.35q1 .9 1.638 2.238T19 9.15q0 2.8-2.025 5.188t-4.05 3.962q-.2.15-.437.225T12 18.6m0-7.6q.825 0 1.413-.587T14 9q0-.825-.587-1.412T12 7q-.825 0-1.412.588T10 9q0 .825.588 1.413T12 11M6 22q-.425 0-.712-.288T5 21q0-.425.288-.712T6 20h12q.425 0 .713.288T19 21q0 .425-.288.713T18 22z" />
                            </svg>
                        </div>
                    </div>
                    <p style="font-size: 24px; color: #D88F00; font-weight: bold; margin-top: 10px; margin-left: 10px;">
                        &#9733; 4.5
                        <span style="display: inline-block; margin-top: 5px; color: black;">(3021)</span>
                    </p>
                </div>
            </div>
            <div style="display: flex; align-items: center; margin-top: -100px;">
                <div style="margin-left: auto; margin-right: 100px; margin-top: 10px;">
                    <p style="font-size: 25px; font-weight: bold;">Rp. 4.500.000 <span
                            style="font-style: italic; color: #D88F00;">/ malam</span></p>
                </div>
            </div>
            <div style="margin-top: 10px;">
                <button type="button" class="btn btn-primary btn-lg"
                    style="width: 200px; margin-left: 1000px;">DETAIL</button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div style="border-bottom: 1px solid black; width: 87%; margin-left: 90px; margin-top: 10px;"></div>
    <br>
    <h2 style="font-size: 20px; font-weight: bold; margin-left : 100px;">COUPLE ROOM</h2>
    <div style="display: flex; align-items: center; margin-top: 10px;">
        <img src="images/kamar2.png" alt="Logo" width="500" style="margin-right: 20px; margin-left: 100px;">
        <div style="margin-left: 30px; margin-bottom: 90px;">
            <p style="font-family: 'Poppins', sans-serif; width: 580px;">
                Kamar Couple Room yang indah ini menawarkan nuansa romantis
                dengan dekorasi yang lembut dan sentuhan modern. Dengan pemandangan kota yang menakjubkan dari jendela,
                suasana ini menciptakan pengalaman menginap yang tak terlupakan bagi pasangan yang mencari ketenangan.</p>
            <div style="margin-left: -2px;">
                <div style="margin-left: 10px;">
                    <p style="display: inline-block; margin-top: 5px; font-family: 'Poppins', sans-serif;">
                        jl.cakrawala no.01 malang, jawa timur indonesia
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 24 24"
                        style="margin-top: -0px; float: left; margin-right: 10px;">
                        <path fill="currentColor"
                            d="M12 18.6q-.25 0-.488-.075t-.437-.225q-2.025-1.575-4.05-3.963T5 9.15q0-1.775.638-3.113T7.275 3.8q1-.9 2.25-1.35T12 2q1.225 0 2.475.45t2.25 1.35q1 .9 1.638 2.238T19 9.15q0 2.8-2.025 5.188t-4.05 3.962q-.2.15-.437.225T12 18.6m0-7.6q.825 0 1.413-.587T14 9q0-.825-.587-1.412T12 7q-.825 0-1.412.588T10 9q0 .825.588 1.413T12 11M6 22q-.425 0-.712-.288T5 21q0-.425.288-.712T6 20h12q.425 0 .713.288T19 21q0 .425-.288.713T18 22z" />
                    </svg>
                </div>
            </div>
            <p style="font-size: 24px; color: #D88F00; font-weight: bold; margin-top: 10px; margin-left: 10px;">
                &#9733; 4.5
                <span style="display: inline-block; margin-top: 5px; color: black;">(3021)</span>
            </p>
        </div>
    </div>
    <div style="display: flex; align-items: center; margin-top: -100px;">
        <div style="margin-left: auto; margin-right: 100px; margin-top: 10px;"> <!-- Adjusted margin-top here -->
            <p style="font-size: 25px; font-weight: bold;">Rp. 3.00.000 <span style="font-style: italic; color: #D88F00;">/
                    malam</span></p>
        </div>
    </div>
    <div style="margin-top: 10px;">
        <button type="button" class="btn btn-primary btn-lg" style="width: 200px; margin-left: 1000px;">DETAIL</button>
    </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <div style="border-bottom: 1px solid black; width: 87%; margin-left: 90px; margin-top: 10px;"></div>
    <br>
    <h2 style="font-size: 20px; font-weight: bold; margin-left : 100px;">STANDARD ROOM</h2>
    <div style="display: flex; align-items: center; margin-top: 10px;">
        <img src="images/kamar3.png" alt="Logo" width="500" style="margin-right: 20px; margin-left: 100px;">
        <div style="margin-left: 50px; margin-bottom: 90px;">
            <p style="font-family: 'Poppins', sans-serif; width: 580px;">
                Kamar Standard Room yang nyaman ini memberikan pengalaman
                menginap yang menyenangkan dengan desain fungsional dan suasana yang hangat. Dilengkapi dengan fasilitas
                dasar yang memadai, kamar ini adalah pilihan ideal bagi tamu yang mencari kenyamanan dan keseimbangan antara
                kualitas dan nilai.</p>
            <div style="margin-left: -2px;">
                <div style="margin-left: 10px;">
                    <p style="display: inline-block; margin-top: 5px; font-family: 'Poppins', sans-serif;">
                        jl.cakrawala no.01 malang, jawa timur indonesia
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 24 24"
                        style="margin-top: -0px; float: left; margin-right: 10px;">
                        <path fill="currentColor"
                            d="M12 18.6q-.25 0-.488-.075t-.437-.225q-2.025-1.575-4.05-3.963T5 9.15q0-1.775.638-3.113T7.275 3.8q1-.9 2.25-1.35T12 2q1.225 0 2.475.45t2.25 1.35q1 .9 1.638 2.238T19 9.15q0 2.8-2.025 5.188t-4.05 3.962q-.2.15-.437.225T12 18.6m0-7.6q.825 0 1.413-.587T14 9q0-.825-.587-1.412T12 7q-.825 0-1.412.588T10 9q0 .825.588 1.413T12 11M6 22q-.425 0-.712-.288T5 21q0-.425.288-.712T6 20h12q.425 0 .713.288T19 21q0 .425-.288.713T18 22z" />
                    </svg>
                </div>
            </div>
            <p style="font-size: 24px; color: #D88F00; font-weight: bold; margin-top: 10px; margin-left: 10px;">
                &#9733; 4.5
                <span style="display: inline-block; margin-top: 5px; color: black;">(3021)</span>
            </p>
        </div>
    </div>
    <div style="display: flex; align-items: center; margin-top: -100px;">
        <div style="margin-left: auto; margin-right: 100px; margin-top: 10px;">
            <p style="font-size: 25px; font-weight: bold;">Rp. 2.200.000 <span style="font-style: italic; color: #D88F00;">/
                    malam</span></p>
        </div>
    </div>
    <div style="margin-top: 10px;">
        <button type="button" class="btn btn-primary btn-lg" style="width: 200px; margin-left: 1000px;">DETAIL</button>
    </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <div style="border-bottom: 1px solid black; width: 87%; margin-left: 90px; margin-top: 10px;"></div>
    <br>
    <h2 style="font-size: 20px; font-weight: bold; margin-left: 100px;">FAMILY ROOM</h2>
    <div style="display: flex; align-items: center; margin-top: 10px;">
        <img src="images/kamar4.png" alt="Logo" width="500" style="margin-right: 20px; margin-left: 100px;">
        <div style="margin-left: 30px; margin-bottom: 90px;">
            <p style="font-family: 'Poppins', sans-serif; width: 580px;">
                Kamar Hotel Family Room adalah jenis kamar yang dirancang khusus untuk keluarga atau tamu dengan jumlah
                anggota yang lebih besar. Kamar ini menyediakan ruang yang luas dan fasilitas tambahan.
            </p>
            <div style="margin-left: -2px;">
                <div style="margin-left: 10px;">
                    <p style="display: inline-block; margin-top: 5px; font-family: 'Poppins', sans-serif;">
                        jl.cakrawala no.01 malang, jawa timur indonesia
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="32" viewBox="0 0 24 24"
                        style="margin-top: -0px; float: left; margin-right: 10px;">
                        <path fill="currentColor"
                            d="M12 18.6q-.25 0-.488-.075t-.437-.225q-2.025-1.575-4.05-3.963T5 9.15q0-1.775.638-3.113T7.275 3.8q1-.9 2.25-1.35T12 2q1.225 0 2.475.45t2.25 1.35q1 .9 1.638 2.238T19 9.15q0 2.8-2.025 5.188t-4.05 3.962q-.2.15-.437.225T12 18.6m0-7.6q.825 0 1.413-.587T14 9q0-.825-.587-1.412T12 7q-.825 0-1.412.588T10 9q0 .825.588 1.413T12 11M6 22q-.425 0-.712-.288T5 21q0-.425.288-.712T6 20h12q.425 0 .713.288T19 21q0 .425-.288.713T18 22z" />
                    </svg>
                </div>
            </div>
            <p style="font-size: 24px; color: #D88F00; font-weight: bold; margin-top: 10px; margin-left: 10px;">
                &#9733; 4.5
                <span style="display: inline-block; margin-top: 5px; color: black;">(3021)</span>
            </p>
        </div>
    </div>
    <div style="display: flex; align-items: center; margin-top: -100px;">
        <div style="margin-left: auto; margin-right: 100px; margin-top: 10px;">
            <p style="font-size: 25px; font-weight: bold;">Rp. 2.200.000 <span
                    style="font-style: italic; color: #D88F00;">/ malam</span></p>
        </div>
    </div>
    <div style="margin-top: 10px;">
        <button type="button" class="btn btn-primary btn-lg" style="width: 200px; margin-left: 1000px;">DETAIL</button>
    </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    </div>
    <br>
    </div>
    </div>
@endsection

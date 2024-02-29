@extends('layouts.side')

@section('content')
    <section class="section-account parallax bg-11"
        style="background-image: url('images/register.png'); background-size: cover; background-position: center center; height: 100vh;">
        <div class="awe-overlay"></div>
        <img src="images/kologo.png" alt="logo" style="width: 100px; position: absolute; top: 0; right: 10px; transform: translateX(-1160%);">
        <div class="container">
            <div class="login-register" style="max-width: 500px; margin-left: 330px;">
                <div class="text text-center"
                    style="display: flex; justify-content: center; align-items: center; height: 50vh;">
                    <div
                        style="width: 100%; background: #D9D9D9; border-radius: 35px; backdrop-filter: blur(30px); padding: 30px; margin-top: -100px; position: relative;">
                        <a href="/"
                            style="color: #283E58; text-decoration: none; position: absolute; top: 20px; left: 20px;">
                            <span style="font-size: 20px; margin-right: 5px;">&larr;</span> Kembali
                        </a>
                        <div style="text-align: center; color: #283E58; font-family: Montserrat; font-size: 36px; font-weight: 700; text-transform: uppercase; line-height: 54px; letter-spacing: 0.20px; margin-bottom: 40px; margin-top: 30px;">
                            FORM LOGIN
                        </div>
                        <div
                            style="text-align: center; color: #283E58; font-family: Hind; font-size: 20px; font-weight: 400; line-height: 30.60px; letter-spacing: 0.36px; margin-bottom: 30px; margin-top: -25px">
                            Selamat datang di Everywhere silahkan login
                        </div>
                        <form action="{{ route('login.submit') }}" method="post" class="account_form">
                            @csrf
                            <div class="field-form">
                                <input type="text" name="email" class="field-text" placeholder="Email"
                                    style="border-color: #283E58; color: gray;">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field-form">
                                <input type="password" name="password" class="field-text" placeholder="Password"
                                    style="border-color: #283E58;">
                                <span class="view-pass"><i class="lotus-icon-view"></i></span>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field-form field-submit" style="margin-top: 20px; text-align: center;">
                                <button type="submit" class="awe-btn awe-btn-13 rounded"
                                    style="background-color: #283E58; border-color: #283E58; color: #fff; width: 430px; border-radius: 10px;">
                                    <span style="display: inline-block; width: 50%;">Login</span>
                                </button>
                            </div>
                            {{-- <div
                                style="width: 459.50px; height: 81px; position: relative">
                                <div style="width: 459.50px; height: 0px; left: 0px; top: 30px; position: absolute; border: 1px #283E58 solid"></div>
                                <div style="width: 50px; height: 22px; left: 190px; top: 30px; position: absolute; background: #D9D9D9"></div>
                                <div style="left: 200px; top: 15px;; position: absolute; color: #283E58; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 30.60px; letter-spacing: 0.36px; word-wrap: break-word">OR</div>
                            </div> --}}
                            <div
                            style="text-align: center; font-family: Hind; font-size: 13px; font-weight: 400; margin-top: 200px line-height: 18.57px; letter-spacing: 0.20px; margin-top: 10px;">
                            Saya tidak punya akun <a href="{{ route('auth.register') }}"
                                style="text-decoration: none;"> <span style="color: #00A3FF;">daftar disini</span> </a>
                            </div>
                            {{-- <div style="height: 0px;"></div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.20/sweetalert2.all.min.js"></script>
        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#283E58',
                    confirmButtonText: 'OK'
                });
            </script>
        @endif
    </section>
@endsection

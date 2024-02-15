@extends('layouts.side')

@section('content')
    <style>
        .field-text::placeholder {
            color: black;
        }
    </style>

    <section class="section-account parallax"
        style="background-image: url('images/register.png'); background-size: cover; background-position: center center; height: 100vh;">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="login-register">
                <div class="text text-center"
                    style="display: flex; justify-content: center; align-items: center; height: 50vh;">
                    <div
                        style="width: 500px; height: 600px; background:  #D9D9D9; border-radius: 35px; backdrop-filter: blur(30px); padding: 30px; margin-top: -90px; position: relative;">
                        <a href="{{ route('auth.login') }}"
                            style="color:  #283E58; text-decoration: none; position: absolute; top: 20px; left: 20px;">
                            <span style="font-size: 20px; margin-right: 5px;">&larr;</span> Kembali
                        </a>

                        <div
                            style="text-align: center; color: #283E58; font-family: Montserrat; font-size: 36px; font-weight: 700; text-transform: uppercase; line-height: 54px; letter-spacing: 0.20px; margin-bottom: 20px; margin-top: 50px">
                            FORM REGISTER
                        </div>
                        <div
                            style="text-align: center; color: #283E58; font-family: Hind; font-size: 20px; font-weight: 400; line-height: 30.60px; letter-spacing: 0.36px; margin-bottom: 30px;">
                            Selamat datang di Everywhere silahkan registrasi
                        </div>
                        <form action="{{ route('auth.register') }}" method="post" class="account_form"
                            style="margin-top: 30px">
                            @csrf
                            <div class="field-form">
                                <input type="text" name="username" class="field-text form-control" placeholder="Username"
                                    style="color: black; border-color: #283E58;">
                                @error('username')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field-form">
                                <input type="text" name="email" class="field-text" placeholder="Email"
                                    style="color: #fff; border-color: #283E58;">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field-form">
                                <input type="password" name="password" class="field-text" placeholder="Password"
                                    style="color: #fff; border-color: #283E58;">
                                <span class="view-pass"><i class="lotus-icon-view"></i></span>
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field-form" style="margin-top: 20px;">
                                <input type="password" name="password_confirmation" class="field-text"
                                    placeholder="Confirm Password" style="color: #fff; border-color: #283E58;">
                                <span class="view-pass"><i class="lotus-icon-view"></i></span>
                                @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field-form field-submit" style="margin-top: 20px; text-align: center;">
                                <button type="submit" class="awe-btn awe-btn-13 rounded"
                                    style="background-color: #283E58; border-color: #283E58; color: #fff; width: 400px; border-radius: 10px;">
                                    <span style="display: inline-block; width: 50%;">Daftar</span>
                                </button>
                            </div>
                            <div
                                style="text-align: center; font-family: Hind; font-size: 13px; font-weight: 400; margin-top: 200px line-height: 18.57px; letter-spacing: 0.20px; margin-top: 10px;">
                                Sudah punya akun? - <a href="{{ route('auth.login') }}"
                                    style="text-decoration: none;"> <span style="color: #00A3FF;">Login disini</span> </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.side')

@section('content')
    <section class="section-account parallax bg-11"
        style="background-image: url('images/register.png'); background-size: cover; background-position: center center; height: 100vh;">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="login-register">
                <div class="text text-center"
                    style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                    <div
                        style="width: 500px; background:  #D9D9D9; border-radius: 35px; backdrop-filter: blur(30px); padding: 30px; margin-top: -400px; position: relative;">
                        <a href="{{ route('dashboard') }}"
                            style="color:  #283E58; text-decoration: none; position: absolute; top: 20px; left: 20px;">
                            <span style="font-size: 20px; margin-right: 5px;">&larr;</span> Kembali
                        </a>


                        <div
                            style="text-align: center; color:  #283E58; font-family: Montserrat; font-size: 36px; font-weight: 700; text-transform: uppercase; line-height: 54px; letter-spacing: 0.20px; margin-bottom: 20px;">
                            FORM LOGIN
                        </div>
                        <div
                            style="text-align: center; color:  #283E58; font-family: Hind; font-size: 20px; font-weight: 400; line-height: 30.60px; letter-spacing: 0.36px; margin-bottom: 30px;">
                            Selamat datang di Everywhere silahkan login
                        </div>
                        <form action="{{ route('login.submit') }}" method="post" class="account_form">
                            @csrf
                            <div class="field-form">
                                <input type="text" name="email" class="field-text" placeholder="Email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field-form">
                                <input type="password" name="password" class="field-text" placeholder="Password">
                                <span class="view-pass"><i class="lotus-icon-view"></i></span>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="field-form field-submit" style="margin-top: 20px;">
                                <button type="submit" class="awe-btn awe-btn-13"
                                    style="background-color: #283E58; border: 1px solid #283E58;">Login</button>
                            </div>
                            <div
                                style="text-align: center; font-family: Hind; font-size: 13px; font-weight: 400; line-height: 18.57px; letter-spacing: 0.20px; margin-top: 10px;">
                                Saya tidak punya akun - <a href="{{ route('auth.register') }}"
                                    style="text-decoration: none;"> <span style="color: #00A3FF;">Daftar di
                                        sini</span> </a>
                            </div>

                        </form>
                    </div>
                    <

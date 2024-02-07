@extends('layouts.side')

@section('content')
<section class="section-account parallax bg-11" style="background-image: url('images/register.png'); background-size: cover; background-position: center center; height: 100vh;">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register">
            <div class="text text-center" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                <div style="width: 500px; background: rgba(217, 217, 217, 0.21); border-radius: 35px; backdrop-filter: blur(30px); padding: 30px; margin-top: -400px;">
                    <!-- Logo -->
                    <div style="text-align: center; margin-bottom: 20px;">
                        <img src="images/logo-1.png" style="width: 200px;">
                    </div>
                    <div style="text-align: center; color: white; font-family: Montserrat; font-size: 36px; font-weight: 700; text-transform: uppercase; line-height: 54px; letter-spacing: 0.20px; margin-bottom: 20px;">
                        FORM LOGIN
                    </div>
                    <div style="text-align: center; color: white; font-family: Hind; font-size: 20px; font-weight: 400; line-height: 30.60px; letter-spacing: 0.36px; margin-bottom: 30px;">
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
                            <input type="password" name="password" class="field-text"  placeholder="Password">
                            <span class="view-pass"><i class="lotus-icon-view"></i></span>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field-form field-submit" style="margin-top: 20px;">
                            <button type="submit" class="awe-btn awe-btn-13">Login</button>
                        </div>
                        <div style="text-align: center; color: white; font-family: Hind; font-size: 13px; font-weight: 400; line-height: 18.57px; letter-spacing: 0.20px; margin-top: 10px;">
                            Saya tidak punya akun - Daftar di sini
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

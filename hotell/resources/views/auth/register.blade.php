@extends('layouts.side')

@section('content')
    <section class="section-account parallax"
        style="background-image: url('images/register.png'); background-size: cover; background-position: center center;">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="login-register">
                <div
                    style="width: 600px; height: 660px; background: rgba(217, 217, 217, 0.21); border-radius: 40px; backdrop-filter: blur(30px); margin-left: auto; margin-right: auto;">
                    <div class="text text-center" style="margin-top: -100px">
                        <a href="{{ route('auth.login') }}" style="position: absolute; top: 20px; left: 20px; font-size: 18px; color: rgb(255, 255, 255);">
                            &#8592; Kembali
                        </a>
                        <img src="images/logo-1.png" width="200" height="200" style="margin-top: 50px">
                        <h2 style="font-family: 'Poppins', sans-serif; margin-top: 20px;">REGISTER FORM</h2>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 300; margin-top: 10px;">Jika Anda tidak memiliki akun di Everywhere, daftar sekarang!</p>
                        <div class="card-body" style="margin-top: 20px;">
                            <form  action="{{ route('auth.store') }}" method="post" class="account_form">
                                @csrf
                                <div class="field-form">
                                    <input type="text" class="field-text" style="font-size: 15px;" placeholder="User name" name="username">
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="field-form">
                                    <input type="text" class="field-text" style="font-size: 15px;" placeholder="Email" name="email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="field-form">
                                    <input type="password" class="field-text" style="font-size: 15px;" placeholder="Password" name="password">
                                    <span class="view-pass"><i class="lotus-icon-view"></i></span>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="field-form">
                                    <input type="password" class="field-text" style="font-size: 15px;" placeholder="Confirm-Password" name="password_confirmation">
                                    <span class="view-pass"><i class="lotus-icon-view"></i></span>
                                    @error('password_confirmation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="field-form field-submit" style="margin-top: 20px;">
                                    <button type="submit" class="awe-btn awe-btn-13">REGISTER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

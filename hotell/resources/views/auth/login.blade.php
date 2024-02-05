@extends('layouts.side')
@section('content')
    <section class="section-account parallax bg-11">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="login-register">
                <div class="text text-center">
                    <h2>LOGIN ACCOUNT</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing</p>
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
                        <div class="field-form field-submit">
                            <button type="submit" class="awe-btn awe-btn-13">Login</button>
                        </div>
                        <span class="account-desc">I don’t have an account - <a href="#">Forgot
                                Password</a></span>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection

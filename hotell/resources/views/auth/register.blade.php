@extends('layouts.app')
@section('content')
    <section class="section-account parallax bg-11">
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="login-register">
                <div class="text text-center">
                    <h2>REGISTER FORM</h2>
                    <p>If you no have account in lotus Hotel! Register and feeling</p>
                    <form action="{{ route('auth.store') }}" method="post" class="account_form">
                        @csrf
                        <div class="field-form">
                            <input type="text" class="field-text" placeholder="User name*" name="username">
                        </div>
                        <div class="field-form">
                            <input type="text" class="field-text" placeholder="Email*" name="email">
                        </div>
                        <div class="field-form">
                            <input type="password" class="field-text" placeholder="Password*" name="password">
                            <span class="view-pass"><i class="lotus-icon-view"></i></span>
                        </div>
                        <div class="field-form field-submit">
                            <button type="submit" class="awe-btn awe-btn-13">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

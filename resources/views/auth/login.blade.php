@extends('layouts.admin.master')
@section('content')
    <form class="login100-form validate-form"method="POST" action="{{ route('login') }}">
        @csrf
        <span class="login100-form-title p-b-49">
            Login
        </span>

        <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>
        
        <div class="text-right p-t-8 p-b-31">
            <a href="{{ route('password.request') }}">
                Forgot password?
            </a>
        </div>
        
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                    Login
                </button>
            </div>
        </div>

        <div class="txt1 text-center p-t-30 p-b-20">
            <span>
                
            </span>
        </div>

        <div class="flex-c-m">
            <a href="https://www.facebook.com/" class="login100-social-item bg1">
                <i class="fa fa-facebook"></i>
            </a>

            <a href="https://twitter.com/?lang=th" class="login100-social-item bg2">
                <i class="fa fa-twitter"></i>
            </a>

            <a href="https://www.google.co.th/?hl=th" class="login100-social-item bg3">
                <i class="fa fa-google"></i>
            </a>
        </div>

        <div class="flex-col-c p-t-30">
            <span class="txt1 p-b-17">
                Or Sign Up Using
            </span>

            <div class="text-right p-t-8 p-b-31">
                <a href="{{ route('register') }}">
                    Sign Up
                </a>
            </div>
        </div>
    </form>
@endsection

@extends('layouts.admin.master')
@section('content')
    <form class="login100-form validate-form"method="POST" action="{{ route('register') }}">
        @csrf
        <span class="login100-form-title p-b-49">
            register
        </span>

        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100" data-symbol="&#xf207;"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-23" data-validate = "Address is reauired">
            <span class="label-input100">Address</span>
            <input class="input100" type="text" name="address" placeholder="Address">
            <span class="focus-input100" data-symbol="&#xf2c6;"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-23" data-validate = "Phone is reauired">
            <span class="label-input100">Phone</span>
            <input class="input100" type="text" name="phone" placeholder="Phone">
            <span class="focus-input100" data-symbol="&#xf2d7;"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-23" data-validate = "Email Address is reauired">
            <span class="label-input100">Email Address</span>
            <input class="input100" type="email" name="email" placeholder="Email Address">
            <span class="focus-input100" data-symbol="&#xf2da;"></span>
        </div>


        <div class="wrap-input100 validate-input m-b-23" data-validate = "Password is reauired">
            <span class="label-input100">Password</span>
            <input class="input100" type="Password" name="password" placeholder="Password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
            <span class="label-input100">Confirm Password</span>
            <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>
        
        <div class="text-right p-t-8 p-b-31">
            <a href="{{ route('password.request') }}">
                
            </a>
        </div>
        
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                    register
                </button>
            </div>
        </div>

        <div class="txt1 text-center p-t-0 p-b-0">
            <span>
                
            </span>
        </div>

        <div class="flex-col-c p-t-0">
            <span class="txt1 p-b-17">
                
            </span>

            <div class="text-right p-t-8 p-b-31">
                <a href="{{ route('login') }}">
                    Sign in
                </a>
            </div>
        </div>
    </form>
@endsection

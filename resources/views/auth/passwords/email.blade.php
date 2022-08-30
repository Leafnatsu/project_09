@extends('layouts.admin.master')
@section('content')
    <form class="login100-form validate-form"method="POST" action="{{ route('password.email') }}">
        @csrf
        <span class="login100-form-title p-b-49">
            Reset Password
        </span>
        
        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="email" placeholder="Username">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div>

        <div class="text-right p-t-8 p-b-31">
            <a href="{{ route('password.request') }}">
                
            </a>
        </div>
        
        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                    Send Password Reset Link
                </button>
            </div>
        </div>

        <div class="txt1 text-center p-t-30 p-b-20">
            <span>
                
            </span>
        </div>
          </div>
        </div>
    </form>
@endsection

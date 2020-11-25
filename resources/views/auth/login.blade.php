@extends('layouts.app_admin')

@section('content')
<div class="login-wrapper">
    <div class="left-box">
        <figure class="figure-head">
            <img src="{{ asset("img/login-head.png") }}"/>
        </figure>

        @include('alerts.success')
        @include('alerts.danger_alert')

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="row-1">
                <h3>Log In</h3>
                <div class="sign-up-row">
                    <span>Don't have an account?</span>
                    <a href="{{ route('register') }}">Sign Up</a>
                </div>
            </div>
            <div class="row-2">
                
                <div class="email-wrapper">
                    <label class="figure" for="email">
                        <img for="email" src="{{ asset("img/Group 228.png") }}"/>
                    </label>
                    <div class="input-box">
                        <label for="email">Email or Username</label>
                        <input id="email" type="email" name="email" value="" placeholder="haydencdesign@gmail.com"/>
                    </div>
                </div>

                <div class="password-wrapper">
                    <label class="figure" for="password">
                        <img for="password" src="{{ asset("img/lock (2).png") }}"/>
                    </label>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" value="" placeholder="**********"/>
                    </div>
                </div>

                <div class="forgot-wrapper">
                    <div class="remember-div">
                        <input class="hidden" id="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <div class="checkbox" id="remember-chckbox">
                            <img class="remember-tick-img hidden" src="{{ asset("img/check-tick.png") }}"/>
                        </div>
                        <label id="remember-chckbox1" for="checkbox">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    @endif
                </div>
            </div>
            <div class="row-3">
                <button type="submit">Log In</button>
            </div>
        </form>
    </div>
    <div class="right-box">
        <div class="figure"></div>
    </div>
</div>
@endsection

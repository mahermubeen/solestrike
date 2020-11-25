@extends('layouts.app_admin')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="register-wrapper">
    <div class="left-box">
        <figure class="figure-head">
            <img src="{{ asset("img/login-head.png") }}"/>
        </figure>

        @include('alerts.success')
        @include('alerts.danger_alert')

        <form class="login-form" method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="row-1">
                <h3>Sign Up</h3>
                <div class="sign-up-row">
                    <span>Have an account?</span>
                    <a href="{{ route('login') }}">Log In</a>
                </div>
            </div>
            <div class="row-2">
                
                <div class="email-wrapper">
                    <div class="input-box">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" name="email" value="" placeholder="haydencdesign@gmail.com"/>
                    </div>
                </div>

                <div class="password-wrapper">
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="**********"/>
                    </div>
                </div>

                <div class="confirm-pass-wrapper">
                    <div class="input-box">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="**********"/>
                    </div>
                </div>

                <div class="name-wrapper">
                    <div class="input-box">
                        <label for="name">Full Name</label>
                        <input id="name" type="text" name="name" value="" placeholder="Hayden Carter"/>
                    </div>
                </div>


                <div class="address-zip-wrap">
                    <div class="address-wrapper">
                        <div class="input-box">
                            <label for="address">Address Line 1</label>
                            <input id="address" type="text" name="address" value="" placeholder="120 London Road"/>
                        </div>
                    </div>
    
                    <div class="zip-wrapper">
                        <div class="input-box">
                            <label for="zip">ZIP Code</label>
                            <input id="zip" type="text" name="zip" value="" placeholder="S118UH"/>
                        </div>
                    </div>
                </div>

                <div class="city-state-wrap">
                    <div class="city-wrapper">
                        <div class="input-box">
                            <label for="city">City</label>
                            <input id="city" type="text" name="city" value="" placeholder="Sheffield"/>
                        </div>
                    </div>
    
                    <div class="state-wrapper">
                        <div class="input-box">
                            <label for="state">State</label>
                            <input id="state" type="text" name="state" value="" placeholder="South Yorkshire"/>
                        </div>
                    </div>
                </div>


                <div class="phone-wrapper">
                    <div class="input-box">
                        <label for="phone">Phone Number</label>
                        <input id="phone" type="text" name="phone" value="" placeholder="07842585921"/>
                    </div>
                </div>
            </div>
            <div class="row-3">
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </div>
    <div class="right-box">
        <div class="figure"></div>
    </div>
</div>

@endsection

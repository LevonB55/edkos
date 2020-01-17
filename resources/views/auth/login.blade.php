@extends('frontend/basic/main')

@section('title', 'Edkos - Login')
@section('header')@stop
@section('footer')@stop

@section('extra-styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="login">
    <div class="login-content">
        <div class="login-left-side">
            <img src="{{asset('assets/img/login-logo.png')}}">
            <h1>{{ __('messages.welcome_to') }}<br>{{ __('messages.edkos') }}</h1>
            <h6>{{ __('messages.dont_have_an_account') }}</h6>
            <div class="w-100 text-center">
                <a class="login-left-side-signup" href="{{ route('register') }}">{{ __('messages.sign_up') }}</a>
            </div>
        </div>
        <div class="login-right-side">
            <div class="login-right-side-content">
                <div class="login-right-side-man">
                    <img src="{{asset('assets/img/login-man.png')}}">
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h4>{{ __('messages.login') }}</h4>
                    <input   id="email"  type="email" class="login-right-side-email form-control @error('email') is-invalid @enderror" placeholder="{{ __('messages.email_address') }}" name="email" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="position-relative">
                        <input class="login-right-side-password form-control @error('password') is-invalid @enderror"  placeholder="{{ __('messages.password') }}" name="password">
                        <img class="custom-input login-right-side-password-icon" src="{{asset('assets/img/password-show.png')}}">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="login-right-side-block">
                        <div class="d-flex">
                            <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="checkbox" value="value">
                            <label class="login-right-side-checkbox" for="checkbox">{{ __('messages.keep_me_logged_in') }}</label>
                        </div>
                        <div class="login-right-side-forgot-pass">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('messages.forgot_your_password') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <button class="login-left-side-signin" href="{{ route('register') }}"> {{ __('messages.sign_in') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('frontend/basic/main')

@section('title', 'Edkos - Password Reset')
@section('header')@stop
@section('footer')@stop

@section('extra-styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="reset">
        <div class="login-content">
            <div class="login-left-side">
                <img src="{{asset('assets/img/login-logo.png')}}">
                <h1>{{ __('messages.welcome_to') }}<br>{{ __('messages.edkos') }}</h1>
                <h6>{{ __('messages.already_have_an_account') }}</h6>
                <div class="w-100 text-center">
                    <a class="login-left-side-signup" href="{{ route('login') }}">Login</a>
                </div>
            </div>
            <div class="login-right-side">
                <div class="login-right-side-content">
                    <div class="login-right-side-man">
                        <img src="{{asset('assets/img/document.png')}}">
                    </div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <h4>Password Reset</h4>
                        <input class="login-right-side-email form-control @error('email') is-invalid @enderror"
                               placeholder="{{ __('messages.email_address') }}" name="email" value="{{ old('email') }}"
                               required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="position-relative w-100">
                            <input id="password" type="password"  class="login-right-side-password form-control @error('password') is-invalid @enderror"
                                   placeholder="{{ __('messages.password') }}" name="password"  required autocomplete="new-password">
                            <span class="login-right-side-password-icon password-icon"><i class="fas fa-eye"></i></span>
                            @error('password')
                                <span class="invalid-feedback error-message" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="reset-pass-must-characters">{{ __('messages.password_must_be_at_least_8_characters') }}</p>
                        <div class="position-relative w-100">
                            <input id="password-confirm" type="password" class="login-right-side-password"
                                   placeholder="{{ __('messages.retype_password') }}" name="password_confirmation"
                                   required autocomplete="new-password">
                            <span class="login-right-side-password-icon password-icon"><i class="fas fa-eye"></i></span>
                        </div>
                        <button class="login-left-side-signin">{{ __('Reset Password') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

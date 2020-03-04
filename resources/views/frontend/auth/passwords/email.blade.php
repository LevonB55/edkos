@extends('frontend.basic.main')

@section('title', 'Edkos - Password Reset')
@section('header')@stop
@section('footer')@stop

@section('extra-styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="forgot">
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
                    <img src="{{asset('assets/img/question.png')}}">
                </div>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <h4>{{ __('messages.forgot_your_password') }}</h4>
                    <p class="forgot-password-text">
                        {{ __('messages.enter_your_e_mail_address_and_well_sent_you_a_link') }}
                    </p>
                    <input id="email" type="email" placeholder="Enter Your Email Address" class="login-right-side-email form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @include('frontend.partials._messages')

                    <div class="d-flex justify-content-between w-100">
                        <a class="login-left-side-reset" href="{{ route('login') }}">Cancel</a>
                        <button type="submit" class="login-left-side-reset">
                            Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

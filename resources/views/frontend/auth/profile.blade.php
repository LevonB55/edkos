@extends('frontend.basic.main')

@section('title', 'Registraion 1')
@section('header')@stop
@section('footer')@stop

@section('extra-styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="reset registration-1-info">
    <div class="login-content">
        <div class="login-left-side">
            <div class="registration-1-left-content">
                <a href="index.html" class="registration-1-left-content-logo">
                    <img src="{{ asset('assets/img/login-logo.png') }}">
                </a>
                <p class="registration-1-left-content-title">
                    Welcome to Small Business
                    Accounting Made for You
                </p>
                <div class="registrations-pages">
                    <a class="active-pages" href="registration-1.html"></a>
                    <a href="registration-2.html"></a>
                    <a href="registration-3.html"></a>
                    <a href="registration-4.html"></a>
                </div>
            </div>
        </div>
        <div class="login-right-side">
            <div class="login-right-side-content">
                <form action="{{ route('store-profile') }}" method="POST">
                    @csrf
                    <p class="registration-1-right-content-title">
                        Let's get you set up. Enter your info below
                        to make invoicing your clients a breeze.
                    </p>
                    <div class="full-company-inputs">
                        <input class="login-right-side-email" placeholder="First Name" name="first_name" required value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="invalid-feedback error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       <input class="login-right-side-email" placeholder="Last Name" name="last_name" required value="{{ old('last_name') }}">
                       @error('last_name')
                           <span class="invalid-feedback error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                    </div>
                    <input class="login-right-side-email" placeholder="Company Name" name="company">
                    <div class="registration-1-right-content-blocks">
                        <input placeholder="Country" name="country" value="{{ old('country') }}">
                        @error('country')
                            <span class="invalid-feedback error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input placeholder="State" name="state" value="{{ old('state') }}">
                        @error('state')
                            <span class="invalid-feedback error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input placeholder="City" name="city" value="{{ old('city') }}">
                        @error('city')
                            <span class="invalid-feedback error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input placeholder="Street" name="street" value="{{ old('street') }}">
                        @error('street')
                            <span class="invalid-feedback error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input placeholder="Postal Code" name="postal_code" value="{{ old('postal_code') }}">
                        @error('postal_code')
                            <span class="invalid-feedback error-message" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input class="login-right-side-email" placeholder="Phone Number" name="phone" required value="{{ old('phone') }}">
                    @error('phone')
                        <span class="invalid-feedback error-message" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="d-flex">
                        <input type="checkbox" class="login-right-side-checkbox-input" name="business_type" id="checkbox" {{ old('business_type') ? 'checked' : '' }}>
                        <label class="login-right-side-checkbox" for="checkbox">My business is a Corporation/LLC</label>
                    </div>
                    <button type="submit">Continue</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

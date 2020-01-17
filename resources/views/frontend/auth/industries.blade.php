@extends('frontend/basic/main')

@section('title', 'Registraion 2')
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
                    What Do You Invoice
                    Your Clients For?
                </p>
                <div class="registrations-pages">
                    <a href="registration-1.html"></a>
                    <a class="active-pages" href="registration-2.html"></a>
                    <a href="registration-3.html"></a>
                    <a href="registration-4.html"></a>
                </div>
            </div>
        </div>
        <div class="login-right-side">
            <div class="login-right-side-content">
                <form>
                    <p class="registration-1-right-content-title">
                        Choose Your Industry
                    </p>
                    <div class="registration-2-content">
                        <div class="industry-block">
                            <img class="show-img-industry" src="{{ asset('assets/img/registrations/motivation-gray.png') }}">
                            <img class="hide-img-industry" src="{{ asset('assets/img/registrations/motivation-green.png') }}">
                            <p class="industry-block-text">Creatives and Marketing</p>
                        </div>
                        <div class="industry-block">
                            <img class="show-img-industry" src="{{ asset('assets/img/registrations/group-gray.png') }}">
                            <img class="hide-img-industry" src="{{ asset('assets/img/registrations/group-green.png') }}">
                            <p class="industry-block-text">Development and IT</p>
                        </div>
                        <div class="industry-block">
                            <img class="show-img-industry" src="{{ asset('assets/img/registrations/legal-gray.png') }}">
                            <img class="hide-img-industry" src="{{ asset('assets/img/registrations/legal-green.png') }}">
                            <p class="industry-block-text">Legal Services and Consulting</p>
                        </div>
                        <div class="industry-block">
                            <img class="show-img-industry" src="{{ asset('assets/img/registrations/trades-gray.png') }}">
                            <img class="hide-img-industry" src="{{ asset('assets/img/registrations/trades-green.png') }}">
                            <p class="industry-block-text">Trades and Home Services</p>
                        </div>
                        <div class="industry-block image-upload-industry">
                            <label for="file-input-industry" class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/registrations/add.png') }}">
                            </label>
                            <p class="industry-block-text">Different Industry</p>
                            <input id="file-input-industry" type="file">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('frontend/basic/main')

@section('title', 'Registraion 5')
@section('header')@stop
@section('footer')@stop

@section('extra-styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="registration-5">
        <div class="registration-5-info">
            <a href="index.html" class="logo-registration-5">
                <img src="{{ asset('assets/img/login-logo.png') }}">
            </a>
            <p class="registration-5-title">Great, <br>You Are All Set Up</p>
            <a class="registration-5-btn">CONTINUE</a>
        </div>
    </section>
@endsection

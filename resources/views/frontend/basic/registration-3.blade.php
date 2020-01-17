@extends('frontend/basic/main')

@section('title', 'Registraion 3')
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
                    <a href="registration-1.html"></a>
                    <a href="registration-2.html"></a>
                    <a class="active-pages" href="registration-3.html"></a>
                    <a href="registration-4.html"></a>
                </div>
            </div>
        </div>
        <div class="login-right-side">
            <div class="login-right-side-content">
                <form>
                    <p class="registration-1-right-content-title">
                        Choose All The Services You Offer To Streamline
                        How You Invoice Your Clients.
                    </p>
                    <div class="streamline-services">
                        <div class="streamline-div">Web design</div>
                        <div class="streamline-div">Marketing Services</div>
                        <div class="streamline-div">Design Consulting</div>
                        <div class="streamline-div">Graphic Design</div>
                        <div class="streamline-div">Advertising</div>
                        <div class="streamline-div">Video Production</div>
                        <div class="streamline-div">Web Develpment</div>
                        <div class="streamline-div">Digital Marketing</div>
                        <div class="streamline-div">Photography</div>
                        <div class="streamline-div">Industrial Design</div>
                        <div class="streamline-div">Public Relations</div>
                        <label for="file-streamline-div" class="d-flex justify-content-center mb-0">
                            <div class="streamline-div">Add Yours</div>
                        </label>
                        <input id="file-streamline-div" type="file">
                    </div>
                    <a class="login-left-side-signin m-auto" href="registration-4.html">Continue</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

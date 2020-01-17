@extends('frontend/basic/main')

@section('title', 'Registraion 4')
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
                    Tell Us About
                    Your Business
                </p>
                <div class="registrations-pages">
                    <a href="registration-1.html"></a>
                    <a href="registration-2.html"></a>
                    <a href="registration-3.html"></a>
                    <a class="active-pages" href="registration-4.html"></a>
                </div>
            </div>
        </div>
        <div class="login-right-side">
            <div class="login-right-side-content registration-4-info-content">
                <form class="registration-4-info">
                    <p class="registration-1-right-content-title">
                        Every Business Is Unique.<br>
                        Help Us To Serve You Better.
                    </p>
                    <div class="business-unique">
                        <div class="business-unique-left">
                            <p class="describe-your-business">describe your business</p>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="launching" value="value">
                                <label class="login-right-side-checkbox" for="launching">My business will be launching soon</label>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="income" value="value">
                                <label class="login-right-side-checkbox" for="income">It supplements my main income</label>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="full-time" value="value">
                                <label class="login-right-side-checkbox" for="full-time">It is new but my full-time focus</label>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="over-year" value="value">
                                <label class="login-right-side-checkbox" for="over-year">Has been my full-time focus
                                    for over a year</label>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="above" value="value">
                                <label class="login-right-side-checkbox" for="above">It is none of the above</label>
                            </div>
                        </div>
                        <div class="business-unique-right">
                            <p class="describe-your-business">how can we help?</p>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="sending-paid" value="value">
                                <label class="login-right-side-checkbox" for="sending-paid">Sending invoices and getting paid</label>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="managing-expenses" value="value">
                                <label class="login-right-side-checkbox" for="managing-expenses">Managing my expenses</label>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="tracking-time" value="value">
                                <label class="login-right-side-checkbox" for="tracking-time">Tracking my time and projects</label>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="explore" value="value">
                                <label class="login-right-side-checkbox" for="explore">I am here just to explore</label>
                            </div>
                            <p class="describe-your-business">do you use online payments now?</p>
                            <div class="describe-yes-no">
                                <div class="d-flex">
                                    <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="yes" value="value">
                                    <label class="login-right-side-checkbox" for="yes">Yes</label>
                                </div>
                                <div class="d-flex">
                                    <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="no" value="value">
                                    <label class="login-right-side-checkbox" for="no">No</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="login-left-side-signin m-auto" href="registration-5.html">Continue</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

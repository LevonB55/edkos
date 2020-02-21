@extends('frontend.platform.main')

@section('title', 'Online Payment Options')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoice-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-online-payment.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
@endsection

@section('content')
<main class="clients invoices payments">
    <div class="dashboard-header">
        <h1 class="online-payment-title invoice-title-name">Online Payment Options</h1>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="send-invoice open-send-invoice-popup">
        <div class="send-invoice-content">
            <div class="send-invoice-top">
                <img src="{{ asset('assets/img/top.png') }}">
            </div>
            <div class="send-invoice-title">
                <p>SEND INVOICE</p>
                <p>Noo16</p>
            </div>
            <div class="send-invoice-info">
                <div>
                    <label>To</label>
                    <select class="form-control" multiple="multiple" id="select-choose">
                        <option selected="selected">Lia Smith</option>
                        <option>white</option>
                        <option selected="selected">David Black</option>
                    </select>
                </div>
                <div>
                    <label>From</label>
                    <input placeholder="myemail@gmail.com">
                </div>
                <div class="justify-content-end out-data">
                    <p>€ 15.00</p>
                    <p>05/11/2019</p>
                </div>
                <div class="justify-content-end">
                    <textarea>Write your text</textarea>
                </div>
            </div>
            <div class="send-invoice-btns">
                <a class="send-invoice-cancel-btn" data-toggle="modal" id="send-invoice-cancel">Cancel</a>
                <a class="send-invoice-send-btn" data-toggle="modal">Send</a>
            </div>
        </div>
    </div>
    <div class="invoice-template online-payment">
        <div class="cards">
            <div class="cards-block border-green check-over">
                <img class="cards-png" src="{{ asset('assets/img/Visa.png') }}">
                <img class="check-green" src="{{ asset('assets/img/green-check.png') }}">
            </div>
            <div class="cards-block">
                <img class="cards-png" src="{{ asset('assets/img/Mastercard.png') }}">
                <img class="check-green" src="{{ asset('assets/img/green-check.png') }}">
            </div>
            <div class="cards-block">
                <img class="cards-png" src="{{ asset('assets/img/Paypal.png') }}">
                <img class="check-green" src="{{ asset('assets/img/green-check.png') }}">
            </div>
        </div>
        <div>
            <form class="card-form">
                <div class="input-block">
                    <label>Enter card number</label>
                    <input class="enter-card" placeholder="**** **** **** ****">
                </div>
                <div class="input-block">
                    <label>Card holder</label>
                    <input class="enter-card" placeholder="Card holder">
                </div>
                <div class="input-block">
                    <div class="small-img">
                        <div class="">
                            <label>Expiry date</label>
                            <input class="expiry-date" placeholder="MM/YY">
                        </div>
                        <div class="">
                            <label>CVV code</label>
                            <input class="expiry-date" placeholder="***">
                        </div>
                    </div>
                </div>
                <div class="btns-block">
                    <p class="card-details">Your card details would be secure and save.</p>
                    <div class="d-flex align-items-center">
                        <input type="checkbox" class="login-right-side-checkbox-input" name="checkbox" id="checkbox" value="value">
                        <label class="login-right-side-checkbox" for="checkbox">I have accepted the <span> Term and Conditions</span></label>
                    </div>
                    <button class="card-save-btn">SAVE</button>
                </div>

            </form>
        </div>
        <a class="invoice-back" href="ds-recurring-invoices.html">
            <img src="{{ asset('assets/img/invoices/back.png') }}">
            <span>Back</span>
        </a>
    </div>
</main>
@endsection

@section('extra-scripts')
{{--    <script src="{{ asset('assets/js/select2.min.js') }}"></script>--}}
@endsection

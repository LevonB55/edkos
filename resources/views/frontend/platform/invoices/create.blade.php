@extends('frontend.platform.main')

@section('title', 'Invoice Template')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoice-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-customize-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
@endsection

@section('content')
    <main class="clients invoices create-invoice">
        <form action="{{ route('invoices.store') }}" method="POST">
            @csrf
            <div class="dashboard-header">
                <h1 class="dashboard-clients-title invoice-title-name">New Invoice</h1>
                <div class="clients-btns">
                    <a class="prints-clients-btn"><img src="{{ asset('assets/img/prints.png') }}"></a>
                    <a class="prints-clients-btn"><img src="{{ asset('assets/img/pdf.png') }}"></a>
                    <button name="store" class="exp-clients-btn" value="{{ \App\Models\Invoice::DRAFT }}">SAVE</button>
                    <a class="exp-clients-btn" data-toggle="modal" id="invoice-send">SEND</a>
                    <a href="{{ route('invoices.templates') }}" class="exp-clients-btn">
                        Customize Style
                    </a>
                </div>
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
                            <p>€15.00</p>
                            <p>05/11/2019</p>
                        </div>
                        <div class="justify-content-end">
                            <textarea>Write your text</textarea>
                        </div>
                    </div>
                    <div class="send-invoice-btns">
                        <a class="send-invoice-cancel-btn" data-toggle="modal" id="send-invoice-cancel">Cancel</a>
                        <button name="store" value="{{ \App\Models\Invoice::SEND }}" class="send-invoice-send-btn" data-toggle="modal">Send</button>
                    </div>
                </div>
            </div>
            <a href="{{ route('invoices.index') }}" class="gr-back">
                <img src="{{ asset('assets/img/invoices/back.png') }}">
                <span>Back</span>
            </a>

            @include('frontend.platform.invoices.templates.template-' . auth()->user()->company->invoice_id)

        </form>
    </main>
@endsection

@section('extra-scripts')
{{--    <script src="{{ asset('js/select-2.js') }}"></script>--}}
@endsection

@extends('frontend.platform.main')

@section('title', 'Invoice')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoice-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-customize-template.css') }}">
@endsection

@section('content')
    <main class="clients invoices">
        <div class="dashboard-header">
            <h1 class="dashboard-clients-title">Invoice {{ $invoice->number }}</h1>
            <div class="clients-btns">
                {{--            <a class="prints-clients-btn"><img src="{{ asset('assets/img/prints.png') }}"></a>--}}
                {{--            <a class="prints-clients-btn"><img src="{{ asset('assets/img/pdf.png') }}"></a>--}}
                {{--            <a class="exp-clients-btn">EXPORT INVOICES</a>--}}
                <a href="{{ route('invoices.create') }}" class="new-clients-btn">NEW INVOICE</a>
            </div>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <a href="{{ route('invoices.index') }}" class="gr-back mb-4">
            <img src="{{ asset('assets/img/invoices/back.png') }}">
            <span>Back</span>
        </a>

        <div class="invoice-info">
            <div class="invoice-status">
                <span class="status mr-3">{{ strtoupper(\App\Models\Invoice::statuses()[$invoice->status]) }}</span>
                You created this invoice on {{ date('F d', strtotime($invoice->created_at)) }}.
            </div>
        </div>

        @include('frontend.platform.invoices.templates.created.template-' . $invoice->invoice_template_id)

    </main>
@endsection
@extends('frontend.platform.main')

@section('title', 'Invoice')
@section('sidebar')@stop
@section('scripts')@stop

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoice-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-customize-template.css') }}">
    <style>
        .date .form-control {
            background-color: #fff;
        }
        .gr-content-2 input:focus {
            border: 1px solid transparent;
        }
        .gr-content-3 table input:focus {
            border: none;
        }
        .form-control:focus {
            border-color: #ced4da;
            box-shadow: unset;
        }
        textarea:focus {
            outline: 0;
        }
        .invoice-info {
            background-color: #fbf2d5;
            height: 40px;
        }
        .invoice-status {
            width: 998px;
            margin: 0 auto;
        }
        .status {
            color: #ff6a00;
            font-weight: bold;
            line-height: 2.3;
        }
    </style>
@endsection

@section('content')
<div class="invoice-info">
    <div class="invoice-status">
        <span class="status mr-3">OUTSTANDING</span> €{{ $invoice->total }} is due on {{ $invoice->due_date }}.
        Sent on {{ date('F d', strtotime($invoice->created_at)) }}.
    </div>
</div>
<div class="gr-template">
    <div class="gr-header">
        <div class="gr-header-left">
            <p class="gr-text-1">
                <input type="text" class="gr-input-1" value="{{ $invoice->company }}">
            </p>
            <p class="gr-text-2">
                <input type="text" class="gr-input-1" value="{{ $invoice->sender_phone }}">
            </p>
        </div>
        <div class="gr-header-right">
            <p class="gr-text-1">Invoice</p>
            <p class="gr-text-2">Invoice Number</p>
            <p class="gr-text-1">{{ $invoice->number }}</p>
        </div>
    </div>
    <div class="gr-body">
        <div class="gr-content-1">
            @isset($invoice->image)
                <span class="gr-content-1-logo template-logo-wrapper">
                    <img src="{{ Storage::url($invoice->image->url) }}" class="template-logo" alt="Template Logo">
                </span>
            @else
                <span class="gr-content-1-logo template-logo-wrapper hide-logo">
                    <img class="template-logo" alt="Template Logo">
                </span>
            @endif

            <div class="gr-date-issue date-format">
                <p class="gr-text-5">Date Of Issue</p>
                <div class="input-group date">
                    <input type="text" class="form-control" value="{{ $invoice->issue_date }}">
                </div>

                <p class="gr-text-5">Due Date</p>
                <div class="input-group date">
                    <input type="text" class="form-control" value="{{ $invoice->due_date }}">
                </div>
            </div>
        </div>
        <div class="gr-content-2">
            <div class="gr-content-block-1">
                <p class="gr-text-7">From</p>
                <input type="text" class="gr-text-8" value="{{ $invoice->sender_name }}">
                <input type="email" class="gr-text-9" value="{{ $invoice->sender_email }}">
                <input type="text" class="gr-text-9" value="{{ $invoice->sender_street }}">
                <input type="text" class="gr-text-9" value="{{ $invoice->sender_city }}">
                <input type="text" class="gr-text-9" value="{{ $invoice->sender_state }}">
                <input type="text" class="gr-text-9" value="{{ $invoice->sender_zip }}">
                <input type="text" class="gr-text-9" value="{{ $selectedCountries[$invoice->sender_country] ?? '' }}">
            </div>
            <div class="gr-content-block-2 email-clickable">
                <p class="gr-text-7">For</p>
                <input type="text" class="gr-text-8" value="{{ $invoice->receiver_name }}">
                <input type="email" class="gr-text-9 clickable-input" value="{{ $invoice->receiver_email }}">
                <input type="text" class="gr-text-9" value="{{ $invoice->receiver_street }}">
                <input type="text" class="gr-text-9" value="{{ $invoice->receiver_city }}">
                <input type="text" class="gr-text-9" value="{{ $invoice->receiver_state }}">
                <input type="text" class="gr-text-9" value="{{ $invoice->receiver_zip }}">
                <input type="text" class="gr-text-9" value="{{ $selectedCountries[$invoice->receiver_country] ?? '' }}">
                <input class="gr-text-9" value="{{ $invoice->receiver_phone }}">
            </div>
        </div>
        <div class="gr-content-3">
            <table class="invoice-table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Amount</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="invoice-items">
                    @foreach($invoice->invoice_items as $item)
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->amount }}</td>
                    @endforeach
                </tbody>
                <tbody class="invoice-summary">
                    <tr class="gr-add-line">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="gr-add-table-tr add_invoice_item">+ Add a Line</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Subtotal</td>
                        <td></td>
                        <td>
                            <input type="text" value="€{{ $invoice->subtotal }}">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Discount (%)</td>
                        <td></td>
                        <td>
                            <span>-</span>
                            <input type="text" value="{{ $invoice->discount }}">
                        </td>
                    </tr>
                    <tr class="gr-grid-tr">
                        <td></td>
                        <td></td>
                        <td>Tax (%)</td>
                        <td></td>
                        <td>
                            <span>-</span>
                            <input type="text" value="{{ $invoice->tax }}">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total (€)</td>
                        <td></td>
                        <td>
                            <input type="text" value="€{{ $invoice->total }}">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="gr-line-1"></div>
            <div class="gr-content-4">
                <p class="gr-text-10">Notes</p>
                <textarea class="gr-text-11 invoice-notes">{{ $invoice->notes }}</textarea>
            </div>
            <div class="gr-content-5">
                <div class="gr-content-5-block">
                    <p class="gr-text-10">VAT Number</p>
                    <input value="{{ $invoice->vat }}" name="vat">
                </div>
                <div class="gr-content-5-block">
                    <p class="gr-text-10">Bank Account</p>
                    <input value="{{ $invoice->bank_account }}" name="bank_account">
                </div>
            </div>
        </div>
    </div>
    <div class="gr-footer">
    </div>
</div>
<script>
    var x, i;
    x = document.querySelectorAll("input");
    for (i = 0; i < x.length; i++) {
        x[i].setAttribute('readonly', true);
    }
    document.querySelector('textarea').setAttribute('readonly', true);
</script>
@endsection

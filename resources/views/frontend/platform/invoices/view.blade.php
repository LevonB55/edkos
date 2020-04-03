@extends('frontend.platform.main')

@section('title', 'Invoice')
@section('sidebar')@stop
@section('scripts')@stop

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoice-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-customize-template.css') }}">
@endsection

@section('content')
    <div class="invoice-info">
        <div class="invoice-status">
            <span class="status mr-3">OUTSTANDING</span> €{{ $invoice->total }} is due on {{ $invoice->due_date }}.
            Sent on {{ date('F d', strtotime($invoice->created_at)) }}.
        </div>
    </div>

    @include('frontend.platform.invoices.templates.created.template-1')

    <script>
        (function () {
            let viewEl = document.querySelector('.view');
            if(viewEl) {
                var x, i;
                x = viewEl.querySelectorAll("input");
                for (i = 0; i < x.length; i++) {
                    x[i].setAttribute('readonly', true);
                }
                viewEl.querySelector('textarea').setAttribute('readonly', true);
            }
        }());
    </script>

@endsection

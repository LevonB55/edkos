<div class="gr-template view">
    <div class="gr-header">
        <div class="gr-header-left">
            @if($invoice->company)
                <p class="gr-text-1">
                    <input type="text" class="gr-input-1" value="{{ $invoice->company }}">
                </p>
            @endif
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

                @if($invoice->sender_street)
                    <input type="text" class="gr-text-9" value="{{ $invoice->sender_street }}">
                @endif

                @if($invoice->sender_city)
                    <input type="text" class="gr-text-9" value="{{ $invoice->sender_city }}">
                @endif

                @if($invoice->sender_state)
                    <input type="text" class="gr-text-9" value="{{ $invoice->sender_state }}">
                @endif

                @if($invoice->sender_zip)
                    <input type="text" class="gr-text-9" value="{{ $invoice->sender_zip }}">
                @endif

                @if($invoice->sender_country)
                    <input type="text" class="gr-text-9" value="{{ $selectedCountries[$invoice->sender_country][0]['name'] ?? '' }}">
                @endif
            </div>

            <div class="gr-content-block-2 email-clickable">
                <p class="gr-text-7">For</p>
                <input type="text" class="gr-text-8" value="{{ $invoice->receiver_name }}">
                <input type="email" class="gr-text-9 clickable-input" value="{{ $invoice->receiver_email }}">

                @if($invoice->receiver_street)
                    <input type="text" class="gr-text-9" value="{{ $invoice->receiver_street }}">
                @endif

                @if($invoice->receiver_city)
                    <input type="text" class="gr-text-9" value="{{ $invoice->receiver_city }}">
                @endif

                @if($invoice->receiver_state)
                    <input type="text" class="gr-text-9" value="{{ $invoice->receiver_state }}">
                @endif

                @if($invoice->receiver_zip)
                    <input type="text" class="gr-text-9" value="{{ $invoice->receiver_zip }}">
                @endif

                @if($invoice->receiver_country)
                    <input type="text" class="gr-text-9" value="{{ $selectedCountries[$invoice->receiver_country][0]['name'] ?? '' }}">
                @endif

                @if($invoice->receiver_phone)
                    <input class="gr-text-9" value="{{ $invoice->receiver_phone }}">
                @endif
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
                    @if($invoice->invoice_items->count())
                        @foreach($invoice->invoice_items as $item)
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->amount }}</td>
                        @endforeach
                    @else
                        <td></td>
                        <td>€0.00</td>
                        <td>1</td>
                        <td>€0.00</td>
                    @endif
                </tbody>
                <tbody class="invoice-summary">
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

            @if($invoice->notes)
                <div class="gr-content-4">
                    <p class="gr-text-10">Notes</p>
                    <textarea class="gr-text-11 invoice-notes">{{ $invoice->notes }}</textarea>
                </div>
            @endif

            <div class="gr-content-5 clearfix">
                @if($invoice->vat)
                    <div class="gr-content-5-block float-left">
                        <p class="gr-text-10">VAT Number</p>
                        <input value="{{ $invoice->vat }}" name="vat">
                    </div>
                @endif

                @if($invoice->bank_account)
                    <div class="gr-content-5-block float-right">
                        <p class="gr-text-10">Bank Account</p>
                        <input value="{{ $invoice->bank_account }}" name="bank_account">
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="gr-footer">
    </div>
</div>

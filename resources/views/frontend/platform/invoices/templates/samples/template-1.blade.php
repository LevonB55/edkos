<div class="gr-template">
    <div class="gr-header">
        <div class="gr-header-left">
            <p class="gr-text-1">
                <input type="text" class="gr-input-1" placeholder="Company Name" value="{{ $user->company->name }}" name="company">
            </p>
            <p class="gr-text-2">
                <input type="text" class="gr-input-1" placeholder="Phone Number" value="{{ $user->company->business_phone }}"
                       name="sender_phone">
            </p>
        </div>
        <div class="gr-header-right">
            <p class="gr-text-1">Invoice</p>
            <p class="gr-text-2">Invoice Number</p>
{{--            <p class="gr-text-1"><input class="gr-input-2" value="{{ Str::invoiceNumber($invoiceNumber) }}" readonly></p>--}}
            <p class="gr-text-1">{{ $invoiceNumber }}</p>
        </div>
    </div>
    <div class="gr-body">
        <div class="gr-content-1">
{{--            <a class="gr-content-1-logo">--}}
{{--                <label for="gr-logo">--}}
{{--                    <h4 class="gr-text-3">Drag Your Logo Or</h4>--}}
{{--                    <h4 class="gr-text-4">Select A File</h4>--}}
{{--                </label>--}}
{{--                <input id="gr-logo" type="file">--}}
{{--            </a>--}}
            @isset($user->company->image)
                <span class="gr-content-1-logo template-logo-wrapper">
                    <img src="{{ Storage::url($user->company->image->url) }}" class="template-logo" alt="Template Logo">
                </span>
            @else
                <span class="gr-content-1-logo template-logo-wrapper hide-logo">
                    <img class="template-logo" alt="Template Logo">
                </span>
            @endif

            <div class="gr-date-issue date-format" data-date-format="{{ $user->company->date_format }}">
                <p class="gr-text-5">Date Of Issue</p>
{{--                <input type="date" placeholder="02/05/2019" class="gr-text-6">--}}
                <div class="input-group date">
                    <input type="text" class="form-control datepicker" name="issue_date">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>

                <p class="gr-text-5">Due Date</p>
                <div class="input-group date">
                    <input type="text" class="form-control datepicker" name="due_date">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
{{--                <select class="gr-due-date custom-input-select">--}}
{{--                    <option>On Date of Issue</option>--}}
{{--                    <option>After 15 Days</option>--}}
{{--                    <option>After 30 Days</option>--}}
{{--                    <option value="custom">Custom</option>--}}
{{--                </select>--}}
{{--                <input type="date" placeholder="02/05/2019" class="gr-text-6 custom-input">--}}
            </div>
        </div>
        <div class="gr-content-2">
            <div class="gr-content-block-1">
                <p class="gr-text-7">From</p>
                <input type="text" class="gr-text-8" placeholder="My name" value="{{ $user->full_name }}" name="sender[name]">
                <input type="email" class="gr-text-9" placeholder="Email" value="{{ $user->company->email }}" name="sender[email]">
                <input type="text" class="gr-text-9" placeholder="Street Address" value="{{ $user->company->street }}" name="sender[street]">
                <input type="text" class="gr-text-9" placeholder="City" value="{{ $user->company->city }}" name="sender[city]">
                <input type="text" class="gr-text-9" placeholder="State" value="{{ $user->company->state }}" name="sender[state]">
                <input type="text" class="gr-text-9" placeholder="Zip Code" value="{{ $user->company->zip }}" name="sender[zip]">
                @include('frontend.platform.partials._countries', [
                            'selectedCountry' => $user->company->country_id,
                            'country' => 'sender[country]'
                        ])
            </div>
            <div class="gr-content-block-2 email-clickable">
                <p class="gr-text-7">For</p>
                <input type="text" class="gr-text-8" placeholder="Contact name" name="receiver[name]">
                <input type="email" class="gr-text-9 clickable-input" placeholder="Email" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" name="receiver[email]">
                <input type="text" class="gr-text-9" placeholder="Street Address" name="receiver[street]">
                <input type="text" class="gr-text-9" placeholder="City" name="receiver[city]">
                <input type="text" class="gr-text-9" placeholder="State" name="receiver[state]">
                <input type="text" class="gr-text-9" placeholder="Zip Code" name="receiver[zip]">
                @include('frontend.platform.partials._countries', [
                            'selectedCountry' => '',
                            'country' => "receiver[country]"
                        ])
                <input class="gr-text-9" placeholder="Phone Number" name="receiver[phone]">
                <div class="open-close-user open-clickable">
                    <div class="samll-icons">
                        <img src="{{ asset('assets/img/triangle.png') }}">
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="{{ asset('assets/img/user.png') }}">
                        <span>Lia Smith</span>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="{{ asset('assets/img/user.png') }}">
                        <span>Lia Smith</span>
                    </div>
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="{{ asset('assets/img/user.png') }}">
                        <span>Lia Smith</span>
                    </div>
                </div>
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
                            <input type="text" class="subtotal" placeholder="€0.00" name="subtotal" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Discount (%)</td>
                        <td></td>
                        <td>
                            <span>-</span>
                            {{--                        <span class="discount-number">€0.00</span>--}}
                            <input type="text" class="discount" placeholder="0.00%" name="discount">
                        </td>
                    </tr>
                    <tr class="gr-grid-tr">
                        <td>
                            {{--                        <select class="gr-select-1">--}}
                            {{--                            <option selected="" hidden="">Choose country</option>--}}
                            {{--                            <option>USA</option>--}}
                            {{--                            <option>China</option>--}}
                            {{--                            <option>Spain</option>--}}
                            {{--                        </select>--}}
                        </td>
                        <td>
                            {{--                        <select class="gr-select-1">--}}
                            {{--                            <option selected="" hidden="">Tax rate</option>--}}
                            {{--                            <option>USA</option>--}}
                            {{--                            <option>China</option>--}}
                            {{--                            <option>Spain</option>--}}
                            {{--                        </select>--}}
                        </td>
                        <td>Tax (%)</td>
                        <td></td>
                        <td>
                            <span>-</span>
                            <input type="text" class="tax" placeholder="0.00%" name="tax">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total (€)</td>
                        <td></td>
                        <td>
                            <input type="text" class="total" placeholder="€0.00" name="total" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="gr-line-1"></div>
            <div class="gr-content-4">
                <p class="gr-text-10">Notes</p>
                <textarea class="gr-text-11 invoice-notes" name="notes" placeholder="Some notes or payment instructions (optional)."></textarea>
            </div>
            <div class="gr-content-5 clearfix">
                <div class="gr-content-5-block float-left">
                    <p class="gr-text-10">VAT Number</p>
                    <input placeholder="VAT Number" value="{{ $user->company->vat }}" name="vat">
                </div>
                <div class="gr-content-5-block float-right">
                    <p class="gr-text-10">Bank Account</p>
                    <input placeholder="Bank Account" value="{{ $user->company->bank_account }}" name="bank_account">
                </div>
            </div>
        </div>
    </div>
    <div class="gr-footer">
    </div>
</div>
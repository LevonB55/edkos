<div class="gr-template">
    <div class="gr-header">
        <div class="gr-header-left">
            <p class="gr-text-1"><input class="gr-input-1" placeholder="Your Company Name" value="{{ $user->company->name }}"></p>
{{--            <p class="gr-text-2"><input class="gr-input-1" placeholder="Your Company Email" value="{{ $user->company->email }}"></p>--}}
        </div>
        <div class="gr-header-right">
            <p class="gr-text-1">Invoice</p>
            <p class="gr-text-2">Invoice Number</p>
            <p class="gr-text-1"><input class="gr-input-2" value="{{ Str::invoiceNumber($invoiceNumber) }}" readonly></p>
{{--            <p class="gr-text-1">{{ Str::invoiceNumber($invoiceNumber) }}</p>--}}
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
                    <input type="text" class="form-control datepicker">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>

                <p class="gr-text-5">Due Date</p>
                <div class="input-group date">
                    <input type="text" class="form-control datepicker">
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
                <input class="gr-text-8" placeholder="Contact name" value="{{ $user->full_name }}">
                <input class="gr-text-9" placeholder="Email" value="{{ $user->company->email }}">
                <input class="gr-text-9" placeholder="Street Address" value="{{ $user->company->street }}">
                <input class="gr-text-9" placeholder="City" value="{{ $user->company->city }}">
                <input class="gr-text-9" placeholder="State" value="{{ $user->company->state }}">
                <select>
                    <option value="">Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ $user->company->country_id == $country->id ? 'selected' : '' }}>
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
                <input class="gr-text-9" placeholder="Zip" value="{{ $user->company->zip }}">
                <input class="gr-text-9" placeholder="Business Phone" value="{{ $user->company->business_phone }}">
                <input class="gr-text-9" placeholder="Mobile Phone" value="{{ $user->company->mobile_phone }}">
            </div>
            <div class="gr-content-block-2 email-clickable">
                <p class="gr-text-7">For</p>
                <input class="gr-text-8" placeholder="Contact name">
                <input class="gr-text-9 clickable-input" placeholder="Email" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <input class="gr-text-9" placeholder="Street Address">
                <input class="gr-text-9" placeholder="City">
                <input class="gr-text-9" placeholder="State">
                <select>
                    <option value="">Country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
                <input class="gr-text-9" placeholder="Zip">
                <input class="gr-text-9" placeholder="Business Phone">
                <input class="gr-text-9" placeholder="Mobile Phone">
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
            <table>
                <thead>
                <tr>
                    <th>Description</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Amount</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
{{--                <tr>--}}
{{--                    <td><input type="text" placeholder="Enter an Item Name"></td>--}}
{{--                    <td></td>--}}
{{--                    <td><input placeholder="€0.00"></td>--}}
{{--                    <td><input placeholder="1"></td>--}}
{{--                    <td><input placeholder="€0.00"></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td></td>--}}
{{--                    <td></td>--}}
{{--                    <td><input placeholder="€0.00"></td>--}}
{{--                    <td><input placeholder="1"></td>--}}
{{--                    <td><input placeholder="€0.00"></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td></td>--}}
{{--                    <td></td>--}}
{{--                    <td><input placeholder="€0.00"></td>--}}
{{--                    <td><input placeholder="1"></td>--}}
{{--                    <td><input placeholder="€0.00"></td>--}}
{{--                </tr>--}}
                <tr class="gr-add-line">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="gr-add-table-tr">+ Add a Line</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Subtotal</td>
                    <td></td>
                    <td class="subtotal">€0.00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Discount (0%)</td>
                    <td></td>
                    <td>
                        <span>-</span>
{{--                        <span class="discount-number">€0.00</span>--}}
                        <input type="text" class="discount-number" placeholder="€0.00">
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
                    <td>Tax</td>
                    <td></td>
                    <td>
                        <span>-</span>
                        <input type="text" class="tax-number" placeholder="€0.00">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total (€)</td>
                    <td></td>
                    <td class="total">€0.00</td>
                </tr>
                </tbody>
            </table>
            <div class="gr-line-1"></div>
            <div class="gr-content-4">
                <p class="gr-text-10">Notes</p>
                <textarea class="gr-text-11 invoice-notes" name="notes" placeholder="Some notes or payment instructions (optional)."></textarea>
            </div>
            <div class="gr-content-5">
                <div class="gr-content-5-block">
                    <p class="gr-text-10">VAT Number</p>
                    <input placeholder="VAT Number" value="{{ $user->company->vat }}">
                </div>
                <div class="gr-content-5-block">
                    <p class="gr-text-10">Bank Account</p>
                    <input placeholder="Bank Account" value="{{ $user->company->bank_account }}">
                </div>
            </div>
        </div>
    </div>
    <div class="gr-footer">
    </div>
</div>
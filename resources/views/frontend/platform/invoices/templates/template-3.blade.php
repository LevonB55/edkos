<div class="wt-template">
    <div class="wt-header">
{{--        <a class="wt-content-1-logo">--}}
{{--            <label for="wt-logo">--}}
{{--                <h4 class="wt-text-3">Drag Your Logo Or</h4>--}}
{{--                <h4 class="wt-text-4">Select A File</h4>--}}
{{--            </label>--}}
{{--            <input id="wt-logo" type="file">--}}
{{--        </a>--}}
        <span class="wt-content-1-logo">
            Logo
            <img class="template-logo" alt="Template Logo">
        </span>
    </div>
    <div class="wt-body">
            <div class="wt-content-1">
                <div class="wt-date-issue">
                    <p class="wt-text-5">Date Of Issue</p>
                    <input type="date" placeholder="02/05/2019" class="wt-text-6">
                    <p class="wt-text-5">Due Date</p>
                    <select class="wt-due-date custom-input-select">
                        <option>On Date of Issue</option>
                        <option>After 15 Days</option>
                        <option>After 30 Days</option>
                        <option value="custom">Custom</option>
                    </select>
                    <input type="date" placeholder="02/05/2019" class="wt-text-6 custom-input">
                </div>
                <div class="wt-header-left">
                    <p class="wt-text-1"><input class="wt-input-1" placeholder="Your Company Name"></p>
                    <p class="wt-text-2"><input class="wt-input-1" placeholder="Your Company Email"></p>
                </div>
                <div class="wt-header-right">
                    <p class="wt-text-1">Invoice</p>
                    <p class="wt-text-2">Invoice Number</p>
                    <p class="wt-text-1"><input class="wt-input-2" placeholder="0016"></p>
                </div>
            </div>
            <div class="wt-content-2">
                <div class="wt-content-block-1">
                    <p class="wt-text-7">From</p>
                    <input class="wt-text-8" placeholder="Contact name">
                    <input class="wt-text-9" placeholder="Email">
                    <input class="wt-text-9" placeholder="Address">
                    <input class="wt-text-9" placeholder="State, Country">
                    <input class="wt-text-9" placeholder="Phone: 047 4584 444">
                </div>
                <div class="wt-content-block-2 email-clickable">
                    <p class="wt-text-7">For</p>
                    <input class="wt-text-8" placeholder="Contact name">
                    <input class="wt-text-9 clickable-input" placeholder="Email" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <input class="wt-text-9" placeholder="Address">
                    <input class="wt-text-9" placeholder="State, Country">
                    <input class="wt-text-9" placeholder="Phone: 047 4584 444">
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
            <div class="wt-content-3">
                <table>
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th></th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input placeholder="€0.00"></td>
                        <td><input placeholder="1"></td>
                        <td><input placeholder="€0.00"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input placeholder="€0.00"></td>
                        <td><input placeholder="1"></td>
                        <td><input placeholder="€0.00"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input placeholder="€0.00"></td>
                        <td><input placeholder="1"></td>
                        <td><input placeholder="€0.00"></td>
                    </tr>
                    <tr class="wt-add-line">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="wt-add-table-tr">+ Add a Line</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Subtotal</td>
                        <td></td>
                        <td>€0.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Discount (0%)</td>
                        <td></td>
                        <td>-€0.00</td>
                    </tr>
                    <tr class="wt-grid-tr">
                        <td>
                            <select class="wt-select-1">
                                <option selected="" hidden="">Choose country</option>
                                <option>USA</option>
                                <option>China</option>
                                <option>Spain</option>
                            </select>
                        </td>
                        <td>
                            <select class="wt-select-1">
                                <option selected="" hidden="">Tax rate</option>
                                <option>USA</option>
                                <option>China</option>
                                <option>Spain</option>
                            </select>
                        </td>
                        <td>Tax</td>
                        <td></td>
                        <td>€0.00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total:</td>
                        <td></td>
                        <td>€0.00 USD</td>
                    </tr>
                    </tbody>
                </table>
                <div class="wt-line-1"></div>
                <div class="wt-content-4">
                    <p class="wt-text-10">Notes</p>
                    <p class="wt-text-11">Some notes, payment istructions, e.t.c.</p>
                </div>
                <div class="wt-content-5">
                    <div class="wt-content-5-block">
                        <p class="wt-text-10">VAT Number</p>
                        <input placeholder="VAT Number">
                    </div>
                    <div class="wt-content-5-block">
                        <p class="wt-text-10">Bank Account</p>
                        <input placeholder="Bank Account">
                    </div>
                </div>
            </div>
        </div>
</div>
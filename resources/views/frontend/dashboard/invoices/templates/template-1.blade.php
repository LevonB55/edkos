<div class="gr-template">
    <div class="gr-header">
        <div class="gr-header-left">
            <p class="gr-text-1"><input class="gr-input-1" placeholder="Your Company Name"></p>
            <p class="gr-text-2"><input class="gr-input-1" placeholder="Your Company Email"></p>
        </div>
        <div class="gr-header-right">
            <p class="gr-text-1">Invoice</p>
            <p class="gr-text-2">Invoice Number</p>
            <p class="gr-text-1"><input class="gr-input-2" placeholder="0016"></p>
        </div>
    </div>
    <div class="gr-body">
        <div class="gr-content-1">
            <a class="gr-content-1-logo">
                <label for="gr-logo">
                    <h4 class="gr-text-3">Drag Your Logo Or</h4>
                    <h4 class="gr-text-4">Select A File</h4>
                </label>
                <input id="gr-logo" type="file">
            </a>
            <div class="gr-date-issue">
                <p class="gr-text-5">Date Of Issue</p>
                <input type="date" placeholder="02/05/2019" class="gr-text-6">
                <p class="gr-text-5">Due Date</p>
                <select class="gr-due-date custom-input-select">
                    <option>On Date of Issue</option>
                    <option>After 15 Days</option>
                    <option>After 30 Days</option>
                    <option value="custom">Custom</option>
                </select>
                <input type="date" placeholder="02/05/2019" class="gr-text-6 custom-input">
            </div>
        </div>
        <div class="gr-content-2">
            <div class="gr-content-block-1">
                <p class="gr-text-7">From</p>
                <input class="gr-text-8" placeholder="Contact name">
                <input class="gr-text-9" placeholder="Email">
                <input class="gr-text-9" placeholder="Address">
                <input class="gr-text-9" placeholder="State, Country">
                <input class="gr-text-9" placeholder="Phone: 047 4584 444">
            </div>
            <div class="gr-content-block-2 email-clickable">
                <p class="gr-text-7">For</p>
                <input class="gr-text-8" placeholder="Contact name">
                <input class="gr-text-9 clickable-input" placeholder="Email" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <input class="gr-text-9" placeholder="Address">
                <input class="gr-text-9" placeholder="State, Country">
                <input class="gr-text-9" placeholder="Phone: 047 4584 444">
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
                    <td>€0.00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Discount (0%)</td>
                    <td></td>
                    <td>-€0.00</td>
                </tr>
                <tr class="gr-grid-tr">
                    <td>
                        <select class="gr-select-1">
                            <option selected="" hidden="">Choose country</option>
                            <option>USA</option>
                            <option>China</option>
                            <option>Spain</option>
                        </select>
                    </td>
                    <td>
                        <select class="gr-select-1">
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
            <div class="gr-line-1"></div>
            <div class="gr-content-4">
                <p class="gr-text-10">Notes</p>
                <p class="gr-text-11">Some notes, payment istructions, e.t.c.</p>
            </div>
            <div class="gr-content-5">
                <div class="gr-content-5-block">
                    <p class="gr-text-10">VAT Number</p>
                    <input placeholder="VAT Number">
                </div>
                <div class="gr-content-5-block">
                    <p class="gr-text-10">Bank Account</p>
                    <input placeholder="Bank Account">
                </div>
            </div>
        </div>
    </div>
    <div class="gr-footer">
        </div>
</div>
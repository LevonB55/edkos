<div class="bz-template">
    <a class="bz-content-1-logo">
        <label for="bz-logo">
            <h4 class="bz-text-3">Drag Your Logo Or</h4>
            <h4 class="bz-text-4">Select A File</h4>
        </label>
        <input id="bz-logo" type="file">
    </a>
    <div class="bz-header">
        <div class="bz-header-left">
            <p class="bz-text-7">Bill To</p>
            <input class="bz-text-8" placeholder="Contact name">
            <input class="bz-text-9" placeholder="Email">
            <input class="bz-text-9" placeholder="Address">
            <input class="bz-text-9" placeholder="State, Country">
            <input class="bz-text-9" placeholder="Phone: 047 4584 444">
        </div>
        <div class="bz-header-right">
            <p class="bz-text-1">Invoice</p>
            <p class="bz-text-2">Invoice Number</p>
            <p class="bz-text-1"><input class="bz-input-2" placeholder="0016"></p>
            <div class="bz-date-issue">
                <div>
                    <p class="bz-text-5">Date Of Issue</p>
                    <input type="date" placeholder="02/05/2019" class="bz-text-6">
                </div>
                <div>
                    <p class="bz-text-5">Due Date</p>
                    <select class="bz-due-date custom-input-select">
                        <option>On Date of Issue</option>
                        <option>After 15 Days</option>
                        <option>After 30 Days</option>
                        <option value="custom">Custom</option>
                    </select>
                    <input type="date" placeholder="02/05/2019" class="bz-text-6 custom-input">
                </div>
            </div>
        </div>
    </div>
    <div class="bz-body">
        <div class="bz-content-3">
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
                <tr class="bz-add-line">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="bz-add-table-tr">+ Add a Line</td>
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
                <tr class="bz-grid-tr">
                    <td>
                        <select class="bz-select-1">
                            <option selected="" hidden="">Choose country</option>
                            <option>USA</option>
                            <option>China</option>
                            <option>Spain</option>
                        </select>
                    </td>
                    <td>
                        <select class="bz-select-1">
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
            <div class="bz-content-4">
                <p class="bz-text-10">Notes</p>
                <p class="bz-text-11">Some notes, payment istructions, e.t.c.</p>
            </div>
            <div class="bz-content-block-2 email-clickable">
                <div>
                    <input class="bz-text-12" placeholder="Contact name">
                    <input class="bz-text-12" placeholder="Role in the company">
                </div>
                <div>
                    <input class="bz-text-12 clickable-input" placeholder="Email" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <input class="bz-text-12" placeholder="Address">
                </div>
                <div>
                    <input class="bz-text-12" placeholder="State, Country">
                    <input class="bz-text-12" placeholder="Phone: 047 4584 444">
                </div>
            </div>
            <div class="bz-content-5">
                <div class="bz-content-5-block">
                    <p class="bz-text-10">VAT Number</p>
                    <input placeholder="VAT Number">
                </div>
                <div class="bz-content-5-block">
                    <p class="bz-text-10">Bank Account</p>
                    <input placeholder="Bank Account">
                </div>
            </div>
        </div>
    </div>
    <div class="bz-footer"> </div>
</div>
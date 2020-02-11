@extends('frontend.dashboard.main')

@section('title', 'Estimates Template')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoice-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}"/>
@endsection

@section('content')
    <main class="clients invoices">
        <div class="dashboard-header">
            <h1 class="dashboard-clients-title invoice-title-name">New Estimate</h1>
            <div class="clients-btns">
                <a class="prints-clients-btn"><img src="img/prints.png"></a>
                <a class="prints-clients-btn"><img src="img/pdf.png"></a>
                <a class="exp-clients-btn">SAVE</a>
                <a class="new-clients-btn" data-toggle="modal" id="invoice-send">SEND</a>
            </div>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="send-invoice open-send-invoice-popup">
            <div class="send-invoice-content">
                <div class="send-invoice-top">
                    <img src="img/top.png">
                </div>
                <div class="send-invoice-title">
                    <p>SEND Estimate</p>
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
                    <a class="send-invoice-send-btn" data-toggle="modal">Send</a>
                </div>
            </div>
        </div>
        <div class="gr-template">
            <div class="gr-header">
                <div class="gr-header-left">
                    <p class="gr-text-1"><input class="gr-input-1" placeholder="Your Company Name"></p>
                    <p class="gr-text-2"><input class="gr-input-1" placeholder="Your Company Email"></p>
                </div>
                <div class="gr-header-right">
                    <p class="gr-text-1">Estimate</p>
                    <p class="gr-text-2">Estimate Number</p>
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
                        <p class="gr-text-5">Date Of Estimate</p>
                        <input type="date" placeholder="02/05/2019" class="gr-text-6">
                        <p class="gr-text-5">Due Date</p>
                        <select class="gr-due-date custom-input-select">
                            <option>On Date of Estimate</option>
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
                        <input class="gr-text-9 clickable-input" placeholder="Email" id="dropdownMenuButton-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input class="gr-text-9" placeholder="Address">
                        <input class="gr-text-9" placeholder="State, Country">
                        <input class="gr-text-9" placeholder="Phone: 047 4584 444">
                        <div class="open-close-user open-clickable">
                            <div class="samll-icons">
                                <img src="img/triangle.png">
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <img src="img/user.png">
                                <span>Lia Smith</span>
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <img src="img/user.png">
                                <span>Lia Smith</span>
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <img src="img/user.png">
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
                    <a class="gr-back" href="ds-estimates.html">
                        <img src="img/invoices/back.png">
                        <span>Back</span>
                    </a>
                </div>
            </div>
            <div class="gr-footer">

            </div>
        </div>
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
                    <p class="bz-text-1">Estimate</p>
                    <p class="bz-text-2">Estimate Number</p>
                    <p class="bz-text-1"><input class="bz-input-2" placeholder="0016"></p>
                    <div class="bz-date-issue">
                        <div>
                            <p class="bz-text-5">Date Of Estimate</p>
                            <input type="date" placeholder="02/05/2019" class="bz-text-6">
                        </div>
                        <div>
                            <p class="bz-text-5">Due Date</p>
                            <select class="bz-due-date custom-input-select">
                                <option>On Date of Estimate</option>
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
                            <input class="bz-text-12 clickable-input" placeholder="Email" id="dropdownMenuButton-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="bz-back" href="ds-estimates.html">
                        <img src="img/invoices/back.png">
                        <span>Back</span>
                    </a>
                </div>
            </div>
            <div class="bz-footer"></div>
        </div>
        <div class="wt-template">
            <div class="wt-header">
                <a class="wt-content-1-logo">
                    <label for="wt-logo">
                        <h4 class="wt-text-3">Drag Your Logo Or</h4>
                        <h4 class="wt-text-4">Select A File</h4>
                    </label>
                    <input id="wt-logo" type="file">
                </a>
            </div>
            <div class="wt-body">
                <div class="wt-content-1">
                    <div class="wt-date-issue">
                        <p class="wt-text-5">Date Of Estimate</p>
                        <input type="date" placeholder="02/05/2019" class="wt-text-6">
                        <p class="wt-text-5">Due Date</p>
                        <select class="wt-due-date custom-input-select">
                            <option>On Date of Estimate</option>
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
                        <p class="wt-text-1">Estimate</p>
                        <p class="wt-text-2">Estimate Number</p>
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
                        <input class="wt-text-9 clickable-input" placeholder="Email" id="dropdownMenuButton-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <input class="wt-text-9" placeholder="Address">
                        <input class="wt-text-9" placeholder="State, Country">
                        <input class="wt-text-9" placeholder="Phone: 047 4584 444">
                        <div class="open-close-user open-clickable">
                            <div class="samll-icons">
                                <img src="img/triangle.png">
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <img src="img/user.png">
                                <span>Lia Smith</span>
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <img src="img/user.png">
                                <span>Lia Smith</span>
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <img src="img/user.png">
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
                    <a class="wt-back" href="ds-estimates.html">
                        <img src="img/invoices/back.png">
                        <span>Back</span>
                    </a>
                </div>
            </div>
            <div class="wt-footer"></div>
        </div>
    </main>
{{--    <main class="clients invoices">--}}
{{--        <div class="dashboard-header">--}}
{{--            <h1 class="dashboard-clients-title invoice-title-name">New Estimate</h1>--}}
{{--            <div class="clients-btns">--}}
{{--                <a class="prints-clients-btn"><img src="{{ asset('assets/img/prints.png') }}"></a>--}}
{{--                <a class="prints-clients-btn"><img src="{{ asset('assets/img/pdf.png') }}"></a>--}}
{{--                <a class="exp-clients-btn">SAVE</a>--}}
{{--                <a class="new-clients-btn" data-toggle="modal" id="invoice-send">SEND</a>--}}
{{--            </div>--}}
{{--            <div class="dashboard-form-mobile">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="send-invoice open-send-invoice-popup">--}}
{{--            <div class="send-invoice-content">--}}
{{--                <div class="send-invoice-top">--}}
{{--                    <img src="{{ asset('assets/img/top.png') }}">--}}
{{--                </div>--}}
{{--                <div class="send-invoice-title">--}}
{{--                    <p>SEND Estimate</p>--}}
{{--                    <p>Noo16</p>--}}
{{--                </div>--}}
{{--                <div class="send-invoice-info">--}}
{{--                    <div>--}}
{{--                        <label>To</label>--}}
{{--                        <select class="form-control" multiple="multiple" id="select-choose">--}}
{{--                            <option selected="selected">Lia Smith</option>--}}
{{--                            <option>white</option>--}}
{{--                            <option selected="selected">David Black</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <label>From</label>--}}
{{--                        <input placeholder="myemail@gmail.com">--}}
{{--                    </div>--}}
{{--                    <div class="justify-content-end out-data">--}}
{{--                        <p>€15.00</p>--}}
{{--                        <p>05/11/2019</p>--}}
{{--                    </div>--}}
{{--                    <div class="justify-content-end">--}}
{{--                        <textarea>Write your text</textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="send-invoice-btns">--}}
{{--                    <a class="send-invoice-cancel-btn" data-toggle="modal" id="send-invoice-cancel">Cancel</a>--}}
{{--                    <a class="send-invoice-send-btn" data-toggle="modal">Send</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="invoice-template-3 invoice-template">--}}
{{--            <div class="invoice-template-white-title">--}}
{{--                <div class="invoice-part-1">--}}
{{--                    <div class="company-logo-file">--}}
{{--                        <a class="image-upload">--}}
{{--                            <label for="company-logo-2" class="d-flex justify-content-center">--}}
{{--                                <h4 class="company-logo">Drag Your Logo Or</h4>--}}
{{--                                <h4 class="select-a-file">Select A File</h4>--}}
{{--                            </label>--}}
{{--                            <input id="company-logo-2" type="file">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <p class="invoice-title-27">Invoice</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="invoice-title">--}}
{{--                <div class="invoice-template-content">--}}
{{--                    <div class="date-issue">--}}
{{--                        <p class="date-issue-text-1">Date Of Issue</p>--}}
{{--                        <input type="date" placeholder="02/05/2019" class="date-issue-text-2-white">--}}
{{--                        <p class="date-issue-text-1">Due Date</p>--}}
{{--                        <select class="due-date-issue-select custom-input-select" disabled="">--}}
{{--                            <option>On Date of Issue</option>--}}
{{--                            <option>After 15 Days</option>--}}
{{--                            <option>After 30 Days</option>--}}
{{--                            <option value="custom">Custom</option>--}}
{{--                        </select>--}}
{{--                        <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">--}}
{{--                    </div>--}}
{{--                    <p class="invoice-title-24">Your Company Name</p>--}}
{{--                    <div class="text-right invoice-number-4">--}}
{{--                        <p class="invoice-title-20">Invoice Number</p>--}}
{{--                        <p class="invoice-title-28"><input placeholder="0016"></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="invoice-template-info">--}}
{{--                <div class="invoice-part-2 position-relative">--}}
{{--                    <div class="invoice-template-block">--}}
{{--                        <p class="date-issue-text-5">From</p>--}}
{{--                        <input class="date-issue-text-3" placeholder="Contact name" />--}}
{{--                        <input class="date-issue-text-4" placeholder="Email">--}}
{{--                        <input class="date-issue-text-4" placeholder="Address">--}}
{{--                        <input class="date-issue-text-4" placeholder="State, Country">--}}
{{--                        <input class="date-issue-text-4" placeholder="Phone: 047 4584 444">--}}
{{--                    </div>--}}
{{--                    <div class="invoice-template-block email-clickable">--}}
{{--                        <p class="date-issue-text-5">For</p>--}}
{{--                        <input class="date-issue-text-3" placeholder="Contact name">--}}
{{--                        <input class="date-issue-text-4 clickable-input" placeholder="Email" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <input class="date-issue-text-4" placeholder="Address">--}}
{{--                        <input class="date-issue-text-4" placeholder="State, Country">--}}
{{--                        <input class="date-issue-text-4" placeholder="Phone: 047 4584 444">--}}
{{--                        <div class="open-close-user open-clickable">--}}
{{--                            <div class="samll-icons">--}}
{{--                                <img src="{{ asset('assets/img/triangle.png') }}">--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-start align-items-center">--}}
{{--                                <img src="{{ asset('assets/img/user.png') }}">--}}
{{--                                <span>Lia Smith</span>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-start align-items-center">--}}
{{--                                <img src="{{ asset('assets/img/user.png') }}">--}}
{{--                                <span>Lia Smith</span>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-start align-items-center">--}}
{{--                                <img src="{{ asset('assets/img/user.png') }}">--}}
{{--                                <span>Lia Smith</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-3">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-6">Description</span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-6">Price</div>--}}
{{--                        <div class="invoice-part-6">QTY</div>--}}
{{--                        <div class="invoice-part-6">Amount</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-5"></div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">Subtotal</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">Discount (0%)</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">-€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-14">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <select>--}}
{{--                            <option selected hidden>Choose country</option>--}}
{{--                            <option>USA</option>--}}
{{--                            <option>China</option>--}}
{{--                            <option>Spain</option>--}}
{{--                        </select>--}}
{{--                        <select>--}}
{{--                            <option selected hidden>Tax rate</option>--}}
{{--                            <option>USA</option>--}}
{{--                            <option>China</option>--}}
{{--                            <option>Spain</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-14-text">Tax</div>--}}
{{--                        <div class="invoice-part-14-text"></div>--}}
{{--                        <div class="invoice-part-14-text">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-5"></div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">Total:</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">€0.00 USD</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-10">--}}
{{--                    <div class="equal-part-2">--}}
{{--                        <p class="invoice-part-10-text">Notes</p>--}}
{{--                        <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-10">--}}
{{--                    <div class="equal-part">--}}
{{--                        <p class="invoice-part-10-text">VAT Number</p>--}}
{{--                        <input placeholder="VAT Number">--}}
{{--                    </div>--}}
{{--                    <div class="equal-part">--}}
{{--                        <p class="invoice-part-10-text">Bank Account</p>--}}
{{--                        <input placeholder="Bank Account">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="invoice-footer"></div>--}}
{{--            <a class="invoice-back" href="ds-invoices.html">--}}
{{--                <img src="{{ asset('assets/img/invoices/back.png') }}">--}}
{{--                <span>Back</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="invoice-template-2">--}}
{{--            <div class="invoice-title">--}}
{{--                <div class="company-logo-file">--}}
{{--                    <a class="image-upload">--}}
{{--                        <label for="company-logo-bronze" class="d-flex justify-content-center">--}}
{{--                            <h4 class="company-logo">Drag Your Logo Or</h4>--}}
{{--                            <h4 class="select-a-file">Select A File</h4>--}}
{{--                        </label>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="invoice-part-bronze-2">--}}
{{--                <div class="invoice-part-bronze-2-left">--}}
{{--                    <input class="date-issue-text-4" placeholder="Bill To">--}}
{{--                    <input class="date-issue-text-3" placeholder="Contact name">--}}
{{--                    <input class="date-issue-text-4" placeholder="Email">--}}
{{--                    <input class="date-issue-text-4" placeholder="Address">--}}
{{--                    <input class="date-issue-text-4" placeholder="State, Country">--}}
{{--                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444">--}}
{{--                </div>--}}
{{--                <div class="invoice-part-bronze-2-right">--}}
{{--                    <div class="text-right">--}}
{{--                        <p class="invoice-title-27">Invoice</p>--}}
{{--                        <p class="invoice-title-20">Invoice Number</p>--}}
{{--                        <p class="invoice-title-24"><input class="input-number-bronze" placeholder="0016"></p>--}}
{{--                    </div>--}}
{{--                    <div class="date-issue">--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <div>--}}
{{--                                <p class="date-issue-text-1">Date Of Issue</p>--}}
{{--                                <input type="date" placeholder="02/05/2019" class="date-issue-text-2">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <p class="date-issue-text-1">Due Date</p>--}}
{{--                                <select class="due-date-issue-select custom-input-select" disabled="">--}}
{{--                                    <option>On Date of Issue</option>--}}
{{--                                    <option>After 15 Days</option>--}}
{{--                                    <option>After 30 Days</option>--}}
{{--                                    <option value="custom">Custom</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="invoice-template-info">--}}
{{--                <div class="invoice-part-3">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-6">Description</span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-6">Price</div>--}}
{{--                        <div class="invoice-part-6">QTY</div>--}}
{{--                        <div class="invoice-part-6">Amount</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-5"></div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7">A description</span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-5"></div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7">A description</span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-5"></div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7">A description</span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-5"></div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">Subtotal</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">Discount (0%)</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">-€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-14">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-14-text">Tax</div>--}}
{{--                        <div class="invoice-part-14-text"></div>--}}
{{--                        <div class="invoice-part-14-text">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price invoice-part-3-price-2">--}}
{{--                        <div class="invoice-part-7">Grand Total:</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">€0.00 USD</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-10">--}}
{{--                    <div class="equal-part-2">--}}
{{--                        <p class="invoice-part-10-text">Notes</p>--}}
{{--                        <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-10">--}}
{{--                    <div class="height-17">--}}
{{--                        <input class="date-issue-text-10" placeholder="Contact name"><br class="br-display">--}}
{{--                        <input class="date-issue-text-10" placeholder="Role in the company">--}}
{{--                    </div>--}}
{{--                    <div class="border-bronze">--}}
{{--                        <input class="date-issue-text-10" placeholder="Email"><br class="br-display">--}}
{{--                        <input class="date-issue-text-10" placeholder="Phone: 047 4584 444">--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input class="date-issue-text-10" placeholder="Address"><br class="br-display">--}}
{{--                        <input class="date-issue-text-10" placeholder="State, Country">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <a class="invoice-back" href="ds-invoices.html">--}}
{{--                <img src="{{ asset('assets/img/invoices/back.png') }}">--}}
{{--                <span>Back</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="invoice-template">--}}
{{--            <div class="invoice-title">--}}
{{--                <div class="invoice-template-content">--}}
{{--                    <div>--}}
{{--                        <p class="invoice-title-24">Your Company Name</p>--}}
{{--                        <p class="invoice-title-20">Your Company Email</p>--}}
{{--                    </div>--}}
{{--                    <div class="text-right">--}}
{{--                        <p class="invoice-title-27">Invoice</p>--}}
{{--                        <p class="invoice-title-20">Invoice Number</p>--}}
{{--                        <p class="invoice-title-24"><input placeholder="0016" /></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="invoice-template-info">--}}
{{--                <div class="invoice-part-1">--}}
{{--                    <div class="company-logo-file">--}}
{{--                        <a class="image-upload">--}}
{{--                            <label for="company-logo" class="d-flex justify-content-center">--}}
{{--                                <h4 class="company-logo">Drag Your Logo Or</h4>--}}
{{--                                <h4 class="select-a-file">Select A File</h4>--}}
{{--                            </label>--}}
{{--                            <input id="company-logo" type="file" />--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="date-issue">--}}
{{--                        <p class="date-issue-text-1">Date Of Issue</p>--}}
{{--                        <input type="date" placeholder="02/05/2019" class="date-issue-text-2">--}}
{{--                        <p class="date-issue-text-1">Due Date</p>--}}
{{--                        <select class="due-date-issue-select custom-input-select">--}}
{{--                            <option>On Date of Issue</option>--}}
{{--                            <option>After 15 Days</option>--}}
{{--                            <option>After 30 Days</option>--}}
{{--                            <option value="custom">Custom</option>--}}
{{--                        </select>--}}
{{--                        <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-2 position-relative">--}}
{{--                    <div class="invoice-template-block">--}}
{{--                        <p class="date-issue-text-5">From</p>--}}
{{--                        <input class="date-issue-text-3" placeholder="Contact name" />--}}
{{--                        <input class="date-issue-text-4" placeholder="Email">--}}
{{--                        <input class="date-issue-text-4" placeholder="Address">--}}
{{--                        <input class="date-issue-text-4" placeholder="State, Country">--}}
{{--                        <input class="date-issue-text-4" placeholder="Phone: 047 4584 444">--}}
{{--                    </div>--}}
{{--                    <div class="invoice-template-block email-clickable">--}}
{{--                        <p class="date-issue-text-5">For</p>--}}
{{--                        <input class="date-issue-text-3" placeholder="Contact name">--}}
{{--                        <input class="date-issue-text-4 clickable-input" placeholder="Email" id="dropdownMenuButton-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <input class="date-issue-text-4" placeholder="Address">--}}
{{--                        <input class="date-issue-text-4" placeholder="State, Country">--}}
{{--                        <input class="date-issue-text-4" placeholder="Phone: 047 4584 444">--}}
{{--                        <div class="open-close-user open-clickable">--}}
{{--                            <div class="samll-icons">--}}
{{--                                <img src="{{ asset('assets/img/triangle.png') }}">--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-start align-items-center">--}}
{{--                                <img src="{{ asset('assets/img/user.png') }}">--}}
{{--                                <span>Lia Smith</span>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-start align-items-center">--}}
{{--                                <img src="{{ asset('assets/img/user.png') }}">--}}
{{--                                <span>Lia Smith</span>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-start align-items-center">--}}
{{--                                <img src="{{ asset('assets/img/user.png') }}">--}}
{{--                                <span>Lia Smith</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-3">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-6">Description</span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-6">Price</div>--}}
{{--                        <div class="invoice-part-6">QTY</div>--}}
{{--                        <div class="invoice-part-6">Amount</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                        <div class="invoice-part-7">1</div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-5"></div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">Subtotal</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">Discount (0%)</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">-€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-14">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <select>--}}
{{--                            <option selected hidden>Choose country</option>--}}
{{--                            <option>USA</option>--}}
{{--                            <option>China</option>--}}
{{--                            <option>Spain</option>--}}
{{--                        </select>--}}
{{--                        <select>--}}
{{--                            <option selected hidden>Tax rate</option>--}}
{{--                            <option>USA</option>--}}
{{--                            <option>China</option>--}}
{{--                            <option>Spain</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-14-text">Tax</div>--}}
{{--                        <div class="invoice-part-14-text"></div>--}}
{{--                        <div class="invoice-part-14-text">€0.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-5"></div>--}}
{{--                <div class="invoice-part-4">--}}
{{--                    <div class="invoice-part-3-desc">--}}
{{--                        <span class="invoice-part-7"></span>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-part-3-price">--}}
{{--                        <div class="invoice-part-7">Total:</div>--}}
{{--                        <div class="invoice-part-7"></div>--}}
{{--                        <div class="invoice-part-7">€0.00 USD</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-10">--}}
{{--                    <div class="equal-part-2">--}}
{{--                        <p class="invoice-part-10-text">Notes</p>--}}
{{--                        <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="invoice-part-10">--}}
{{--                    <div class="equal-part">--}}
{{--                        <p class="invoice-part-10-text">VAT Number</p>--}}
{{--                        <input placeholder="VAT Number">--}}
{{--                    </div>--}}
{{--                    <div class="equal-part">--}}
{{--                        <p class="invoice-part-10-text">Bank Account</p>--}}
{{--                        <input placeholder="Bank Account">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="invoice-footer"></div>--}}
{{--            <a class="invoice-back" href="ds-invoices.html">--}}
{{--                <img src="{{ asset('assets/img/invoices/back.png') }}">--}}
{{--                <span>Back</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </main>--}}
@endsection

@section('extra-scripts')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/select-2.js') }}"></script>
@endsection

@extends('frontend.dashboard.main')

@section('title', 'Customize Template')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-customize-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colorpicker.css') }}" />
@endsection

@section('content')
<main class="clients invoices">
    <div class="dashboard-header">
        <h1 class="dashboard-clients-title">Customize Template</h1>
{{--        <div class="clients-btns">--}}
{{--            <a class="new-clients-btn" href="ds-invoice-template.html">NEW INVOICE</a>--}}
{{--        </div>--}}
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <section class="custom-template">
        <a href="{{ route('invoices.create') }}" class="invoice-back border-right-0" href="ds-invoices.html">
            <img src="{{ asset('assets/img/invoices/back.png') }}">
            <span class="border-right-black">Back</span>
            <p class="text-3">Choose a template</p>
        </a>
        <div class="carusel-and-div">
            <ul class="carousel">
                <li class="items main-pos" id="1">
                    <div class="invoice-template green-invoice-template">
                        <div class="invoice-title">
                            <div class="invoice-template-content">
                                <div>
                                    <p class="invoice-title-24">Your Company Name</p>
                                    <p class="invoice-title-20">Your Company Email</p>
                                </div>
                                <div class="text-right">
                                    <p class="invoice-title-27">Invoice</p>
                                    <p class="invoice-title-20">Invoice Number</p>
                                    <p class="invoice-title-24"><input placeholder="0016"></p>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-template-info">
                            <div class="invoice-part-1">
                                <div class="company-logo-file">
                                    <a class="image-upload">
                                        <label for="company-logo" class="d-flex justify-content-center">
                                            <h4 class="company-logo">Drag Your Logo Or</h4>
                                            <h4 class="select-a-file">Select A File</h4>
                                        </label>
                                        <input type="file">
                                    </a>
                                </div>
                                <div class="date-issue">
                                    <p class="date-issue-text-1">Date Of Issue</p>
                                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2">
                                    <p class="date-issue-text-1">Due Date</p>
                                    <select class="due-date-issue-select custom-input-select" disabled>
                                        <option>On Date of Issue</option>
                                        <option>After 15 Days</option>
                                        <option>After 30 Days</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">
                                </div>
                            </div>
                            <div class="invoice-part-2 position-relative">
                                <div class="invoice-template-block">
                                    <p class="date-issue-text-5">From</p>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4" placeholder="Email" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                                <div class="invoice-template-block email-clickable">
                                    <p class="date-issue-text-5">For</p>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                            </div>
                            <div class="invoice-part-3">
                                <div class="invoice-part-3-desc d-flex">
                                    <span class="invoice-part-6">Description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-6">Price</div>
                                    <div class="invoice-part-6">QTY</div>
                                    <div class="invoice-part-6">Amount</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Subtotal</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Discount (0%)</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">-€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-14">
                                <div class="invoice-part-3-desc">
                                    <select disabled>
                                        <option selected="" hidden="">Choose country</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Spain</option>
                                    </select>
                                    <select disabled>
                                        <option selected="" hidden="">Tax rate</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Spain</option>
                                    </select>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-14-text">Tax</div>
                                    <div class="invoice-part-14-text"></div>
                                    <div class="invoice-part-14-text">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Total:</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00 USD</div>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part-2">
                                    <p class="invoice-part-10-text">Notes</p>
                                    <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part">
                                    <p class="invoice-part-10-text">VAT Number</p>
                                    <input placeholder="VAT Number" disabled>
                                </div>
                                <div class="equal-part">
                                    <p class="invoice-part-10-text">Bank Account</p>
                                    <input placeholder="Bank Account" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-footer"></div>
                    </div>
                </li>
                <li class="items right-pos" id="2">
                    <div class="invoice-template invoice-template-bronze">
                        <div class="invoice-title">
                            <div class="company-logo-file">
                                <a class="image-upload">
                                    <label for="company-logo-bronze" class="d-flex justify-content-center">
                                        <h4 class="company-logo">Drag Your Logo Or</h4>
                                        <h4 class="select-a-file">Select A File</h4>
                                    </label>
                                </a>
                            </div>
                        </div>
                        <div class="invoice-template-info">
                            <div class="invoice-part-bronze">
                                <div class="invoice-part-bronze-left">
                                    <input class="date-issue-text-4" placeholder="Bill To" disabled>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4" placeholder="Email" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                                <div class="invoice-part-bronze-right">
                                    <div class="text-right">
                                        <p class="invoice-title-27">Invoice</p>
                                        <p class="invoice-title-20">Invoice Number</p>
                                        <p class="invoice-title-24"><input class="input-number-bronze" placeholder="0016"></p>
                                    </div>
                                    <div class="date-issue">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="date-issue-text-1">Date Of Issue</p>
                                                <input type="date" placeholder="02/05/2019" class="date-issue-text-2">
                                            </div>
                                            <div>
                                                <p class="date-issue-text-1">Due Date</p>
                                                <select class="due-date-issue-select custom-input-select" disabled>
                                                    <option>On Date of Issue</option>
                                                    <option>After 15 Days</option>
                                                    <option>After 30 Days</option>
                                                    <option value="custom">Custom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="invoice-part-3">
                                <div class="invoice-part-3-desc d-flex">
                                    <span class="invoice-part-6">Description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-6">Price</div>
                                    <div class="invoice-part-6">QTY</div>
                                    <div class="invoice-part-6">Amount</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7">A description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7">A description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7">A description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Subtotal</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Discount (0%)</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">-€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-14">
                                <div class="invoice-part-3-desc">
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-14-text">Tax</div>
                                    <div class="invoice-part-14-text"></div>
                                    <div class="invoice-part-14-text">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price bronze-table-last">
                                    <div class="invoice-part-7">Grand Total:</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00 USD</div>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part-2">
                                    <p class="invoice-part-10-text">Notes</p>
                                    <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>
                                </div>
                            </div>
                            <div class="invoice-part-10 mt-30">
                                <div class="height-17">
                                    <input class="date-issue-text-10" placeholder="Contact name"><br class="br-display">
                                    <input class="date-issue-text-10" placeholder="Role in the company">
                                </div>
                                <div class="border-bronze">
                                    <input class="date-issue-text-10" placeholder="Email"><br class="br-display">
                                    <input class="date-issue-text-10" placeholder="Phone: 047 4584 444">
                                </div>
                                <div>
                                    <input class="date-issue-text-10" placeholder="Address"><br class="br-display">
                                    <input class="date-issue-text-10" placeholder="State, Country">
                                </div>
                            </div>
                        </div>
                        <div class="invoice-footer"></div>
                    </div>
                </li>
                <li class="items back-pos" id="3">
                    <div class="invoice-template invoice-template-white">
                        <div class="invoice-template-white-title">
                            <div class="invoice-part-1">
                                <div class="company-logo-file">
                                    <a class="image-upload">
                                        <label for="company-logo-2" class="d-flex justify-content-center">
                                            <h4 class="company-logo">Drag Your Logo Or</h4>
                                            <h4 class="select-a-file">Select A File</h4>
                                        </label>
                                        <input type="file">
                                    </a>
                                </div>
                                <p class="invoice-title-27">Invoice</p>
                            </div>
                        </div>
                        <div class="invoice-title">
                            <div class="invoice-template-content">
                                <div class="date-issue">
                                    <p class="date-issue-text-1">Date Of Issue</p>
                                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2-white">
                                    <p class="date-issue-text-1">Due Date</p>
                                    <select class="due-date-issue-select custom-input-select" disabled>
                                        <option>On Date of Issue</option>
                                        <option>After 15 Days</option>
                                        <option>After 30 Days</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">
                                </div>
                                <p class="invoice-title-24">Your Company Name</p>
                                <div class="text-right">
                                    <p class="invoice-title-20">Invoice Number</p>
                                    <p class="invoice-title-28"><input placeholder="0016"></p>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-template-info">
                            <div class="invoice-part-2 position-relative">
                                <div class="invoice-template-block">
                                    <p class="date-issue-text-5">From</p>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4" placeholder="Email" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                                <div class="invoice-template-block email-clickable">
                                    <p class="date-issue-text-5">For</p>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4 clickable-input" placeholder="Email" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                            </div>
                            <div class="invoice-part-3">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-6">Description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-6">Price</div>
                                    <div class="invoice-part-6">QTY</div>
                                    <div class="invoice-part-6">Amount</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Subtotal</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Discount (0%)</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">-€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-14">
                                <div class="invoice-part-3-desc">
                                    <select disabled>
                                        <option selected="" hidden="">Choose country</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Spain</option>
                                    </select>
                                    <select disabled>
                                        <option selected="" hidden="">Tax rate</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Spain</option>
                                    </select>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-14-text">Tax</div>
                                    <div class="invoice-part-14-text"></div>
                                    <div class="invoice-part-14-text">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Total:</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00 USD</div>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part-2">
                                    <p class="invoice-part-10-text">Notes</p>
                                    <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part">
                                    <p class="invoice-part-10-text">VAT Number</p>
                                    <input placeholder="VAT Number">
                                </div>
                                <div class="equal-part">
                                    <p class="invoice-part-10-text">Bank Account</p>
                                    <input placeholder="Bank Account">
                                </div>
                            </div>
                        </div>
                        <div class="invoice-footer"></div>
                    </div>
                </li>
                <li class="items back-pos" id="4">
                    <div class="invoice-template green-invoice-template">
                        <div class="invoice-title">
                            <div class="invoice-template-content">
                                <div>
                                    <p class="invoice-title-24">Your Company Name</p>
                                    <p class="invoice-title-20">Your Company Email</p>
                                </div>
                                <div class="text-right">
                                    <p class="invoice-title-27">Invoice</p>
                                    <p class="invoice-title-20">Invoice Number</p>
                                    <p class="invoice-title-24"><input placeholder="0016"></p>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-template-info">
                            <div class="invoice-part-1">
                                <div class="company-logo-file">
                                    <a class="image-upload">
                                        <label for="company-logo" class="d-flex justify-content-center">
                                            <h4 class="company-logo">Drag Your Logo Or</h4>
                                            <h4 class="select-a-file">Select A File</h4>
                                        </label>
                                        <input id="company-logo" type="file">
                                    </a>
                                </div>
                                <div class="date-issue">
                                    <p class="date-issue-text-1">Date Of Issue</p>
                                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2">
                                    <p class="date-issue-text-1">Due Date</p>
                                    <select class="due-date-issue-select custom-input-select" disabled>
                                        <option>On Date of Issue</option>
                                        <option>After 15 Days</option>
                                        <option>After 30 Days</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">
                                </div>
                            </div>
                            <div class="invoice-part-2 position-relative">
                                <div class="invoice-template-block">
                                    <p class="date-issue-text-5">From</p>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4" placeholder="Email" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                                <div class="invoice-template-block email-clickable">
                                    <p class="date-issue-text-5">For</p>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4 clickable-input" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                            </div>
                            <div class="invoice-part-3">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-6">Description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-6">Price</div>
                                    <div class="invoice-part-6">QTY</div>
                                    <div class="invoice-part-6">Amount</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Subtotal</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Discount (0%)</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">-€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-14">
                                <div class="invoice-part-3-desc">
                                    <select disabled>
                                        <option selected="" hidden="">Choose country</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Spain</option>
                                    </select>
                                    <select disabled>
                                        <option selected="" hidden="">Tax rate</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Spain</option>
                                    </select>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-14-text">Tax</div>
                                    <div class="invoice-part-14-text"></div>
                                    <div class="invoice-part-14-text">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Total:</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00 USD</div>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part-2">
                                    <p class="invoice-part-10-text">Notes</p>
                                    <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part">
                                    <p class="invoice-part-10-text">VAT Number</p>
                                    <input placeholder="VAT Number">
                                </div>
                                <div class="equal-part">
                                    <p class="invoice-part-10-text">Bank Account</p>
                                    <input placeholder="Bank Account">
                                </div>
                            </div>
                        </div>
                        <div class="invoice-footer"></div>
                    </div>
                </li>
                <li class="items back-pos" id="5">
                    <div class="invoice-template invoice-template-bronze">
                        <div class="invoice-title">
                            <div class="company-logo-file">
                                <a class="image-upload">
                                    <label for="company-logo-bronze" class="d-flex justify-content-center">
                                        <h4 class="company-logo">Drag Your Logo Or</h4>
                                        <h4 class="select-a-file">Select A File</h4>
                                    </label>
                                    <input id="company-logo-bronze" type="file">
                                </a>
                            </div>
                        </div>
                        <div class="invoice-template-info">
                            <div class="invoice-part-bronze">
                                <div class="invoice-part-bronze-left">
                                    <input class="date-issue-text-4" placeholder="Bill To" disabled>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4" placeholder="Email" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                                <div class="invoice-part-bronze-right">
                                    <div class="text-right">
                                        <p class="invoice-title-27">Invoice</p>
                                        <p class="invoice-title-20">Invoice Number</p>
                                        <p class="invoice-title-24"><input class="input-number-bronze" placeholder="0016"></p>
                                    </div>
                                    <div class="date-issue">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="date-issue-text-1">Date Of Issue</p>
                                                <input type="date" placeholder="02/05/2019" class="date-issue-text-2">
                                            </div>
                                            <div>
                                                <p class="date-issue-text-1">Due Date</p>
                                                <select class="due-date-issue-select custom-input-select" disabled>
                                                    <option>On Date of Issue</option>
                                                    <option>After 15 Days</option>
                                                    <option>After 30 Days</option>
                                                    <option value="custom">Custom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="invoice-part-3">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-6">Description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-6">Price</div>
                                    <div class="invoice-part-6">QTY</div>
                                    <div class="invoice-part-6">Amount</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7">A description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7">A description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7">A description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Subtotal</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Discount (0%)</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">-€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-14">
                                <div class="invoice-part-3-desc">
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-14-text">Tax</div>
                                    <div class="invoice-part-14-text"></div>
                                    <div class="invoice-part-14-text">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price bronze-table-last">
                                    <div class="invoice-part-7">Grand Total:</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00 USD</div>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part-2">
                                    <p class="invoice-part-10-text">Notes</p>
                                    <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>
                                </div>
                            </div>
                            <div class="invoice-part-10 mt-30">
                                <div>
                                    <input class="date-issue-text-10" placeholder="Contact name"><br>
                                    <input class="date-issue-text-10" placeholder="Role in the company">
                                </div>
                                <div class="border-bronze">
                                    <input class="date-issue-text-10" placeholder="Email"><br>
                                    <input class="date-issue-text-10" placeholder="Phone: 047 4584 444">
                                </div>
                                <div>
                                    <input class="date-issue-text-10" placeholder="Address"><br>
                                    <input class="date-issue-text-10" placeholder="State, Country">
                                </div>
                            </div>
                        </div>
                        <div class="invoice-footer"></div>
                    </div>
                </li>
                <li class="items left-pos" id="6">
                    <div class="invoice-template invoice-template-white">
                        <div class="invoice-template-white-title">
                            <div class="invoice-part-1">
                                <div class="company-logo-file">
                                    <a class="image-upload">
                                        <label for="company-logo-2" class="d-flex justify-content-center">
                                            <h4 class="company-logo">Drag Your Logo Or</h4>
                                            <h4 class="select-a-file">Select A File</h4>
                                        </label>
                                        <input id="company-logo-2" type="file">
                                    </a>
                                </div>
                                <p class="invoice-title-27">Invoice</p>
                            </div>
                        </div>
                        <div class="invoice-title">
                            <div class="invoice-template-content">
                                <div class="date-issue">
                                    <p class="date-issue-text-1">Date Of Issue</p>
                                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2-white">
                                    <p class="date-issue-text-1">Due Date</p>
                                    <select class="due-date-issue-select custom-input-select" disabled>
                                        <option>On Date of Issue</option>
                                        <option>After 15 Days</option>
                                        <option>After 30 Days</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2 custom-input">
                                </div>
                                <p class="invoice-title-24">Your Company Name</p>
                                <div class="text-right">
                                    <p class="invoice-title-20">Invoice Number</p>
                                    <p class="invoice-title-28"><input placeholder="0016"></p>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-template-info">
                            <div class="invoice-part-2 position-relative">
                                <div class="invoice-template-block">
                                    <p class="date-issue-text-5">From</p>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4" placeholder="Email" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                                <div class="invoice-template-block email-clickable">
                                    <p class="date-issue-text-5">For</p>
                                    <input class="date-issue-text-3" placeholder="Contact name" disabled>
                                    <input class="date-issue-text-4" placeholder="Email" disabled>
                                    <input class="date-issue-text-4" placeholder="Address" disabled>
                                    <input class="date-issue-text-4" placeholder="State, Country" disabled>
                                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444" disabled>
                                </div>
                            </div>
                            <div class="invoice-part-3">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-6">Description</span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-6">Price</div>
                                    <div class="invoice-part-6">QTY</div>
                                    <div class="invoice-part-6">Amount</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">€0.00</div>
                                    <div class="invoice-part-7">1</div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Subtotal</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Discount (0%)</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">-€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-14">
                                <div class="invoice-part-3-desc">
                                    <select disabled>
                                        <option selected="" hidden="">Choose country</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Spain</option>
                                    </select>
                                    <select disabled>
                                        <option selected="" hidden="">Tax rate</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Spain</option>
                                    </select>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-14-text">Tax</div>
                                    <div class="invoice-part-14-text"></div>
                                    <div class="invoice-part-14-text">€0.00</div>
                                </div>
                            </div>
                            <div class="invoice-part-5"></div>
                            <div class="invoice-part-4">
                                <div class="invoice-part-3-desc">
                                    <span class="invoice-part-7"></span>
                                </div>
                                <div class="invoice-part-3-price">
                                    <div class="invoice-part-7">Total:</div>
                                    <div class="invoice-part-7"></div>
                                    <div class="invoice-part-7">€0.00 USD</div>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part-2">
                                    <p class="invoice-part-10-text">Notes</p>
                                    <p class="invoice-part-10-text2">Some notes, payment istructions, e.t.c.</p>
                                </div>
                            </div>
                            <div class="invoice-part-10">
                                <div class="equal-part">
                                    <p class="invoice-part-10-text">VAT Number</p>
                                    <input placeholder="VAT Number">
                                </div>
                                <div class="equal-part">
                                    <p class="invoice-part-10-text">Bank Account</p>
                                    <input placeholder="Bank Account">
                                </div>
                            </div>
                        </div>
                        <div class="invoice-footer"></div>
                    </div>
                </li>
            </ul>
            <div class="mobile-carusel-color">
                <p class="text-4">Add your logotype</p>
                <div class="image-and-color">
                    <div class="image-upload logotype-input">
                        <label for="logotype">
                            <img src="{{ asset('assets/img/logotype.png') }}">
                            <p class="text-6">
                                Drop your logo here.
                                JPG or PNG formats.
                                Maximum 3MB in size.
                            </p>
                        </label>
                        <input type="file" id="logotype">
                    </div>
                    <p class="text-4">Choose a colour</p>
                    <div class="customize-colorpicker">
                        <p id="colorpickerHolder"></p>
                        <div class="abs-color"></div>
                    </div>
                </div>

                <a class="btn-save">Save</a>
            </div>
        </div>
    </section>
</main>
@endsection

@section('extra-scripts')
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/colorpicker.js') }}"></script>
    <script>
        $('#colorpickerHolder').ColorPicker({flat: true});
    </script>
@endsection

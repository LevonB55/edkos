@extends('frontend.dashboard.main')

@section('title', 'Invoice Template')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoice-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
@endsection

@section('content')
<main class="clients invoices">
    <div class="dashboard-header">
        <h1 class="dashboard-clients-title invoice-title-name">New Invoice</h1>
        <div class="clients-btns">
            <a class="prints-clients-btn"><img src="{{ asset('assets/img/prints.png') }}"></a>
            <a class="prints-clients-btn"><img src="{{ asset('assets/img/pdf.png') }}"></a>
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
                <img src="{{ asset('assets/img/top.png') }}">
            </div>
            <div class="send-invoice-title">
                <p>SEND INVOICE</p>
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

    <div class="invoice-template">
        <div class="invoice-title">
            <div class="invoice-template-content">
                <div>
                    <p class="invoice-title-24">Your Company Name</p>
                    <p class="invoice-title-20">Your Company Email</p>
                </div>
                <div class="text-right">
                    <p class="invoice-title-27">Invoice</p>
                    <p class="invoice-title-20">Invoice Number</p>
                    <p class="invoice-title-24"><input placeholder="0016" /></p>
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
                        <input id="company-logo" type="file" />
                    </a>
                </div>
                <div class="date-issue">
                    <p class="date-issue-text-1">Date Of Issue</p>
                    <input type="date" placeholder="02/05/2019" class="date-issue-text-2">
                    <p class="date-issue-text-1">Due Date</p>
                    <select class="due-date-issue-select custom-input-select">
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
                    <input class="date-issue-text-3" placeholder="Contact name" />
                    <input class="date-issue-text-4" placeholder="Email">
                    <input class="date-issue-text-4" placeholder="Address">
                    <input class="date-issue-text-4" placeholder="State, Country">
                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444">
                </div>
                <div class="invoice-template-block email-clickable">
                    <p class="date-issue-text-5">For</p>
                    <input class="date-issue-text-3" placeholder="Contact name">
                    <input class="date-issue-text-4 clickable-input" placeholder="Email" id="dropdownMenuButton-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <input class="date-issue-text-4" placeholder="Address">
                    <input class="date-issue-text-4" placeholder="State, Country">
                    <input class="date-issue-text-4" placeholder="Phone: 047 4584 444">
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
                    <select>
                        <option selected hidden>Choose country</option>
                        <option>USA</option>
                        <option>China</option>
                        <option>Spain</option>
                    </select>
                    <select>
                        <option selected hidden>Tax rate</option>
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
        <a href="{{ route('invoices.index') }}" class="invoice-back" href="ds-invoices.html">
            <img src="{{ asset('assets/img/invoices/back.png') }}">
            <span>Back</span>
        </a>
    </div>
</main>
@endsection

@section('extra-scripts')
    <script src="{{ asset('js/select2.min.js') }}"></script>
@endsection

@extends('frontend.platform.main')

@section('title', 'Billing & Upgrade Yearly Pay')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-expense.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-billing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-online-payment.css') }}">
@endsection

@section('content')
    <main class="clients invoices billing-upgrade-content">
        <div class="dashboard-header">
            <h1 class="dashboard-clients-title">Billing & Upgrade</h1>
            <div class="clients-btns">
                <a class="exp-clients-btn" href="ds-billing-upgrade-monthly.html">CANCEL</a>
                <a class="new-clients-btn">PAY</a>
            </div>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="new-expense-content">
            <a class="expense-back" href="ds-billing-upgrade-monthly.html">
                <img src="{{ asset('assets/img/invoices/back.png') }}">
                <span>Back</span>
            </a>
            <div class="new-expense-left">
                <div class="new-expense-add-category">
                    <div class="growth-block">
                        <div class="growth-block-text">GROWTH</div>
                        <div class="growth-block-text">€348<span>/mo</span></div>
                    </div>
                    <div class="clients-50">50 clients</div>
                    <div class="billed-monthly">Billed Yearly</div>
                    <div class="pay-variant">
                        <a>First year 50% saving</a>
                    </div>
                    <div class="growth-block">
                        <div class="growth-block-text">Team member</div>
                        <div class="growth-block-text">+ €0<span>/mo</span></div>
                    </div>
                    <div class="clients-50">0</div>
                    <div class="new-expense-line"></div>
                    <div class="new-expense-data-line">
                        <div class="new-expense-first-line">Subtotal</div>
                        <div>€39.00</div>
                    </div>
                    <div class="new-expense-data-line">
                        <div class="new-expense-first-line">Discount (0%)</div>
                        <div>-€0.00</div>
                    </div>
                    <div class="choose-tax">
                        <div class="new-expense-data-line tax">
                            <div class="new-expense-first-line">Tax</div>
                            <div>€0.00</div>
                        </div>
                        <div class="tax-open-close tax-clickable-block">
                            <img src="{{ asset('assets/img/expenses/triangle-top.png') }}">
                            <div class="next-expense-data">
                                <select>
                                    <option>Choose country</option>
                                    <option>Choose country</option>
                                </select>
                                <select>
                                    <option>Tax rate</option>
                                    <option>Tax rate</option>
                                    <option>Tax rate</option>
                                    <option>Tax rate</option>
                                    <option>Tax rate</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="new-expense-line-second"></div>
                    <div class="new-expense-data-line bold">
                        <div class="new-expense-first-line">Grand Total:</div>
                        <div>€39.00 USD</div>
                    </div>
                </div>
                <div class="new-expense-circle">
                    <img src="{{ asset('assets/img/expenses/block.png') }}">
                </div>
            </div>
            <div class="new-expense-right">
                    <div class="billing-pay-content">
                        <div class="cards">
                            <div class="cards-block border-green check-over">
                                <img class="cards-png" src="{{ asset('assets/img/Visa.png') }}">
                                <img class="check-green" src="{{ asset('assets/img/green-check.png') }}">
                            </div>
                            <div class="cards-block">
                                <img class="cards-png" src="{{ asset('assets/img/Mastercard.png') }}">
                                <img class="check-green" src="{{ asset('assets/img/green-check.png') }}">
                            </div>
                            <div class="cards-block">
                                <img class="cards-png" src="{{ asset('assets/img/Paypal.png') }}">
                                <img class="check-green" src="{{ asset('assets/img/green-check.png') }}">
                            </div>
                        </div>
                        <div>
                            <form class="card-form">
                                <div class="input-block">
                                    <label>Enter card number</label>
                                    <input class="enter-card" placeholder="**** **** **** ****">
                                </div>
                                <div class="input-block">
                                    <label>Card holder</label>
                                    <input class="enter-card" placeholder="Card holder">
                                </div>
                                <div class="input-block">
                                    <div class="small-img">
                                        <div class="">
                                            <label>Expiry date</label>
                                            <input class="expiry-date" placeholder="MM/YY">
                                        </div>
                                        <div class="">
                                            <label>CVV code</label>
                                            <input class="expiry-date" placeholder="***">
                                        </div>
                                    </div>
                                </div>
                                <div class="line-pay"></div>
                                <div class="input-block position-relative">
                                    <label>Billing Address</label>
                                    <select class="enter-card" placeholder="Street">
                                        <option>Street</option>
                                    </select>
                                    <img class="select-icon mobile-top-big" src="{{ asset('assets/img/dashboard/select.png') }}">
                                </div>
                                <div class="input-block">
                                    <label></label>
                                    <input class="enter-card" placeholder="Country">
                                </div>
                                <div class="input-block position-relative">
                                    <label></label>
                                    <select class="enter-card" placeholder="State">
                                        <option>State</option>
                                    </select>
                                    <img class="select-icon" src="{{ asset('assets/img/dashboard/select.png') }}">
                                </div>
                                <div class="input-block">
                                    <label></label>
                                    <input class="enter-card" placeholder="City">
                                </div>
                                <div class="input-block">
                                    <label></label>
                                    <input class="enter-card" placeholder="ZIP Code">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </main>
@endsection

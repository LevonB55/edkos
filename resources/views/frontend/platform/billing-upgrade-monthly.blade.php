@extends('frontend.platform.main')

@section('title', 'Billing & Upgrade Monthly')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ds-expense.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ds-billing.css') }}">
@endsection

@section('content')
        <main class="clients invoices billing-upgrade-content">
            <div class="dashboard-header">
                <h1 class="dashboard-clients-title">Billing & Upgrade</h1>
                <div class="clients-btns">
                    <a class="exp-clients-btn" href="ds-billing-upgrade.html">CANCEL</a>
                    <a class="new-clients-btn" href="ds-billing-upgrade-monthly-pay.html">CONTINUE</a>
                </div>
                <div class="dashboard-form-mobile">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="new-expense-content">
                <a class="expense-back" href="ds-billing-upgrade.html">
                    <img src="{{ asset('assets/img/invoices/back.png') }}">
                    <span>Back</span>
                </a>
                <div class="new-expense-left">
                    <div class="new-expense-add-category">
                        <div class="growth-block">
                            <div class="growth-block-text">GROWTH</div>
                            <div class="growth-block-text">€29<span>/mo</span></div>
                        </div>
                        <div class="clients-50">50 clients</div>
                        <div class="billed-monthly">Billed monthly</div>
                        <div class="pay-variant">
                            or pay <a>yearly and you will
                            save 50% for first year</a>
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
                    <div class="new-expense-settings">
                        <p class="new-expense-settings-title">Add team members</p>
                        <p class="team-members-text">1 Team member - €10/mo</p>
                        <p class="help-manage-text">Team member can help you manage your projects and billings.</p>
                        <p class="billing-add-text">Add</p>
                        <div class="minus-plus-block ">
                            <div class="minus">-</div>
                            <div class="number">1</div>
                            <div class="plus">+</div>
                        </div>
                        <div class="new-expense-line"></div>
                        <p class="help-manage-text">You have added 1 team member</p>
                    </div>
                </div>
            </div>
        </main>
@endsection

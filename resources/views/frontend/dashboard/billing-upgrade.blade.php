@extends('frontend.dashboard.main')

@section('title', 'Billing & Upgrade')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plans-pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-billing.css') }}">
@endsection

@section('content')
    <main>
        <div class="dashboard-header my-profile-dashboard-header">
            <h1 class="dashboard-header-title">Billing & Upgrade</h1>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="billing-content">
            <h1 class="billing-title">
                By choosing yearly plan you will
                save 50% for first year.
            </h1>
            <h2 class="billing-title-2">Upgrade today and don't pay until your free trial ends</h2>
            <div class="billing-from-to">
                <div class="from-to d-flex justify-content-between align-items-center">
                    <div class="from-me for-day-table">Monthly</div>
                    <div><i class="fas fa-sync-alt"></i></div>
                    <div class="from-me for-week-table active-from-to">Yearly</div>
                </div>
            </div>
            <section class="plans-second-section">
                <div class="plans-second-content">
                    <div class="plans-blocks">
                        <div class="clip-path">
                            <h1>Starter</h1>
                            <p class="border-line"></p>
                            <p class="plans-goals">For small business with big goals</p>
                            <p class="plans-number plans-number-for-monthly">€14<span>/mo</span></p>
                            <p class="plans-number plans-number-for-year">€9<span>/mo</span></p>
                            <p class="plans-clients-text">50 clients</p>
                        </div>
                        <ul>
                            <li><i class="far fa-check-circle"></i>All Lite Features</li>
                            <li><i class="far fa-check-circle"></i>Unlimited proposals</li>
                            <li><i class="far fa-check-circle"></i>Automated Recurring Invoices</li>
                            <li><i class="far fa-check-circle"></i>Double Entry Accounting Reports</li>
                            <li><i class="far fa-check-circle"></i>Scheduled Late Fees</li>
                            <li><i class="far fa-check-circle"></i>Automated Late Payment Reminders</li>
                            <li><i class="far fa-check-circle"></i>Client Retainers</li>
                            <li><i class="far fa-check-circle"></i>Team Members (€10/person)</li>
                            <li><i class="far fa-check-circle"></i>Advanced Payments (€20/mo)</li>
                        </ul>
                        <a class="plans-submit-btn  plans-submit-for-monthly" href="ds-billing-upgrade-monthly.html">Submit</a>
                        <a class="plans-submit-btn  plans-submit-for-year" href="ds-billing-upgrade-yearly.html">Submit</a>
                    </div>
                    <div class="plans-blocks scale-plans-blocks">
                        <div class="clip-path">
                            <h1>GROWTH</h1>
                            <p class="border-line"></p>
                            <p class="plans-goals">For growing businesses with dynamic teams</p>
                            <p class="plans-number plans-number-for-monthly">€29<span>/mo</span></p>
                            <p class="plans-number plans-number-for-year">€20<span>/mo</span></p>
                            <p class="plans-clients-text">500 clients</p>
                        </div>
                        <ul>
                            <li><i class="far fa-check-circle"></i>Unlimited + Customized Invoices</li>
                            <li><i class="far fa-check-circle"></i>Unlimited Expense Entries</li>
                            <li><i class="far fa-check-circle"></i>Accept Credit Card Payments Online</li>
                            <li><i class="far fa-check-circle"></i>Accept ACH Bank Transfers Online</li>
                            <li><i class="far fa-check-circle"></i>Automated Bank Import</li>
                            <li><i class="far fa-check-circle"></i>Unlimited Time Tracking</li>
                            <li><i class="far fa-check-circle"></i>Unlimited Estimates</li>
                            <li><i class="far fa-check-circle"></i>Insightful Tax Time Reports</li>
                            <li><i class="far fa-check-circle"></i>Custom functionality and workflows</li>
                            <li><i class="far fa-check-circle"></i>with 200+ integrations</li>
                            <li><i class="far fa-check-circle"></i>Team Members (€10/person)</li>
                        </ul>
                        <a class="plans-submit-btn  plans-submit-for-monthly" href="ds-billing-upgrade-monthly.html">Submit</a>
                        <a class="plans-submit-btn  plans-submit-for-year" href="ds-billing-upgrade-yearly.html">Submit</a>
                    </div>
                    <div class="plans-blocks">
                        <div class="clip-path">
                            <h1>PRO</h1>
                            <p class="border-line"></p>
                            <p class="plans-goals">For triving businesses that need custom service</p>
                            <p class="plans-number plans-number-for-monthly">€49<span>/mo</span></p>
                            <p class="plans-number plans-number-for-year">€26<span>/mo</span></p>
                            <p class="plans-clients-text">Unlimited clients</p>
                        </div>
                        <ul>
                            <li><i class="far fa-check-circle"></i>A personal Account Manager</li>
                            <li><i class="far fa-check-circle"></i>Customized training for you and your team</li>
                            <li><i class="far fa-check-circle"></i>Super low credit card transaction rates</li>
                            <li><i class="far fa-check-circle"></i>Easy QuickBooks and Xero integration</li>
                        </ul>
                        <a class="plans-submit-btn  plans-submit-for-monthly" href="ds-billing-upgrade-monthly.html">Submit</a>
                        <a class="plans-submit-btn  plans-submit-for-year" href="ds-billing-upgrade-yearly.html">Submit</a>
                    </div>
                </div>
        </section>
            <section class="plans-secure-block">
                <div class="plans-secure-content">
                    <div class="plans-secure">
                        <div>
                            <img src="{{ asset('assets/img/safe.svg') }}">
                        </div>
                        <h1>Safe and Secure</h1>
                        <div class="line"></div>
                        <p>
                            EDKOS protects your personal information with industry
                            standard SSL and encryption so your business is always
                            safe and secure.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Modal CAPTCHA-->
    <div class="modal fade pr-0" id="notRobotModal" tabindex="-1" role="dialog" aria-labelledby="notRobotModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="green-close">&times;</span>
                    </button>
                </div>
                <div class="connect-bank">
                    To connect your bank,<br>
                    please confirm that you're human.
                </div>
                <div class="not-robot-content">
                    <img src="{{ asset('assets/img/captcha.gif') }}">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-continue" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="modal" data-target="#connectYourBank">Continue</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal BANK-->
    <div class="modal fade pr-0" id="connectYourBank" tabindex="-1" role="dialog" aria-labelledby="connectYourBankTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header-connect-bank">
                    <h2 class="bank-title">Connect Your Bank</h2>
                    <button type="button" class="close close-bank" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-close">&times;</span>
                    </button>
                </div>
                <div class="connect-bank-modal">
                    <img src="{{ asset('assets/img/bank-connection/bank-modal-1.png') }}">
                </div>
                <div class="connect-bank mb-4">
                    Please enter your<br>
                    online account credentials.
                </div>
                <form class="dashboard-form bank-connections">
                   <div class="position-relative dashboard-form-block">
                        <input type="password" class="position-relative" placeholder="Personal ID">
                    </div>
                   <div class="position-relative dashboard-form-block">
                       <input type="password" class="position-relative" placeholder="Password" name="password">
                       <img class="position-absolute bank-password-icon" src="{{ asset('assets/img/dashboard/password.png') }}">
                   </div>
                   <div class="position-relative dashboard-form-block">
                       <input type="password" class="position-relative" placeholder="Retype Password" name="retype-password">
                       <img class="position-absolute bank-password-icon" src="{{ asset('assets/img/dashboard/password.png') }}">
                   </div>
                    <a class="create-username">Create   <span>   username and password.</span></a>
                </form>

                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-continue" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="modal" data-target="#findYourBank">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal FIND BANK-->
    <div class="modal fade pr-0" id="findYourBank" tabindex="-1" role="dialog" aria-labelledby="findYourBankTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header-connect-bank">
                    <h2 class="bank-title">Connect Your Bank</h2>
                    <button type="button" class="close close-bank" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-close">&times;</span>
                    </button>
                </div>
                <div class="connect-bank mb-5 mt-4">
                    Find your bank
                </div>
                <form class="dashboard-form bank-connections">
                    <div class="position-relative dashboard-form-block">
                        <input type="text" class="position-relative" placeholder="Search" name="search">
                        <img class="position-absolute bank-password-icon-con" src="{{ asset('assets/img/bank-connection/search.png') }}">
                    </div>
                </form>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-continue">CONTINUE</button>
                </div>
            </div>
        </div>
    </div>
@endsection

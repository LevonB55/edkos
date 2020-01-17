<aside>
    <div class="aside-content">
        <div class="user-data">
            <img class="user-data-img" src="{{asset('assets/img/dashboard/user.png')}}">
            <h3 class="user-data-title"> {{ Auth::user()->name }}</h3>
            <div class="open-close-arrow">
                <img src="{{asset('assets/img/dashboard/arrow.png')}}">
            </div>
        </div>
        <div class="open-close-menu" id="style-1">
            <div class="user-dashboard-1">
                <div class="settings-block">
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/home.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Dashboard</h5>
                        </div>
                    </a>
                    <a class="settings-block-item" href="ds-clients.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/clients.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Clients</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img" href="invoices.html">
                            <img src="{{asset('assets/img/dashboard/invoices.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Invoices</h5>
                        </div>
                    </a>
                    <a class="settings-block-item" href="ds-expenses.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/expenses.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Expenses</h5>
                        </div>
                    </a>
                    <a class="settings-block-item" href="ds-estimates.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/estimates.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Estimates</h5>
                        </div>
                    </a>
                    <a class="settings-block-item" href="ds-time-tracking.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/tracking.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Tracking</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/projects.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Projects</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/my-team.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">My Team</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="user-dashboard-2">
                <div class="settings-block back-color-settings">
                    <h5 class="settings-block-title">Settings For You</h5>
                    <a class="settings-block-item" href="ds-company-profile.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/home.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Company Profile</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/list.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Items & Services</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/cube.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Apps  & Integrations</h5>
                        </div>
                    </a>
                    <a class="settings-block-item" href="ds-online-payment-options.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/payment.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Online Payments</h5>
                        </div>
                    </a>
                    <a class="settings-block-item active" href="ds-bank-connections.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/bank.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Bank Connections</h5>
                        </div>
                    </a>
                    <a class="settings-block-item" href="ds-billing-upgrade.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/upgrade.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Billing & Upgrade</h5>
                        </div>
                    </a>
                    <div class="green-line"></div>
                </div>
                <div class="settings-block">
                    <h5 class="settings-block-title">Personal</h5>
                    <a class="settings-block-item" href="ds-user-profile.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/user-small.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Your Profile</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/help.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Help</h5>
                        </div>
                    </a>
                    <a class="settings-block-item" href="ds-add-new-business.html">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/add.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Add Another Business</h5>
                        </div>
                    </a>
                    <a class="settings-block-item"  href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div class="settings-block-item-img">
                            <img src="{{asset('assets/img/dashboard/log-out.png')}}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">
                                    {{ __('logout.logout') }}
                            </h5>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center aside-logo">
        <img src="{{asset('assets/img/dashboard/logo.png')}}">
    </div>
</aside>
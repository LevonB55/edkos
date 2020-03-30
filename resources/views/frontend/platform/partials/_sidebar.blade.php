<aside>
    <div class="aside-content @yield('sidebarClass')">
        <div class="user-data">
            @isset($userImage)
                <img class="user-profile-img" src="{{ Storage::url($userImage) }}">
            @else
                <img class="user-profile-img" src="{{ asset('assets/img/dashboard/user.png') }}">
            @endisset 
            <h3 class="user-data-title user-name">{{ $user->full_name }}</h3>
            <div class="open-close-arrow">
                <img src="{{ asset('assets/img/dashboard/arrow.png') }}">
            </div>
        </div>
        <div class="open-close-menu" id="style-2">
            <div class="user-dashboard-1">
                <div class="settings-block">
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/home.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Dashboard</h5>
                        </div>
                    </a>
                    <a href="{{ route('clients') }}" class="settings-block-item {{ Request::routeIs('clients') ? 'active' : '' }}">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/clients.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Clients</h5>
                        </div>
                    </a>
                    <a href="{{ route('invoices.index') }}" class="settings-block-item {{ Request::routeIs('invoices*') ? 'active' : '' }}">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/invoices.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Invoices</h5>
                        </div>
                    </a>
                    <a href="{{ route('expenses') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/expenses.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Expenses</h5>
                        </div>
                    </a>
                    <a href="{{ route('estimates') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/estimates.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Estimates</h5>
                        </div>
                    </a>
                    <a href="{{ route('tracking') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/tracking.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Tracking</h5>
                        </div>
                    </a>
                    <a href="{{ route('projects') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/projects.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Projects</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/my-team.png') }}">
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
                    <a href="{{ route('company.show') }}" class="settings-block-item {{ Request::routeIs('company.show') ? 'active' : '' }}">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/home.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Company Profile</h5>
                        </div>
                    </a>
                    <a href="{{ route('services') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/list.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Items & Services</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/cube.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Apps & Integrations</h5>
                        </div>
                    </a>
                    <a href="{{ route('online-payment') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/payment.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Online Payments</h5>
                        </div>
                    </a>
                    <a href="{{ route('banks') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/bank.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Bank Connections</h5>
                        </div>
                    </a>
                    <a href="{{ route('billing-upgrade') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/upgrade.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Billing & Upgrade</h5>
                        </div>
                    </a>
                    <div class="green-line"></div>
                </div>
                <div class="settings-block">
                    <h5 class="settings-block-title">Personal</h5>
                    <a href="{{ route('user.show') }}" class="settings-block-item {{ Request::routeIs('user.show') ? 'active' : '' }}">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/user-small.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Your Profile</h5>
                        </div>
                    </a>
                    <a class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/help.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Help</h5>
                        </div>
                    </a>
                    <a class="settings-block-item" href="ds-add-new-business.html">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/add.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Add Another Business</h5>
                        </div>
                    </a>
                    <a href="{{ route('logout') }}" class="settings-block-item">
                        <div class="settings-block-item-img">
                            <img src="{{ asset('assets/img/dashboard/log-out.png') }}">
                        </div>
                        <div class="settings-block-item-block">
                            <h5 class="settings-block-item-text">Log Out</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center aside-logo">
        <img src="{{ asset('assets/img/dashboard/logo.png') }}">
    </div>
</aside>
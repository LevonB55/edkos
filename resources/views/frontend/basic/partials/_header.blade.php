<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="index.html" class="navbar-brand logo ">
            <img src="{{ asset('assets/img/logo.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-menu" id="navbarSupportedContent">
            <div class="menu-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                </a>
                <ul>
                    <li><a href="{{ route('pricing') }}">Plans and Pricing</a></li>
                    <li><a href="#">How it Works</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                </ul>
            </div>
            <div class="menu-right">
                @if(Auth::check())
                    <a href="#">{{ auth()->user()->full_name }}</a>
                    <a class="auth-btn" href="{{ route('logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a class="auth-btn" href="{{ route('register') }}">Start Free Trial</a>
                @endif
            </div>
        </div>
    </nav>
</header>
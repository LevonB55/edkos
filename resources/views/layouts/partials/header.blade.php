<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="/" class="navbar-brand logo ">
            <img src="{{asset('assets/css/help-center.css')}}img/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-menu" id="navbarSupportedContent">
            <div class="menu-left">
                <a href="/" class="logo">
                    <img src="{{asset('assets/img/logo.png')}}">
                </a>
                <ul>
                    <li><a href="plans-pricing.html">Plans and Pricing</a></li>
                    <li><a href="">How it Works</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                </ul>
            </div>
            <div class="menu-right">
                <a href="{{ route('login') }}">Login</a>
                <button onclick="javascript:location.href='{{ route('register') }}'">Start Free Trial</button>
            </div>
        </div>
    </nav>
</header>
@extends('frontend/basic/main')

@section('title', 'Help Center')
@section('bodyClass', 'help-center')

@section('extra-styles')
    <link href="{{ asset('css/help-center.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="help-first-section">

</section>

<section class="help-second-section">
    <div class="help-second-content">
        <div class="help-second-left">
            <h1>what can we help you with?</h1>
            <form action="" class="help-search">
                <input type="text" placeholder="Email address" name="search">
                <button type="submit">Search</button>
            </form>
            <div class="help-center-text">
                <h2>frequently asked questions</h2>

                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollim dolor sit amet, consectetur adipiscing elit
                            . Nam mollim dolor sit amet, consectetur adipiscing elit. Nam mollim dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
                <div class="freq-asked-quest">
                    <p>How do I get started in EDKOS?</p>
                    <div class="d-flex align-baseline">
                        <div class="faq-toggle-text-hide">
                            Welcome to EDKOS! If you're currently running a business or
                            just getting started while  lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="help-second-right">
            <div class="help-slack">
                <img src="{{ asset('assets/img/slack.svg') }}">
                <h2>subscribe to our slack workspace</h2>
                <p class="workspace">
                    Write your Email address to get invitation
                    to our slack workspace
                </p>
                <form action="" class="get-invitation">
                    <input type="text" placeholder="Email address" name="email-address">
                    <button type="submit" class="get-invitation-btn">Get Invitation</button>
                </form>
            </div>
            <div class="help-slack-2">
                <h2>subscribe to our slack workspace</h2>
                <div class="phone"><img src="{{ asset('assets/img/phone.svg') }}"><span>1-896-423-7483</span></div>
            </div>
            <div class="help-slack-2-content">
                <h4>TEXT PART</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis,
                    ac iaculis nunc posuere. Praesent a convallis ligula, quis euismod urna.
                    Etiam tincidunt venenatis finibus. Aenean quis dolor tincidunt libero fermentum consequat at vitae felis.
                </p>
                <h4>TEXT PART</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis,
                    ac iaculis nunc posuere. Praesent a convallis ligula, quis euismod urna.
                    Etiam tincidunt venenatis finibus. Aenean quis dolor tincidunt libero fermentum consequat at vitae felis.
                </p>
                <h4>TEXT PART</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis,
                    ac iaculis nunc posuere. Praesent a convallis ligula, quis euismod urna.
                    Etiam tincidunt venenatis finibus. Aenean quis dolor tincidunt libero fermentum consequat at vitae felis.
                </p>
                <h4>TEXT PART</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis purus nec dolor facilisis,
                    ac iaculis nunc posuere. Praesent a convallis ligula, quis euismod urna.
                    Etiam tincidunt venenatis finibus. Aenean quis dolor tincidunt libero fermentum consequat at vitae felis.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="sixth-section">
    <div class="content">
        <div class="text-block">
            <p class="text-1">WE WORK WITH</p>
            <p class="text-2">2.640.057 </p>
            <p class="text-3">CUSTOMERS FROM ALL OVER THE WORLD</p>
        </div>
        <div class="sixth-block">
            <button class="save">Buy now and save</button>
            <button class="free">Start Free Trial</button>
            <div>By signing up, you agree to the Terms of Use
                and Privacy Policy.</div>
        </div>
    </div>
</section>
@endsection

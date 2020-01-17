@extends('frontend.dashboard.main')

@section('title', 'Bank Connections')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
@endsection

@section('content')
    <main>
        <div class="dashboard-header my-profile-dashboard-header">
            <h1 class="dashboard-header-title">Bank Connections</h1>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="bank-dashboard-content">
            <p class="choose-your-bank">Choose Your Bank</p>
            <div class="bank-items">
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-1.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-2.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-3.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-2.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-3.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-3.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-2.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-1.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-2.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-3.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-2.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-1.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-2.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-3.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-1.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-3.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-3.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-3.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-2.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
                <div class="bank-item" data-toggle="modal" data-target="#notRobotModal">
                    <img src="{{ asset('assets/img/bank-connection/bank-1.png') }}">
                    <h4 class="bank-item-name">Bank Name</h4>
                </div>
            </div>
            <div class="find-your-bank">If you don't see your bank? <a>Find your bank.</a></div>
            <div class="find-your-bank">By connecting your bank account you agree to our <a>Terms of Service</a></div>
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
                <form class="dashboard-form bank-connections flex-column">
                   <div class="position-relative dashboard-form-block">
                        <input type="password" class="position-relative" placeholder="Personal ID">
                    </div>
                   <div class="position-relative dashboard-form-block">
                       <input type="password" class="position-relative" placeholder="Password" name="password">
                       <img class="position-absolute bank-password-icon bank-icon-top" src="{{ asset('assets/img/dashboard/password.png') }}">
                   </div>
                   <div class="position-relative dashboard-form-block bank-icon-top">
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

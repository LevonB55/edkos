@extends('frontend.dashboard.main')

@section('title', 'User Profile')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
@endsection

@section('content')
<main>
    <div class="dashboard-header my-profile-dashboard-header">
        <h1 class="dashboard-header-title">Your Profile</h1>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="dashboard-content">
        <div class="circle-user">
            <img src="{{ asset('assets/img/dashboard/user-green.png') }}">
        </div>
        <form class="dashboard-form flex-column">
            <div class="dashboard-form-block">
                <label for="name">Full Name</label>
                <input class="" placeholder="Lia Smith" name="name" id="name">
            </div>
            <div class="dashboard-form-block">
                <label for="email">Email Address</label>
                <input class="" placeholder="liasmith@gmail.com" name="email" id="email">
                <a class="d-block change-pas">Change email address</a>
            </div>
            <div class="position-relative dashboard-form-block">
                <label for="password">Password</label>
                <input type="password" class="position-relative" placeholder="Password" name="password" id="password">
                <a class="d-block change-pas"> Change password</a>
                <img class="position-absolute" src="{{ asset('assets/img/dashboard/password.png') }}">
            </div>
            <div class="dashboard-form-block save-block">
                <a class="dashboard-save">save</a>
            </div>
        </form>
    </div>
</main>
@endsection

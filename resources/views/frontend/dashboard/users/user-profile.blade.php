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
        <form class="dashboard-form flex-column" id="update-profile-form" method='POST' action="{{route('user-profile.update')}}"  enctype="multipart/form-data">

            <div class="alert alert-success">
                <strong>Success!</strong> Your account has been successfully updated!
            </div>

            <div class="circle-user" title="Change profile image">
                <label for="image">
                    @isset($user->image)
                        <img class="form-image" src="{{ Storage::url($user->image->url) }}">
                    @else
                        <img class="form-image" src="{{ asset('assets/img/dashboard/user-green.png') }}">
                    @endisset
                </label>
                <span class="image text-danger user-form-error"></span>
                <input type="file" name="image" class="d-none" id="image" accept="image/x-png,image/gif,image/jpeg">
            </div>

            <div class="dashboard-form-block">
                <label for="first_name">First Name</label>
                <div class="dashboard-block-item">
                    <input class="" value="{{$user->first_name}}" name="first_name" id="first_name" required>
                    <span class="first_name text-danger user-form-error"></span>
                </div>

            </div>
            <div class="dashboard-form-block">
                <label for="last_name">Last Name</label>
                <div class="dashboard-block-item">
                    <input class="" value="{{$user->last_name}}" name="last_name" id="last_name" required>
                    <span class="last_name text-danger user-form-error"></span>
                </div>
            </div>
            <div class="dashboard-form-block primary-email">
                <label for="old-email">Email Address</label>
                <div class="dashboard-block-item">
                    <input class="user-email" value="{{$user->email}}" id="old-email" disabled>
                    <span class="d-block change-pas pointer" id="show-new-email-inputs">Change email address</span>
                </div>
            </div>
            <div class="dashboard-form-block new-email-block hide-by-default">
                <label for="email" class="float-left">New Email </label>
                <div class="dashboard-block-item float-right">
                    <input type="email" placeholder="New Email" name="email" id="new-email" class="new-email" disabled>
                    <span class="email text-danger user-form-error"></span>
                </div>
            </div>
            <div class="dashboard-form-block new-email-block hide-by-default">
                <label for="email" class="float-left">Confirm New Email </label>
                <div class="dashboard-block-item float-right">
                    <input type="email" placeholder="Confirm New Email" name="email_confirmation" id="confirm-new-email" class="new-email" disabled>
                    <span class="d-block change-pas pointer" id="hide-new-email-inputs">Cancel</span>
                </div>
            </div>

            <div class="position-relative dashboard-form-block primary-password">
                <label for="password" class="float-left">Password</label>
                <div class="dashboard-block-item float-right">
                    <input type="password" class="position-relative" placeholder="Password" value="123456" id="password" disabled>
                    <span class="d-block change-pas pointer" id="show-new-password-inputs"> Change password</span>
                </div>
            </div>

            <div class="dashboard-form-block new-password-block hide-by-default">
                <label for="new-password" class="float-left">New Password </label>
                <div class="dashboard-block-item float-right">
                    <input type="password" placeholder="New Password" name="password" id="new-password" class="new-password" disabled>
                    <span class="custom-input login-right-side-password-icon password-icon dashboard-abs"><i class="fas fa-eye"></i></span>
                    <span class="password text-danger user-form-error"></span>
                </div>
            </div>
            <div class="dashboard-form-block new-password-block hide-by-default">
                <label for="confirm-new-password" class="float-left">Confirm New Password </label>
                <div class="dashboard-block-item float-right">
                    <input type="password" placeholder="Confirm New Password" name="password_confirmation" id="confirm-new-password" class="new-password" disabled>
                    <span class="custom-input login-right-side-password-icon password-icon dashboard-abs"><i class="fas fa-eye"></i></span>
                    <span class="d-block change-pas pointer" id="hide-new-password-inputs">Cancel</span>
                </div>
            </div>

            <div class="dashboard-form-block save-block">
                <button class="dashboard-save" type="submit">save</button>
            </div>
        </form>
    </div>
</main>
@endsection

@section('extra-scripts')
{{--    <script src="{{asset('js/ds-user-profile.js')}}"></script>--}}
@endsection
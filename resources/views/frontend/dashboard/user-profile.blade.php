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
            @isset($user->image)
                <img src="{{ Storage::url($user->image->url) }}">    
            @else
                <img src="{{ asset('assets/img/dashboard/user-green.png') }}">
            @endisset
        </div>


        <form class="dashboard-form flex-column" id="update-profile-form" method='POST' action="{{route('user-profile.update')}}"  enctype="multipart/form-data">

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif


            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {!! Session::get('success') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @csrf
            <div class="dashboard-form-block">
                <label for="first_name">First Name</label>
                <input class="" value="{{$user->first_name}}" name="first_name" id="first_name" required>
            </div>
            <div class="dashboard-form-block">
                <label for="last_name">Last Name</label>
                <input class="" value="{{$user->last_name}}" name="last_name" id="last_name" required>
            </div>
            <div class="dashboard-form-block primary-email">
                <label for="old-email">Email Address</label>
                <input class="" value="{{$user->email}}" id="old-email" readonly>
                <a class="d-block change-pas pointer" id="show-new-email-inputs">Change email address</a>
            </div>
            <div class="dashboard-form-block new-email-block hide-by-default">
                <label for="email">New Email </label>
                <input type="email" placeholder="New Email" name="email" id="new-email">
                <a class="d-block change-pas small-error" id="new-email-error"></a>
            </div>
            <div class="dashboard-form-block new-email-block hide-by-default">
                <label for="email">Confirm New Email </label>
                <input type="email" placeholder="Confirm New Email" name="email_confirmation" id="confirm-new-email">
                <a class="d-block change-pas small-error" id="confirm-new-email-error"></a>
                <a class="d-block change-pas pointer" id="hide-new-email-inputs">Cancel</a>
            </div>

            <div class="position-relative dashboard-form-block primary-password">
                <label for="password">Password</label>
                <input type="password" class="position-relative" placeholder="Password" value="123456" id="password">
                <a class="d-block change-pas pointer" id="show-new-password-inputs"> Change password</a>
                <img class="position-absolute" src="{{ asset('assets/img/dashboard/password.png') }}">
            </div>

            <div class="dashboard-form-block new-password-block hide-by-default">
                <label for="new-password">New Password </label>
                <input type="password" placeholder="New Password" name="password" id="new-password">
                <a class="d-block change-pas small-error" id="new-password-error"></a>
            </div>
            <div class="dashboard-form-block new-password-block hide-by-default">
                <label for="confirm-new-password">Confirm New Password </label>
                <input type="password" placeholder="Confirm New Password" name="confirm_password" id="confirm-new-password">
                <a class="d-block change-pas small-error" id="confirm-new-password-error"></a>
                <a class="d-block change-pas pointer" id="hide-new-password-inputs">Cancel</a>
            </div>
            <div class="dashboard-form-block">
                <label for="image">Upload photo</label>
                <input type="file" class="" value="" name="image" id="image">
            </div>
            <div class="dashboard-form-block save-block">
                <a></a>
                <button class="dashboard-save" type="submit">save</button>
            </div>
        </form>
    </div>
</main>
@endsection


@section('extra-scripts')
<script src="{{asset('js/ds-user-profile.js')}}"></script>
@endsection
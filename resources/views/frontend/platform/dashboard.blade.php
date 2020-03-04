@extends('frontend.platform.main')

@section('title', 'Dashboard')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-company-profile.css') }}">
@endsection

@section('content')
    <main>
        <div class="dashboard-header">
            <h1 class="dashboard-header-title">Welcome to the Dashboard!</h1>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        @include('frontend.partials._messages')

    </main>
@endsection
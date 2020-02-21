@extends('frontend.platform.main')

@section('title', 'New Project')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
@endsection

@section('content')
<main class="clients">
    <div class="dashboard-header">
        <h1 class="dashboard-clients-title">New Project</h1>
        <div class="clients-btns">
            <a class="exp-clients-btn">Cancel</a>
            <a class="new-clients-btn" data-toggle="modal" data-target="#exampleModalCenter">Save</a>
        </div>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>

    <div class="dashboard-clients">
        <a class="expense-back" href="ds-projects.html">
            <img src="{{ asset('assets/img/invoices/back.png') }}">
            <span class="color-green">Back</span>
        </a>
        <div class="new-projects">
            <img src="{{ asset('assets/img/projects.svg') }}" class="form-image">
            <div class="new-projects-content">
                <div class="project-members">
                    <div class="project-members-left">
                        <div class="project-members-image">
                            <label for="file-input-2"class="m-0">
                                <img src="{{ asset('assets/img/add.png') }}">
                            </label>
                            <input id="file-input-2" type="file" class="d-none">
                            <span class="assign-text">Assign a Client</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-13">Project Members</p>
                        <div class="project-members-image mt-3">
                            <label for="file-input"class="m-0">
                                <img src="{{ asset('assets/img/add.png') }}">
                            </label>
                            <input id="file-input" type="file" class="d-none">
                            <img src="{{ asset('assets/img/gril.svg') }}">
                        </div>
                    </div>
                </div>
                <input placeholder="Enter a project name" class="text-12">
                <p class="text-11">Project services</p>
                <div class="new-projects-btns">
                    <a class="new-projects-design-btn">Design<img src="{{ asset('assets/img/tracking/close.png') }}"></a>
                    <a class="new-projects-service-btn"><img src="{{ asset('assets/img/tracking/add-s.png') }}">Add Service</a>
                </div>
                <div class="new-projects-line"></div>
                <div class="new-projects-text">
                    <div class="projects-left">
                        <p class="text-9">Hourly Budget</p>
                        <input class="text-10" placeholder="00h 00m">
                    </div>
                    <div class="projects-center">
                        <p class="text-9">Flat Rate</p>
                        <input class="text-10 text-center" placeholder="$ 0.00">
                    </div>
                    <div class="projects-right">
                        <p class="text-9">End Date</p>
                        <input class="text-10" placeholder="00/00/0000">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

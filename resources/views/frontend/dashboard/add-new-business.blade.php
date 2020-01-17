@extends('frontend.dashboard.main')

@section('title', 'Add New Business')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-company-profile.css') }}">
@endsection

@section('content')
<main>
    <div class="dashboard-header">
        <h1 class="dashboard-header-title">Company Profile</h1>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="dashboard-company-content">
        <div class="open-close-user-add">
            <div class="samll-icons">
                <img src="{{ asset('assets/img/triangle.png') }}">
            </div>
            <div class="d-flex justify-content-start align-items-center">
                <img src="{{ asset('assets/img/user.png') }}">
                <span>Lia Smith</span>
            </div>
            <div class="d-flex justify-content-start align-items-center">
                <img src="{{ asset('assets/img/user.png') }}">
                <span>My business</span>
            </div>
        </div>
        <form class="dashboard-form">
            <div class="form-all-content">
                <div class="dashboard-form-block">
                    <label>Company Name</label>
                    <input type="text" placeholder="Lia Smith">
                </div>
                <div class="dashboard-form-block">
                    <label>Business Phone</label>
                    <input type="number" placeholder="4845">
                </div>
                <div class="dashboard-form-block">
                    <label>Mobile Phone</label>
                    <input type="number" placeholder="">
                </div>
                <div class="dashboard-form-block">
                    <label>Date Format</label>
                    <input type="date" placeholder="">
                </div>
                <div class="dashboard-form-block">
                    <div class="base-select-block d-flex justify-content-between align-items-center">
                        <div class="position-relative ">
                            <label>Base Currency</label>
                            <select class="base-select">
                                <option>USD</option>
                                <option>AMD</option>
                                <option>ARS</option>
                                <option>XDR</option>
                            </select>
                            <img src="{{ asset('assets/img/dashboard/select.png') }}">
                        </div>
                        <div>
                            <label>Standart Rate<span class="standart-rate"> / hr</span></label>
                            <input class="input-rate" type="text" placeholder="€0.00">
                            <span>/hr</span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-form-block">
                    <label>VAT Number</label>
                    <input type="text" placeholder="VAT Number">
                </div>
            </div>
            <div class="form-all-content">
                <div class="dashboard-form-block">
                    <label>Address</label>
                    <input type="text" placeholder="Street">
                </div>
                <div class="dashboard-form-block address-select position-relative">
                    <label></label>
                    <select>
                        <option>Nepal</option>
                        <option>Butan</option>
                        <option>China</option>
                    </select>
                    <img src="{{ asset('assets/img/dashboard/select.png') }}">
                </div>
                <div class="dashboard-form-block address-select position-relative">
                    <label></label>
                    <select>
                        <option>USE</option>
                        <option>Korea</option>
                        <option>China</option>
                    </select>
                    <img src="{{ asset('assets/img/dashboard/select.png') }}">
                </div>
                <div class="dashboard-form-block address-select position-relative">
                    <label></label>
                    <select>
                        <option>London</option>
                        <option>Paris</option>
                        <option>New York</option>
                    </select>
                    <img src="{{ asset('assets/img/dashboard/select.png') }}">
                </div>
                <div class="dashboard-form-block">
                    <label></label>
                    <input type="text" placeholder="ZIP Code">
                </div>
                <div class="dashboard-form-block">
                    <label>Bank Account</label>
                    <input type="text" placeholder="Bank Account">
                </div>
                <div class="dashboard-form-block save-block">
                    <a class="dashboard-save">save</a>
                </div>
            </div>
        </form>
    </div>
</main>
<!-- Modal BANK-->
<div class="modal fade show pr-0 add-new-bussiness-modal" id="connectNewBank" tabindex="-1"  data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="connectNewBankTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header-connect-bank">
                <h2 class="bank-title">Add New Business</h2>
                <button type="button" class="close close-bank" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-close">&times;</span>
                </button>
            </div>
            <div class="connect-bank-modal">
                <img src="{{ asset('assets/img/new-bank.png') }}">
            </div>
            <div class="connect-bank mb-4">
                Want to add another business?
            </div>
            <div class="customize-multiple">
                Keeping tabs on multiple businesses is simple with EDKOS. You'll be able to customize and manage each business separately, to make life easier at tax time.
            </div>
            <div class="gets-free-business">
                Each new business gets a free 30-day trial
            </div>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-continue" aria-hidden="true" data-dismiss="modal" data-toggle="modal" data-target="#createtNewBank">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Well Done BANK-->
<div class="modal fade show pr-0 add-new-bussiness-modal" id="wellDoneBank" tabindex="-1"  data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="wellDoneBankTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header-connect-bank">
                <h2 class="bank-title">Add New Business</h2>
                <button type="button" class="close close-bank" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-close">&times;</span>
                </button>
            </div>
            <div class="connect-bank-modal">
                <img src="{{ asset('assets/img/new-bank.png') }}">
            </div>
            <div class="connect-bank mb-4">
                Well Done
            </div>
            <div class="customize-multiple">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi molestie lacus faucibus dignissim. Sed porta condimentum quam, sit amet.
            </div>
            <div class="gets-free-business">
                You have free 30-day trial
            </div>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-continue" aria-hidden="true" data-dismiss="modal" data-toggle="modal" data-target="#" id="wellDoneClick">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal BANK-->
<div class="modal fade show pr-0 add-new-bussiness-modal" id="createtNewBank" tabindex="-1"  data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="createNewBankTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header-connect-bank">
                <h2 class="bank-title">Add New Business</h2>
                <button type="button" class="close close-bank" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-close">&times;</span>
                </button>
            </div>
            <div class="connect-bank create-new-bus mb-4">
                Create your new business
            </div>
            <form class="dashboard-form">
                <div class="form-all-content">
                    <div class="dashboard-form-block">
                        <input type="text" placeholder="Business Name">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <select>
                            <option>Country</option>
                            <option>Korea</option>
                            <option>China</option>
                        </select>
                        <img src="{{ asset('assets/img/dashboard/select.png') }}">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <select>
                            <option>Choose Service N1</option>
                            <option>Korea</option>
                            <option>China</option>
                        </select>
                        <img src="{{ asset('assets/img/dashboard/select.png') }}">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <select>
                            <option>Choose Service N2</option>
                            <option>Paris</option>
                            <option>New York</option>
                        </select>
                        <img src="{{ asset('assets/img/dashboard/select.png') }}">
                    </div>
                </div>
            </form>
            <div class="gets-free-business">
                You can add 2 services.
            </div>
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-continue" aria-hidden="true" data-dismiss="modal" data-toggle="modal" data-target="#wellDoneBank">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-scripts')
    <script>
        $('#connectNewBank').modal('show');
    </script>
@endsection

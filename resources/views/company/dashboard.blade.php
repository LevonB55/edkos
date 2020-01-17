@extends('layouts.profile')

@section('page-scripts')
    <link rel="stylesheet" href="{{asset('assets/css/ds-company-profile.css')}}">
@stop

@section('content')

    <main>
        <div class="dashboard-header">
            <h1 class="dashboard-header-title">Company Profile</h1>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="dashboard-company-content">
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
                                <img src="{{asset('assets/img/dashboard/select.png')}}">
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
                        <img src="{{asset('assets/img/dashboard/select.png')}}">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label></label>
                        <select>
                            <option>USE</option>
                            <option>Korea</option>
                            <option>China</option>
                        </select>
                        <img src="{{asset('assets/img/dashboard/select.png')}}">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label></label>
                        <select>
                            <option>London</option>
                            <option>Paris</option>
                            <option>New York</option>
                        </select>
                        <img src="{{asset('assets/img/dashboard/select.png')}}">
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

@endsection

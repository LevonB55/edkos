@extends('frontend.dashboard.main')

@section('title', 'Company Profile')

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
            <form action="{{ route('company-profile.update') }}" method="POST" class="dashboard-form">
                @csrf
                @method('PUT')
                <div class="form-all-content">
                    <div class="dashboard-form-block">
                        <label>Company Name</label>
                        <input type="text" name="company">
                    </div>
                    <div class="dashboard-form-block">
                        <label>Business Phone</label>
                        <input type="text" name="business_phone">
                    </div>
                    <div class="dashboard-form-block">
                        <label>Mobile Phone</label>
                        <input type="text" name="mobile_phone">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label>Date Format</label>
                        <select name="date_format">
                            @foreach($user->getDateFormats() as $formatKey => $formatVal)
                                <option value="{{ $formatKey }}">{{ $formatVal }}</option>
                            @endforeach
                        </select>
                        <img src="{{ asset('assets/img/dashboard/select.png') }}">
                    </div>
                    <div class="dashboard-form-block">
                        <div class="base-select-block d-flex justify-content-between align-items-center">
{{--                            <div class="position-relative ">--}}
{{--                                <label>Base Currency</label>--}}
{{--                                <select name="base_currency" class="base-select">--}}
{{--                                    @foreach($countries->unique('currency')->sortBy('currency_code') as $country)--}}
{{--                                        <option value="{{ $country->id }}">                                            --}}
{{--                                            {{ $country->currency_code . ' - ' . $country->currency  }}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                <img src="{{ asset('assets/img/dashboard/select.png') }}">--}}
{{--                            </div>--}}
                            <div>
                                <label>Standart Rate<span class="standart-rate"> / hr</span></label>
                                <input type="text" name="standard_rate" class="input-rate"  placeholder="&euro;0.00">
                                <span>/hr</span>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-form-block">
                        <label>VAT Number</label>
                        <input type="text" name="vat" placeholder="VAT Number">
                    </div>
                </div>
                <div class="form-all-content">
                    <div class="dashboard-form-block">
                        <label>Address</label>
                        <input type="text" name="street" placeholder="Street Address">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label></label>
                        <input type="text" name="city" placeholder="City">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label></label>
                        <input type="text" name="state" placeholder="State">
                    </div>
                    <div class="dashboard-form-block address-select position-relative">
                        <label></label>
                        <select name="country">
                            <option value="">Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        <img src="{{ asset('assets/img/dashboard/select.png') }}">
                    </div>
                    <div class="dashboard-form-block">
                        <label></label>
                        <input type="text" name="zip" placeholder="ZIP Code">
                    </div>
                    <div class="dashboard-form-block">
                        <label>Bank Account</label>
                        <input type="text" name="bank_account" placeholder="Bank Account">
                    </div>
                    <div class="dashboard-form-block save-block">
                        <input type="submit" value="save" class="dashboard-save">
                    </div>
                </div>
            </form>
        </div>
    </main>
{{--<main>--}}
{{--    <div class="dashboard-header">--}}
{{--        <h1 class="dashboard-header-title">Company Profile</h1>--}}
{{--        <div class="dashboard-form-mobile">--}}
{{--            <i class="fas fa-bars"></i>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="dashboard-company-content">--}}
{{--    <form class="dashboard-form" method="POST" action="{{route('company-profile.update')}}">--}}
{{--        --}}
{{--            @csrf--}}

{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger" role="alert">--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            @endif--}}


{{--            @if (Session::has('success'))--}}
{{--                <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                    {!! Session::get('success') !!}--}}
{{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            @endif--}}


{{--            <div class="form-all-content">--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <label>Company Name</label>--}}
{{--                    <input type="text" placeholder="Lia Smith" required name="company" value="{{$user->company}}">--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <label>Business Phone</label>--}}
{{--                    <input type="number" placeholder="4845" required name="business_phone" value="{{$user->business_phone}}">--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <label>Mobile Phone</label>--}}
{{--                    <input type="number" placeholder="" required name="mobile_phone" value="{{$user->mobile_phone}}">--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <label>Date Format</label>--}}
{{--                    <input type="date" placeholder="" required name="format_date" value="{{$user->format_date}}">--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <div class="base-select-block d-flex justify-content-between align-items-center">--}}
{{--                        <div class="position-relative ">--}}
{{--                            <label>Base Currency</label>--}}
{{--                            <select class="base-select" required name="currency" value="{{$user->currency}}">--}}
{{--                                <option>USD</option>--}}
{{--                                <option>AMD</option>--}}
{{--                                <option>ARS</option>--}}
{{--                                <option>XDR</option>--}}
{{--                            </select>--}}
{{--                            <img src="{{ asset('assets/img/dashboard/select.png') }}">--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <label>Standart Rate<span class="standart-rate"> / hr</span></label>--}}
{{--                            <input class="input-rate" type="text" placeholder="€0.00" required name="standart_rate" value="{{$user->standart_rate}}">--}}
{{--                            <span>/hr</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <label>VAT Number</label>--}}
{{--                    <input type="text" placeholder="VAT Number" required name="vat_number" value="{{$user->vat_number}}">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="form-all-content">--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <label>Address</label>--}}
{{--                    <input type="text" placeholder="Street" required name="address" value="{{$user->address}}">--}}
{{--                </div>--}}
{{--                --}}{{-- <div class="dashboard-form-block address-select position-relative">--}}
{{--                    <label></label>--}}
{{--                    <select>--}}
{{--                        <option>Nepal</option>--}}
{{--                        <option>Butan</option>--}}
{{--                        <option>China</option>--}}
{{--                    </select>--}}
{{--                    <img src="{{ asset('assets/img/dashboard/select.png') }}">--}}
{{--                </div> --}}
{{--                <div class="dashboard-form-block address-select position-relative">--}}
{{--                    <label></label>--}}
{{--                    <select required name="country" value="{{$user->country}}">--}}
{{--                        <option>USE</option>--}}
{{--                        <option>Korea</option>--}}
{{--                        <option>China</option>--}}
{{--                    </select>--}}
{{--                    <img src="{{ asset('assets/img/dashboard/select.png') }}">--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block address-select position-relative">--}}
{{--                    <label></label>--}}
{{--                    <select required name="city" value="{{$user->city}}">--}}
{{--                        <option>London</option>--}}
{{--                        <option>Paris</option>--}}
{{--                        <option>New York</option>--}}
{{--                    </select>--}}
{{--                    <img src="{{ asset('assets/img/dashboard/select.png') }}">--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <label></label>--}}
{{--                    <input type="text" placeholder="ZIP Code" required name="postal_code" value="{{$user->postal_code}}">--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block">--}}
{{--                    <label>Bank Account</label>--}}
{{--                    <input type="text" placeholder="Bank Account" required name="bank_account" value="{{$user->bank_account}}">--}}
{{--                </div>--}}
{{--                <div class="dashboard-form-block save-block">--}}
{{--                    <a></a>--}}
{{--                    <button class="dashboard-save" type="submit">save</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</main>--}}
@endsection
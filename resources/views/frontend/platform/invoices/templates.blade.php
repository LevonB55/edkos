@extends('frontend.platform.main')

@section('title', 'Customize Template')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-customize-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colorpicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
@endsection

@section('content')
    <main class="clients invoices">
        <div class="dashboard-header">
            <h1 class="dashboard-clients-title">Customize Template</h1>
            <div class="clients-btns">
                <a href="{{ route('invoices.create') }}" class="new-clients-btn">NEW INVOICE</a>
            </div>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        @include('frontend.partials._messages')

        <section class="custom-template">
            <div class="invoice-back border-right-0">
                <a href="{{ route('invoices.create') }}"  href="ds-invoices.html">
                    <img src="{{ asset('assets/img/invoices/back.png') }}">
                    <span class="border-right-black">Back</span>
                </a>
                <p class="text-3">Choose a template</p>
            </div>

            <div class="carusel-and-div">
                <div id="owl-container">
                    <div class="owl-carousel invoice-slider owl-theme" data-invoice-color="{{ $user->invoice_color }}"
                        data-invoice-templates-count="{{ $templates->count() }}" data-chosen-invoice-id="{{ $user->invoice_id }}">
                        @foreach($templates as $template)
                            <div class="item-owl-carousel">
                                <li class="items main-pos" id="{{ $template->id }}" data-invoice-id="{{ $template->id }}">
                                    @include('frontend.platform.invoices.templates.template-' . $template->id)
                                </li>
                                <div class="cover-item"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mobile-carusel-color">
                    <p class="text-4">Add your logotype</p>
                    <div class="image-and-color">
                        <div class="image-upload logotype-input">
                            <label for="logotype">
                                <img src="{{ asset('assets/img/logotype.png') }}">
                                <p class="text-6">
                                    Drop your logo here.
                                    JPG or PNG formats.
                                    Maximum 3MB in size.
                                </p>
                            </label>
                            <input type="file" id="logotype">
                        </div>
                        <p class="text-4">Choose a colour</p>
                        <div class="customize-colorpicker">
                            <p id="colorpickerHolder"></p>
                            <div class="abs-color"></div>
                        </div>
                    </div>
                    <form action="{{ route('invoices.customize') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="invoice_id" value="{{ $user->invoice_id }}" class="invoice-id">
                        <input type="hidden" name="invoice_color" value="{{ $user->invoice_color }}" class="invoice-color">
                        <button type="submit" class="btn-save">save</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('extra-scripts')
    <script src="{{ asset('js/colorpicker.js') }}"></script>
    <script>
        $('#colorpickerHolder').ColorPicker({flat: true});
    </script>
@endsection
@extends('frontend.dashboard.main')

@section('title', 'Services')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoice-template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-items-service.css') }}">
@endsection

@section('content')
<main class="clients">
    <div class="dashboard-header">
        <h1 class="dashboard-clients-title">Items & Services</h1>
        <div class="clients-btns">
            <a class="new-clients-btn items-service-block">NEW Item</a>
        </div>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="send-invoice items-service-send">
        <div class="send-invoice-content" data-select2-id="14">
            <div class="send-invoice-top">
                <img src="{{ asset('assets/img/top.png') }}">
            </div>
            <div class="send-invoice-title">
                <p>New item</p>
            </div>
            <div class="send-invoice-info" data-select2-id="13">
                <div>
                    <label>Name</label>
                    <input placeholder="Enter a name">
                </div>
                <div>
                    <label>Description</label>
                    <input placeholder="Enter a description">
                </div>
                <div>
                    <label>Rate</label>
                    <input placeholder="Last Name">
                </div>
                <div>
                    <label>Taxes</label>
                    <input placeholder="">
                </div>
                <div class="service-inputs">
                    <label>Name</label>
                    <input placeholder="First Name">
                    <input placeholder="Last Name">
                </div>
            </div>
            <div class="send-invoice-btns">
                <a class="send-invoice-cancel-btn service-items-cancel">Cancel</a>
                <a class="send-invoice-send-btn">Send</a>
            </div>
        </div>
    </div>

    <div class="dashboard-clients">
        <div class="projects-timing">
            <div class="invoices-first-item">
                <div class="invoice-item timeing-review item-service-create-item">
                    <a class="image-upload">
                        <label for="file-input" class="d-flex justify-content-center flex-column">
                            <img src="{{ asset('assets/img/add.svg') }}">
                            <h4 class="add-new-client">Create New Item</h4>
                        </label>
                    </a>
                </div>
            </div>
            <a class="invoices-item-click" href="ds-items-services.html">
                <div class="invoices-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/clipboard.png') }}">
                        <p class="invoices-item-content-p">Items</p>
                    </div>
                </div>
            </a>
            <a class="invoices-item-click" href="ds-items-services-2.html">
                <div class="invoices-item invoices-disable-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/setting.png') }}">
                        <p class="invoices-item-content-p">Services</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="table-clients">
            <div class="table-inner-search">
                <div class="search-table">
                    <button class="search-table-button"><img src="{{ asset('assets/img/search.png') }}"></button>
                    <input class="search-table-input" placeholder="Search by item name, description, rate or taxes">
                </div>
            </div>
            <table class="table">
                <thead>
                <tr class="table-title">
                    <th>
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </th>
                    <th>
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdown-clients" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Item Name
                                <img src="{{ asset('assets/img/dashboard/select.png') }}">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-clients">
                                <button class="dropdown-item" type="button">Archived Items</button>
                                <div class="inside-line"></div>
                                <button class="dropdown-item" type="button">Deleted Items</button>
                            </div>
                        </div>
                    </th>
                    <th>Description</th>
                    <th>Rate</th>
                    <th>Taxes</th>
                    <th class="del-top"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td>Consulting</td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</td>
                    <td>$ 50,00</td>
                    <td>14/12/2019</td>
                    <td class="last">
                        <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                        <img src="{{ asset('assets/img/dashboard/archive.png') }}">
                        <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td>Development</td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</td>
                    <td>$ 50,00</td>
                    <td>14/12/2019</td>
                    <td class="last">
                        <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                        <img src="{{ asset('assets/img/dashboard/archive.png') }}">
                        <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td>3d visualisation</td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</td>
                    <td>$ 50,00</td>
                    <td>14/12/2019</td>
                    <td class="last">
                        <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                        <img src="{{ asset('assets/img/dashboard/archive.png') }}">
                        <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td>Development</td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</td>
                    <td>$ 50,00</td>
                    <td>14/12/2019</td>
                    <td class="last">
                        <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                        <img src="{{ asset('assets/img/dashboard/archive.png') }}">
                        <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td>Graphic design</td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</td>
                    <td>$ 50,00</td>
                    <td>14/12/2019</td>
                    <td class="last">
                        <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                        <img src="{{ asset('assets/img/dashboard/archive.png') }}">
                        <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td>Development</td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</td>
                    <td>$ 50,00</td>
                    <td>14/12/2019</td>
                    <td class="last">
                        <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                        <img src="{{ asset('assets/img/dashboard/archive.png') }}">
                        <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="pagination">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <a href="#">1</a>
                <a class="active" href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</main>
@endsection

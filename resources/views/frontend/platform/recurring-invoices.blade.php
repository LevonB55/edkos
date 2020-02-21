@extends('frontend.platform.main')

@section('title', 'Recurring Invoices')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
@endsection

@section('content')
<main class="clients invoices">
    <div class="dashboard-header">
        <h1 class="dashboard-clients-title">Recurring Invoices</h1>
        <div class="clients-btns">
            <a class="exp-clients-btn">EXPORT INVOICES</a>
            <a class="new-clients-btn" href="ds-new-recurring-invoices.html">NEW RECURRING INVOICE</a>
        </div>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>

    <div class="dashboard-clients">
        <div class="block-recently">
            <div class="invoices-first-item">
                <div class="invoice-item">
                    <a class="image-upload" href="ds-new-recurring-invoices.html">
                        <label for="file-input" class="d-flex justify-content-center">
                            <img src="{{ asset('assets/img/add.svg') }}">
                            <h4 class="add-new-client">Add New Recurring Invoice</h4>
                        </label>
                    </a>
                </div>
                <div class="from-to d-flex justify-content-between align-items-center">
                    <div class="from-me ">From Me</div>
                    <div><i class="fas fa-sync-alt"></i></div>
                    <div class="from-me active-from-to">To Me</div>
                </div>
            </div>
            <a class="invoices-item-click" href="ds-invoices.html">
                <div class="invoices-item invoices-disable-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/invoices/invoices.png') }}">
                        <p class="invoices-item-content-p">Invoices</p>
                    </div>
                </div>
            </a>
            <a class="invoices-item-click" href="ds-recurring-invoices.html">
                <div class="invoices-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/invoices/recurring.png') }}">
                        <p class="invoices-item-content-p">Recurring<br> Invoices</p>
                    </div>
                </div>
            </a>
            <a class="invoices-item-click" href="ds-online-payment-options.html">
                <div class="invoices-item invoices-disable-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/invoices/surface.png') }}">
                        <p class="invoices-item-content-p">Online<br> Payment Options</p>
                    </div>
                </div>
            </a>
            <a class="invoices-item-click">
                <div class="invoices-item invoices-disable-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/invoices/resume.png') }}">
                        <p class="invoices-item-content-p">Customize<br> Invoice Templat</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="table-clients">
            <h3 class="paid-faster">Bill your repeat customers and get paid faster.</h3>
            <table class="table">
                <thead>
                <tr class="table-title">
                    <th>
                        <label class="container">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </th>
                    <th>Status</th>
                    <th>
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdown-clients" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Invoice
                                <img src="{{ asset('assets/img/dashboard/select.png') }}">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-clients">
                                <button class="dropdown-item" type="button">Archived Invoices</button>
                                <div class="inside-line"></div>
                                <button class="dropdown-item" type="button">Deleted Invoices</button>
                            </div>
                        </div>
                    </th>
                    <th>Active Clients</th>
                    <th>Company</th>
                    <th>Description</th>
                    <th>Issued Date</th>
                    <th>Due Date</th>
                    <th class="part">Amount</th>
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
                    <td><button class="btn-saved btn-tables">Saved</button></td>
                    <td>0016</td>
                    <td>David Mong</td>
                    <td>Company Name</td>
                    <td>A Description</td>
                    <td>05/10/2019</td>
                    <td>14/12/2019</td>
                    <td class="part">€0.00</td>
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
                    <td><button class="btn-change btn-tables">Change</button></td>
                    <td>0016</td>
                    <td>Sasha Wain</td>
                    <td>Company Name</td>
                    <td>A Description</td>
                    <td>05/10/2019</td>
                    <td>14/12/2019</td>
                    <td class="part">€0.00</td>
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
                    <td><button class="btn-change btn-tables">Change</button></td>
                    <td>0016</td>
                    <td>Tom Smith</td>
                    <td>Company Name</td>
                    <td>A Description</td>
                    <td>05/10/2019</td>
                    <td>14/12/2019</td>
                    <td class="part">€0.00</td>
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
                    <td><button class="btn-saved btn-tables">Saved</button></td>
                    <td>0016</td>
                    <td>David Mong</td>
                    <td>Company Name</td>
                    <td>A Description</td>
                    <td>05/10/2019</td>
                    <td>14/12/2019</td>
                    <td class="part">€0.00</td>
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
                    <td><button class="btn-change btn-tables">Change</button></td>
                    <td>0016</td>
                    <td>Sasha Wain</td>
                    <td>Company Name</td>
                    <td>A Description</td>
                    <td>05/10/2019</td>
                    <td>14/12/2019</td>
                    <td class="part">€0.00</td>
                    <td class="last">
                        <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                        <img src="{{ asset('assets/img/dashboard/archive.png') }}">
                        <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
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
</main>
@endsection

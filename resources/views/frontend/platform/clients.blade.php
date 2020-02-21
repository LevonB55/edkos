@extends('frontend.platform.main')

@section('title', 'Clients')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
@endsection

@section('content')
<main class="clients">
    <div class="dashboard-header">
        <h1 class="dashboard-clients-title">Clients</h1>
        <div class="clients-btns">
            <a class="exp-clients-btn">EXPORT CLIENTS</a>
            <a class="new-clients-btn" data-toggle="modal" data-target="#exampleModalCenter">NEW CLIENT</a>
        </div>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade z-index-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="d-flex clients-header-title justify-content-between align-items-center">
                    <div class="add-new-client-title">Add New Client</div>
                    <div class="add-new-close" aria-hidden="true" data-dismiss="modal" aria-label="Close">&times;</div>
                </div>

                <div class="modal-body">
                    <div class="first-modal-content">
                        <div class="left-modal">
                            <div class="modal-circle">
                                <div class="image-upload">
                                    <label for="new-client">
                                        <h4 class="add-client">Add Photo</h4>
                                    </label>
                                    <input id="new-client" type="file"/>
                                </div>
                            </div>
                        </div>
                        <div class="right-modal">
                            <div>
                                <label id="Company">
                                    <input type="radio" checked="checked" name="radio"  class="blue" />
                                    <span>Company</span>
                                </label>
                                <label class="individual" id="Individual">
                                    <input type="radio" name="radio" class="blue" />
                                    <span>Individual</span>
                                </label>
                            </div>
                            <div class="change-block w-100">
                                <form class="form-new-client">
                                    <div class="d-flex close-open-form">
                                        <div id="company-name" class="w-100">
                                            <input type="text" class="form-control" placeholder="Company Name">
                                        </div>
                                        <div id="first-last-name" class="justify-content-between">
                                            <input type="text" class="form-control" placeholder="First Name">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control input-filed" placeholder="Email">
                                    <input type="text" class="form-control input-filed" placeholder="Phone">
                                    <input type="text" class="form-control input-filed" placeholder="Country">
                                    <input type="text" class="form-control input-filed" placeholder="State">
                                    <input type="text" class="form-control input-filed" placeholder="City">
                                    <input type="text" class="form-control input-filed" placeholder="Street">
                                    <input type="text" class="form-control input-filed" placeholder="Zip Code">
                                    <input type="text" class="form-control input-filed" placeholder="VAT Number">
                                    <input type="text" class="form-control input-filed" placeholder="Bank Account">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="btn-block-for-clients">
                        <a class="exp-clients-btn">CANCEL</a>
                        <a class="new-clients-btn">SAVE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-clients">
        <h3 class="dashboard-content-title">Recently Active</h3>
        <div class="block-recently">
            <div class="block-item">
                <div class="image-upload">
                    <label for="file-input">
                        <img src="{{ asset('assets/img/add.svg') }}" />
                        <h4 class="add-new-client">Add new client</h4>
                    </label>
                    <input id="file-input" type="file"/>
                </div>
            </div>
            <div class="block-item-color color-1">
                <div class="block-item-inside">
                    <div class="block-item-text">
                        <div class="item-circle item-circle-1">

                        </div>
                        <p class="item-name item-name-1">David Mong</p>
                    </div>
                    <div class="item-text-address">
                        <p>Email: davidmong@gmail.com</p>
                        <p>Phone: 081 5642 4842</p>
                        <p>Address: LA</p>
                    </div>
                </div>
            </div>
            <div class="block-item-color color-2">
                <div class="block-item-inside">
                    <div class="block-item-text">
                        <div class="item-circle item-circle-2">

                        </div>
                        <p class="item-name item-name-2">Sasha Wain</p>
                    </div>
                    <div class="item-text-address">
                        <p>Email: davidmong@gmail.com</p>
                        <p>Phone: 081 5642 4842</p>
                        <p>Address: LA</p>
                    </div>
                </div>
            </div>
            <div class="block-item-color color-3">
                <div class="block-item-inside">
                    <div class="block-item-text">
                        <div class="item-circle item-circle-3">

                        </div>
                        <p class="item-name item-name-3">Tom Smith</p>
                    </div>
                    <div class="item-text-address">
                        <p>Email: davidmong@gmail.com</p>
                        <p>Phone: 081 5642 4842</p>
                        <p>Address: LA</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-clients">
            <div class="table-inner-search">
                <div class="search-table">
                    <button class="search-table-button"><img src="{{ asset('assets/img/search.png') }}"></button>
                    <input class="search-table-input" placeholder="Search by client name, company name, project or invoice number">
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
                                Active Clients
                                <img src="{{ asset('assets/img/dashboard/select.png') }}">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-clients">
                                <button class="dropdown-item" type="button">Archived Clients</button>
                                <div class="inside-line"></div>
                                <button class="dropdown-item" type="button">Deleted Clients</button>
                            </div>
                        </div>
                    </th>
                    <th>Company</th>
                    <th>Internal Note</th>
                    <th>Credit</th>
                    <th class="part">Total Outstanding</th>
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
                    <td>David Mong</td>
                    <td>Company Name</td>
                    <td>Some Note</td>
                    <td></td>
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
                    <td>Sasha Wain</td>
                    <td>Company Name</td>
                    <td>Some Note</td>
                    <td></td>
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
                    <td>Tom Smith</td>
                    <td>Company Name</td>
                    <td>Some Note</td>
                    <td></td>
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
                    <td>David Mong</td>
                    <td>Company Name</td>
                    <td>Some Note</td>
                    <td></td>
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
                    <td>Sasha Wain</td>
                    <td>Company Name</td>
                    <td>Some Note</td>
                    <td></td>
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
                    <td>Tom Smith</td>
                    <td>Company Name</td>
                    <td>Some Note</td>
                    <td></td>
                    <td class="part">€0.00</td>
                    <td class="last">
                        <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                        <img src="{{ asset('assets/img/dashboard/archive.png') }}">
                        <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                    </td>
                </tr>
                <tr class="last-block">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total: €0.00 USD</td>
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

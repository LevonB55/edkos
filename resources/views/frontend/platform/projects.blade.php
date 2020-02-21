@extends('frontend.platform.main')

@section('title', 'Projects')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
@endsection

@section('content')
<main class="clients">
    <div class="dashboard-header">
        <h1 class="dashboard-clients-title">Projects</h1>
        <div class="clients-btns">
            <a class="new-clients-btn" href="ds-new-projects.html">NEW project</a>
        </div>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>

    <div class="dashboard-clients">
        <div class="projects-timing">
            <div class="invoices-first-item">
                <div class="invoice-item timeing-review">
                    <a class="image-upload" href="ds-estimates-template.html">
                        <label for="file-input" class="d-flex justify-content-center flex-column">
                            <img src="{{ asset('assets/img/add.svg') }}">
                            <h4 class="add-new-client">Create New Project</h4>
                        </label>
                    </a>
                </div>
            </div>
            <a class="invoices-item-click">
                <div class="invoices-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/tracking/tracking.png') }}">
                        <p class="invoices-item-content-p">Hourly Projects</p>
                    </div>
                </div>
            </a>
            <a class="invoices-item-click">
                <div class="invoices-item invoices-disable-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/631180.png') }}">
                        <p class="invoices-item-content-p">Fixed Price Projects</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="table-clients">
            <div class="table-inner-search">
                <div class="search-table">
                    <button class="search-table-button"><img src="{{ asset('assets/img/search.png') }}"></button>
                    <input class="search-table-input" placeholder="Search by client name, team members, project or date">
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
                                Projects
                                <img src="{{ asset('assets/img/dashboard/select.png') }}">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-clients">
                                <button class="dropdown-item" type="button">Archived Projects</button>
                                <div class="inside-line"></div>
                                <button class="dropdown-item" type="button">Deleted Projects</button>
                            </div>
                        </div>
                    </th>
                    <th>Client</th>
                    <th>Team Members</th>
                    <th>Hours Logged</th>
                    <th class="part">End Date</th>
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
                    <td>Name of the project</td>
                    <td>David Mong</td>
                    <td>David Mong / Sasha Wain / Tom Smith</td>
                    <td>00:30</td>
                    <td class="part">14/12/2019</td>
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
                    <td>Name of the project</td>
                    <td>Sasha Wain</td>
                    <td>Sasha Wain / Tom Smith</td>
                    <td>00:35</td>
                    <td class="part">14/12/2019</td>
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
                    <td>Name of the project</td>
                    <td>Sasha Wain</td>
                    <td>Some Note</td>
                    <td>12:30</td>
                    <td class="part">14/12/2019</td>
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
                    <td>Name of the project</td>
                    <td>Tom Smith</td>
                    <td>Sasha Wain / Tom Smith</td>
                    <td>05:30</td>
                    <td class="part">14/12/2019</td>
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
                    <td>Name of the project</td>
                    <td>Tom Smith</td>
                    <td>Some Note</td>
                    <td>00:30</td>
                    <td class="part">14/12/2019</td>
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
                    <td>Name of the project</td>
                    <td>Tom Smith</td>
                    <td>David Mong / Sasha Wain / Tom Smith</td>
                    <td>07:54</td>
                    <td class="part">14/12/2019</td>
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

@extends('frontend.dashboard.main')

@section('title', 'Expenses')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-expense.css') }}">
@endsection

@section('content')
<main class="clients invoices">
    <div class="dashboard-header">
        <h1 class="dashboard-clients-title">Expenses</h1>
        <div class="clients-btns">
            <a class="exp-clients-btn">IMPORT EXPENSES</a>
            <a class="new-clients-btn" href="ds-new-expenses.html">NEW EXPENSE</a>
        </div>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>

    <div class="dashboard-clients">
        <div class="block-recently">
            <div class="invoices-first-item">
                <div class="expenses-item">
                    <a class="image-upload">
                        <label for="file-input">
                            <img src="{{ asset('assets/img/add.svg') }}">
                            <h4 class="add-new-client">Add expense</h4>
                        </label>
                    </a>
                </div>
            </div>
            <a class="expense-item-block">
                <div class="expense-archive-delete">
                    <div><img src="{{ asset('assets/img/expenses/correct.png') }}"></div>
                    <p class="active-expenses">Active Expenses</p>
                </div>
                <div class="expense-archive-delete opacity-block">
                    <div><img src="{{ asset('assets/img/expenses/archive.png') }}"></div>
                    <p class="active-expenses">Archived Expenses</p>
                </div>
                <div class="expense-archive-delete opacity-block">
                    <div><img src="{{ asset('assets/img/expenses/delete.png') }}"></div>
                    <p class="active-expenses">Deleted Expenses</p>
                </div>
            </a>
            <a class="invoices-item-click">
                <div class="invoices-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/expenses/expenses.png') }}">
                        <p class="invoices-item-content-p">Expenses</p>
                    </div>
                </div>
            </a>
            <a class="invoices-item-click" href="ds-recurring-expenses.html">
                <div class="invoices-item invoices-disable-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/invoices/recurring.png') }}">
                        <p class="invoices-item-content-p">Recurring<br> Expenses</p>
                    </div>
                </div>
            </a>
            <a class="invoices-item-click" href="ds-bank-connections.html">
                <div class="invoices-item invoices-disable-item">
                    <div class="invoices-item-content">
                        <img src="{{ asset('assets/img/expenses/manage.png') }}">
                        <p class="invoices-item-content-p">Manage<br>Bank Connections</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="table-clients">
            <div class="table-inner-search">
                <div class="search-table">
                    <button class="search-table-button"><img src="{{ asset('assets/img/search.png') }}"></button>
                    <input class="search-table-input" placeholder="Search by vendor name, client name or category">
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
                    <th>Status</th>
                    <th>Category</th>
                    <th>Vendor</th>
                    <th>Clients</th>
                    <th>Source</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Tax</th>
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
                    <td><button class="btn-paid btn-tables">Paid</button></td>
                    <td>A Category</td>
                    <td>David Smith</td>
                    <td>David Mong</td>
                    <td>Source</td>
                    <td>A Description</td>
                    <td>14/12/2019</td>
                    <td>0%</td>
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
                    <td><button class="btn-overdue btn-tables">Overdue</button></td>
                    <td>A Category</td>
                    <td>David Smith</td>
                    <td>Sasha Wain</td>
                    <td>Source</td>
                    <td>A Description</td>
                    <td>14/12/2019</td>
                    <td>0%</td>
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
                    <td><button class="btn-viewed btn-tables">Viewed</button></td>
                    <td>A Category</td>
                    <td>David Smith</td>
                    <td>Tom Smith</td>
                    <td>Source</td>
                    <td>A Description</td>
                    <td>14/12/2019</td>
                    <td>0%</td>
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
                    <td><button class="btn-unpaid btn-tables">Unpaid</button></td>
                    <td>A Category</td>
                    <td>David Smith</td>
                    <td>David Mong</td>
                    <td>Source</td>
                    <td>A Description</td>
                    <td>14/12/2019</td>
                    <td>0%</td>
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
                    <td><button class="btn-partial btn-tables">Partial</button></td>
                    <td>A Category</td>
                    <td>David Smith</td>
                    <td>Sasha Wain</td>
                    <td>Source</td>
                    <td>A Description</td>
                    <td>14/12/2019</td>
                    <td>0%</td>
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
                    <td><button class="btn-draft btn-tables">Draft</button></td>
                    <td>A Category</td>
                    <td>David Smith</td>
                    <td>Tom Smith</td>
                    <td>Source</td>
                    <td>A Description</td>
                    <td>14/12/2019</td>
                    <td>0%</td>
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
                    <td><button class="btn-paid btn-tables">Paid</button></td>
                    <td>A Category</td>
                    <td>David Smith</td>
                    <td>Tom Smith</td>
                    <td>Source</td>
                    <td>A Description</td>
                    <td>14/12/2019</td>
                    <td>0%</td>
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
                    <td></td>
                    <td></td>
                    <td class="hide-sometime"></td>
                    <td></td>
                    <td>Total: €0.00 USD</td>
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

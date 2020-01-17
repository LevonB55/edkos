@extends('frontend.dashboard.main')

@section('title', 'New Expense')
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
        <h1 class="dashboard-clients-title">New Expense</h1>
        <div class="clients-btns">
            <a class="exp-clients-btn">CANCEL</a>
            <a class="new-clients-btn">SAVE</a>
        </div>
        <div class="dashboard-form-mobile">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="new-expense-content">
        <a class="expense-back" href="ds-expenses.html">
            <img src="{{ asset('assets/img/invoices/back.png') }}">
            <span>Back</span>
        </a>
        <div class="new-expense-left">
            <div class="new-expense-add-category">
                <div class="calendar-block">
                    <input class="new-expense-title" placeholder="Add category" onclick="myFunction()">
                    <div class="dropdown">
                        <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <div class="search-icon"><i class="fas fa-search"></i></div>
                            <a href="#">Category</a>
                            <a href="#">Category</a>
                            <a href="#">Category</a>
                            <a href="#">Category</a>
                            <a href="#">Category</a>
                        </div>
                    </div>

                </div>
                <div class="next-expense-data next-expense-data-block">
                    <input type="date" class="border-0 pl-0"  value="2019-09-20"
                           min="2019-09-20" max="2020-09-20">
                    <img class="change-placeholder-icon" src="{{ asset('assets/img/expenses/expense-calendar.png') }}">
                </div>
                <input class="new-expense-title" placeholder="Add vendor">
                <input class="new-expense-description" placeholder="Add description">
                <div class="new-expense-line"></div>
                <div class="new-expense-data-line">
                    <div class="new-expense-first-line">Subtotal</div>
                    <div>€0.00</div>
                </div>
                <div class="new-expense-data-line">
                    <div class="new-expense-first-line">Discount (0%)</div>
                    <div>-€0.00</div>
                </div>
                <div class="choose-tax">
                    <div class="new-expense-data-line tax">
                        <div class="new-expense-first-line">Tax</div>
                        <div>€0.00</div>
                    </div>
                    <div class="tax-open-close tax-clickable-block">
                        <img src="{{ asset('assets/img/expenses/triangle-top.png') }}">
                        <div class="next-expense-data">
                            <select>
                                <option>Choose country</option>
                                <option>Choose country</option>
                            </select>
                            <select>
                                <option>Tax rate</option>
                                <option>Tax rate</option>
                                <option>Tax rate</option>
                                <option>Tax rate</option>
                                <option>Tax rate</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="new-expense-line-second"></div>
                <div class="new-expense-data-line bold">
                    <div class="new-expense-first-line">Grand Total:</div>
                    <div>€0.00 USD</div>
                </div>
            </div>
            <div class="new-expense-circle">
                <img src="{{ asset('assets/img/expenses/block.png') }}">
            </div>
        </div>
        <div class="new-expense-right">
            <label class="new-expense-file" for="expense-file">
                <img src="{{ asset('assets/img/expenses/expense-file.png') }}">
                <p class="new-expense-select-text">
                    Drag receipt image
                    here or <span>select a file</span>
                </p>
                <input id="expense-file" type="file">
            </label>
            <div class="new-expense-settings">
                <p class="new-expense-settings-title">Expenses Settings</p>
                <p class="new-expense-settings-green mt-4 mb-2">Mark as billable</p>
                <div class="w-100 d-flex align-items-center">
                    <label class="container">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p class="new-expense-label-text">
                        Mark as billable so you can
                        invoice a client for this expense later.
                    </p>
                </div>
                <p class="new-expense-settings-green mt-4 mb-1">Cost of Goods Sold</p>
                <div class="w-100 d-flex align-items-center">
                    <label class="container">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p class="new-expense-label-text">
                        Mark expense as Cost Of Goods Sold to associate it with the costs
                        required to deliver your service to clients.
                    </p>
                </div>
                <p class="new-expense-settings-green mt-4 mb-1">Currency</p>
                <select class="new-expense-currency">
                    <option>USD - US dollar</option>
                    <option>USD - US dollar</option>
                    <option>USD - US dollar</option>
                </select>
                <div class="w-100 d-flex align-items-center">
                    <label class="container">
                        <input type="checkbox">
                        <span class="checkmark" id="make-recurring-toggle"></span>
                    </label>
                    <p class="new-expense-label-text new-expense-settings-green">
                        Make Recurring
                    </p>
                </div>
                <div id="make-recurring">
                    <div class="new-expense-selects">
                        <div class="next-expense-data">
                            <h1 class="next-expense-data-title">Next expense date</h1>
                            <input type="date">
                            <img class="change-placeholder-icon" src="{{ asset('assets/img/expenses/expense-calendar.png') }}">
                        </div>
                        <div class="next-expense-data">
                            <h1 class="next-expense-data-title">How often?</h1>
                            <select>
                                <option>Monthly</option>
                                <option>Anniversary</option>
                            </select>
                        </div>
                    </div>
                    <h1 class="next-expense-data-title">How many?</h1>
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <label class="container">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <p class="new-expense-label-text">Infinite</p>
                        </div>
                        <div class="ml-5 d-flex align-items-center">
                            <label class="container">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <input class="new-expense-small-input ml-2" type="text" placeholder="0">
                            <p class="new-expense-label-text">Remaining</p>
                        </div>
                    </div>
                    <p class="new-expense-created">An expense will be created every month starting Today.</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('extra-scripts')
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>
@endsection

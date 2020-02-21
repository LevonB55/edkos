@extends('frontend.platform.main')

@section('title', 'Time Tracking Review')
@section('sidebarClass', 'back-color-aside')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/ds-user-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-clients.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-invoices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ds-time-tracking.css') }}">
@endsection

@section('content')
    <main class="clients invoices">
        <div class="dashboard-header">
            <h1 class="dashboard-clients-title">Time Tracking</h1>
            <div class="clients-btns">
                <a class="new-clients-btn" href="ds-estimates-template.html">NEW INVOICE</a>
            </div>
            <div class="dashboard-form-mobile">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <div class="dashboard-clients time-traking">
            <div class="block-timing">
                <div class="invoices-first-item">
                    <div class="invoice-item timeing-review">
                        <a class="image-upload" href="ds-estimates-template.html">
                            <label for="file-input" class="d-flex justify-content-center">
                                <img src="{{ asset('assets/img/add.svg') }}">
                                <h4 class="add-new-client">Create New Invoice</h4>
                            </label>
                        </a>
                    </div>
                </div>
                <a class="invoices-item-click" href="ds-time-tracking.html">
                    <div class="invoices-item invoices-disable-item">
                        <div class="invoices-item-content">
                            <img src="{{ asset('assets/img/tracking/tracking.png') }}">
                            <p class="invoices-item-content-p">Track</p>
                        </div>
                    </div>
                </a>
                <a class="invoices-item-click">
                    <div class="invoices-item">
                        <div class="invoices-item-content">
                            <img src="{{ asset('assets/img/tracking/review.png') }}">
                            <p class="invoices-item-content-p">Review</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="day-block">
                <div class="calendar-tracking">
                    <div class="left-right-time">
                        <a><img src="{{ asset('assets/img/tracking/left.png') }}"></a>
                        <a class="today">October</a>
                        <a><img src="{{ asset('assets/img/tracking/right.png') }}"></a>
                    </div>
                </div>
                <div class="team-members">
                    <div class="team-members-left">
                        <a class="team-members-left-btn team-members-opacity del-after team-members-left-btn-1"><img src="{{ asset('assets/img/tracking/group.png') }}">All Team Members</a>
                        <a class="team-members-left-btn team-members-left-btn-2"><span>LS</span></a>
                        <a class="team-members-left-btn team-members-opacity del-after"><img src="{{ asset('assets/img/tracking/add.png') }}">Invite Your Team Members</a>
                    </div>
                    <div class="team-members-right team-members-right-1">
                        <div class="members-first-line">
                            <span class="members-name">Lia Smith</span>
                            <span class="members-time">16h 40m</span>
                        </div>
                        <div class="members-second-line">
                            <span class="members-name">Client Name  -  8h 15m</span>
                            <div class="progress mt-2">
                                <div class="progress-bar members-progress-bar-1" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="members-second-line">
                            <span class="members-name">Client Name  -  4h 25m</span>
                            <div class="progress mt-2">
                                <div class="progress-bar members-progress-bar-2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="members-second-line">
                            <span class="members-name">Client Name  -  1h 50m</span>
                            <div class="progress mt-2">
                                <div class="progress-bar members-progress-bar-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="members-second-line">
                            <span class="members-name">Client Name  -  2h 10m</span>
                            <div class="progress mt-2">
                                <div class="progress-bar members-progress-bar-4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="team-members-right team-members-right-2">
                        <div class="members-first-line">
                            <span class="members-name">All Team Members</span>
                            <span class="members-time">16h 40m</span>
                        </div>
                        <div class="members-second-line">
                            <span class="members-name">Client Name  -  8h 15m</span>
                            <div class="progress mt-2">
                                <div class="progress-bar members-progress-bar-1" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="members-second-line">
                            <span class="members-name">Client Name  -  1h 50m</span>
                            <div class="progress mt-2">
                                <div class="progress-bar members-progress-bar-3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-inner-search">
                    <div class="search-table">
                        <button class="search-table-button"><img src="{{ asset('assets/img/search.png') }}"></button>
                        <input class="search-table-input" placeholder="Search by client name, project name or service name">
                    </div>
                </div>
                <div class="open-new-client">
                    <div class="open-new-client-first-row">
                        <input placeholder="Add Client">
                        <input placeholder="Add Project">
                        <input placeholder="Add Service">
                        <input placeholder="Add Time">
                    </div>
                    <div class="open-new-client-second-row">
                        <input placeholder="Add Description">
                        <a class="open-new-client-green">
                            <img src="{{ asset('assets/img/tracking/chack.png') }}">
                        </a>
                        <a class="open-new-client-gray">
                            <img src="{{ asset('assets/img/tracking/close.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="week-block">
                <div class="calendar-tracking">
                    <div class="left-right-time">
                        <a><img src="{{ asset('assets/img/tracking/left.png') }}"></a>
                        <a class="today">This Week</a>
                        <a><img src="{{ asset('assets/img/tracking/right.png') }}"></a>
                    </div>
                </div>
                <div class="open-new-client open-new-client-week">
                    <div class="open-new-client-first-row">
                        <input placeholder="Add Client">
                        <input placeholder="Add Project">
                        <input placeholder="Add Service">
                        <input placeholder="Add Time">
                    </div>
                    <div class="open-new-client-second-row">
                        <input placeholder="Add Description">
                        <a class="open-new-client-green">
                            <img src="{{ asset('assets/img/tracking/chack.png') }}">
                        </a>
                        <a class="open-new-client-gray">
                            <img src="{{ asset('assets/img/tracking/close.png') }}">
                        </a>
                    </div>
                </div>
            </div>

            <div class="table-clients pt-1">
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
                            <th>Client</th>
                            <th>Project</th>
                            <th>Service</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th class="part track-td">Track</th>
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
                            <td><button class="tbn-unbilled btn-tables">Unbilled</button></td>
                            <td>David Mong</td>
                            <td>Project</td>
                            <td>Service</td>
                            <td>A Description</td>
                            <td>00:30</td>
                            <td class="part track-hover">
                                <img class="track-act" src="{{ asset('assets/img/tracking/track.png') }}">
                                <img class="track-hov" src="{{ asset('assets/img/tracking/track-hover.png') }}">
                            </td>
                            <td class="last">
                                <img src="{{ asset('assets/img/dashboard/edit.png') }}">
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
                            <td><button class="btn-billed btn-tables">Billed</button></td>
                            <td>Sasha Wain</td>
                            <td>Project</td>
                            <td>Service</td>
                            <td>A Description</td>
                            <td>00:30</td>
                            <td class="part track-hover">
                                <img class="track-act" src="{{ asset('assets/img/tracking/track.png') }}">
                                <img class="track-hov" src="{{ asset('assets/img/tracking/track-hover.png') }}">
                            </td>
                            <td class="last">
                                <img src="{{ asset('assets/img/dashboard/edit.png') }}">
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
                            <td><button class="btn-non-billable  btn-tables">Non-Billable</button></td>
                            <td>Tom Smith</td>
                            <td>Project</td>
                            <td>Service</td>
                            <td>A Description</td>
                            <td>00:30</td>
                            <td class="part track-hover">
                                <img class="track-act" src="{{ asset('assets/img/tracking/track.png') }}">
                                <img class="track-hov" src="{{ asset('assets/img/tracking/track-hover.png') }}">
                            </td>
                            <td class="last">
                                <img src="{{ asset('assets/img/dashboard/edit.png') }}">
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
                            <td><button class="tbn-unbilled btn-tables">Unbilled</button></td>
                            <td>David Mong</td>
                            <td>Project</td>
                            <td>Service</td>
                            <td>A Description</td>
                            <td>00:30</td>
                            <td class="part track-hover">
                                <img class="track-act" src="{{ asset('assets/img/tracking/track.png') }}">
                                <img class="track-hov" src="{{ asset('assets/img/tracking/track-hover.png') }}">
                            </td>
                            <td class="last">
                                <img src="{{ asset('assets/img/dashboard/edit.png') }}">
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
                            <td><button class="tbn-unbilled btn-tables">Unbilled</button></td>
                            <td>David Mong</td>
                            <td>Project</td>
                            <td>Service</td>
                            <td>A Description</td>
                            <td>00:30</td>
                            <td class="part track-hover">
                                <img class="track-act" src="{{ asset('assets/img/tracking/track.png') }}">
                                <img class="track-hov" src="{{ asset('assets/img/tracking/track-hover.png') }}">
                            </td>
                            <td class="last">
                                <img src="{{ asset('assets/img/dashboard/edit.png') }}">
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
                            <td><button class="btn-non-billable  btn-tables">Non-Billable</button></td>
                            <td>David Mong</td>
                            <td>Project</td>
                            <td>Service</td>
                            <td>A Description</td>
                            <td>00:30</td>
                            <td class="part track-hover">
                                <img class="track-act" src="{{ asset('assets/img/tracking/track.png') }}">
                                <img class="track-hov" src="{{ asset('assets/img/tracking/track-hover.png') }}">
                            </td>
                            <td class="last">
                                <img src="{{ asset('assets/img/dashboard/edit.png') }}">
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
                            <td><button class="btn-billed btn-tables">Billed</button></td>
                            <td>David Mong</td>
                            <td>Project</td>
                            <td>Service</td>
                            <td>A Description</td>
                            <td>00:30</td>
                            <td class="part track-hover">
                                <img class="track-act" src="{{ asset('assets/img/tracking/track.png') }}">
                                <img class="track-hov" src="{{ asset('assets/img/tracking/track-hover.png') }}">
                            </td>
                            <td class="last">
                                <img src="{{ asset('assets/img/dashboard/edit.png') }}">
                                <img src="{{ asset('assets/img/dashboard/delete.png') }}">
                            </td>
                        </tr>
                        <tr class="last-block">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="hide-sometime"></td>
                            <td></td>
                            <td>Total Worked: 04:30</td>
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
    <div class="fixed-tracker">
        <div class="fixed-tracker-header">
            <p class="fixed-tracker-name">Client Name</p>
            <div class="d-block">
                <img class="up-down-img fixed-tracker-up" src="{{ asset('assets/img/tracking/up.png') }}">
                <img class="up-down-img fixed-tracker-down" src="{{ asset('assets/img/tracking/down.png') }}">
            </div>
        </div>
        <div class="fixed-tracker-timer">
            <img src="{{ asset('assets/img/tracking/clocks.png') }}">
            <div>
                <p class="fixed-tracker-timer-title">Total worked</p>
                <p class="fixed-tracker-timer-time">04 : 30 : 26</p>
            </div>
            <div class="timer-close-icon">
                <img src="{{ asset('assets/img/tracking/close-white.png') }}">
            </div>
        </div>
        <div class="fixed-show-hide">
            <div class="fixed-tracker-stop">
                <div class="fixed-tracker-stop-img">
                    <img src="{{ asset('assets/img/tracking/stop.png') }}">
                </div>
                <div class="fixed-tracker-stop-text">
                    Save And Change Project
                </div>
            </div>
            <div class="fixed-tracker-content">
                <div class="fixed-tracker-content-input-blocks">
                    <input placeholder="Client Name">
                    <input placeholder="Project">
                    <input placeholder="Service">
                    <input placeholder="Description">
                    <label class="container mt-5">
                        <input type="checkbox" placeholder="Billable">
                        <span class="checkmark">Billable</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-tracker-2">
            <div class="fixed-tracker-timer">
                <img src="{{ asset('assets/img/tracking/clocks.png') }}">
                <div>
                    <p class="fixed-tracker-timer-title">Total worked</p>
                    <p class="fixed-tracker-timer-time">00 : 00 : 00</p>
                </div>
                <div class="continue-up-down">
                    <img class="up-down-img fixed-tracker-up" src="{{ asset('assets/img/tracking/up.png') }}">
                    <img class="up-down-img fixed-tracker-down" src="{{ asset('assets/img/tracking/down.png') }}">
                </div>
            </div>
            <div class="fixed-show-hide">
                <div class="fixed-tracker-stop">
                    <div class="fixed-tracker-stop-img">
                        <img src="{{ asset('assets/img/tracking/stop.png') }}">
                    </div>
                    <div class="fixed-tracker-stop-text">
                        Continue
                    </div>
                </div>
                <div class="fixed-tracker-content">
                    <div class="fixed-tracker-content-input-blocks">
                        <input placeholder="Client Name">
                        <input placeholder="Project">
                        <input placeholder="Service">
                        <input placeholder="Description">
                        <label class="container mt-3">
                            <input type="checkbox" placeholder="Billable">
                            <span class="checkmark">Billable</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
@endsection

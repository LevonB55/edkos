<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends FrontendController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function companyProfile()
    {
        return view('frontend.dashboard.company-profile');
    }

    public function showServices()
    {
        return view('frontend.dashboard.services');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function onlinePayment()
    {
        return view('frontend.dashboard.online-payment');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function banks()
    {
        return view('frontend.dashboard.banks');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function billingUpgrade()
    {
        return view('frontend.dashboard.billing-upgrade');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userProfile()
    {
        return view('frontend.dashboard.user-profile');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function clients()
    {
        return view('frontend.dashboard.clients');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function expenses()
    {
        return view('frontend.dashboard.expenses');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function estimates()
    {
        return view('frontend.dashboard.estimates');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tracking()
    {
        return view('frontend.dashboard.tracking');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects()
    {
        return view('frontend.dashboard.projects');
    }
}

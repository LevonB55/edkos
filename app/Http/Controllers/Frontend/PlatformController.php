<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;

class PlatformController extends FrontendController
{
    public function showDashboard()
    {
        return view('frontend.platform.dashboard');
    }

    public function showServices()
    {
        return view('frontend.platform.services');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function onlinePayment()
    {
        return view('frontend.platform.online-payment');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function banks()
    {
        return view('frontend.platform.banks');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function billingUpgrade()
    {
        return view('frontend.platform.billing-upgrade');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function clients()
    {
        return view('frontend.platform.clients');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function expenses()
    {
        return view('frontend.platform.expenses');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function estimates()
    {
        return view('frontend.platform.estimates');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tracking()
    {
        return view('frontend.platform.tracking');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects()
    {
        return view('frontend.platform.projects');
    }
}

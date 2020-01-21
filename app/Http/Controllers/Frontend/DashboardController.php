<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;

class DashboardController extends FrontendController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function companyProfile()
    {
        return view('frontend.dashboard.company-profile');
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
        $user = Auth::user();
        return view('frontend.dashboard.user-profile', compact('user'));
    }
    public function userProfileUpdate(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email',
            'new_email' => 'same:confirm_new_email|unique:users,email,'.$user->id,
            'confirm_new_email' => '',
            'new_password' => 'same:confirm_new_password',
            'confirm_new_password' => ''
        ]);

        $user               = User::find($user->id);
        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        // to update email
        if ($request->new_email != '') {
            $user->email    = $request->new_email;
        }
        if ($request->new_password != '') {
            $user->password       = Hash::make($request->new_password);
        }
        $user->save();

        Session::flash('success', '<strong>Success!</strong> You account has been successfully updated.');

        return view('frontend.dashboard.user-profile', compact('user'));
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
    public function invoices()
    {
        return view('frontend.dashboard.invoices');
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

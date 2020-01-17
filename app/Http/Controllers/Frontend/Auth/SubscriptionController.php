<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Requests\StoreProfile;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function registerProfile()
    {
        return view('frontend.auth.profile');
    }

    public function storeProfile(StoreProfile $request)
    {
        auth()->user()->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'company' => $request->input('company'),
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'street' => $request->input('street'),
            'postal_code' => $request->input('postal_code'),
            'phone' => $request->input('phone'),
            'business_type' => $request->input('business_type') ? true : null,
        ]);

        return back();
    }
}

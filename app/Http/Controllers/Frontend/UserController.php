<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Support\Facades\Storage;

class UserController  extends FrontendController
{
    public function userProfileUpdate(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'first_name'         => 'required',
            'last_name'          => 'required',
            'email'              => 'same:email_confirmation|unique:users,email,'.$user->id,
            'email_confirmation' => '',
            'password'           => 'same:confirm_password',
            'confirm_password'   => ''
        ]);

        $user               = User::find($user->id);
        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        // to update email
        if ($request->email != '') {
            $user->email    = $request->email;
        }
        if ($request->password != '') {
            $user->password     = Hash::make($request->password);
        }
        $user->save();

    	if($request->hasFile('image')){
    		$file = $request->file('image');
			$name = uniqid().'.'.strtolower($file->getClientOriginalExtension());
			$url  = $request->file('image')->storeAs(
				'public/profile-image', $name
            );
            $user->image()->create(['url' => $url]);
    	}


        Session::flash('success', '<strong>Success!</strong> You account has been successfully updated.');

        return view('frontend.dashboard.user-profile', compact('user'));
    }


    
    public function companyProfileUpdate(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'company'        => 'required',
            'business_phone' => 'required',
            'mobile_phone'   => 'required',
            'format_date'    => 'required',
            'currency'       => 'required',
            'standart_rate'  => 'required',
            'vat_number'     => 'required',
            'address'        => 'required',
            'country'        => 'required',
            'city'           => 'required',
            'postal_code'    => 'required',
            'bank_account'   => 'required'
        ]);

        $user                 = User::find($user->id);
        $user->company        = $request->company;
        $user->business_phone = $request->business_phone;
        $user->mobile_phone   = $request->mobile_phone;
        $user->format_date    = $request->format_date;
        $user->currency       = $request->currency;
        $user->standart_rate  = $request->standart_rate;
        $user->vat_number     = $request->vat_number;
        $user->address        = $request->address;
        $user->country        = $request->country;
        $user->city           = $request->city;
        $user->postal_code    = $request->postal_code;
        $user->bank_account   = $request->bank_account;        
        $user->save();

        Session::flash('success', '<strong>Success!</strong> Company has been successfully updated.');

        return view('frontend.dashboard.company-profile', compact('user'));
    }



}

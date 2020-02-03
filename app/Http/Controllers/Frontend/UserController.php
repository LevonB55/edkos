<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserProfile;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Support\Facades\Storage;
use Image;

class UserController  extends FrontendController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUserProfile()
    {
        $user = Auth::user();
        return view('frontend.dashboard.users.user-profile', compact('user'));
    }

    public function userProfileUpdate(UpdateUserProfile $request)
    {
        $validated = $request->validated();
        if($request->ajax()) {
            $url = $email = '';
            $user = Auth::user();
            $user->first_name = $validated['first_name'];
            $user->last_name  = $validated['last_name'];

            if ($request->has('email')) {
                $email = $validated['email'];
                $user->email = $email;
            }
            if ($request->has('password')) {
                $user->password = Hash::make($validated['password']);
            }
            $user->save();

            if($request->hasFile('image')){
                $file = $request->file('image');
                $name = uniqid().'.'.strtolower($file->getClientOriginalExtension());
                $url = 'public/profile-image/' . $name;
                if($user->image()->first() && storage_path($user->image()->first()->url)) {
                    Storage::delete($user->image()->first()->url);
                }

                Image::make($file)
                    ->resize(300, 300)
                    ->save(storage_path('app/' . $url));

                $user->image()->updateOrCreate(
                    ['imageable_id' => $user->id],
                    ['url' => $url]
                );
            }

            return response()->json(['image' => $url, 'email' => $email]);
        }

        return abort(404);
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

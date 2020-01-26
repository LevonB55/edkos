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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'same:email_confirmation|unique:users,email,'.$user->id,
            'email_confirmation' => '',
            'password' => 'same:confirm_password',
            'confirm_password' => ''
        ]);

        $user               = User::find($user->id);
        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        // to update email
        if ($request->email != '') {
            $user->email    = $request->email;
        }
        if ($request->password != '') {
            $user->password       = Hash::make($request->password);
        }
        $user->save();

    	if($request->hasFile('image')){
    		$file     = $request->file('image');
			$name     = uniqid().'.'.strtolower($file->getClientOriginalExtension());
			$url = $request->file('image')->storeAs(
				'public/profile-image', $name
            );
            $user->image()->create(['url' => $url]);
    	}


        Session::flash('success', '<strong>Success!</strong> You account has been successfully updated.');

        return view('frontend.dashboard.user-profile', compact('user'));
    }
}

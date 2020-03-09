<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\UpdateCompanyProfile;
use App\Http\Requests\UpdateUserProfile;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use File;
use Illuminate\Support\Facades\Storage;
use Image;

class  UserController  extends FrontendController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $user = Auth::user();
        return view('frontend.platform.users.show', compact('user'));
    }

    public function edit(UpdateUserProfile $request)
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
                $url = 'public/profile-images/' . $name;
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

            return response()->json([
                'name' => $user->full_name,
                'image' => $url,
                'email' => $email
            ]);
        }

        return abort(404);
    }
}

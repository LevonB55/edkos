<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\UpdateCompany;
use App\Models\Company;
use App\Models\Country;

class CompanyController extends FrontendController
{
    public function show()
    {
        $countries = Country::select('id', 'name')->get();
        $user = auth()->user()->with('company')->first();

        return view('frontend.platform.users.company', compact('user', 'countries'));
    }

    public function edit(UpdateCompany $request)
    {
        Company::updateOrCreate(['user_id' => auth()->id()], $request->validated());

        return back()->with("success", "<strong>Success!</strong> Company profile has been successfully updated!");
    }
}

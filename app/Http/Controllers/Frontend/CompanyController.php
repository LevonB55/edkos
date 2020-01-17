<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends FrontendController
{

    /**
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
//        dd($user = Auth::user());
        return view('company.dashboard');
    }

    public function clients(){
        return view('company.clients');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function helpCenter(){
        return view('help-center');
    }

    public function plansPricing(){
        return view('plans-pricing');
    }
}

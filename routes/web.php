<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes(['verify' => true]);
//
//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/help-center', 'HomeController@helpCenter')->name('help-center');
//Route::get('/plans-pricing', 'HomeController@plansPricing')->name('help-center');
//Route::get('/dashboard', 'CompanyController@dashboard')->name('home')->middleware('verified');
//Route::get('/clients', 'CompanyController@clients')->name('home');
//
//
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

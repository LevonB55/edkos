<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
| Here is where you can register frontend routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//Basic Routes
Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/pricing', 'PageController@pricing')->name('pricing');
Route::get('/help', 'PageController@help')->name('help');

//Dashboard Routes
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/invoices/templates', 'InvoiceController@showTemplates')->name('invoices.templates');
    Route::resource('invoices', 'InvoiceController')->except('destroy');

    Route::get('company-profile', 'UserController@showCompanyProfile')->name('company-profile');
    Route::put('company-profile', 'UserController@updateCompanyProfile')->name('company-profile.update');
    Route::get('services', 'DashboardController@showServices')->name('services');
    Route::get('online-payment', 'DashboardController@onlinePayment')->name('online-payment');
    Route::get('banks', 'DashboardController@banks')->name('banks');
    Route::get('billing-upgrade', 'DashboardController@billingUpgrade')->name('billing-upgrade');
    Route::get('user-profile', 'UserController@showUserProfile')->name('user-profile');
    Route::post('user-profile', 'UserController@userProfileUpdate')->name('user-profile.update');
    Route::get('clients', 'DashboardController@clients')->name('clients');
    Route::get('expenses', 'DashboardController@expenses')->name('expenses');
    Route::get('estimates', 'DashboardController@estimates')->name('estimates');
    Route::get('tracking', 'DashboardController@tracking')->name('tracking');
    Route::get('projects', 'DashboardController@projects')->name('projects');
});

//Authentication routes
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//Route::get('registration/profile', 'Auth\SubscriptionController@registerProfile')->name('register-profile');
//Route::post('registration/profile', 'Auth\SubscriptionController@storeProfile')->name('store-profile');


Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

//Basic views
Route::view('/registration-3', 'frontend.basic.registration-3');
Route::view('/registration-4', 'frontend.basic.registration-4');
Route::view('/registration-5', 'frontend.basic.registration-5');

//Dashboard views
Route::view('/dashboard/billing-upgrade-monthly', 'frontend.dashboard.billing-upgrade-monthly');
Route::view('/dashboard/billing-upgrade-monthly-pay', 'frontend.dashboard.billing-upgrade-monthly-pay');
Route::view('/dashboard/billing-upgrade-yearly', 'frontend.dashboard.billing-upgrade-yearly');
Route::view('/dashboard/billing-upgrade-yearly-pay', 'frontend.dashboard.billing-upgrade-yearly-pay');
Route::view('/dashboard/estimates-template', 'frontend.dashboard.estimates-template');
Route::view('/dashboard/estimates-customize', 'frontend.dashboard.estimates-customize');
Route::view('/dashboard/recurring-expenses', 'frontend.dashboard.recurring-expenses');
Route::view('/dashboard/new-expense', 'frontend.dashboard.new-expense');
Route::view('/dashboard/recurring-invoices', 'frontend.dashboard.recurring-invoices');
Route::view('/dashboard/new-recurring-invoices', 'frontend.dashboard.new-recurring-invoices');
Route::view('/dashboard/new-project', 'frontend.dashboard.new-project');
Route::view('/dashboard/proposals', 'frontend.dashboard.proposals');
Route::view('/dashboard/proposals-template', 'frontend.dashboard.proposals-template');
Route::view('/dashboard/tracking-review', 'frontend.dashboard.tracking-review');
Route::view('/dashboard/add-new-business', 'frontend.dashboard.add-new-business');
Route::view('/dashboard/services-2', 'frontend.dashboard.services-2');


//Artisan commands
Route::get('/config-clear', function () {
    $exitCode = \Illuminate\Support\Facades\Artisan::call('config:clear');
});

Route::get('/cache-clear', function () {
    $exitCode = \Illuminate\Support\Facades\Artisan::call('cache:clear');
});

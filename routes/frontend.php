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

//Platform Routes
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', 'PlatformController@showDashboard')->name('user-dashboard');
    Route::get('user-profile', 'UserController@show')->name('user.show');
    Route::post('user-profile', 'UserController@edit')->name('user.edit');
    Route::get('company-profile', 'CompanyController@show')->name('company.show');
    Route::put('company-profile', 'CompanyController@edit')->name('company.edit');
    Route::get('invoices/templates', 'InvoiceController@showTemplates')->name('invoices.templates');
    Route::put('invoices/customize', 'InvoiceController@customizeInvoice')->name('invoices.customize');
    Route::resource('invoices', 'InvoiceController')->except('destroy');

    Route::get('services', 'PlatformController@showServices')->name('services');
    Route::get('online-payment', 'PlatformController@onlinePayment')->name('online-payment');
    Route::get('banks', 'PlatformController@banks')->name('banks');
    Route::get('billing-upgrade', 'PlatformController@billingUpgrade')->name('billing-upgrade');
    Route::get('clients', 'PlatformController@clients')->name('clients');
    Route::get('expenses', 'PlatformController@expenses')->name('expenses');
    Route::get('estimates', 'PlatformController@estimates')->name('estimates');
    Route::get('tracking', 'PlatformController@tracking')->name('tracking');
    Route::get('projects', 'PlatformController@projects')->name('projects');
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

//Platform views
Route::view('/billing-upgrade-monthly', 'frontend.platform.billing-upgrade-monthly');
Route::view('/billing-upgrade-monthly-pay', 'frontend.platform.billing-upgrade-monthly-pay');
Route::view('/billing-upgrade-yearly', 'frontend.platform.billing-upgrade-yearly');
Route::view('/billing-upgrade-yearly-pay', 'frontend.platform.billing-upgrade-yearly-pay');
Route::view('/estimates-template', 'frontend.platform.estimates-template');
Route::view('/estimates-customize', 'frontend.platform.estimates-customize');
Route::view('/recurring-expenses', 'frontend.platform.recurring-expenses');
Route::view('/new-expense', 'frontend.platform.new-expense');
Route::view('/recurring-invoices', 'frontend.platform.recurring-invoices');
Route::view('/new-recurring-invoices', 'frontend.platform.new-recurring-invoices');
Route::view('/new-project', 'frontend.platform.new-project');
Route::view('/proposals', 'frontend.platform.proposals');
Route::view('/proposals-template', 'frontend.platform.proposals-template');
Route::view('/tracking-review', 'frontend.platform.tracking-review');
Route::view('/add-new-business', 'frontend.platform.add-new-business');
Route::view('/services-2', 'frontend.platform.services-2');


//Artisan commands
Route::get('/config-clear', function () {
    $exitCode = \Illuminate\Support\Facades\Artisan::call('config:clear');

    die('Config');
});

Route::get('/cache-clear', function () {
    $exitCode = \Illuminate\Support\Facades\Artisan::call('cache:clear');

    die('Cache');
});

Route::get('/view-clear', function () {
    $exitCode = \Illuminate\Support\Facades\Artisan::call('view:clear');

    die('View');
});

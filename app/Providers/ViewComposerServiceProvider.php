<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\Invoice;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.platform.partials._sidebar', function ($view) {
            $user = auth()->user();
            $userImage = null;
            if($image = $user->image()->first()) {
                $userImage = $image->url;
            }

            $view->with(compact('user', 'userImage'));
        });

        view()->composer('frontend.platform.main', function ($view) {
            $user = auth()->user();

            $view->with([
                'invoiceId' => $user->company->invoice_id,
                'invoiceColor' => $user->company->invoice_color
            ]);
        });

        view()->composer('frontend.platform.invoices.templates*', function ($view) {
            $user = auth()->user();

            $view->with([
                'user'  => $user,
                'invoiceNumber' => Invoice::generateInvoiceNumber(),
                'countries' => Country::select('id', 'name')->get()
            ]);
        });
    }
}

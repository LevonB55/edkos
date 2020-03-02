<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('frontend.platform.partials._sidebar', function ($view) {
            $user = auth()->user();
            $userImage = '';
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
                'templateLogo' => $user->company->image
            ]);
        });
    }
}

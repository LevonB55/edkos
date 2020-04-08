<?php

namespace App\Providers;

use App\Models\Company;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MacroServiceProvider extends ServiceProvider
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
        Str::macro('invoiceNumber', function ($number) {
            return str_pad((string)$number,6,"0", STR_PAD_LEFT);
        });

        Str::macro('daysLeft', function ($date) {
            return Carbon::parse($date)->diffInDays(Carbon::now());
        });

        Str::macro('convertDateFormat', function ($date, $format) {
            return Carbon::parse($date)->format(Company::getPHPDateFormats()[$format]);
        });
    }
}

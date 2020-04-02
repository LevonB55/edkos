<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public static function restructureCountries()
    {
        return self::select('id', 'name')
            ->get()
            ->mapToGroups(function($country) {
                return [
                    $country->id => ['name' => $country->name]
                ];
            });
    }
}

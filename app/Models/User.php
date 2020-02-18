<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const DATE_FORMAT = 'mm/dd/yyyy';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'company', 'business_phone', 'mobile_phone', 'date_format',
        'standard_rate', 'vat', 'street', 'city', 'state', 'country_id', 'zip', 'bank_account'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'date_format' => self::DATE_FORMAT
    ];

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function getDateFormats()
    {
        return [
          '1' => self::DATE_FORMAT,
          '2' => 'dd/mm/yyyy',
          '3' => 'yyyy-mm-dd'
        ];
    }
}

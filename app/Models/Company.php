<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    const DATE_FORMAT = 'mm/dd/yyyy';
    const INVOICE_TEMPLATE = 1;
    const INVOICE_COLOR = '#8DC63F';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'user_id', 'invoice_id', 'invoice_color', 'business_phone', 'mobile_phone', 'date_format',
        'standard_rate', 'vat', 'street', 'city', 'state', 'country_id', 'zip', 'bank_account'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'date_format'   => self::DATE_FORMAT,
        'invoice_id'    => self::INVOICE_TEMPLATE,
        'invoice_color' => self::INVOICE_COLOR
    ];

    /**
     * Get the user that owns the company.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the company's image.
     */
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

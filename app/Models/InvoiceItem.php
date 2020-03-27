<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'invoice_id', 'description', 'price', 'quantity', 'amount'
    ];

    public function getPriceAttribute($value)
    {
        return number_format($value,2);
    }

    public function getQuantityAttribute($value)
    {
        return number_format($value,2);
    }

    public function getAmountAttribute($value)
    {
        return number_format($value,2);
    }
}

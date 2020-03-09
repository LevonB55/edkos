<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    const DELETED = 0;
    const SEND = 1;
    const DRAFT = 2;
    const ARCHIVED = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'user_id', 'invoice_template_id', 'color', 'status'
    ];

    public static function generateInvoiceNumber()
    {
        $invoice = self::where('user_id', auth()->id())
            ->orderByDesc('id')
            ->limit(1)
            ->first();
        $invoiceNumber = 1;

        if($invoice) {
            $invoiceNumber = ++$invoice->number;
        }

        return $invoiceNumber;
    }
}

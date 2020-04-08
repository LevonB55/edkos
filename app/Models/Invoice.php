<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    const DELETED = 0;
    const SENT = 1;
    const DRAFT = 2;
    const ARCHIVED = 3;
    const VIEWED = 4;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'user_id', 'company', 'sender_phone', 'issue_date', 'due_date', 'date_format', 'sender_name', 'sender_email', 'sender_street',
        'sender_city', 'sender_state', 'sender_zip', 'sender_country', 'receiver_name', 'receiver_email', 'receiver_street',
        'receiver_city', 'receiver_state','receiver_zip', 'receiver_country', 'receiver_phone', 'subtotal', 'discount',
        'tax', 'total', 'notes', 'vat', 'bank_account', 'status', 'invoice_template_id', 'color', 'slug', 'viewed'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'subtotal' => 0
    ];

    /**
     * Get the items for the invoice.
     */
    public function invoice_items()
    {
        return $this->hasMany('App\Models\InvoiceItem');
    }

    /**
     * Get the invoice's image.
     */
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

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

        return \Str::invoiceNumber($invoiceNumber);
    }

    public function getSubtotalAttribute($value)
    {
        return number_format($value,2);
    }

    public function getDiscountAttribute($value)
    {
        return number_format($value,2);
    }

    public function getTaxAttribute($value)
    {
        return number_format($value,2);
    }

    public function getTotalAttribute($value)
    {
        return number_format($value,2);
    }

    public function setIssueDateAttribute($value)
    {
        $date = self::formatDate($value);
        $this->attributes['issue_date'] = date_format($date, 'Y-m-d');
    }

    public function setDueDateAttribute($value)
    {
        $date = self::formatDate($value);
        $this->attributes['due_date'] = date_format($date, 'Y-m-d');
    }

    public static function formatDate($value)
    {
        return date_create_from_format(Company::getPHPDateFormats()[auth()->user()->company->date_format], $value);
    }

    public static function statuses()
    {
        return [
            self::DELETED => 'deleted',
            self::SENT => 'sent',
            self::DRAFT => 'draft',
            self::ARCHIVED => 'archived',
            self::VIEWED => 'viewed'
        ];
    }
}

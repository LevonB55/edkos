<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceSent extends Mailable
{
    use Queueable, SerializesModels;

    private $invoice;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->invoice->sender_name . ' sent you an invoice (' . $this->invoice->number . ')')
                    ->from($this->invoice->sender_email)
                    ->to($this->invoice->receiver_email)
                    ->markdown('frontend.emails.invoice.invoice-sent')
                    ->with([
                        'sender_name' => $this->invoice->sender_name,
                        'invoice_number' => $this->invoice->number,
                        'total' => $this->invoice->total,
                        'due_date' => $this->invoice->due_date,
                        'slug' => $this->invoice->slug,
                        'receiver_email' => $this->invoice->receiver_email
                    ]);
    }
}

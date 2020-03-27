@component('mail::message')
    **{{ $sender_name }}** sent you an invoice ({{ $invoice_number }}) for **€{{ $total }}** that's due on **{{ $due_date }}.**

@component('mail::button', ['url' => config('app.url') . "/invoices/${slug}&email=${receiver_email}"])
View Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

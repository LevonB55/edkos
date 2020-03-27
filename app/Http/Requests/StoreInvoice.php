<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoice extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company' => 'nullable|string|max:255',
            'sender_phone' => 'nullable|string|max:255',
            'issue_date' => 'required|date',
            'due_date' => 'required|date|after_or_equal:issue_date',
            'sender.name' => 'required|string|max:255',
            'sender.email' => 'required|email|min:4|max:255',
            'sender.street' => 'nullable|string|max:255',
            'sender.city' => 'nullable|string|max:255',
            'sender.state' => 'nullable|string|max:255',
            'sender.zip' => 'nullable|string|max:255',
            'sender.country' => 'nullable|integer|max:300',
            'receiver.name' => 'required|string|max:255',
            'receiver.email' => 'required|email|min:4|max:255',
            'receiver.street' => 'nullable|string|max:255',
            'receiver.city' => 'nullable|string|max:255',
            'receiver.state' => 'nullable|string|max:255',
            'receiver.zip' => 'nullable|string|max:255',
            'receiver.country' => 'nullable|integer|max:300',
            'receiver.phone' => 'nullable|string|max:255',
            'subtotal' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'tax' => 'nullable|numeric',
            'total' => 'nullable|numeric',
            'notes' => 'nullable|string|max:1000',
            'vat' => 'nullable|string|max:255',
            'bank_account' => 'nullable|string|max:255'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'sender.name.required' => 'Sender name is required',
            'sender.email.required' => 'Sender email is required',
            'receiver.name.required' => 'Receiver name is required',
            'receiver.email.required' => 'Receiver email is required'
        ];
    }
}

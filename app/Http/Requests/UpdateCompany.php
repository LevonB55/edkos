<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompany extends FormRequest
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
            'name'           => 'nullable|min:2|max:255',
            'business_phone' => 'nullable|min:2|max:255',
            'mobile_phone'   => 'nullable|min:2|max:255',
            'date_format'    => 'required|integer|min:1|max:'.array_key_last(auth()->user()->company->getDateFormats()),
            'standard_rate'  => 'nullable|numeric|min:0|max:1000',
            'vat'            => 'nullable|numeric|min:0',
            'street'         => 'nullable|min:2|max:255',
            'city'           => 'nullable|min:2|max:255',
            'state'          => 'nullable|min:2|max:255',
            'country_id'     => 'nullable|integer|min:1',
            'zip'            => 'nullable|min:2|max:255',
            'bank_account'   => 'nullable|min:2|max:255'
        ];
    }
}

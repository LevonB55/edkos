<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfile extends FormRequest
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
            'first_name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'company' => 'nullable|string|min:2|max:255',
            'country' => 'nullable|string|min:2|max:255',
            'state' => 'nullable|string|min:2|max:255',
            'city' => 'nullable|string|min:2|max:255',
            'street' => 'nullable|string|min:2|max:255',
            'postal_code' => 'nullable|string|min:2|max:255',
            'phone' => 'required|string|min:2|max:255'
        ];
    }
}

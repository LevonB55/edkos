<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfile extends FormRequest
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
            'first_name'    => 'required|min:2|max:255',
            'last_name'     => 'required|min:2|max:255',
            'image'         => 'nullable|image',
            'email'         => 'sometimes|required|email|confirmed|unique:users,email,' . auth()->id(),
            'password'      => 'sometimes|required|min:8|max:255|confirmed'
        ];
    }
}

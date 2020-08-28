<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email' => 'required|email|nullable|exists:admins',
            'password' => 'required|nullable',

        ];
    }


    public function messages()
    {
        return [
            'email.exists' => 'You are not in our database',
            'email.required' => 'Email is Required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is Required'
        ];
    }

}

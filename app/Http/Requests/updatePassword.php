<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatePassword extends FormRequest
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
            'password' => 'required|string|confirmed|min:6|max:255',
            'password_confirmation' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'max'               => trans(':attribute can not be greater than :max chars'),
            'min'               => trans(':attribute can not be less than :min chars'),
            'password.required' => trans('Password is required'),
            'password.confirmed' => trans('auth.validation.confirmed'),


        ];
    }
    public function attributes()
    {
        return [
            'password'      => trans("password"),
            'password_confirmation'          => trans("Password Confirmation"),
        ];
    }
}

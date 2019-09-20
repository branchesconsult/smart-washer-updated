<?php

namespace App\Http\Requests\Frontend\Auth;

use Arcanedev\Support\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class RegisterRequest.
 */
class RegisterRequest extends FormRequest
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
            'full_name' => 'required|max:100',
            'email' => ['required', 'email', 'max:100', Rule::unique('users')],
            'phone' => 'required|digits_between:1,15',
            'password' => 'required|min:4',
            'password_confirmation' => 'required|min:6',
            //'is_term_accept' => 'sometimes',
            'profile_pic' => 'sometimes|mimes:jpeg,png,jpg',
            //'g-recaptcha-response' => 'required_if:captcha_status,true|captcha',
            'device_token' => 'sometimes',
            'agent_info' => 'sometimes'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            //'g-recaptcha-response.required_if' => trans('validation.required', ['attribute' => 'captcha']),
            'full_name.required' => trans('auth.register.full_name.required'),
            'profile_pic.mimes' => trans('auth.register.profile_pic.mimes'),
            'email.required' => trans('auth.register.email.required'),
            'phone.required' => trans('auth.register.phone.required'),
            'password.required' => trans('auth.register.password.required'),
            'password_confirmation.requierd' => trans('auth.register.password_confirmation.required'),
            'device_token.required' => trans('auth.register.device_info.required'),
            'agent_info.required' => trans('auth.register.agnet_info.required'),
            'email.unique' => trans('auth.register.email.unique'),
            //'password.regex' => 'Password must contain at least 1 uppercase letter and 1 number.'
        ];
    }
}

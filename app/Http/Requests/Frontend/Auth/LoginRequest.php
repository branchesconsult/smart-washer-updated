<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:4',
            'device_token' => 'sometimes',
            'agent_info' => 'sometimes'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => trans('auth.login.email.required'),
            'password.required' => trans('auth.login.password.required'),
            'device_token.required' => trans('auth.register.device_info.required'),
            'agent_info.required' => trans('auth.register.agnet_info.required'),
        ];
    }
}

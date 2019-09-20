<?php

namespace App\Http\Requests\Frontend\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SocialLoginRequest extends FormRequest
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
            'email' => ['sometimes', 'email'],
            'phone' => 'sometimes|digits_between:1,15',
            //'is_term_accept' => 'sometimes',
            'profile_pic' => 'sometimes|url',
            //'g-recaptcha-response' => 'required_if:captcha_status,true|captcha',
            'device_token' => 'sometimes',
            'agent_info' => 'sometimes',
            'fb_id' => 'required'
        ];
    }
}

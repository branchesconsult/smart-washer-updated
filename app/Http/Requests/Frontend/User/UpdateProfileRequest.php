<?php

namespace App\Http\Requests\Frontend\User;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

/**
 * Class UpdateProfileRequest.
 */
class UpdateProfileRequest extends Request
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
            'full_name' => 'required|max:255',
            //'email'      => ['sometimes', 'required', 'email', 'max:255', Rule::unique('users')],
            'phone' => 'required',
            'profile_pic' => 'sometimes|mimes:jpeg,png,jpg',
        ];
    }

    public function messages()
    {
        return [

            'first_name.required' => trans('profile.profile.first_name.required'),
            'last_name.required' => trans('profile.profile.last_name.required'),
            //'email.required' => trans('profile.profile.email.required'),
            'phone.required' => trans('profile.profile.state_id.required')
        ];
    }
}

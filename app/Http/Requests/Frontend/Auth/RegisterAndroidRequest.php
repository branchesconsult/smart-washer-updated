<?php

namespace App\Http\Requests\Frontend\Auth;

use Arcanedev\Support\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class RegisterRequest.
 */
class RegisterAndroidRequest extends FormRequest
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

        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [

        ];
    }
}

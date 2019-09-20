<?php

namespace App\Http\Requests\Backend\Locations;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLocationsRequest extends FormRequest
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
            'name' => 'required',
            'currency_code'   => 'required',
        ];
    }

    /**
     * Show the Messages for rules above.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Country field is required.',
            'currency_code.required'   => 'Currency Code field is required.',
        ];
    }
}

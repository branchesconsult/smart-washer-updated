<?php

namespace App\Http\Requests\Frontend\User;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'building_name' => 'required',
            'address' => 'required|string',
            'address2' => 'sometimes|string',
            'city' => 'sometimes|string',
            'district' => 'sometimes|string',
            'postal_code' => 'sometimes|string',
            'phone' => 'sometimes|string',
            'lat' => 'required',
            'lng' => 'required',
        ];
    }

    public function messages()
    {
        return [

            'building_name.required' => trans('address.address.building_name.required'),
            'address.required' => trans('address.address.address.required'),
            'address2.required' => trans('address.address.address2.required'),
            'city.required' => trans('address.address.city.required'),
            'district.required' => trans('address.address.district.required'),
            'postal_code.required' => trans('address.address.postal_code.required'),
            'phone.required' => trans('address.address.phone.required'),
            'lat.required' => trans('address.address.lat.required'),
            'lng.required' => trans('address.address.lng.required')
        ];
    }
}

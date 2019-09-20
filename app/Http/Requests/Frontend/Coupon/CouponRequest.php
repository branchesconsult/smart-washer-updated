<?php

namespace App\Http\Requests\Frontend\Coupon;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'coupon_code' => 'required',
            'price' => 'required|string'
        ];
    }
    public function messages()
    {
        return [

            'coupon_code.required' =>  trans('address.address.building_name.required'),
            'price.required'=> trans('address.address.address.required')



        ];
    }
}

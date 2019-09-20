<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class SkipOrderProcessRequest extends FormRequest
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
            'address' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'driver_id' => 'required|integer',
            'delivery_time' => 'required',
            'pickup_time' => 'required',
            'payment_method' => 'required|in:cod,pos',
            'user_comments' => 'sometimes',
            'coupon_id' => 'sometimes|integer'
        ];
    }
}

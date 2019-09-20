<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        $rules = [
            'products' => 'required|array',
            'products.*.id' => 'required|integer',
            'products.*.qty' => 'required|integer',
            'products.*.service_id' => 'required',
            'payment_method' => 'required|in:cod,paytabs,pos',
            'coupon_id' => 'sometimes|integer',
            'pickup_time' => 'required|date_format:"d-m-Y H:i"|required',
            'delivery_time' => 'required|date_format:"d-m-Y H:i"|required',
            'user_comments' => 'sometimes',
            'address' => 'required',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'driver_id' => 'sometimes|integer'
        ];


        if (!$this->request->get('products')) {
            for ($i = 1; $i < 2; $i++) {
                $rules['products.' . $i . '.qty'] = 'integer|required';
                $rules['products.' . $i . '.id'] = 'integer|required';
                $rules['products.' . $i . '.service_id'] = 'integer|required';
            }
        }
        return $rules;
    }
}

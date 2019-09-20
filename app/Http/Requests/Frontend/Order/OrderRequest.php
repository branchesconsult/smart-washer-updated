<?php

namespace App\Http\Requests\Frontend\Order;

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
        return [
            'products' => 'required',
            'payment_method' => 'required|string',
            'coupon_id' => 'required|integer',
            'pickup_time' => 'required|date',
            'delivery_time' => 'required|date',
            'user_comments' => 'required|string',
            'address' => 'required|string',
            'lat' => 'required',
            'lng' => 'required',
            'products[id][qty]' => 'required|integer',
            'products[id]' => 'required|integer',
            'products[id][service_id]' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [

            'products.required' => trans('order.order.products.required'),
            'payment_method.required' => trans('order.order.payment_method.required'),
            'coupon_id.required' => trans('order.order.coupon_id.required'),
            'pickup_time.required' => trans('order.order.pickup_time.required'),
            'delivery_time.required' => trans('order.order.delivery_time.required'),
            'user_comments.required' => trans('order.order.user_comments.required'),
            'address.required' => trans('order.order.address.required'),
            'lat.required' => trans('order.order.lat.required'),
            'lng.required' => trans('order.order.lng.required'),
            'products[id][qty].required' => trans('order.order.products[id][qty].required'),
            'products[id].required' => trans('order.order.products[id].required'),
            'products[id][service_id].required' => trans('order.order.products[id][service_id].required')


        ];
    }
}




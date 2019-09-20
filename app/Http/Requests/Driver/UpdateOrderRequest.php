<?php

namespace App\Http\Requests\Driver;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'order_id' => 'required|integer',
//            'pickup_time' => 'required|date_format:"Y-m-d H:i:s"',
//            'delivery_time' => 'required|date_format:"Y-m-d H:i:s"',
            'orderstatus_id' => 'required|in:1,2,3,4,5,6,7,8'
        ];
    }
}

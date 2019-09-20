<?php

namespace App\Http\Requests\Driver;

use Illuminate\Foundation\Http\FormRequest;

class InsertOrderDetailRequest extends FormRequest
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
            'product_id' => 'required|integer',
            'service_id' => 'required|integer',
            'qty' => 'required|integer',
            'paid_price' => 'required|numeric',
            'laundry_price' => 'required|numeric',
        ];
    }
}

<?php

namespace App\Http\Responses\Backend\PaymentMethod;

use Illuminate\Contracts\Support\Responsable;
use App\Models\Country\Country;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Country\Country
     */
    protected $PaymentMethod;

    /**
     * @param \App\Models\Country\Country $PaymentMethods
     */
    public function __construct($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
    }

    /**
     * toReponse.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        $country = Country::all();
        return view('backend.PaymentMethod.edit',compact('country'))
            ->with('PaymentMethod', $this->PaymentMethod);
    }
}

<?php

namespace App\Http\Responses\Backend\Location;

use Illuminate\Contracts\Support\Responsable;
use App\Models\Country\Country;
use App\Models\PaymentMethod\PaymentMethod;


class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Country\Country
     */
    protected $Location;

    /**
     * @param \App\Models\Country\Country $Locations
     */
    public function __construct($Location)
    {
        $this->Location = $Location;
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
        $payment_methods = PaymentMethod::all();
        return view('backend.Locations.edit',compact('country','payment_methods'))
            ->with('Location', $this->Location);
    }
}

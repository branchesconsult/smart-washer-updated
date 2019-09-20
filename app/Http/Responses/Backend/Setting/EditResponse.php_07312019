<?php

namespace App\Http\Responses\Backend\Setting;

use Illuminate\Contracts\Support\Responsable;
use App\Models\Locations\Location;

class EditResponse implements Responsable
{
    /**
     * @var \App\Models\Settings\Setting
     */
    protected $setting;

    /**
     * @param \App\Models\Settings\Setting $setting
     */
    public function __construct($setting)
    {
        $this->setting = $setting;
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
        $locations = Location::all();
        return view('backend.settings.edit',compact('locations'))
            ->withSetting($this->setting);
    }
}

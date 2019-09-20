<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Settings\Setting;
use App\Models\Country\Country;
use App\Models\Locations\Location;
use App\Models\ShopContact\ShopContact;
use App\Models\Translation\Translation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @resource Site settings
 *
 * All misc. settings related functions
 */
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $locale = \App::getLocale();
        $lat = isset($_REQUEST['latitude']) ? $_REQUEST['latitude'] : null;
        $long = isset($_REQUEST['longitude']) ? $_REQUEST['longitude'] : null;

        $settings = Setting::select(['is_shop_close', 'delievery_margin', 'close_time', 'open_time'])->first();
        $settings['delivery_charges'] = \Config::get('constants.delivery_charges');
        $settings['delivery_charges_Bahrain'] = 10;
        $settings['sorting_fee'] = \Config::get('constants.sorting_fee');



        if($lat != null){
            $geocode=file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$long.'&sensor=false&key=AIzaSyBiISc2o96q9Jvr_l_VQ86aqCW6UAsYALw');
            $output= json_decode($geocode);
            $city = null;
            for($j=0;$j<count($output->results[0]->address_components);$j++){
                $cn=array($output->results[0]->address_components[$j]->types[0]);
                if(in_array("country", $cn)){
                    $country_long_name= $output->results[0]->address_components[$j]->long_name;
                    $country_short_name= $output->results[0]->address_components[$j]->short_name;
                }
                if(in_array("locality", $cn)){
                    $city= $output->results[0]->address_components[$j]->long_name;
                }
            }
        }else{
            $country_long_name = "Saudi Arabia";
            $country_short_name = "SA";
            $city = "";
        }
        if($city == null)
        $settings['city'] = $country_long_name;
        else
        $settings['city'] = $city;
        $settings['country'] = $country_long_name;

        $settings['country_short_name'] = $country_short_name;
        $country = Country::where('code', $country_short_name)->first();
        $location = Location::where('name',$country_long_name)->first();
        if(!empty($location)){

            $shop_contacts = ShopContact::where('location_id',$location->id)->first();
            if(!empty($shop_contacts))
            $settings['contact_number'] = $shop_contacts->phone;
            else
            $settings['contact_number'] = null;
        }else{
            $settings['contact_number'] = null;
        }

        if($country_short_name == "SA"){
            $settings['currency'] = \Config::get('constants.currency');
            $settings['currency_symbol'] = "ر.س";
        }else{
            $settings['currency'] = $country->currency_code;
            $settings['currency_symbol'] = $country->currency_symbol;
        }

        $appTranslationLang = ($locale == 'ar') ? 'translation_ar' : 'translation_en';

        $translations = Translation::get(['translation_key', $appTranslationLang]);
        $finalLangArray = [];
        foreach ($translations as $key => $val) {
            $finalLangArray[$val['translation_key']] = $val[$appTranslationLang];
        }
        $finalLangArray['currency'] = $settings['currency'];
        $finalLangArray['currency_symbol'] = $settings['currency_symbol'];
        $settings['translations'] = $finalLangArray;
        return response()->json($settings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Middleware;

use App\Models\Settings\Setting;
use Closure;

class ShopOpen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $isFriday = ($request->has('pickup_time') && date('D', strtotime($request->get('pickup_time'))) == 'Fri') ? true : false;
        $pickup_hour = date('H', strtotime($request->get('pickup_time')));
        if($pickup_hour >=20){
            return  response()->json([
                'error' => [
                    'error_title' => 'Note',
                    'message' => "Please select next day pickup time.",
                    'status_code' => 422
                ]
            ], 422);
        }
        $isShopClose = (boolean)Setting::where('id', '>', 0)->first()->is_shop_close;
        if($isFriday){
            $closerespon = response()->json([
                'error' => [
                    'error_title' => 'Closed',
                    'message' => "Fridays are off, Please select another day for pickup",
                    'status_code' => 422
                ]
            ], 422);
        }else{
            $closerespon = response()->json([
                'error' => [
                    'error_title' => 'Closed',//trans('api.error_title'),
                    'message' => "Hey, We'll be here to serve you very soon.",//'Pickup not available on Friday',
                    'status_code' => 422
                ]
            ], 422);

        }

        return (!$isShopClose && !$isFriday) ? $next($request) : $closerespon;
    }
}
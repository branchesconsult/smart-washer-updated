<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Shop\CouponRequest;
use App\Models\Coupon\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @resource Coupon
 *
 * All Coupon related functions
 */
class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function validateCoupon(CouponRequest $request)
    {
        $coupon_code = $request->get('coupon_code');
        $actualPrice = $request->get('price');
        $coupon = Coupon::where('code', $coupon_code)
            ->select('discount', 'discount_type', 'id')
            ->where('valid_from', '<=', Carbon::now())
            ->where('valid_till', '>=', Carbon::now())
            ->orderBy('id', 'desc')
            ->first();

        $discount = 0;
        $messgeTitle = 'Error';
        $message = trans('coupon.expire.message');
        $statusCode = 401;
        $couponId = NULL;
        if (!empty($coupon)) {
            if ($coupon['discount_type'] == Coupon::PERCENTAGE) {
                $discount = $actualPrice - ($actualPrice * ($coupon['discount'] / 100));
            } else {
                $discount = $actualPrice - $coupon['discount'];
            }

            return response()->json([
                'coupon_id' => $coupon['id'],
                'discounted_price' => round($discount, 0),
                'message' => trans('coupon.validate.success_message'),
                'message_title' => trans('coupon.validate.success_message_title'),
            ]);
        }

        return response()->json([
            'error' => [
                'error_title' => trans('api.error_title'),
                'message' => $message,
                'status_code' => $statusCode
            ]
        ], $statusCode);
    }
}

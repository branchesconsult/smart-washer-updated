<?php

namespace App\Repositories\Backend\Coupon;

use DB;
use Carbon\Carbon;
use App\Models\Coupon\Coupon;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CouponRepository.
 */
class CouponRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Coupon::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        $coupons = Coupon::where('id', '>=', 1)->get();
        return $coupons;
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $coupon = self::MODEL;
        $coupon = new $coupon();
        if ($coupon->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.coupons.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Coupon $coupon
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Coupon $coupon, array $input)
    {
        if ($coupon->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.coupons.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Coupon $coupon
     * @throws GeneralException
     * @return bool
     */
    public function delete(Coupon $coupon)
    {
        if ($coupon->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.coupons.delete_error'));
    }
}

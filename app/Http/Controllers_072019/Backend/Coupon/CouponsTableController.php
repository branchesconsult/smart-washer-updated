<?php

namespace App\Http\Controllers\Backend\Coupon;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Coupon\CouponRepository;
use App\Http\Requests\Backend\Coupon\ManageCouponRequest;

/**
 * Class CouponsTableController.
 */
class CouponsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var CouponRepository
     */
    protected $coupon;

    /**
     * contructor to initialize repository object
     * @param CouponRepository $coupon;
     */
    public function __construct(CouponRepository $coupon)
    {
        $this->coupon = $coupon;
    }

    /**
     * This method return the data of the model
     * @param ManageCouponRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCouponRequest $request)
    {
        return Datatables::of($this->coupon->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($coupon) {
                return Carbon::parse($coupon->created_at)->toDateString();
            })
            ->addColumn('actions', function ($coupon) {
                return $coupon->action_buttons;
            })
            ->make(true);
    }
}

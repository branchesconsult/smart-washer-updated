<?php

namespace App\Http\Controllers\Backend\PaymentMethod;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PaymentMethod\ManagePaymentMethodRequest;
use App\Repositories\Backend\PaymentMethod\PaymentMethodRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class PaymentMethodTableController extends Controller
{
    /**
     * @var PaymentMethodRepository
     */
    protected $PaymentMethod;

    /**
     * @param PaymentMethodRepository $PaymentMethod
     */
    public function __construct(PaymentMethodRepository $PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
    }

    /**
     * @param ManagePaymentMethodRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManagePaymentMethodRequest $request)
    {
        return Datatables::of($this->PaymentMethod->getForDataTable())
            ->escapeColumns(['name'])
            ->addColumn('currency_code', function ($PaymentMethod) {
                return $PaymentMethod->currency_code;
            })
            ->addColumn('currency_symbol', function ($PaymentMethod) {
                return $PaymentMethod->currency_symbol;
            })
            ->addColumn('actions', function ($PaymentMethod) {
                return $PaymentMethod->action_buttons;
            })
            ->make(true);
    }
}

<?php

namespace App\Http\Controllers\Backend\Order;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Order\OrderRepository;
use App\Http\Requests\Backend\Order\ManageOrderRequest;

/**
 * Class OrdersTableController.
 */
class OrdersTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var OrderRepository
     */
    protected $order;

    /**
     * contructor to initialize repository object
     * @param OrderRepository $order ;
     */
    public function __construct(OrderRepository $order)
    {
        $this->order = $order;
    }

    /**
     * This method return the data of the model
     * @param ManageOrderRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageOrderRequest $request)
    {
        $orderFrom = $request->get('order_from');
        $orderTo = $request->get('order_to');
        $orderStatusId = $request->get('status');
        return Datatables::of($this->order->getForDataTable($orderFrom, $orderTo, $orderStatusId))
        ->escapeColumns(['id'])
        ->addColumn('created_at', function ($order) {
            return Carbon::parse($order->created_at)->toDateTimeString();
        })
        ->addColumn('customer', function ($order) {
            if(isset($order->user->email)){
                return $order->user->email . '-' . $order->user->phone;
            }else{
                return null;
            }
        })
        ->addColumn('driver', function ($order) {
            if(isset($order->driver->email)){
            return $order->driver->email . '-' . $order->driver->phone;
            }else{
                return null;
            }
        })
        ->addColumn('status', function ($order) {
            return (empty($order->status)) ? 'Just orderd' : $order->status->status;
        })
        ->addColumn('actions', function ($order) {
            return $order->action_buttons;
        })
        ->addColumn('sw_profit', function ($order) {
            return (double)$order->total - (double)$order->laundry_total_price;
        })
        ->addColumn('skip_by_client', function ($order) {
            return ($order->skip_by_client == 0) ? 'No' : 'Yes';
        })
        ->make(true);
    }
}

<?php

namespace App\Http\Controllers\Backend\Orderdetail;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Orderdetail\OrderdetailRepository;
use App\Http\Requests\Backend\Orderdetail\ManageOrderdetailRequest;

/**
 * Class OrderdetailsTableController.
 */
class OrderdetailsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var OrderdetailRepository
     */
    protected $orderdetail;

    /**
     * contructor to initialize repository object
     * @param OrderdetailRepository $orderdetail;
     */
    public function __construct(OrderdetailRepository $orderdetail)
    {
        $this->orderdetail = $orderdetail;
    }

    /**
     * This method return the data of the model
     * @param ManageOrderdetailRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageOrderdetailRequest $request)
    {
        return Datatables::of($this->orderdetail->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($orderdetail) {
                return Carbon::parse($orderdetail->created_at)->toDateString();
            })
            ->addColumn('actions', function ($orderdetail) {
                return $orderdetail->action_buttons;
            })
            ->make(true);
    }
}

<?php

namespace App\Http\Controllers\Backend\Ordercomplain;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Ordercomplain\OrdercomplainRepository;
use App\Http\Requests\Backend\Ordercomplain\ManageOrdercomplainRequest;

/**
 * Class OrdercomplainsTableController.
 */
class OrdercomplainsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var OrdercomplainRepository
     */
    protected $ordercomplain;

    /**
     * contructor to initialize repository object
     * @param OrdercomplainRepository $ordercomplain;
     */
    public function __construct(OrdercomplainRepository $ordercomplain)
    {
        $this->ordercomplain = $ordercomplain;
    }

    /**
     * This method return the data of the model
     * @param ManageOrdercomplainRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageOrdercomplainRequest $request)
    {
        return Datatables::of($this->ordercomplain->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($ordercomplain) {
                return Carbon::parse($ordercomplain->created_at)->toDateString();
            })
            ->addColumn('actions', function ($ordercomplain) {
                return $ordercomplain->action_buttons;
            })
            ->make(true);
    }
}

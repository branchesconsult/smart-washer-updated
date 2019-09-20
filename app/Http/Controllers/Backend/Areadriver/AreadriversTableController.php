<?php

namespace App\Http\Controllers\Backend\Areadriver;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Areadriver\AreadriverRepository;
use App\Http\Requests\Backend\Areadriver\ManageAreadriverRequest;

/**
 * Class AreadriversTableController.
 */
class AreadriversTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var AreadriverRepository
     */
    protected $areadriver;

    /**
     * contructor to initialize repository object
     * @param AreadriverRepository $areadriver;
     */
    public function __construct(AreadriverRepository $areadriver)
    {
        $this->areadriver = $areadriver;
    }

    /**
     * This method return the data of the model
     * @param ManageAreadriverRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageAreadriverRequest $request)
    {
        return Datatables::of($this->areadriver->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($areadriver) {
                return Carbon::parse($areadriver->created_at)->toDateString();
            })
            ->addColumn('actions', function ($areadriver) {
                return $areadriver->action_buttons;
            })
            ->make(true);
    }
}

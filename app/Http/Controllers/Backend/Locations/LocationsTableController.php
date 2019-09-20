<?php

namespace App\Http\Controllers\Backend\Locations;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Locations\ManageLocationsRequest;
use App\Repositories\Backend\Locations\LocationsRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class LocationsTableController extends Controller
{
    /**
     * @var LocationsRepository
     */
    protected $Locations;

    /**
     * @param LocationsRepository $Locations
     */
    public function __construct(LocationsRepository $Locations)
    {
        $this->Locations = $Locations;
    }

    /**
     * @param ManageLocationsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageLocationsRequest $request)
    {
        return Datatables::of($this->Locations->getForDataTable())
            ->escapeColumns(['name'])
            ->addColumn('currency_code', function ($Locations) {
                return $Locations->currency_code;
            })
            ->addColumn('currency_symbol', function ($Locations) {
                return $Locations->currency_symbol;
            })
            ->addColumn('actions', function ($Locations) {
                return $Locations->action_buttons;
            })
            ->make(true);
    }
}

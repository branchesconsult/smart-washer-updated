<?php

namespace App\Http\Controllers\Backend\Laundry;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Laundry\LaundryRepository;
use App\Http\Requests\Backend\Laundry\ManageLaundryRequest;

/**
 * Class LaundriesTableController.
 */
class LaundriesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var LaundryRepository
     */
    protected $laundry;

    /**
     * contructor to initialize repository object
     * @param LaundryRepository $laundry ;
     */
    public function __construct(LaundryRepository $laundry)
    {
        $this->laundry = $laundry;
    }

    /**
     * This method return the data of the model
     * @param ManageLaundryRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageLaundryRequest $request)
    {
        return Datatables::of($this->laundry->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('name', function ($laundry) {
                return $laundry->name;
            })
            ->addColumn('actions', function ($laundry) {
                return $laundry->action_buttons;
            })
            ->make(true);


    }
}

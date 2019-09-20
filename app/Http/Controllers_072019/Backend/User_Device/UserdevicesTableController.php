<?php

namespace App\Http\Controllers\Backend\User_Device;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\User_Device\UserdeviceRepository;
use App\Http\Requests\Backend\User_Device\ManageUserdeviceRequest;

/**
 * Class UserdevicesTableController.
 */
class UserdevicesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var UserdeviceRepository
     */
    protected $userdevice;

    /**
     * contructor to initialize repository object
     * @param UserdeviceRepository $userdevice;
     */
    public function __construct(UserdeviceRepository $userdevice)
    {
        $this->userdevice = $userdevice;
    }

    /**
     * This method return the data of the model
     * @param ManageUserdeviceRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageUserdeviceRequest $request)
    {
        return Datatables::of($this->userdevice->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($userdevice) {
                return Carbon::parse($userdevice->created_at)->toDateString();
            })
            ->addColumn('actions', function ($userdevice) {
                return $userdevice->action_buttons;
            })
            ->make(true);
    }
}

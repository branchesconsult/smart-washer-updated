<?php

namespace App\Http\Controllers\Backend\Pushnotification;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Pushnotification\PushnotificationRepository;
use App\Http\Requests\Backend\Pushnotification\ManagePushnotificationRequest;

/**
 * Class PushnotificationsTableController.
 */
class PushnotificationsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var PushnotificationRepository
     */
    protected $pushnotification;

    /**
     * contructor to initialize repository object
     * @param PushnotificationRepository $pushnotification;
     */
    public function __construct(PushnotificationRepository $pushnotification)
    {
        $this->pushnotification = $pushnotification;
    }

    /**
     * This method return the data of the model
     * @param ManagePushnotificationRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManagePushnotificationRequest $request)
    {
        return Datatables::of($this->pushnotification->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($pushnotification) {
                return Carbon::parse($pushnotification->created_at)->toDateString();
            })
            ->addColumn('actions', function ($pushnotification) {
                return $pushnotification->action_buttons;
            })
            ->make(true);
    }
}

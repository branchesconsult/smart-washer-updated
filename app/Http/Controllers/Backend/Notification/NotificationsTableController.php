<?php

namespace App\Http\Controllers\Backend\Notification;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Notification\NotificationRepository;
use App\Http\Requests\Backend\Notification\ManageNotificationRequest;

/**
 * Class NotificationsTableController.
 */
class NotificationsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var NotificationRepository
     */
    protected $notification;

    /**
     * contructor to initialize repository object
     * @param NotificationRepository $notification;
     */
    public function __construct(NotificationRepository $notification)
    {
        $this->notification = $notification;
    }

    /**
     * This method return the data of the model
     * @param ManageNotificationRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageNotificationRequest $request)
    {
        return Datatables::of($this->notification->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($notification) {
                return Carbon::parse($notification->created_at)->toDateString();
            })
            ->addColumn('actions', function ($notification) {
                return $notification->action_buttons;
            })
            ->make(true);
    }
}

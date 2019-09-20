<?php

namespace App\Http\Controllers\Backend\Notification;

use App\Models\Notification\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Notification\NotificationRepository;
use App\Http\Requests\Backend\Notification\ManageNotificationRequest;
use App\Http\Requests\Backend\Notification\CreateNotificationRequest;
use App\Http\Requests\Backend\Notification\StoreNotificationRequest;
use App\Http\Requests\Backend\Notification\EditNotificationRequest;
use App\Http\Requests\Backend\Notification\UpdateNotificationRequest;
use App\Http\Requests\Backend\Notification\DeleteNotificationRequest;

/**
 * NotificationsController
 */
class NotificationsController extends Controller
{
    /**
     * variable to store the repository object
     * @var NotificationRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param NotificationRepository $repository;
     */
    public function __construct(NotificationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Notification\ManageNotificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageNotificationRequest $request)
    {
        return view('backend.notifications.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateNotificationRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateNotificationRequest $request)
    {
        return view('backend.notifications.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreNotificationRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotificationRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.notifications.index')->withFlashSuccess(trans('alerts.backend.notifications.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Notification\Notification  $notification
     * @param  EditNotificationRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification, EditNotificationRequest $request)
    {
        return view('backend.notifications.edit', compact('notification'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateNotificationRequestNamespace  $request
     * @param  App\Models\Notification\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $notification, $input );
        //return with successfull message
        return redirect()->route('admin.notifications.index')->withFlashSuccess(trans('alerts.backend.notifications.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteNotificationRequestNamespace  $request
     * @param  App\Models\Notification\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification, DeleteNotificationRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($notification);
        //returning with successfull message
        return redirect()->route('admin.notifications.index')->withFlashSuccess(trans('alerts.backend.notifications.deleted'));
    }
    
}

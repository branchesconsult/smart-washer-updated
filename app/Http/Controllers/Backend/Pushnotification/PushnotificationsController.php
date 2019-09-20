<?php

namespace App\Http\Controllers\Backend\Pushnotification;

use App\Models\Device\Device;
use App\Models\Pushnotification\Pushnotification;
use App\Models\Locations\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Pushnotification\PushnotificationRepository;
use App\Http\Requests\Backend\Pushnotification\ManagePushnotificationRequest;
use App\Http\Requests\Backend\Pushnotification\CreatePushnotificationRequest;
use App\Http\Requests\Backend\Pushnotification\StorePushnotificationRequest;
use App\Http\Requests\Backend\Pushnotification\EditPushnotificationRequest;
use App\Http\Requests\Backend\Pushnotification\UpdatePushnotificationRequest;
use App\Http\Requests\Backend\Pushnotification\DeletePushnotificationRequest;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;

/**
 * PushnotificationsController
 */
class PushnotificationsController extends Controller
{
    /**
     * variable to store the repository object
     * @var PushnotificationRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param PushnotificationRepository $repository ;
     */
    public function __construct(PushnotificationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Pushnotification\ManagePushnotificationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManagePushnotificationRequest $request)
    {
        return view('backend.pushnotifications.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreatePushnotificationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreatePushnotificationRequest $request)
    {
        $pushnotification = new Pushnotification();
        $locations = Location::all();
        return view('backend.pushnotifications.create',compact('locations','pushnotification'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePushnotificationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePushnotificationRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        if ($request->get('freequency') == 0) {
            $this->sendToAll(array_except($request, 'freequency'));
        }
        return redirect()->route('admin.pushnotifications.index')
            ->withFlashSuccess(trans('alerts.backend.pushnotifications.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Pushnotification\Pushnotification $pushnotification
     * @param  EditPushnotificationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Pushnotification $pushnotification, EditPushnotificationRequest $request)
    {
        $locations = Location::all();
        return view('backend.pushnotifications.edit', compact('pushnotification','locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePushnotificationRequestNamespace $request
     * @param  App\Models\Pushnotification\Pushnotification $pushnotification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePushnotificationRequest $request, Pushnotification $pushnotification)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update($pushnotification, array_except($input, 'freequency'));
        //return with successfull message
        if ($request->get('freequency') == 0) {
            $this->sendToAll(array_except($request, 'freequency'));
        }
        return redirect()->route('admin.pushnotifications.index')
            ->withFlashSuccess(trans('alerts.backend.pushnotifications.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeletePushnotificationRequestNamespace $request
     * @param  App\Models\Pushnotification\Pushnotification $pushnotification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pushnotification $pushnotification, DeletePushnotificationRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($pushnotification);
        //returning with successfull message
        return redirect()->route('admin.pushnotifications.index')->withFlashSuccess(trans('alerts.backend.pushnotifications.deleted'));
    }

    public function sendToAll($request)
    {

        //dd($request->get('location'));
        $location_id = $request->get('location');
        $device_token = Device::where('location_id',$location_id)->pluck('device_token')->toArray();
        //dd($device_token);
        $optionBuilder = new OptionsBuilder();
        $optionBuilder->setTimeToLive(60 * 20);

        $notificationBuilder = new PayloadNotificationBuilder('Smart Washr');
        $notificationBuilder
            //->setClickAction('OrderDetail')
            ->setTitle($request->get('notification_title'))
            ->setBody($request->get('notification_text'))
            ->setSound('default');
        $datatest = [];
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData(["data" => $datatest]);

        $option = $optionBuilder->build();
        $notification = $notificationBuilder->build();
        $data = $dataBuilder->build();

        // $topic = new Topics();
        // $topic->topic($request->location);


        // $topicResponse = FCM::sendToTopic($topic, null, $notification, null);
        // return $topicResponse;

        $token = $device_token;
        $downstreamResponse = FCM::sendTo($token, $option, $notification, $data);
        return $downstreamResponse;
    }
}

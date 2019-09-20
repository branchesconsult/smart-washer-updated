<?php

namespace App\Http\Controllers\Backend\User_Device;

use App\Models\User_Device\Userdevice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\User_Device\UserdeviceRepository;
use App\Http\Requests\Backend\User_Device\ManageUserdeviceRequest;
use App\Http\Requests\Backend\User_Device\CreateUserdeviceRequest;
use App\Http\Requests\Backend\User_Device\StoreUserdeviceRequest;
use App\Http\Requests\Backend\User_Device\DeleteUserdeviceRequest;

/**
 * UserdevicesController
 */
class UserdevicesController extends Controller
{
    /**
     * variable to store the repository object
     * @var UserdeviceRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param UserdeviceRepository $repository;
     */
    public function __construct(UserdeviceRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\User_Device\ManageUserdeviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageUserdeviceRequest $request)
    {
        return view('backend.userdevices.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateUserdeviceRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateUserdeviceRequest $request)
    {
        return view('backend.userdevices.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserdeviceRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserdeviceRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.userdevices.index')->withFlashSuccess(trans('alerts.backend.userdevices.created'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteUserdeviceRequestNamespace  $request
     * @param  App\Models\User_Device\Userdevice  $userdevice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userdevice $userdevice, DeleteUserdeviceRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($userdevice);
        //returning with successfull message
        return redirect()->route('admin.userdevices.index')->withFlashSuccess(trans('alerts.backend.userdevices.deleted'));
    }
    
}

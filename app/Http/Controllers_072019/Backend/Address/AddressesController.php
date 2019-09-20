<?php

namespace App\Http\Controllers\Backend\Address;

use App\Models\Address\Address;
use App\Models\LaundryUser\LaundryUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Address\AddressRepository;
use App\Http\Requests\Backend\Address\ManageAddressRequest;
use App\Http\Requests\Backend\Address\CreateAddressRequest;
use App\Http\Requests\Backend\Address\StoreAddressRequest;
use App\Http\Requests\Backend\Address\EditAddressRequest;
use App\Http\Requests\Backend\Address\UpdateAddressRequest;
use App\Http\Requests\Backend\Address\DeleteAddressRequest;

/**
 * AddressesController
 */
class AddressesController extends Controller
{
    /**
     * variable to store the repository object
     * @var AddressRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param AddressRepository $repository ;
     */
    public function __construct(AddressRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Address\ManageAddressRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageAddressRequest $request)
    {
        return view('backend.addresses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateAddressRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateAddressRequest $request)
    {
        return view('backend.addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAddressRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->back()->withFlashSuccess(trans('alerts.backend.addresses.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Address\Address $address
     * @param  EditAddressRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address, EditAddressRequest $request)
    {
        return view('backend.addresses.edit', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAddressRequestNamespace $request
     * @param  App\Models\Address\Address $address
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update($address, $input);
        //return with successfull message
        return redirect()->route('admin.addresses.index')->withFlashSuccess(trans('alerts.backend.addresses.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteAddressRequestNamespace $request
     * @param  App\Models\Address\Address $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address, DeleteAddressRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($address);
        //returning with successfull message
        return redirect()->route('admin.addresses.index')->withFlashSuccess(trans('alerts.backend.addresses.deleted'));
    }

    public function operationalAreas()
    {
        $resCoorArr = [];
        $user['driverAreaOnMap'] = LaundryUser::all()->toArray();
        $user['driver_area'] = array_column($user['driverAreaOnMap'], 'driver_area');
        $coorArr = json_decode(json_encode($user['driver_area']), true);


        //I know this is bad but there is no way
        foreach ($coorArr as $key => $val) {
            foreach ($val['coordinates'] as $k1 => $v1) {
                foreach ($v1 as $k2 => $v2) {
                    foreach ($v2 as $k3 => $v3) {
                        $resCoorArr[$key][$k3]['lat'] = $v3[0];
                        $resCoorArr[$key][$k3]['lng'] = $v3[1];
                    }
                }
            }
        }
        $data['operationalCoords'] = json_encode($resCoorArr);
        //dd($data, $resCoorArr);
        return view('backend.addresses.operational-areas', $data);
    }
}

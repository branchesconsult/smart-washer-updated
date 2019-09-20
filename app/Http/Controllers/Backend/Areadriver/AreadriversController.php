<?php

namespace App\Http\Controllers\Backend\Areadriver;

use App\Models\Areadriver\Areadriver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Areadriver\AreadriverRepository;
use App\Http\Requests\Backend\Areadriver\ManageAreadriverRequest;
use App\Http\Requests\Backend\Areadriver\CreateAreadriverRequest;
use App\Http\Requests\Backend\Areadriver\StoreAreadriverRequest;
use App\Http\Requests\Backend\Areadriver\EditAreadriverRequest;
use App\Http\Requests\Backend\Areadriver\UpdateAreadriverRequest;
use App\Http\Requests\Backend\Areadriver\DeleteAreadriverRequest;

/**
 * AreadriversController
 */
class AreadriversController extends Controller
{
    /**
     * variable to store the repository object
     * @var AreadriverRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param AreadriverRepository $repository;
     */
    public function __construct(AreadriverRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Areadriver\ManageAreadriverRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageAreadriverRequest $request)
    {
        return view('backend.areadrivers.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateAreadriverRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateAreadriverRequest $request)
    {
        return view('backend.areadrivers.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAreadriverRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAreadriverRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.areadrivers.index')->withFlashSuccess(trans('alerts.backend.areadrivers.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Areadriver\Areadriver  $areadriver
     * @param  EditAreadriverRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Areadriver $areadriver, EditAreadriverRequest $request)
    {
        return view('backend.areadrivers.edit', compact('areadriver'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAreadriverRequestNamespace  $request
     * @param  App\Models\Areadriver\Areadriver  $areadriver
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAreadriverRequest $request, Areadriver $areadriver)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $areadriver, $input );
        //return with successfull message
        return redirect()->route('admin.areadrivers.index')->withFlashSuccess(trans('alerts.backend.areadrivers.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteAreadriverRequestNamespace  $request
     * @param  App\Models\Areadriver\Areadriver  $areadriver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Areadriver $areadriver, DeleteAreadriverRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($areadriver);
        //returning with successfull message
        return redirect()->route('admin.areadrivers.index')->withFlashSuccess(trans('alerts.backend.areadrivers.deleted'));
    }
    
}

<?php

namespace App\Http\Controllers\Backend\Ordercomplain;

use App\Models\Ordercomplain\Ordercomplain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Ordercomplain\OrdercomplainRepository;
use App\Http\Requests\Backend\Ordercomplain\ManageOrdercomplainRequest;
use App\Http\Requests\Backend\Ordercomplain\CreateOrdercomplainRequest;
use App\Http\Requests\Backend\Ordercomplain\StoreOrdercomplainRequest;
use App\Http\Requests\Backend\Ordercomplain\EditOrdercomplainRequest;
use App\Http\Requests\Backend\Ordercomplain\UpdateOrdercomplainRequest;
use App\Http\Requests\Backend\Ordercomplain\DeleteOrdercomplainRequest;

/**
 * OrdercomplainsController
 */
class OrdercomplainsController extends Controller
{
    /**
     * variable to store the repository object
     * @var OrdercomplainRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param OrdercomplainRepository $repository;
     */
    public function __construct(OrdercomplainRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Ordercomplain\ManageOrdercomplainRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageOrdercomplainRequest $request)
    {
        return view('backend.ordercomplains.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateOrdercomplainRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateOrdercomplainRequest $request)
    {
        return view('backend.ordercomplains.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreOrdercomplainRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdercomplainRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.ordercomplains.index')->withFlashSuccess(trans('alerts.backend.ordercomplains.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Ordercomplain\Ordercomplain  $ordercomplain
     * @param  EditOrdercomplainRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordercomplain $ordercomplain, EditOrdercomplainRequest $request)
    {
        return view('backend.ordercomplains.edit', compact('ordercomplain'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateOrdercomplainRequestNamespace  $request
     * @param  App\Models\Ordercomplain\Ordercomplain  $ordercomplain
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdercomplainRequest $request, Ordercomplain $ordercomplain)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $ordercomplain, $input );
        //return with successfull message
        return redirect()->route('admin.ordercomplains.index')->withFlashSuccess(trans('alerts.backend.ordercomplains.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteOrdercomplainRequestNamespace  $request
     * @param  App\Models\Ordercomplain\Ordercomplain  $ordercomplain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordercomplain $ordercomplain, DeleteOrdercomplainRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($ordercomplain);
        //returning with successfull message
        return redirect()->route('admin.ordercomplains.index')->withFlashSuccess(trans('alerts.backend.ordercomplains.deleted'));
    }
    
}

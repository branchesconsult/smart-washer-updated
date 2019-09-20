<?php

namespace App\Http\Controllers\Backend\Orderdetail;

use App\Models\Orderdetail\Orderdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Orderdetail\OrderdetailRepository;
use App\Http\Requests\Backend\Orderdetail\ManageOrderdetailRequest;
use App\Http\Requests\Backend\Orderdetail\CreateOrderdetailRequest;
use App\Http\Requests\Backend\Orderdetail\StoreOrderdetailRequest;
use App\Http\Requests\Backend\Orderdetail\EditOrderdetailRequest;
use App\Http\Requests\Backend\Orderdetail\UpdateOrderdetailRequest;
use App\Http\Requests\Backend\Orderdetail\DeleteOrderdetailRequest;

/**
 * OrderdetailsController
 */
class OrderdetailsController extends Controller
{
    /**
     * variable to store the repository object
     * @var OrderdetailRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param OrderdetailRepository $repository;
     */
    public function __construct(OrderdetailRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Orderdetail\ManageOrderdetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageOrderdetailRequest $request)
    {
        return view('backend.orderdetails.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateOrderdetailRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateOrderdetailRequest $request)
    {
        return view('backend.orderdetails.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreOrderdetailRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderdetailRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.orderdetails.index')->withFlashSuccess(trans('alerts.backend.orderdetails.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Orderdetail\Orderdetail  $orderdetail
     * @param  EditOrderdetailRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderdetail $orderdetail, EditOrderdetailRequest $request)
    {
        return view('backend.orderdetails.edit', compact('orderdetail'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateOrderdetailRequestNamespace  $request
     * @param  App\Models\Orderdetail\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderdetailRequest $request, Orderdetail $orderdetail)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $orderdetail, $input );
        //return with successfull message
        return redirect()->route('admin.orderdetails.index')->withFlashSuccess(trans('alerts.backend.orderdetails.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteOrderdetailRequestNamespace  $request
     * @param  App\Models\Orderdetail\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderdetail $orderdetail, DeleteOrderdetailRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($orderdetail);
        //returning with successfull message
        return redirect()->route('admin.orderdetails.index')->withFlashSuccess(trans('alerts.backend.orderdetails.deleted'));
    }
    
}

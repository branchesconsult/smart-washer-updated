<?php

namespace App\Http\Controllers\Backend\PaymentMethod;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PaymentMethod\CreatePaymentMethodRequest;
use App\Http\Requests\Backend\PaymentMethod\DeletePaymentMethodRequest;
use App\Http\Requests\Backend\PaymentMethod\EditPaymentMethodRequest;
use App\Http\Requests\Backend\PaymentMethod\ManagePaymentMethodRequest;
use App\Http\Requests\Backend\PaymentMethod\StorePaymentMethodRequest;
use App\Http\Requests\Backend\PaymentMethod\UpdatePaymentMethodRequest;
use App\Http\Responses\Backend\PaymentMethod\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\PaymentMethod\PaymentMethod;
use App\Models\Country\Country;
use App\Repositories\Backend\PaymentMethod\PaymentMethodRepository;


class PaymentMethodController extends Controller
{
    /**
     * PaymentMethod Repository.
     *
     * @var \App\Repositories\Backend\PaymentMethod\PaymentMethodRepository
     */
    protected $PaymentMethod;

    /**
     * @param \App\Repositories\Backend\PaymentMethod\PaymentMethodRepository $PaymentMethod
     */
    public function __construct(PaymentMethodRepository $PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\Backend\PaymentMethod\ManagePaymentMethodRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManagePaymentMethodRequest $request)
    {
        return new ViewResponse('backend.PaymentMethod.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Http\Requests\Backend\PaymentMethod\CreatePaymentMethodRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreatePaymentMethodRequest $request)
    {
        $PaymentMethod = new PaymentMethod();
        $country = Country::all();
        return new ViewResponse('backend.PaymentMethod.create',compact('PaymentMethod','country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Backend\PaymentMethod\StorePaymentMethodRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StorePaymentMethodRequest $request)
    {
        $this->PaymentMethod->create($request->all());
        return new RedirectResponse(route('admin.paymentmethod.index'), ['flash_success' => "Payment Method Created Successfully."]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\PaymentMethod\PaymentMethod                            $PaymentMethod
     * @param \App\Http\Requests\Backend\PaymentMethod\EditPaymentMethodRequest $request
     *
     * @return \App\Http\Responses\Backend\PaymentMethod\EditResponse
     */
    public function edit(PaymentMethod $paymentmethod, EditPaymentMethodRequest $request)
    {
        return new EditResponse($paymentmethod);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Backend\PaymentMethod\UpdatePaymentMethodRequest $request
     * @param \App\Models\PaymentMethod\PaymentMethod                              $id
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $paymentmethod)
    {
        $this->PaymentMethod->update($paymentmethod, $request->all());

        return new RedirectResponse(route('admin.paymentmethod.index'), ['flash_success' => "Payment Method Updated Successfully."]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\PaymentMethod\PaymentMethod                              $PaymentMethod
     * @param \App\Http\Requests\Backend\PaymentMethod\DeletePaymentMethodRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(PaymentMethod $paymentmethod, DeletePaymentMethodRequest $request)
    {
        $this->PaymentMethod->delete($paymentmethod);

        return new RedirectResponse(route('admin.paymentmethod.index'), ['flash_success' => "Payment Method Deleted Successfully."]);
    }
}

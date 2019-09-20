<?php

namespace App\Http\Controllers\Backend\Locations;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Locations\CreateLocationsRequest;
use App\Http\Requests\Backend\Locations\DeleteLocationsRequest;
use App\Http\Requests\Backend\Locations\EditLocationsRequest;
use App\Http\Requests\Backend\Locations\ManageLocationsRequest;
use App\Http\Requests\Backend\Locations\StoreLocationsRequest;
use App\Http\Requests\Backend\Locations\UpdateLocationsRequest;
use App\Http\Responses\Backend\Location\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Locations\Location;
use App\Models\Country\Country;
use App\Repositories\Backend\Locations\LocationsRepository;
use App\Models\PaymentMethod\PaymentMethod;

class LocationsController extends Controller
{
    /**
     * Location Repository.
     *
     * @var \App\Repositories\Backend\Locations\LocationsRepository
     */
    protected $Location;

    /**
     * @param \App\Repositories\Backend\Locations\LocationsRepository $Location
     */
    public function __construct(LocationsRepository $Location)
    {
        $this->Location = $Location;
    }

    /**
     * Display a listing of the resource.
     *
     * @param \App\Http\Requests\Backend\Locations\ManageLocationsRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageLocationsRequest $request)
    {
        return new ViewResponse('backend.Locations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \App\Http\Requests\Backend\Locations\CreateLocationsRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateLocationsRequest $request)
    {
        $Location = new Location();
        $country = Country::all();
        $payment_methods = PaymentMethod::all();
        return new ViewResponse('backend.Locations.create',compact('Location','country','payment_methods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Backend\Locations\StoreLocationsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreLocationsRequest $request)
    {
        $this->Location->create($request->all());
        return new RedirectResponse(route('admin.locations.index'), ['flash_success' => trans('alerts.backend.Locations.created')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Locations\Location                            $Location
     * @param \App\Http\Requests\Backend\Locations\EditLocationsRequest $request
     *
     * @return \App\Http\Responses\Backend\Location\EditResponse
     */
    public function edit(Location $Location, EditLocationsRequest $request)
    {
        return new EditResponse($Location);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Backend\Locations\UpdateLocationsRequest $request
     * @param \App\Models\Locations\Location                              $id
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateLocationsRequest $request, Location $Location)
    {
        $this->Location->update($Location, $request->all());

        return new RedirectResponse(route('admin.locations.index'), ['flash_success' => trans('alerts.backend.Locations.updated')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Locations\Location                              $Location
     * @param \App\Http\Requests\Backend\Locations\DeleteLocationsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Location $Location, DeleteLocationsRequest $request)
    {
        $this->Location->delete($Location);

        return new RedirectResponse(route('admin.locations.index'), ['flash_success' => trans('alerts.backend.Locations.deleted')]);
    }
}

<?php

namespace App\Http\Controllers\Backend\Voted_Location;

use App\Models\Address\Address;
use App\Models\Voted_Location\Votedlocation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Voted_Location\VotedlocationRepository;
use App\Http\Requests\Backend\Voted_Location\ManageVotedlocationRequest;
use App\Http\Requests\Backend\Voted_Location\CreateVotedlocationRequest;
use App\Http\Requests\Backend\Voted_Location\StoreVotedlocationRequest;
use App\Http\Requests\Backend\Voted_Location\EditVotedlocationRequest;
use App\Http\Requests\Backend\Voted_Location\UpdateVotedlocationRequest;
use App\Http\Requests\Backend\Voted_Location\DeleteVotedlocationRequest;

/**
 * VotedlocationsController
 */
class VotedlocationsController extends Controller
{
    /**
     * variable to store the repository object
     * @var VotedlocationRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param VotedlocationRepository $repository ;
     */
    public function __construct(VotedlocationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Voted_Location\ManageVotedlocationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageVotedlocationRequest $request)
    {
        return view('backend.votedlocations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateVotedlocationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateVotedlocationRequest $request)
    {
        return view('backend.votedlocations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreVotedlocationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVotedlocationRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.votedlocations.index')->withFlashSuccess(trans('alerts.backend.votedlocations.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Voted_Location\Votedlocation $votedlocation
     * @param  EditVotedlocationRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Votedlocation $votedlocation, EditVotedlocationRequest $request)
    {
        return view('backend.votedlocations.edit', compact('votedlocation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateVotedlocationRequestNamespace $request
     * @param  App\Models\Voted_Location\Votedlocation $votedlocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVotedlocationRequest $request, Votedlocation $votedlocation)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update($votedlocation, $input);
        //return with successfull message
        return redirect()->route('admin.votedlocations.index')->withFlashSuccess(trans('alerts.backend.votedlocations.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteVotedlocationRequestNamespace $request
     * @param  App\Models\Voted_Location\Votedlocation $votedlocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Votedlocation $votedlocation, DeleteVotedlocationRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($votedlocation);
        //returning with successfull message
        return redirect()->route('admin.votedlocations.index')->withFlashSuccess(trans('alerts.backend.votedlocations.deleted'));
    }

    /**
     * See map of location
     */
    public function votedLocationMap()
    {
        $addresses = Votedlocation::with('user')->get();

        $mapData = [];
        foreach ($addresses as $key => $val) {
            $mapData[$key]['lat'] = $val->location->getLat();
            $mapData[$key]['lng'] = $val->location->getLng();
            $mapData[$key]['title'] = $val->user->email;
            $mapData[$key]['infoWindow'] = [
                'content' => 'my infor window'
            ];
        }
        $data['mapData'] = json_encode($mapData, true);
        //dd($mapData);
        return view('backend.votedlocations.votedlocations-map', $data);
    }
}

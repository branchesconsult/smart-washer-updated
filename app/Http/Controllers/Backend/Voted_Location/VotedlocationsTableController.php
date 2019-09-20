<?php

namespace App\Http\Controllers\Backend\Voted_Location;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Voted_Location\VotedlocationRepository;
use App\Http\Requests\Backend\Voted_Location\ManageVotedlocationRequest;

/**
 * Class VotedlocationsTableController.
 */
class VotedlocationsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var VotedlocationRepository
     */
    protected $votedlocation;

    /**
     * contructor to initialize repository object
     * @param VotedlocationRepository $votedlocation ;
     */
    public function __construct(VotedlocationRepository $votedlocation)
    {
        $this->votedlocation = $votedlocation;
    }

    /**
     * This method return the data of the model
     * @param ManageVotedlocationRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageVotedlocationRequest $request)
    {
        return Datatables::of($this->votedlocation->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($votedlocation) {
                return Carbon::parse($votedlocation->created_at)->toDateString();
            })
            ->addColumn('user_id', function ($votedlocation) {
                return $votedlocation->user->id;
            })
            ->addColumn('location', function ($votedlocation) {
                $addressCoords = [
                    'lat' => $votedlocation->location->getLat(),
                    'lng' => $votedlocation->location->getLng()
                ];
                //$addressCoords['address'] = $geocoder->getAddress($addressCoords['lat'], $addressCoords['lng']);
                return json_encode($addressCoords);
            })
            ->addColumn('actions', function ($votedlocation) {
                return $votedlocation->action_buttons;
            })
            ->make(true);
    }
}

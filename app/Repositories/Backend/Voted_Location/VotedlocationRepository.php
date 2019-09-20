<?php

namespace App\Repositories\Backend\Voted_Location;

use DB;
use Carbon\Carbon;
use App\Models\Voted_Location\Votedlocation;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VotedlocationRepository.
 */
class VotedlocationRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Votedlocation::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        $locations = Votedlocation::with('user')->get();
        //dd($locations->toArray());
        return $locations;
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $votedlocation = self::MODEL;
        $votedlocation = new $votedlocation();
        if ($votedlocation->save($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.votedlocations.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Votedlocation $votedlocation
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Votedlocation $votedlocation, array $input)
    {
        if ($votedlocation->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.votedlocations.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Votedlocation $votedlocation
     * @throws GeneralException
     * @return bool
     */
    public function delete(Votedlocation $votedlocation)
    {
        if ($votedlocation->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.votedlocations.delete_error'));
    }
}

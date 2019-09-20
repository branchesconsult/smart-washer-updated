<?php

namespace App\Repositories\Backend\Areadriver;

use DB;
use Carbon\Carbon;
use App\Models\Areadriver\Areadriver;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AreadriverRepository.
 */
class AreadriverRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Areadriver::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.areadrivers.table').'.id',
                config('module.areadrivers.table').'.created_at',
                config('module.areadrivers.table').'.updated_at',
            ]);
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
        $areadriver = self::MODEL;
        $areadriver = new $areadriver();
        if ($areadriver->save($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.areadrivers.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Areadriver $areadriver
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Areadriver $areadriver, array $input)
    {
    	if ($areadriver->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.areadrivers.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Areadriver $areadriver
     * @throws GeneralException
     * @return bool
     */
    public function delete(Areadriver $areadriver)
    {
        if ($areadriver->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.areadrivers.delete_error'));
    }
}

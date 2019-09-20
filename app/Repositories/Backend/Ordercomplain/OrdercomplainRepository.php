<?php

namespace App\Repositories\Backend\Ordercomplain;

use DB;
use Carbon\Carbon;
use App\Models\Ordercomplain\Ordercomplain;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdercomplainRepository.
 */
class OrdercomplainRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Ordercomplain::class;

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
                config('module.ordercomplains.table').'.id',
                config('module.ordercomplains.table').'.created_at',
                config('module.ordercomplains.table').'.updated_at',
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
        $ordercomplain = self::MODEL;
        $ordercomplain = new $ordercomplain();
        if ($ordercomplain->save($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.ordercomplains.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Ordercomplain $ordercomplain
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Ordercomplain $ordercomplain, array $input)
    {
    	if ($ordercomplain->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.ordercomplains.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Ordercomplain $ordercomplain
     * @throws GeneralException
     * @return bool
     */
    public function delete(Ordercomplain $ordercomplain)
    {
        if ($ordercomplain->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.ordercomplains.delete_error'));
    }
}

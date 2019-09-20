<?php

namespace App\Repositories\Backend\Laundry;

use DB;
use Carbon\Carbon;
use App\Models\Laundry\Laundry;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LaundryRepository.
 */
class LaundryRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Laundry::class;

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
                config('module.laundries.table') . '.id',
                config('module.laundries.table') . '.name',
                config('module.laundries.table') . '.created_at',
                config('module.laundries.table') . '.updated_at',
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
        $laundry = self::MODEL;
        $laundry = new $laundry();
        if ($laundry->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.laundries.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Laundry $laundry
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Laundry $laundry, array $input)
    {
        if ($laundry->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.laundries.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Laundry $laundry
     * @throws GeneralException
     * @return bool
     */
    public function delete(Laundry $laundry)
    {
        if ($laundry->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.laundries.delete_error'));
    }
}

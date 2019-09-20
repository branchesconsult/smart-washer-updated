<?php

namespace App\Repositories\Backend\Service;

use DB;
use Carbon\Carbon;
use App\Models\Service\Service;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceRepository.
 */
class ServiceRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Service::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return Service::all();
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
        $service = self::MODEL;
        $service = new $service();
        if ($service->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.services.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Service $service
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Service $service, array $input)
    {
        if ($service->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.services.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Service $service
     * @throws GeneralException
     * @return bool
     */
    public function delete(Service $service)
    {
        if ($service->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.services.delete_error'));
    }
}

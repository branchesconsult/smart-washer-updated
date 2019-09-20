<?php

namespace App\Repositories\Backend\User_Device;

use DB;
use Carbon\Carbon;
use App\Models\User_Device\Userdevice;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserdeviceRepository.
 */
class UserdeviceRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Userdevice::class;

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
                config('module.userdevices.table').'.id',
                config('module.userdevices.table').'.created_at',
                config('module.userdevices.table').'.updated_at',
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
        $userdevice = self::MODEL;
        $userdevice = new $userdevice();
        if ($userdevice->save($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.userdevices.create_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Userdevice $userdevice
     * @throws GeneralException
     * @return bool
     */
    public function delete(Userdevice $userdevice)
    {
        if ($userdevice->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.userdevices.delete_error'));
    }
}

<?php

namespace App\Repositories\Backend\Pushnotification;

use DB;
use Carbon\Carbon;
use App\Models\Pushnotification\Pushnotification;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PushnotificationRepository.
 */
class PushnotificationRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Pushnotification::class;

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
                config('module.pushnotifications.table') . '.id',
                config('module.pushnotifications.table') . '.title',
                config('module.pushnotifications.table') . '.notification_text',
                config('module.pushnotifications.table') . '.created_at',
                config('module.pushnotifications.table') . '.updated_at',
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
        $pushnotification = self::MODEL;
        $pushnotification = new $pushnotification();
        if ($pushnotification->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.pushnotifications.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Pushnotification $pushnotification
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Pushnotification $pushnotification, array $input)
    {
        if ($pushnotification->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.pushnotifications.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Pushnotification $pushnotification
     * @throws GeneralException
     * @return bool
     */
    public function delete(Pushnotification $pushnotification)
    {
        if ($pushnotification->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.pushnotifications.delete_error'));
    }
}

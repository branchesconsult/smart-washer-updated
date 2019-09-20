<?php

namespace App\Repositories\Backend\Locations;

use App\Exceptions\GeneralException;
use App\Models\Locations\Location;
use App\Repositories\BaseRepository;

/**
 * Class LocationsRepository.
 */
class LocationsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Location::class;

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                'id','name','currency_code','currency_symbol'
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        $input['payment_method'] = json_encode($input['payment_method']);
        if (\DB::table('locations')->insert(
            ['name' => $input['name'],'currency_code' => $input['currency_code'],'currency_symbol' => $input['currency_symbol'],'open_time'=>$input['open_time'],'close_time'=>$input['close_time'],'delievery_margin'=>$input['delievery_margin'],'is_shop_close'=>$input['is_shop_close'],'payment_method'=>$input['payment_method']]
        )) {
            return true;
        }
        throw new GeneralException("Location not created.");
    }

    /**
     * @param \App\Models\Locations\Location $location
     * @param array                $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Location $location, array $input)
    {
        $input['payment_method'] = json_encode($input['payment_method']);
        //If location updated successfully
        if ($location->update($input)) {
            return true;
        }

        throw new GeneralException("Location not updated.");
    }

    /**
     * @param \App\Models\Locations\Location $location
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Location $location)
    {

        if ($location->delete()) {
            return true;
        }

        throw new GeneralException("Location not deleted.");
    }

    /**
     * @param \App\Models\Location\Location $location
     * @param string               $status
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function mark(Location $location, $status)
    {
        $location->status = $status;

        if ($location->save()) {
            return true;
        }

        throw new GeneralException("Location not updated");
    }
}

<?php

namespace App\Repositories\Backend\Address;

use App\Models\Laundry\Laundry;
use DB;
use Carbon\Carbon;
use App\Models\Address\Address;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use GeoJson\Geometry\Point;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

/**
 * Class AddressRepository.
 */
class AddressRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Address::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable($addressable_id, $addressable_type)
    {
        switch ($addressable_type) {
            case Config::get('constants.TYPE_LAUNDRY'):
                return Laundry::find($addressable_id)->address();
                break;
        }
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
        $address = self::MODEL;
        $address = new $address();
        //Saving address
        $address = new Address($input);
        switch ($input['addressable_type']) {
            case 'laundry':
                $addressable = Laundry::find($input['addressable_id']);
                break;
            case 'user':
                break;
        }
        if ($addressable->address()->save($address)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.addresses.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Address $address
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Address $address, array $input)
    {
        if ($address->update($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.addresses.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Address $address
     * @throws GeneralException
     * @return bool
     */
    public function delete(Address $address)
    {
        if ($address->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.addresses.delete_error'));
    }
}

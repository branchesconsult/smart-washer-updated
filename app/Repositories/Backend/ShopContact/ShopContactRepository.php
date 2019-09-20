<?php

namespace App\Repositories\Backend\ShopContact;

use DB;
use Carbon\Carbon;
use App\Models\ShopContact\ShopContact;
use App\Models\Locations\Location;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactRepository.
 */
class ShopContactRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = ShopContact::class;
    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return ShopContact::with('location')
            ->orderBy('id', 'DESC')
            ->get();
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
        $contact = self::MODEL;
        $contact = new $contact();
        $contact->phone = $input['phone'];
        $contact->address = $input['address'];
        $contact->city = $input['city'];
        $contact->location_id = $input['location_id'];
        $contact->description = $input['description'];
        if ($contact->save()) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.contacts.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Contact $contact
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(ShopContact $contact, array $input)
    {


        \DB::table('shop_contacts')->where(['id'=>$input['id']])
        ->update([
            'phone'=>$input['phone'],
            'address'=>$input['address'],
            'city'  =>  $input['city'],
            'location_id'  =>  $input['location_id'],
            'description'  =>  $input['description']
        ]);
        //dd($shopcontact);

            return true;

        throw new GeneralException(trans('exceptions.backend.contacts.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Contact $contact
     * @throws GeneralException
     * @return bool
     */
    public function delete(ShopContact $contact)
    {

        if ($contact->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.contacts.delete_error'));
    }
}

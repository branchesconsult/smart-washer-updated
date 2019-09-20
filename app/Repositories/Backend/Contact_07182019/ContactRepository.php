<?php

namespace App\Repositories\Backend\Contact;

use DB;
use Carbon\Carbon;
use App\Models\Contact\Contact;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactRepository.
 */
class ContactRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Contact::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return Contact::with('user')
            ->where('order_id', NULL)
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
        if ($contact->save($input)) {
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
    public function update(Contact $contact, array $input)
    {
        if ($contact->update($input))
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
    public function delete(Contact $contact)
    {
        if ($contact->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.contacts.delete_error'));
    }
}

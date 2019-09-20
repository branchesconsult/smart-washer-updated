<?php

namespace App\Http\Controllers\Backend\ShopContact;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\ShopContact\ShopContactRepository;
use App\Http\Requests\Backend\ShopContact\ManageShopContactRequest;

/**
 * Class ContactsTableController.
 */
class ShopContactsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var ShopContactRepository
     */
    protected $contact;

    /**
     * contructor to initialize repository object
     * @param ShopContactRepository $contact ;
     */
    public function __construct(ShopContactRepository $contact)
    {
        $this->contact = $contact;
    }

    /**
     * This method return the data of the model
     * @param ManageShopContactRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageShopContactRequest $request)
    {
        return Datatables::of($this->contact->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($contact) {
                return Carbon::parse($contact->created_at)->toDateTimeString();
            })
            ->addColumn('actions', function ($contact) {
                return $contact->action_buttons;
            })
            ->make(true);
    }
}

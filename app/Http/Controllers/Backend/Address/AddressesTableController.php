<?php

namespace App\Http\Controllers\Backend\Address;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Address\AddressRepository;
use App\Http\Requests\Backend\Address\ManageAddressRequest;

/**
 * Class AddressesTableController.
 */
class AddressesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var AddressRepository
     */
    protected $address;

    /**
     * contructor to initialize repository object
     * @param AddressRepository $address ;
     */
    public function __construct(AddressRepository $address)
    {
        $this->address = $address;
    }

    /**
     * This method return the data of the model
     * @param ManageAddressRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageAddressRequest $request)
    {
        $addressable_id = $request->get('addressable_id');
        $addressable_type = $request->get('addressable_type');
        return Datatables::of($this->address->getForDataTable($addressable_id, $addressable_type))
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($address) {
                return Carbon::parse($address->created_at)->toDateString();
            })
            ->addColumn('phone', function ($address) {
                return $address->phone;
            })
            ->addColumn('city', function ($address) {
                return $address->city;
            })
            ->addColumn('location', function ($address) {
                $lat = $address->location->getLat();
                $lng = $address->location->getLng();
                $data['lat'] = $lat;
                $data['lng'] = $lng;
                $data['address'] = implode($data);
                return json_encode($data);
            })
            ->addColumn('actions', function ($address) {
                return $address->action_buttons;
            })
            ->make(true);
    }
}

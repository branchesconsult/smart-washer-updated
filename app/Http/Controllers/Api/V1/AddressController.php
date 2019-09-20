<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Requests\Frontend\User\AddressRequest;
use App\Http\Resources\AddressResource;
use App\Models\Access\User\User;
use App\Models\Address\Address;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @resource Address
 *
 * All Address related functions
 */
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = User::find(\Auth::id())->addresses()->get();
        return new AddressResource($addresses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request)
    {
        $user = User::find(\Auth::id());
        $addressData['building_name'] = $request->get('building_name');
        $addressData['address'] = $request->get('address');
        $addressData['address2'] = $request->get('address2');
        $addressData['city'] = $request->get('city');
        $addressData['district'] = $request->get('district');
        $addressData['postal_code'] = $request->get('postal_code');
        $addressData['phone'] = $request->get('phone');
        $addressData['location'] = implode(',', [$request->get('lat'), $request->get('lng')]);
        $address = new Address($addressData);
        $user->addresses()->save($address);
        return new AddressResource($address);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddressRequest $request, $id)
    {
        $address = Address::find($id);
        $address->building_name = $request->get('building_name');
        $address->address = $request->get('address');
        $address->address2 = $request->get('address2');
        $address->city = $request->get('city');
        $address->district = $request->get('district');
        $address->postal_code = $request->get('postal_code');
        $address->phone = $request->get('phone');
        $address->location = implode(',', [$request->get('lat'), $request->get('lng')]);
        if ($address->addressable_id == \Auth::id()) {
            $address->save();
        }
        return new AddressResource($address);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Address::findOrFail($id)->delete();
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => trans('address.destroy.fail.message'),
                'message_title' => trans('address.destroy.fail.message_title'),
            ], 400);
        }
        return response()->json([
            'success' => true,
            'message' => trans('address.destroy.success.message'),
            'message_title' => trans('address.destroy.success.message_title'),
        ]);
    }
}

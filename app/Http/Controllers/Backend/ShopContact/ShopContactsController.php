<?php

namespace App\Http\Controllers\Backend\ShopContact;

use App\Models\ShopContact\ShopContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\ShopContact\ShopContactRepository;
use App\Http\Requests\Backend\ShopContact\ManageShopContactRequest;
use App\Http\Requests\Backend\ShopContact\CreateShopContactRequest;
use App\Http\Requests\Backend\ShopContact\StoreShopContactRequest;
use App\Http\Requests\Backend\ShopContact\EditShopContactRequest;
use App\Http\Requests\Backend\ShopContact\UpdateShopContactRequest;
use App\Http\Requests\Backend\ShopContact\DeleteShopContactRequest;
use App\Models\Locations\Location;
/**
 * ContactsController
 */
class ShopContactsController extends Controller
{
    /**
     * variable to store the repository object
     * @var ShopContactRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param ShopContactRepository $repository ;
     */
    public function __construct(ShopContactRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\ShopContact\ManageShopContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageShopContactRequest $request)
    {
        return view('backend.shopcontacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateShopContactRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateShopContactRequest $request)
    {
        $countries = Location::all();
        $contact = new ShopContact();
        return view('backend.shopcontacts.create', compact('countries','contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreShopContactRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopContactRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.shopcontacts.index')->withFlashSuccess(trans('alerts.backend.contacts.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\ShopContact\ShopContact $contact
     * @param  EditShopContactRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopContact $contact, EditShopContactRequest $request)
    {
        $cid = $request->segment(3);
        $contact = ShopContact::where('id', $cid)->first();
        $countries = Location::all();
        return view('backend.shopcontacts.edit', compact('contact','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateShopContactRequestNamespace $request
     * @param  App\Models\ShopContact\ShopContact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopContactRequest $request, ShopContact $contact)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update($contact, $input);
        //return with successfull message
        return redirect()->route('admin.shopcontacts.index')->withFlashSuccess(trans('alerts.backend.contacts.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteShopContactRequestNamespace $request
     * @param  App\Models\ShopContact\ShopContact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopContact $contact, DeleteShopContactRequest $request)
    {
        //Calling the delete method on repository
        $cid = $request->segment(3);
        $contact = ShopContact::find($cid);
        $this->repository->delete($contact);
        //returning with successfull message
        return redirect()->route('admin.shopcontacts.index')->withFlashSuccess(trans('alerts.backend.contacts.deleted'));
    }

}

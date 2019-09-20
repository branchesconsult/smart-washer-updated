<?php

namespace App\Http\Controllers\Backend\Laundry;

use App\Models\Access\User\User;
use App\Models\Areadriver\Areadriver;
use App\Models\Laundry\Laundry;
use App\Models\LaundryUser\LaundryUser;
use Grimzy\LaravelMysqlSpatial\Types\LineString;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Laundry\LaundryRepository;
use App\Http\Requests\Backend\Laundry\ManageLaundryRequest;
use App\Http\Requests\Backend\Laundry\CreateLaundryRequest;
use App\Http\Requests\Backend\Laundry\StoreLaundryRequest;
use App\Http\Requests\Backend\Laundry\EditLaundryRequest;
use App\Http\Requests\Backend\Laundry\UpdateLaundryRequest;
use App\Http\Requests\Backend\Laundry\DeleteLaundryRequest;
use Grimzy\LaravelMysqlSpatial\Types\MultiPolygon;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;

/**
 * LaundriesController
 */
class LaundriesController extends Controller
{
    /**
     * variable to store the repository object
     * @var LaundryRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param LaundryRepository $repository ;
     */
    public function __construct(LaundryRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Laundry\ManageLaundryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageLaundryRequest $request)

    {
//
        return view('backend.laundries.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateLaundryRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateLaundryRequest $request)
    {
        return view('backend.laundries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreLaundryRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaundryRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.laundries.index')->withFlashSuccess(trans('alerts.backend.laundries.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Laundry\Laundry $laundry
     * @param  EditLaundryRequestNamespace $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Laundry $laundry, EditLaundryRequest $request)
    {
        $data['laundry'] = $laundry;
        $alreadyAddedUSers = LaundryUser::all()->toArray();
        $alreadyAddedUserIds = [];
        if (!empty($alreadyAddedUSers)) {
            $alreadyAddedUserIds = array_column($alreadyAddedUSers, 'user_id');
        }
        $data['laundry_owners'] = User::whereHas('roles', function ($q) {
            $q->where('name', 'Laundry');
        })
            ->whereNotIn('id', $alreadyAddedUserIds)
            ->select('email', 'id')->get()->pluck('email', 'id');
        $data['laundry_drivers'] = User::whereHas('roles', function ($q) {
            $q->where('name', 'Driver');
        })->whereNotIn('id', $alreadyAddedUserIds)->select('email', 'id')->get()->pluck('email', 'id');
        return view('backend.laundries.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateLaundryRequestNamespace $request
     * @param  App\Models\Laundry\Laundry $laundry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaundryRequest $request, Laundry $laundry)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update($laundry, $input);
        //return with successfull message
        return redirect()->route('admin.laundries.index')->withFlashSuccess(trans('alerts.backend.laundries.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteLaundryRequestNamespace $request
     * @param  App\Models\Laundry\Laundry $laundry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laundry $laundry, DeleteLaundryRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($laundry);
        //returning with successfull message
        return redirect()->route('admin.laundries.index')->withFlashSuccess(trans('alerts.backend.laundries.deleted'));
    }

    /**
     * Assign owner or driver to laundry
     * @param Request $request
     * @param $laundryId
     */
    public function assignLaundryUser(Request $request, $laundryId)
    {

        $laundry_user_arr = [];
        if ($request->has('driver_area')) {
            $driverArea = json_decode($request->get('driver_area'), true);
            $driverAreaPoints = [];
            $areaPointsArr = [];
            foreach ($driverArea as $key => $val) {
                $val = array_merge($val, [['lat' => $val[0]['lat'], 'lng' => $val[0]['lng']]]);
                foreach ($val as $k1 => $v1) {
                    $driverAreaPoints[$key][] = $v1['lat'] . ' ' . $v1['lng'];
                }
            }
            foreach ($driverAreaPoints as $key => $val) {
                $areaPointsArr[] = Polygon::fromString('(' . implode(',', $val) . ')');
            }
            $laundry_user_arr['driver_area'] = new MultiPolygon($areaPointsArr);
        }

        $laundry_user_arr['relation'] = $request->get('relation');
        $laundry_user_arr['laundry_id'] = $laundryId;
        $laundry_user_arr['user_id'] = $request->get('laundry_user');
        \App\Models\LaundryUser\LaundryUser::updateOrCreate([
            'laundry_id' => $laundryId,
            'user_id' => $request->get('laundry_user')
        ], $laundry_user_arr);
        return redirect()->back()->withFlashSuccess('Laundry ' . $request->get('relation') . ' added sucessfully.');
    }

}

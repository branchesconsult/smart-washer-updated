<?php

namespace App\Http\Controllers\Backend\Access\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Access\User\CreateUserRequest;
use App\Http\Requests\Backend\Access\User\DeleteUserRequest;
use App\Http\Requests\Backend\Access\User\EditUserRequest;
use App\Http\Requests\Backend\Access\User\ManageUserRequest;
use App\Http\Requests\Backend\Access\User\ShowUserRequest;
use App\Http\Requests\Backend\Access\User\StoreUserRequest;
use App\Http\Requests\Backend\Access\User\UpdateUserRequest;
use App\Http\Responses\Backend\Access\User\CreateResponse;
use App\Http\Responses\Backend\Access\User\EditResponse;
use App\Http\Responses\Backend\Access\User\ShowResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Access\Permission\Permission;
use App\Models\Access\User\User;
use App\Models\LaundryUser\LaundryUser;
use App\Repositories\Backend\Access\Role\RoleRepository;
use App\Repositories\Backend\Access\User\UserRepository;

/**
 * Class UserController.
 */
class UserController extends Controller
{
    /**
     * @var \App\Repositories\Backend\Access\User\UserRepository
     */
    protected $users;

    /**
     * @var \App\Repositories\Backend\Access\Role\RoleRepository
     */
    protected $roles;

    /**
     * @param \App\Repositories\Backend\Access\User\UserRepository $users
     * @param \App\Repositories\Backend\Access\Role\RoleRepository $roles
     */
    public function __construct(UserRepository $users, RoleRepository $roles)
    {
        $this->users = $users;
        $this->roles = $roles;
    }

    /**
     * @param \App\Http\Requests\Backend\Access\User\ManageUserRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageUserRequest $request)
    {
        return new ViewResponse('backend.access.users.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Access\User\CreateUserRequest $request
     *
     * @return \App\Http\Responses\Backend\Access\User\CreateResponse
     */
    public function create(CreateUserRequest $request)
    {
        $roles = $this->roles->getAll();

        return new CreateResponse($roles);
    }

    /**
     * @param \App\Http\Requests\Backend\Access\User\StoreUserRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        $this->users->create($request);
        return new RedirectResponse(route('admin.access.user.index'),
            ['flash_success' => trans('alerts.backend.users.created')]);
    }

    /**
     * @param \App\Models\Access\User\User $user
     * @param \App\Http\Requests\Backend\Access\User\ShowUserRequest $request
     *
     * @return \App\Http\Responses\Backend\Access\User\ShowResponse
     */
    public function show(User $user, ShowUserRequest $request)
    {
        $driverAreaOnMap = [];
        $coorArr = [];
        $resCoorArr = [];
        if ($user->hasRole('Driver') && $request->has('laundry_id')) {
            $user['driverAreaOnMap'] = LaundryUser::where('user_id', $user->id)
                ->where('laundry_id', $request->get('laundry_id'))
                ->select(['driver_area'])
                ->first()->toArray();
            $user['driverAreaOnMap'] = $user['driverAreaOnMap']['driver_area'];
            $coorArr = json_decode(json_encode($user['driverAreaOnMap']), true)['coordinates'];
        }

        //I know this is bad but there is no way
        foreach ($coorArr as $key => $val) {
            foreach ($val as $k1 => $v1) {
                foreach ($v1 as $k2 => $v2) {
                    $resCoorArr[$key][$k2]['lat'] = $v2[0];
                    $resCoorArr[$key][$k2]['lng'] = $v2[1];
                }
            }
        }
        $user['driverCoords'] = json_encode($resCoorArr);
        //dd($resCoorArr, $user['driverCoords']);
        return new ShowResponse($user);
    }

    /**
     * @param \App\Models\Access\User\User $user
     * @param \App\Http\Requests\Backend\Access\User\EditUserRequest $request
     *
     * @return \App\Http\Responses\Backend\Access\User\EditResponse
     */
    public function edit(User $user, EditUserRequest $request)
    {
        $roles = $this->roles->getAll();
        $permissions = Permission::getSelectData('display_name');

        return new EditResponse($user, $roles, $permissions);
    }

    /**
     * @param \App\Models\Access\User\User $user
     * @param \App\Http\Requests\Backend\Access\User\UpdateUserRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(User $user, UpdateUserRequest $request)
    {
        $this->users->update($user, $request);

        return new RedirectResponse(route('admin.access.user.index'), ['flash_success' => trans('alerts.backend.users.updated')]);
    }

    /**
     * @param \App\Models\Access\User\User $user
     * @param \App\Http\Requests\Backend\Access\User\DeleteUserRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(User $user, DeleteUserRequest $request)
    {
        $this->users->delete($user);

        return new RedirectResponse(route('admin.access.user.index'), ['flash_success' => trans('alerts.backend.users.deleted')]);
    }
}

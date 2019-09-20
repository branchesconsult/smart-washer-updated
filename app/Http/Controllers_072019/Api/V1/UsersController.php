<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Frontend\User\ChangePasswordRequest;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\Http\Resources\UserResource;
use App\Models\Access\User\User;
use App\Repositories\Backend\Access\User\UserRepository;
use Illuminate\Http\Request;
use Unisharp\FileApi\FileApi;
use Validator;

/**
 * @resource Users
 *
 * All user related functions
 */
class UsersController extends APIController
{
    protected $repository;

    /**
     * __construct.
     *
     * @param $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return the users.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $limit = $request->get('paginate') ? $request->get('paginate') : 25;

        return UserResource::collection(
            $this->repository->getForDataTable(1, false)->paginate($limit)
        );
    }

    /**
     * Return the specified resource.
     *
     * @param User $user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Create User.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UpdateProfileRequest $request)
    {

    }

    /**
     * Update profile.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request)
    {
        $userData['first_name'] = '';
        $userData['last_name'] = '';
        $userData = $request->all();
        $userFullName = splitName($userData['full_name']);
//        if ($userData['full_name'] == trim($userData['full_name']) && strpos($userData['full_name'], ' ') !== false) {
//            $userData['first_name'] = strstr($userData['full_name'], ' ', true);
//            $userData['last_name'] = strstr($userData['full_name'], ' ', false);
//        } else {
//            $userData['first_name'] = $userData['full_name'];
//        }
        if ($request->hasFile('profile_pic')) {
            $picPath = 'public/photos/shares/users';
            $fileApi = new FileApi($picPath);
            $userData['profile_pic'] = str_replace('public/', 'storage/', $picPath) . '/' . $fileApi->save($request->file('profile_pic'));
        } else {
            $userData['profile_pic'] = null;
        }

        $userId = \Auth::id();
        $user = User::find($userId);
        $user->first_name = $userFullName['first_name'];
        $user->last_name = $userFullName['last_name'];
        $user->phone = $request->phone;
        $user->profile_pic = $userData['profile_pic'];
        $user->save();
        //$user->profile_pic = asset($userData['profile_pic']);
        return response()->json([
                'user' => $user,
                'message' => 'Profile updated',
                'message_title' => 'Success']
        );
    }

    /**
     * Delete User.
     *
     * @param User $user
     * @param Request $request
     *
     * @return mixed
     */
    public function destroy(User $user, Request $request)
    {
        $this->repository->delete($user);

        return $this->respond([
            'message' => trans('alerts.backend.users.deleted'),
        ]);
    }

    /**
     * Delete All User.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function deleteAll(Request $request)
    {
        $ids = $request->get('ids');

        if (isset($ids) && !empty($ids)) {
            $result = $this->repository->deleteAll($ids);
        }

        if ($result) {
            return $this->respond([
                'message' => trans('alerts.backend.users.deleted'),
            ]);
        }

        return $this->respond([
            'message' => trans('exceptions.backend.access.users.not_found'),
        ]);
    }

    /**
     * validateUser User.
     *
     * @param $request
     * @param $action
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function validateUser(Request $request, $action = '', $id = 0)
    {
        $password = ($action == 'edit') ? '' : 'required|min:6|confirmed';

        $validation = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users,email,' . $id,
            'password' => $password,
            'assignees_roles' => 'required',
            'permissions' => 'required',
        ]);

        return $validation;
    }

    /**
     * Update user password within profile
     */

    public function updatePassword(ChangePasswordRequest $request)
    {
        $oldPass = $request->get('old_password');
        $requestedPass = bcrypt($request->get('password'));
        $user = User::find(\Auth::id());
        if (\Hash::check($oldPass, $user->password)) {
            $user->password = $requestedPass;
            $user->save();
            return response()->json([
                'status' => 'ok',
                'message' => tras('passwords.success.message'),
                'message_title' => trans('passwords.success.message_title')
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => trans('passwords.old.wrong'),
            'message_title' => trans('passwords.old.message_title')
        ]);
    }
}

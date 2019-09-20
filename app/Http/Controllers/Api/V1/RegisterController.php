<?php

namespace App\Http\Controllers\Api\V1;

use App\Events\Backend\Access\User\UserCreated;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use App\Http\Requests\Frontend\Auth\RegisterAndroidRequest;
use App\Http\Requests\Frontend\Auth\SocialLoginRequest;
use App\Models\Access\User\User;
use App\Repositories\Frontend\Access\User\UserRepository;
use Config;
use Illuminate\Http\Request;
use JWTAuth;
use Unisharp\FileApi\FileApi;
use Validator;

/**
 * @resource Auth
 *
 * All auth related functions
 */
class RegisterController extends APIController
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
     * Register User.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $userData['first_name'] = '';
        $userData['last_name'] = '';
        $userData = $request->all();
        if ($userData['full_name'] == trim($userData['full_name']) && strpos($userData['full_name'], ' ') !== false) {
            $userData['first_name'] = strstr($userData['full_name'], ' ', true);
            $userData['last_name'] = strstr($userData['full_name'], ' ', false);
        } else {
            $userData['first_name'] = $userData['full_name'];
        }
        $userData['is_term_accept'] = ($request->get('is_term_accept')) ? $request->get('is_term_accept') : 1;

        if ($request->hasFile('profile_pic')) {
            $picPath = 'public/photos/shares/users';
            $fileApi = new FileApi($picPath);
            $userData['profile_pic'] = str_replace('public/', 'laravel-filemanager/', $picPath) . '/' . $fileApi->save($request->file('profile_pic'));
        } else {
            $userData['profile_pic'] = null;
        }
        $user = $this->repository->create(array_except($userData, 'full_name'));
        if (!Config::get('api.register.release_token')) {
            return $this->respondCreated([
                'message' => trans('api.messages.registeration.success'),
            ]);
        }

        $token = JWTAuth::fromUser($user);

        if (!empty($request->get('device_token'))) {
            $deviceToken = [
                'device_token' => $request->get('device_token'),
            ];
            $deviceInfo = [
                'agent_info' => $request->server('HTTP_USER_AGENT')
            ];
            User::find($user->id)->devices()->updateOrCreate($deviceToken, $deviceInfo);
        }
        event(new UserCreated(User::find($user->id)));
        return $this->respondCreated([
            'message' => trans('api.messages.registeration.success'),
            'token' => $token,
            'user' => User::find($user->id)
        ]);
    }

    /**
     * Register User.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerAndroid(RegisterAndroidRequest $request)
    {
        $userData['first_name'] = '';
        $userData['last_name'] = '';
        $userData = $request->all();
        if ($userData['full_name'] == trim($userData['full_name']) && strpos($userData['full_name'], ' ') !== false) {
            $userData['first_name'] = strstr($userData['full_name'], ' ', true);
            $userData['last_name'] = strstr($userData['full_name'], ' ', false);
        } else {
            $userData['first_name'] = $userData['full_name'];
        }
        $userData['is_term_accept'] = ($request->get('is_term_accept')) ? $request->get('is_term_accept') : 1;
        $prev_user = User::where('email',$request->email)->first();
        if(!empty($prev_user)){
            return response()->json(['error'=>
                ['message' => trans('auth.register.email.unique')],
                'status_code' => 422
            ]);
        }

        if ($request->hasFile('profile_pic')) {
            $picPath = 'public/photos/shares/users';
            $fileApi = new FileApi($picPath);
            $userData['profile_pic'] = str_replace('public/', 'laravel-filemanager/', $picPath) . '/' . $fileApi->save($request->file('profile_pic'));
        } else {
            $userData['profile_pic'] = null;
        }
        $user = $this->repository->create(array_except($userData, 'full_name'));
        if (!Config::get('api.register.release_token')) {
            return $this->respondCreated([
                'message' => trans('api.messages.registeration.success'),
            ]);
        }

        $token = JWTAuth::fromUser($user);

        if (!empty($request->get('device_token'))) {
            $deviceToken = [
                'device_token' => $request->get('device_token'),
            ];
            $deviceInfo = [
                'agent_info' => $request->server('HTTP_USER_AGENT')
            ];
            User::find($user->id)->devices()->updateOrCreate($deviceToken, $deviceInfo);
        }
        event(new UserCreated(User::find($user->id)));
        return $this->respondCreated([
            'message' => trans('api.messages.registeration.success'),
            'token' => $token,
            'user' => User::find($user->id)
        ]);
    }

    /**
     * login via facebook.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function socialLogin(SocialLoginRequest $request)
    {
        $userData['first_name'] = '';
        $userData['last_name'] = '';
        $userData = $request->all();
        $user = User::where('fb_id', $request->get('fb_id'));
        if ($request->has('email') && !empty($request->get('email'))) {
            $user = $user->orWhere('email', $request->get('email'));
        }
        $user = $user->first();
        //dd($userData);
        if (empty($user)) {
            if ($userData['full_name'] == trim($userData['full_name']) && strpos($userData['full_name'], ' ') !== false) {
                $userData['first_name'] = strstr($userData['full_name'], ' ', true);
                $userData['last_name'] = strstr($userData['full_name'], ' ', false);
            } else {
                $userData['first_name'] = $userData['full_name'];
            }
            $userData['is_term_accept'] = ($request->get('is_term_accept')) ? $request->get('is_term_accept') : 1;
            $userData['profile_pic'] = $request->get('profile_pic');
            $userData['fb_id'] = $userData['fb_id'];
            $userData['password'] = mt_rand(111111, 99999999);
            if ($request->has('email') && !empty($request->get('email'))) {
                $user = $this->repository->create(array_except($userData, 'full_name'));
                event(new UserCreated(User::find($user->id)));
            } else {
                return response()->json(['error' => true,
                    'message' => 'Please provide your email']);
            }
        }

        $token = \JWTAuth::fromUser($user);

        if (!empty($request->get('device_token'))) {
            $deviceToken = [
                'device_token' => $request->get('device_token'),
            ];
            $deviceInfo = [
                'agent_info' => $request->server('HTTP_USER_AGENT')
            ];
            User::find($user->id)->devices()->updateOrCreate($deviceToken, $deviceInfo);
        }
        return $this->respondCreated([
            'message' => trans('api.messages.registeration.success'),
            'token' => $token,
            'user' => User::find($user->id)
        ]);
    }
}

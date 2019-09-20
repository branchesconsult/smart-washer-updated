<?php


namespace App\Http\Controllers\Api\V1;

use App\Helpers\Auth\Auth;
use App\Http\Requests\Frontend\Auth\LoginRequest;
use App\Http\Requests\Frontend\Auth\LogoutRequest;
use App\Http\Requests\Frontend\Auth\SocialLoginRequest;
use App\Models\Access\User\User;
use App\Models\Device\Device;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Validator;

/**
 * @resource Auth
 *
 * All auth related functions
 */
class AuthController extends APIController
{
    /**
     * Log the user in.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return $this->throwValidation(trans('api.messages.login.failed'));
            } else {
                if (!empty($request->get('device_token'))) {
                    $deviceToken = [
                        'device_token' => $request->get('device_token'),
                    ];
                    $deviceInfo = [
                        'agent_info' => $request->server('HTTP_USER_AGENT')
                    ];
                    //Delete all previous devices
                    User::find(\Auth::id())->devices()->delete();
                    User::find(\Auth::id())->devices()
                        ->updateOrCreate($deviceToken, $deviceInfo);
                }
            }
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        return $this->respond([
            'message' => trans('api.messages.login.success'),
            'token' => $token,
            'user' => User::find(\Auth::id())
        ]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(LogoutRequest $request)
    {
        $fcmToken = $request->get('fcm_token');
        Device::where('device_token', $fcmToken)->delete();
        try {
            $token = JWTAuth::getToken();
            if ($token) {
                JWTAuth::invalidate($token);
            }
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }
        return $this->respond([
            'message' => trans('api.messages.logout.success'),
        ]);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public
    function refresh()
    {
        $token = JWTAuth::getToken();

        if (!$token) {
            $this->respondUnauthorized(trans('api.messages.refresh.token.not_provided'));
        }

        try {
            $refreshedToken = JWTAuth::refresh($token);
        } catch (JWTException $e) {
            return $this->respondInternalError($e->getMessage());
        }

        return $this->respond([
            'status' => trans('api.messages.refresh.status'),
            'token' => $refreshedToken,
            'message' => 'Successfully logout',
            'message_title' => 'Success'
        ]);
    }
}

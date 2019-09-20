<?php


namespace App\Http\Controllers\Api\V1;

use App\Helpers\Auth\Auth;
use App\Http\Requests\Frontend\Auth\LoginRequest;
use App\Http\Requests\Frontend\Auth\LogoutRequest;
use App\Http\Requests\Frontend\Auth\SocialLoginRequest;
use App\Models\Access\User\User;
use App\Models\Device\Device;
use App\Models\Locations\Location;
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
        $lat = isset($_REQUEST['lat']) ? $_REQUEST['lat'] : null;
        $long = isset($_REQUEST['lng']) ? $_REQUEST['lng'] : null;
        $loc = isset($_REQUEST['location']) ? $_REQUEST['location'] : null;
        if($lat != null){
            $geocode=file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$long.'&sensor=false&key=AIzaSyBiISc2o96q9Jvr_l_VQ86aqCW6UAsYALw');
            $output= json_decode($geocode);
            $city = null;
            for($j=0;$j<count($output->results[0]->address_components);$j++){
                $cn=array($output->results[0]->address_components[$j]->types[0]);
                if(in_array("country", $cn)){
                    $country_long_name= $output->results[0]->address_components[$j]->long_name;
                    $country_short_name= $output->results[0]->address_components[$j]->short_name;
                }
                if(in_array("locality", $cn)){
                    $city= $output->results[0]->address_components[$j]->long_name;
                }
            }
            $location = Location::where('name',$country_long_name)->first();
            $currency = $location->currency_code;
        }else{
            $currency = null;
        }
        if($loc != null){
            $location = Location::where('name',$loc)->first();
            $loc_id = $location->id;
        }else{
            $loc_id = 4;
        }

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return $this->respond([
                    'message' => trans('api.messages.login.failed'),
                    'token' => "",
                    'user' => ""
                ]);
            } else {
                if (!empty($request->get('device_token'))) {
                    $deviceToken = [
                        'device_token' => $request->get('device_token'),
                    ];
                    $deviceInfo = [
                        'agent_info' => $request->server('HTTP_USER_AGENT'),
                        'location_id' => $loc_id
                    ];

                    //Delete all previous devices
                    User::find(\Auth::id())->devices()->delete();
                    User::find(\Auth::id())->devices()
                        ->updateOrCreate($deviceToken, $deviceInfo);
                }
            }
        } catch (JWTException $e) {
            return $this->respond([
                'message' => trans('api.messages.login.failed'),
                'token' => "",
                'user' => ""
            ]);
            //return $this->respondInternalError($e->getMessage());
        }



        return $this->respond([
            'message' => trans('api.messages.login.success'),
            'token' => $token,
            'user' => User::find(\Auth::id()),
            'currency_code' => $currency
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

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'general_error' => 'You do not have access to do that.',
    'socialite' => [
        'unacceptable' => ':provider is not an acceptable login type.',
    ],

    'unknown' => 'An unknown error occurred',
    'coupon' => [
        'coupon_code' => ['required' => 'Coupon Code is  required.'],
        'price' => ['required' => 'Price is  required.']
    ],
    'validate' => [
        'success_message' => 'Coupon applied successfully.',
        'success_message_title' => 'Yay!',
    ],
    'expire' => [
        'message' => 'Sorry, code has been expired or invalid!',
    ],
];




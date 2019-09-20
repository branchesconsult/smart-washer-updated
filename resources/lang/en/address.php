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
    'address' => [
        'building_name' => ['required' => 'Building Name is  required.'],
        'address' => ['required' => 'Address is  required.'],
        'address2' => ['required' => 'Address 2  is required'],
        'city' => ['required' => 'City is   required'],
        'district' => ['required' => 'district is required'],
        'postal_code' => ['required' => 'Postal Code is required '],
        'phone' => ['required' => 'Phone is required'],
        'lat' => ['required' => 'Latitude  is required'],
        'lng' => ['required' => 'Longitude is required']

    ],
    'destroy' => [
        'success' => [
            'message' => 'Address deleted successfully',
            'message_title' => 'Success'
        ],
        'fail' => [
            'message' => 'Address not found',
            'message_title' => 'Error!'
        ]
    ],

];




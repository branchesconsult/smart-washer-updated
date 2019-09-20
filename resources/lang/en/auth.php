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
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'unknown' => 'An unknown error occurred',
    'register' => [
        'full_name' => ['required' => 'Full name is  required.'],
        'profile_pic' => ['mimes' => 'Profile pic must be :mimes'],
        'email' => ['email' => 'Email is required',
            'unique' => 'This email has already taken.'],
        'phone' => ['required' => 'Phone is   required'],
        'password' => ['required' => 'Password is required'],
        'password_confirmation' => ['required' => 'Password Confirmation is required '],
        'device_token' => ['required' => 'Device Token is required'],
        'agent_info' => ['required' => 'Agent Info is required']

    ],
    'login' => [
        'email' => ['required' => 'Email is required'],
        'password' => ['required' => 'Password is  required']
    ]
];

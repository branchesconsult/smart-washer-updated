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
    'order' => [
        'products' => ['required' => 'Products is  required.'],
        'payment_method' => ['required' => 'Payment Method is  required.'],
        'coupon_id' => ['required' => 'Coupon Code is  required.'],
        'pickup_time' => ['required' => 'Pickup Time is  required.'],
        'delivery_time' => ['required' => 'Delivery Time is  required.'],
        'user_comments' => ['required' => 'User Comments is  required.'],
        'address' => ['required' => 'address is  required.'],
        'lat' => ['required' => 'Latitude is  required.'],
        'lng' => ['required' => 'Longitude  is  required.'],
        'products[id][qty]' => ['required' => 'Products Quantity is  required.'],
        'products[id]' => ['required' => 'Products  is  required.'],
        'products[id][service_id]' => ['required' => 'Service is  required.']
    ],

    'placed' => [
        'success_message' => 'Your order has been placed',
        'success_message_title' => 'Yay!',
    ],
    'updated' => [
        'success_message' => 'Your order has been updated',
        'success_message_title' => 'Success!',
    ],
    'skip' => [
        'success_message' => 'Your order has been placed',
        'success_message_title' => 'Yay!',
    ]
];




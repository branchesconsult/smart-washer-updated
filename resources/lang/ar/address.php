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

    'failed' => 'لا تتطابق بيانات الاعتماد هذه مع سجلاتنا.',
    'general_error' => 'ليس لديك إمكانية الوصول إلى ذلك.',
    'socialite' => [
        'unacceptable' => ':مقدم الخدمة ليس نوعًا مقبولًا لتسجيل الدخول.',
    ],

    'unknown' => 'حدث خطأ غير معروف',
    'address' => [
        'building_name' => ['required' => 'اسم الموقع مطلوب.'],
        'address' => ['required' => 'العنوان مطلوب.'],
        'address2' => ['required' => 'العنوان 2 مطلوب'],
        'city' => ['required' => 'المدينة مطلوبة'],
        'district' => ['required' => 'الحي مطلوب'],
        'postal_code' => ['required' => 'الرمز البريدي مطلوب'],
        'phone' => ['required' => 'رقم الجوال مطلوب'],
        'lat' => ['required' => 'خط العرض مطلوب '],
        'lng' => ['required' => 'خط الطول مطلوب ']

    ],

    'destroy' => [
        'success' => [
            'message' => 'تم حذف الموقع بنجاح',
            'message_title' => 'مبروك'
        ],
        'fail' => [
            'message' => 'لم يتم العثور على العنوان',
            'message_title' => 'خطأ!'
        ]
    ],
];




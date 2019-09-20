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

    'throttle' => 'عدد محاولات تسجيل الدخول أكثر من اللازم. يرجى المحاولة مرة أخرى: ثانية ثانية.',

    'register' => [
        'full_name' => ['required' => 'الإسم الكامل ضروري.'],
        'profile_pic' => ['mimes' => 'يجب أن تكون صورة الملف الشخصي :mimes'],
        'email' => [
            'email' => 'البريد الالكتروني مطلوب',
            'unique' => 'عذرًا البريد الالكتروني مستخدم سابقا'
        ],
        'phone' => ['required' => 'الهاتف مطلوب'],
        'password' => ['required' => 'كلمة المرور مطلوبة'],
        'password_confirmation' => ['required' => 'تأكيد كلمة المرور مطلوب '],
        'device_token' => ['required' => 'رمز الجهاز مطلوب'],
        'agent_info' => ['required' => 'مطلوب معلومات الوكيل']
    ],
    'login' => [
        'email' => ['required' => 'البريد الالكتروني مطلوب'],
        'password' => ['required' => 'كلمة المرور مطلوبة']
    ]
];

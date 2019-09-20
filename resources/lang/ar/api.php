<?php

return [

    'messages' => [
        'registeration' => [
            'success' => 'لقد سجلت بنجاح. يرجى التحقق من بريدك الالكتروني للتنشيط!',
        ],
        'login' => [
            'success' => 'دخول ناجح.',
            'failed' => 'بيانات الاعتماد غير صالحة! حاول مرة اخرى.',
        ],
        'logout' => [
            'success' => 'تم تسجيل الخروج بنجاح.',
        ],
        'forgot_password' => [
            'success' => 'لقد أرسلنا بريدًا إلكترونيًا مع رابط إعادة تعيين كلمة المرور. يرجى التحقق من البريد الوارد الخاص بك!.',
            'validation' => [
                'email_not_found' => 'هذا البريد الإلكترونى ليس مسجلا.',
            ],
        ],
        'refresh' => [
            'token' => [
                'not_provided' => 'الرمز غير متوفر.',
            ],
            'status' => 'Ok',
        ],
    ],
    'error_title' => 'Error'
];

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
    'profile' => [
        'first_name' => ['required' => 'الإسم الأول مطلوب.'],
        'last_name' => ['required' => 'نشاط اسم مطلوب.'],
        'email'=>   ['required'=>'البريد الالكتروني مطلوب'],
        'state_id' => ['required'=>'الدولة مطلوبة'],
        'city_id'=> ['required'=>'المدينة مطلوبة'],
        'zip_code' => ['required'=> 'الرمز البريدي مطلوب '],
        'ssn'=>['required'=>'SSN مطلوب']
    ],

];





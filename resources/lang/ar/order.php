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
    'order' => [
        'products' => ['required' => 'المنتجات مطلوبة.'],
        'payment_method' => ['required' => 'طريقة الدفع مطلوبة.'],
        'coupon_id' => ['required' => 'رمز القسيمة هو مطلوب.'],
        'pickup_time' => ['required' => 'مطلوب وقت بيك أب.'],
        'delivery_time' => ['required' => 'وقت التسليم هو مطلوب.'],
        'user_comments' => ['required' => 'تعليقات المستخدم مطلوبة.'],
        'address' => ['required' => 'العنوان مطلوب.'],
        'lat' => ['required' => 'مطلوب خط العرض.'],
        'lng' => ['required' => 'خط الطول مطلوب.'],
        'products[id][qty]' => ['required' => 'كمية المنتجات مطلوبة.'],
        'products[id]' => ['required' => 'المنتجات مطلوبة.'],
        'products[id][service_id]' => ['required' => 'الخدمة مطلوبة.'],
    ],
    'placed' => [
        'success_message' => 'تم إنشاء الطلب بنجاح',
        'success_message_title' => 'مبروك!',
    ],
    'updated' => [
        'success_message' => 'تم تحديث طلبك',
        'success_message_title' => 'مبروك!',
    ],
    'skip' => [
        'success_message' => 'تم إنشاء الطلب بنجاح',
        'success_message_title' => 'مبروك!',
    ]
];




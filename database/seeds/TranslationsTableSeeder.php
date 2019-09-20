<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        \DB::table('translations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'translation_key' => 'order_skip_button',
                'translation_en' => 'SKIP',
                'translation_ar' => 'تخطى',
                'created_at' => '2018-08-09 13:38:41',
                'updated_at' => '2018-08-09 13:38:41',
            ),
            1 => 
            array (
                'id' => 3,
                'translation_key' => 'home_label',
                'translation_en' => 'Home',
                'translation_ar' => 'الصفحة الرئيسية',
                'created_at' => '2018-08-10 16:12:53',
                'updated_at' => '2018-08-10 16:12:53',
            ),
            2 => 
            array (
                'id' => 4,
                'translation_key' => 'wash_order_label',
                'translation_en' => 'WASH ORDER',
                'translation_ar' => 'النظام الشمسي',
                'created_at' => '2018-08-10 16:14:43',
                'updated_at' => '2018-08-10 16:14:43',
            ),
            3 => 
            array (
                'id' => 5,
                'translation_key' => 'wash_order_description_label',
                'translation_en' => 'Select your items & pickup/dropoff time and we\'ll take care of the rest',
                'translation_ar' => 'حدد العناصر الخاصة بك ووقت الاستلام / الانقطاع وسنتولى الباقي',
                'created_at' => '2018-08-10 16:16:55',
                'updated_at' => '2018-08-10 16:16:55',
            ),
            4 => 
            array (
                'id' => 6,
                'translation_key' => 'carpet_curtains_label',
                'translation_en' => 'CARPETS & CURTAINS',
                'translation_ar' => 'السجاد ونجور',
                'created_at' => '2018-08-10 16:17:45',
                'updated_at' => '2018-08-10 16:17:45',
            ),
            5 => 
            array (
                'id' => 7,
                'translation_key' => 'carpet_curtains_description_label',
                'translation_en' => 'We will sort out the items and send you the invoice after, these items take 3-5 business days to be cleaned properly',
                'translation_ar' => 'سنقوم بفرز العناصر وإرسال الفاتورة إليك بعد ذلك ، هذه العناصر تستغرق 3-5 أيام عمل لتنظيفها بشكل صحيح',
                'created_at' => '2018-08-10 16:18:26',
                'updated_at' => '2018-08-10 16:18:26',
            ),
            6 => 
            array (
                'id' => 8,
                'translation_key' => 'premium_care_label',
                'translation_en' => 'Premium Care',
                'translation_ar' => 'رعاية متميزة',
                'created_at' => '2018-08-10 16:19:09',
                'updated_at' => '2018-08-10 16:19:09',
            ),
            7 => 
            array (
                'id' => 9,
                'translation_key' => 'premium_care_description_label',
                'translation_en' => 'Your most valued items will be treated with pristine care and cleaned as the wash tags instruct',
                'translation_ar' => 'سيتم التعامل مع المواد الأكثر قيمة مع العناية البكر وتنظيفها كما تعليمات يغسل',
                'created_at' => '2018-08-10 16:19:52',
                'updated_at' => '2018-08-10 16:19:52',
            ),
            8 => 
            array (
                'id' => 10,
                'translation_key' => 'my_places_label',
                'translation_en' => 'My Places',
                'translation_ar' => 'أماكني',
                'created_at' => '2018-08-10 16:20:50',
                'updated_at' => '2018-08-10 16:20:50',
            ),
            9 => 
            array (
                'id' => 11,
                'translation_key' => 'my_places_description_label',
                'translation_en' => 'Manage your saved locations',
                'translation_ar' => 'إدارة مواقعك المحفوظة',
                'created_at' => '2018-08-10 16:21:28',
                'updated_at' => '2018-08-10 16:21:28',
            ),
            10 => 
            array (
                'id' => 12,
                'translation_key' => 'your_active_order_label',
                'translation_en' => 'your active orders',
                'translation_ar' => 'طلباتك النشطة',
                'created_at' => '2018-08-10 16:22:36',
                'updated_at' => '2018-08-10 16:22:36',
            ),
            11 => 
            array (
                'id' => 13,
                'translation_key' => 'price_list_label',
                'translation_en' => 'Price List',
                'translation_ar' => 'قائمة الاسعار',
                'created_at' => '2018-08-10 16:23:34',
                'updated_at' => '2018-08-10 16:23:34',
            ),
            12 => 
            array (
                'id' => 14,
                'translation_key' => 'search_items_here_label',
                'translation_en' => 'Search for items here',
                'translation_ar' => 'ابحث عن العناصر هنا',
                'created_at' => '2018-08-10 16:25:33',
                'updated_at' => '2018-08-10 16:25:33',
            ),
            13 => 
            array (
                'id' => 15,
                'translation_key' => 'setting_label',
                'translation_en' => 'Settings',
                'translation_ar' => 'إعدادات',
                'created_at' => '2018-08-10 16:26:05',
                'updated_at' => '2018-08-10 16:26:05',
            ),
            14 => 
            array (
                'id' => 16,
                'translation_key' => 'about_label',
                'translation_en' => 'About',
                'translation_ar' => 'حول',
                'created_at' => '2018-08-10 16:26:33',
                'updated_at' => '2018-08-10 16:26:33',
            ),
            15 => 
            array (
                'id' => 17,
                'translation_key' => 'profile_label',
                'translation_en' => 'Profile',
                'translation_ar' => 'الملف الشخصي
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'translation_key' => 'change_password_label',
                'translation_en' => 'Change Password',
                'translation_ar' => 'تغيير كلمة السر
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'translation_key' => 'change_language_label',
                'translation_en' => 'Change Language',
                'translation_ar' => 'غير اللغة
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'translation_key' => 'tell_a_fried_label',
                'translation_en' => 'Tell A Friend',
                'translation_ar' => 'اخبر صديق
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'translation_key' => 'logout_label',
                'translation_en' => 'Logout',
                'translation_ar' => 'الخروج',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'translation_key' => 'delete_account_label',
                'translation_en' => 'Delete Account',
                'translation_ar' => 'حذف الحساب
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'translation_key' => 'version_label',
                'translation_en' => 'Version',
                'translation_ar' => 'الإصدار',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'translation_key' => 'contact_us_label',
                'translation_en' => 'Contact Us',
                'translation_ar' => 'اتصل بنا
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'translation_key' => 'faq_help_label',
                'translation_en' => 'F.A.Qs / Help',
                'translation_ar' => 'الأسئلة المتداولة / المساعدة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'translation_key' => 'terms_and_conditions_label',
                'translation_en' => 'Terms & Conditions',
                'translation_ar' => 'البنود و الظروف
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'translation_key' => 'send_label',
                'translation_en' => 'Send',
                'translation_ar' => 'إرسال',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'translation_key' => 'letusknow_what_issue_label',
                'translation_en' => 'Let us know what the issue is...',
                'translation_ar' => 'دعنا نعرف ما هي المشكلة ...
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'translation_key' => 'and_a_screenshot_want_label',
                'translation_en' => 'And add a screenshot if you want',
                'translation_ar' => 'وأضف لقطة شاشة إذا كنت تريد
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'translation_key' => 'call_us_label',
                'translation_en' => 'Call us',
                'translation_ar' => 'اتصل بنا
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'translation_key' => 'save_label',
                'translation_en' => 'Save',
                'translation_ar' => 'حفظ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'translation_key' => 'name_label',
                'translation_en' => 'Name',
                'translation_ar' => 'اسم',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'translation_key' => 'email_label',
                'translation_en' => 'Email',
                'translation_ar' => 'البريد الإلكتروني
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'translation_key' => 'phone_label',
                'translation_en' => 'Phone',
                'translation_ar' => 'هاتف
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'translation_key' => 'current_password_label',
                'translation_en' => 'Current Password',
                'translation_ar' => 'كلمة السر الحالية
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'translation_key' => 'new_password_label',
                'translation_en' => 'New Password',
                'translation_ar' => 'كلمة السر الجديدة
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'translation_key' => 'confirm_password_label',
                'translation_en' => 'Confirm Password',
                'translation_ar' => 'تأكيد كلمة المرور
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'translation_key' => 'confirm_label',
                'translation_en' => 'Confirm',
                'translation_ar' => 'تؤكد',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'translation_key' => 'my_order_label',
                'translation_en' => 'My Orders',
                'translation_ar' => 'طلباتي',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'translation_key' => 'active_label',
                'translation_en' => 'Active',
                'translation_ar' => 'نشيط',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'translation_key' => 'completed_label',
                'translation_en' => 'Completed',
                'translation_ar' => 'منجز',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'translation_key' => 'order_number_label',
                'translation_en' => 'ORDER NUMBER',
                'translation_ar' => 'رقم الأمر
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'translation_key' => 'pickup_date_label',
                'translation_en' => 'PICKUP DATE',
                'translation_ar' => 'اختر تاريخا
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'translation_key' => 'cost_label',
                'translation_en' => 'COST',
                'translation_ar' => 'كلفة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'translation_key' => 'add_new_address_label',
                'translation_en' => 'Add New Address',
                'translation_ar' => 'إضافة عنوان جديد
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'translation_key' => 'no_address_found_label',
                'translation_en' => 'No Address Found.',
                'translation_ar' => 'لم يتم العثور على عنوان.
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'translation_key' => 'select_address_label',
                'translation_en' => 'Select Address',
                'translation_ar' => 'اختر العنوان
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 48,
                'translation_key' => 'pickone_of_saved_places_label',
                'translation_en' => 'Pick one of your saved places here',
                'translation_ar' => 'اختر أحد الأماكن المحفوظة هنا
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 49,
                'translation_key' => 'confirm_pickup_label',
                'translation_en' => 'Confirm Pickup',
                'translation_ar' => 'تأكيد الاستلام
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 50,
                'translation_key' => 'place_nickname_label',
                'translation_en' => 'Place Nickname',
                'translation_ar' => 'مكان اللقب
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51,
                'translation_key' => 'nickname_label',
                'translation_en' => 'Nickname',
                'translation_ar' => 'كنية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 52,
                'translation_key' => 'nickname_instructions',
                'translation_en' => 'Select what kind of place this is. Work, Home, Beach House, Grandmas\'s House',
                'translation_ar' => 'اختر نوع المكان هذا. العمل ، المنزل ، بيت الشاطئ ، بيت الجدات
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 53,
                'translation_key' => 'phone_number_label',
                'translation_en' => 'Phone Number',
                'translation_ar' => 'رقم الهاتف
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 54,
                'translation_key' => 'phone_number_instructions',
                'translation_en' => 'We\'ll only use your number in anything happens with your order. Don\'t worry we wont call you to chat.',
                'translation_ar' => 'سنستخدم فقط رقمك في أي شيء يحدث مع طلبك. لا تقلق لن ندعوك للدردشة.
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 55,
                'translation_key' => 'optional_deleivery_notes_label',
                'translation_en' => 'Optional Delivery Notes',
                'translation_ar' => 'ملاحظات التسليم الاختياري
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 56,
                'translation_key' => 'optional_delivery_notes_instructions',
                'translation_en' => 'Any extra instructions to your delivery driver?',
                'translation_ar' => 'Any extra instructions to your delivery driver?',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 57,
                'translation_key' => 'order_status_label',
                'translation_en' => 'Order Status',
                'translation_ar' => 'حالة الطلب
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 58,
                'translation_key' => 'ready_for_pickup_label',
                'translation_en' => 'READY FOR PICKUP',
                'translation_ar' => 'جاهز للإستلام
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 59,
                'translation_key' => 'change_label',
                'translation_en' => 'Change',
                'translation_ar' => 'يتغيرون
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 60,
                'translation_key' => 'dropoff_date_label',
                'translation_en' => 'DROPOFF DATE',
                'translation_ar' => 'تراجع عن التاريخ
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 61,
                'translation_key' => 'delivered_to_label',
                'translation_en' => 'DELIVERED TO',
                'translation_ar' => 'سلمت ل
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 62,
                'translation_key' => 'quantity_label',
                'translation_en' => 'QTY',
                'translation_ar' => 'كمية',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 63,
                'translation_key' => 'total_label',
                'translation_en' => 'Total',
                'translation_ar' => 'مجموع',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 64,
                'translation_key' => 'paidwith_label',
                'translation_en' => 'Paid with',
                'translation_ar' => 'دفعت مع
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 65,
                'translation_key' => 'cancel_order_label',
                'translation_en' => 'CANCEL ORDER',
                'translation_ar' => 'الغاء الطلب
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 66,
                'translation_key' => 'getting_washed_label',
                'translation_en' => 'GETTING WASHED',
                'translation_ar' => 'الحصول على الغسيل
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 67,
                'translation_key' => 'read_for_dropoff_label',
                'translation_en' => 'READY FOR DROPOFF',
                'translation_ar' => 'جاهز للسحب
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 68,
                'translation_key' => 'select_item_label',
                'translation_en' => 'Select Item',
                'translation_ar' => 'اختر البند
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 70,
                'translation_key' => 'payment_method_label',
                'translation_en' => 'Payment Method',
                'translation_ar' => 'طريقة الدفع او السداد
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 71,
                'translation_key' => 'cash_on_delivery_label',
                'translation_en' => 'Cash on Delivery',
                'translation_ar' => 'الدفع عن الاستلام
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 72,
                'translation_key' => 'pos_label',
                'translation_en' => 'POS',
                'translation_ar' => 'نقطة البيع
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 73,
                'translation_key' => 'notes_label',
                'translation_en' => 'NOTES',
                'translation_ar' => 'ملاحظات
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 74,
                'translation_key' => 'add_label',
                'translation_en' => 'Add',
                'translation_ar' => 'إضافة',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 75,
                'translation_key' => 'promo_code_field_label',
                'translation_en' => 'Promo Code Field',
                'translation_ar' => 'حقل الرمز الترويجي
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 76,
                'translation_key' => 'enter_code_label',
                'translation_en' => 'Enter code',
                'translation_ar' => 'ادخل الرمز
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 77,
                'translation_key' => 'delivery_charges_label',
                'translation_en' => 'Delivery Charges',
                'translation_ar' => 'رسوم التوصيل
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 78,
                'translation_key' => 'place_new_order_label',
                'translation_en' => 'PLACE NEW ORDER',
                'translation_ar' => 'مكان الطلب الجديد
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 79,
                'translation_key' => 'review_and_order_label',
                'translation_en' => 'Review and Order',
                'translation_ar' => 'مراجعة والنظام
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 80,
                'translation_key' => 'select_pickup_date_label',
                'translation_en' => 'Select Pickup Date',
                'translation_ar' => 'حدد تاريخ الاستلام
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 81,
                'translation_key' => 'select_deliver_date_label',
                'translation_en' => 'Select Deliver Date',
                'translation_ar' => 'حدد تاريخ التسليم
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 82,
                'translation_key' => 'done_label',
                'translation_en' => 'Done',
                'translation_ar' => 'فعله',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 83,
                'translation_key' => 'cancel_label',
                'translation_en' => 'Cancel',
                'translation_ar' => 'إلغاء
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 84,
                'translation_key' => 'ok_label',
                'translation_en' => 'OK',
                'translation_ar' => 'حسنا',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 85,
                'translation_key' => 'success_label',
                'translation_en' => 'Success',
                'translation_ar' => 'نجاح',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 86,
                'translation_key' => 'ordered_successfully_label',
                'translation_en' => 'You Ordered Successfully',
                'translation_ar' => 'أنت أمرت بنجاح
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 87,
                'translation_key' => 'signup_label',
                'translation_en' => 'Sign Up',
                'translation_ar' => 'سجل',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 88,
                'translation_key' => 'login_label',
                'translation_en' => 'Login',
                'translation_ar' => 'تسجيل الدخول
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 89,
                'translation_key' => 'continue_facebook',
                'translation_en' => 'Continue with Facebook',
                'translation_ar' => 'تواصل مع Facebook
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 90,
                'translation_key' => 'welcome_smartwashr_label',
                'translation_en' => 'Welcome to Smartwashr',
                'translation_ar' => 'مرحبًا بك في سمارت واشر',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 91,
                'translation_key' => 'setup_profile_instructions',
                'translation_en' => 'Please set up your profile to continue',
                'translation_ar' => 'يرجى إعداد ملفك الشخصي للمتابعة
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 92,
                'translation_key' => 'password_label',
                'translation_en' => 'Password',
                'translation_ar' => 'كلمه السر
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 93,
                'translation_key' => 'password_instructions',
                'translation_en' => 'Passwrods must be 6 charachters',
                'translation_ar' => 'يجب أن تتكون كلمات المرور من 6 أحرف
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 94,
                'translation_key' => 'let_get_washing_label',
                'translation_en' => 'Let\'s Get Washing',
                'translation_ar' => 'دعونا الحصول على غسل
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 95,
                'translation_key' => 'forgot_password_label',
                'translation_en' => 'Forgot Password?',
                'translation_ar' => 'هل نسيت كلمة المرور؟
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 96,
                'translation_key' => 'resend_confirmation_label',
                'translation_en' => 'Resend Confrimation Email',
                'translation_ar' => 'أعد إرسال رسالة البريد الالكتروني الخاصة بالتأكيد
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 97,
                'translation_key' => 'forgot_password',
                'translation_en' => 'Forgot Password',
                'translation_ar' => 'هل نسيت كلمة المرور',
                'created_at' => NULL,
                'updated_at' => '2018-08-10 18:03:50',
            ),
        ));
        
        
    }
}
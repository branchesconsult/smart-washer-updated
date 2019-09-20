<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 146,
                'migration' => '2017_11_02_060149_create_blog_categories_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 147,
                'migration' => '2017_11_02_060149_create_blog_map_categories_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 148,
                'migration' => '2017_11_02_060149_create_blog_map_tags_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 149,
                'migration' => '2017_11_02_060149_create_blog_tags_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 150,
                'migration' => '2017_11_02_060149_create_blogs_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 151,
                'migration' => '2017_11_02_060149_create_email_template_placeholders_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 152,
                'migration' => '2017_11_02_060149_create_email_template_types_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 153,
                'migration' => '2017_11_02_060149_create_email_templates_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 154,
                'migration' => '2017_11_02_060149_create_faqs_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 155,
                'migration' => '2017_11_02_060149_create_history_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 156,
                'migration' => '2017_11_02_060149_create_history_types_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 157,
                'migration' => '2017_11_02_060149_create_modules_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 158,
                'migration' => '2017_11_02_060149_create_notifications_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 159,
                'migration' => '2017_11_02_060149_create_pages_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 160,
                'migration' => '2017_11_02_060149_create_password_resets_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 161,
                'migration' => '2017_11_02_060149_create_permission_role_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 162,
                'migration' => '2017_11_02_060149_create_permission_user_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 163,
                'migration' => '2017_11_02_060149_create_permissions_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 164,
                'migration' => '2017_11_02_060149_create_role_user_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 165,
                'migration' => '2017_11_02_060149_create_roles_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 166,
                'migration' => '2017_11_02_060149_create_sessions_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 167,
                'migration' => '2017_11_02_060149_create_settings_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 168,
                'migration' => '2017_11_02_060149_create_social_logins_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 169,
                'migration' => '2017_11_02_060149_create_users_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 170,
                'migration' => '2017_11_02_060152_add_foreign_keys_to_history_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 171,
                'migration' => '2017_11_02_060152_add_foreign_keys_to_notifications_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 172,
                'migration' => '2017_11_02_060152_add_foreign_keys_to_permission_role_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 173,
                'migration' => '2017_11_02_060152_add_foreign_keys_to_permission_user_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 174,
                'migration' => '2017_11_02_060152_add_foreign_keys_to_role_user_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 175,
                'migration' => '2017_11_02_060152_add_foreign_keys_to_social_logins_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 176,
                'migration' => '2017_12_10_122555_create_menus_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 177,
                'migration' => '2017_12_24_042039_add_null_constraint_on_created_by_on_user_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 178,
                'migration' => '2017_12_28_005822_add_null_constraint_on_created_by_on_role_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 179,
                'migration' => '2017_12_28_010952_add_null_constraint_on_created_by_on_permission_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'id' => 180,
                'migration' => '2018_06_29_092028_create_laundries_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'id' => 181,
                'migration' => '2018_06_29_094426_create_laundry_addresses_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'id' => 182,
                'migration' => '2018_06_29_094557_create_laundry_user_pivot_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'id' => 183,
                'migration' => '2018_07_06_083422_create_user_devices_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'id' => 184,
                'migration' => '2018_07_06_115050_create_categories_table',
                'batch' => 2,
            ),
            39 => 
            array (
                'id' => 185,
                'migration' => '2018_07_06_133304_create_products_table',
                'batch' => 3,
            ),
            40 => 
            array (
                'id' => 186,
                'migration' => '2018_07_06_141614_create_category_product_pivot_table',
                'batch' => 3,
            ),
            41 => 
            array (
                'id' => 187,
                'migration' => '2018_07_06_142354_create_services_table',
                'batch' => 3,
            ),
            42 => 
            array (
                'id' => 188,
                'migration' => '2018_07_06_142606_create_product_service_pivot_table',
                'batch' => 3,
            ),
            43 => 
            array (
                'id' => 189,
                'migration' => '2018_07_10_065544_create_devices_table',
                'batch' => 4,
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modules')->delete();
        
        \DB::table('modules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'view_permission_id' => 'view-access-management',
                'name' => 'Access Management',
                'url' => NULL,
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'view_permission_id' => 'view-user-management',
                'name' => 'User Management',
                'url' => 'admin.access.user.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'view_permission_id' => 'view-role-management',
                'name' => 'Role Management',
                'url' => 'admin.access.role.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'view_permission_id' => 'view-permission-management',
                'name' => 'Permission Management',
                'url' => 'admin.access.permission.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'view_permission_id' => 'view-menu',
                'name' => 'Menus',
                'url' => 'admin.menus.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'view_permission_id' => 'view-module',
                'name' => 'Module',
                'url' => 'admin.modules.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'view_permission_id' => 'view-page',
                'name' => 'Pages',
                'url' => 'admin.pages.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'view_permission_id' => 'view-email-template',
                'name' => 'Email Templates',
                'url' => 'admin.emailtemplates.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'view_permission_id' => 'edit-settings',
                'name' => 'Settings',
                'url' => 'admin.settings.edit',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'view_permission_id' => 'view-blog',
                'name' => 'Blog Management',
                'url' => NULL,
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'view_permission_id' => 'view-blog-category',
                'name' => 'Blog Category Management',
                'url' => 'admin.blogcategories.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'view_permission_id' => 'view-blog-tag',
                'name' => 'Blog Tag Management',
                'url' => 'admin.blogtags.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'view_permission_id' => 'view-blog',
                'name' => 'Blog Management',
                'url' => 'admin.blogs.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'view_permission_id' => 'view-faq',
                'name' => 'Faq Management',
                'url' => 'admin.faqs.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'view_permission_id' => 'view-products-permission',
                'name' => 'Products',
                'url' => 'admin.products.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 11:38:55',
                'updated_at' => '2018-07-06 11:38:55',
            ),
            15 => 
            array (
                'id' => 16,
                'view_permission_id' => 'view-category-permission',
                'name' => 'Categories',
                'url' => 'admin.categories.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 11:50:52',
                'updated_at' => '2018-07-06 11:50:52',
            ),
            16 => 
            array (
                'id' => 17,
                'view_permission_id' => 'view-service-permission',
                'name' => 'Services',
                'url' => 'admin.services.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 14:28:01',
                'updated_at' => '2018-07-06 14:28:01',
            ),
            17 => 
            array (
                'id' => 18,
                'view_permission_id' => 'view-device-permission',
                'name' => 'Devices',
                'url' => 'admin.devices.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-10 06:55:48',
                'updated_at' => '2018-07-10 06:55:48',
            ),
            18 => 
            array (
                'id' => 19,
                'view_permission_id' => 'view-coupon-permission',
                'name' => 'Coupon',
                'url' => 'admin.coupons.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-12 06:03:06',
                'updated_at' => '2018-07-12 06:03:06',
            ),
            19 => 
            array (
                'id' => 20,
                'view_permission_id' => 'view-contact-permission',
                'name' => 'Contacts',
                'url' => 'admin.contacts.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-20 13:21:35',
                'updated_at' => '2018-07-20 13:21:35',
            ),
            20 => 
            array (
                'id' => 21,
                'view_permission_id' => 'view-ordercomplains-permission',
                'name' => 'OrderComplains',
                'url' => 'admin.ordercomplains.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-20 13:54:19',
                'updated_at' => '2018-07-20 13:54:19',
            ),
            21 => 
            array (
                'id' => 22,
                'view_permission_id' => 'view-translations-permission',
                'name' => 'Translations',
                'url' => 'admin.translations.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-08-08 14:03:27',
                'updated_at' => '2018-08-08 14:03:27',
            ),
            22 => 
            array (
                'id' => 24,
                'view_permission_id' => 'view-pushnotifications-permission',
                'name' => 'Push Notifiactions',
                'url' => 'admin.pushnotifications.index',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-08-08 15:38:57',
                'updated_at' => '2018-08-08 15:38:57',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'backend',
                'name' => 'Backend Sidebar Menu',
                'items' => '[{"view_permission_id":"view-access-management","icon":"fa-users","open_in_new_tab":0,"url_type":"route","url":"","name":"Access Management","id":11,"content":"Access Management","children":[{"view_permission_id":"view-user-management","open_in_new_tab":0,"url_type":"route","url":"admin.access.user.index","name":"User Management","id":12,"content":"User Management"},{"view_permission_id":"view-role-management","open_in_new_tab":0,"url_type":"route","url":"admin.access.role.index","name":"Role Management","id":13,"content":"Role Management"},{"view_permission_id":"view-permission-management","open_in_new_tab":0,"url_type":"route","url":"admin.access.permission.index","name":"Permission Management","id":14,"content":"Permission Management"}]},{"view_permission_id":"view-module","icon":"fa-wrench","open_in_new_tab":0,"url_type":"route","url":"admin.modules.index","name":"Module","id":1,"content":"Module"},{"view_permission_id":"view-menu","icon":"fa-bars","open_in_new_tab":0,"url_type":"route","url":"admin.menus.index","name":"Menus","id":3,"content":"Menus"},{"view_permission_id":"view-email-template","icon":"fa-envelope","open_in_new_tab":0,"url_type":"route","url":"admin.emailtemplates.index","name":"Email Templates","id":8,"content":"Email Templates"},{"view_permission_id":"edit-settings","icon":"fa-gear","open_in_new_tab":0,"url_type":"route","url":"admin.settings.edit?id=1","name":"Settings","id":9,"content":"Settings"},{"view_permission_id":"view-faq","icon":"fa-question-circle","open_in_new_tab":0,"url_type":"route","url":"admin.faqs.index","name":"Faq Management","id":19,"content":"Faq Management"},{"id":20,"name":"Laundries","url":"admin.laundries.index","url_type":"route","open_in_new_tab":0,"icon":"","view_permission_id":"view-laundries-permission","content":"Laundries"},{"view_permission_id":"view-products-permission","open_in_new_tab":0,"url_type":"route","url":"admin.products.index","name":"Products","id":21,"content":"Products"},{"id":22,"name":"Categories","url":"admin.categories.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-category-permission","content":"Categories"},{"id":23,"name":"Services","url":"admin.services.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-service-permission","content":"Services"},{"view_permission_id":"view-coupon-permission","open_in_new_tab":0,"url_type":"route","url":"admin.coupons.index","name":"Coupon","id":24,"content":"Coupon"},{"id":25,"name":"Contacts","url":"admin.contacts.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-contact-permission","content":"Contacts"},{"view_permission_id":"","icon":"","open_in_new_tab":0,"url_type":"route","url":"admin.orders.index","name":"Orders","id":26,"content":"Orders"},{"id":27,"name":"voted locations","url":"admin.votedlocations.index","url_type":"route","open_in_new_tab":0,"icon":"","view_permission_id":"","content":"voted locations"},{"view_permission_id":"view-translations-permission","open_in_new_tab":0,"url_type":"route","url":"admin.translations.index","name":"Translations","id":28,"content":"Translations"},{"view_permission_id":"view-pushnotifications-permission","open_in_new_tab":0,"url_type":"route","url":"admin.pushnotifications.index","name":"Push Notifiactions","id":30,"content":"Push Notifiactions"}]',
                'created_by' => 1,
                'updated_by' => NULL,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-08-08 15:40:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
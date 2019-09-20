<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement("SET foreign_key_checks = 0");
        Model::unguard();
        $this->call(AccessTableSeeder::class);
        $this->call(HistoryTypeTableSeeder::class);
        $this->call(EmailTemplateTypeTableSeeder::class);
        $this->call(EmailTemplatePlaceholderTableSeeder::class);
        $this->call(EmailTemplateTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        $this->call(BlogMapCategoriesTableSeeder::class);
        $this->call(BlogMapTagsTableSeeder::class);
        $this->call(BlogTagsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DevicesTableSeeder::class);
        $this->call(EmailTemplatePlaceholdersTableSeeder::class);
        $this->call(EmailTemplateTypesTableSeeder::class);
        $this->call(EmailTemplatesTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(HistoryTypesTableSeeder::class);
        $this->call(HistoryTableSeeder::class);
        $this->call(LaundriesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoryProductTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(SocialLoginsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(OrderstatusesTableSeeder::class);
        //$this->call(OrdersTableSeeder::class);
        //$this->call(OrderdetailsTableSeeder::class);
        $this->call(LaundryUserTableSeeder::class);
        $this->call(ProductServiceTableSeeder::class);
        //$this->call(PermissionUserTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(VotedlocationsTableSeeder::class);
        \DB::statement("SET foreign_key_checks = 1");
        Model::reguard();
        $this->call(TranslationsTableSeeder::class);
    }
}

//Exect order
/**
 * $this->call(AccessTableSeeder::class);
 * $this->call(HistoryTypeTableSeeder::class);
 * $this->call(EmailTemplateTypeTableSeeder::class);
 * $this->call(EmailTemplatePlaceholderTableSeeder::class);
 * $this->call(EmailTemplateTableSeeder::class);
 * $this->call(SettingsTableSeeder::class);
 * $this->call(PagesTableSeeder::class);
 * $this->call(MenuTableSeeder::class);
 * $this->call(ModulesTableSeeder::class);
 * $this->call(AddressesTableSeeder::class);
 * $this->call(BlogCategoriesTableSeeder::class);
 * $this->call(BlogMapCategoriesTableSeeder::class);
 * $this->call(BlogMapTagsTableSeeder::class);
 * $this->call(BlogTagsTableSeeder::class);
 * $this->call(BlogsTableSeeder::class);
 * $this->call(CategoriesTableSeeder::class);
 * $this->call(DevicesTableSeeder::class);
 * $this->call(EmailTemplatePlaceholdersTableSeeder::class);
 * $this->call(EmailTemplateTypesTableSeeder::class);
 * $this->call(EmailTemplatesTableSeeder::class);
 * $this->call(FaqsTableSeeder::class);
 * $this->call(HistoryTypesTableSeeder::class);
 * $this->call(HistoryTableSeeder::class);
 * $this->call(LaundriesTableSeeder::class);
 * $this->call(MenusTableSeeder::class);
 * $this->call(MigrationsTableSeeder::class);
 * $this->call(NotificationsTableSeeder::class);
 * $this->call(PasswordResetsTableSeeder::class);
 * $this->call(PermissionRoleTableSeeder::class);
 * $this->call(PermissionsTableSeeder::class);
 * $this->call(ProductsTableSeeder::class);
 * $this->call(CategoryProductTableSeeder::class);
 * $this->call(RolesTableSeeder::class);
 * $this->call(ServicesTableSeeder::class);
 * $this->call(SessionsTableSeeder::class);
 * $this->call(SocialLoginsTableSeeder::class);
 * $this->call(UsersTableSeeder::class);
 * $this->call(CouponsTableSeeder::class);
 * $this->call(OrderstatusesTableSeeder::class);
 * $this->call(OrdersTableSeeder::class);
 * $this->call(OrderdetailsTableSeeder::class);
 * $this->call(LaundryUserTableSeeder::class);
 * $this->call(ProductServiceTableSeeder::class);
 * $this->call(PermissionUserTableSeeder::class);
 * $this->call(RoleUserTableSeeder::class);
 */
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class GenerateSeeds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seeds:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate seeders of all availible smartwashr tables';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('iseed', ['tables' => 'addresses,blog_categories,blog_map_categories,blog_map_tags,blog_tags,blogs,categories,category_product,coupons,devices,email_template_placeholders,email_template_types,email_templates,faqs,history,history_types,laundries,laundry_user,menus,migrations,modules,notifications,orderdetails,orders,orderstatuses,pages,password_resets,permission_role,permission_user,permissions,product_service,products,role_user,roles,services,sessions,settings,social_logins,users']);
        echo 'Done';
    }
}

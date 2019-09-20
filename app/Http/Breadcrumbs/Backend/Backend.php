<?php

Breadcrumbs::register('admin.dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('admin.dashboard'));
});

require __DIR__.'/Search.php';
require __DIR__.'/Access/User.php';
require __DIR__.'/Access/Role.php';
require __DIR__.'/Access/Permission.php';
require __DIR__.'/Page.php';
require __DIR__.'/Email_Template.php';
require __DIR__.'/Setting.php';
require __DIR__.'/Blog_Category.php';
require __DIR__.'/Blog_Tag.php';
require __DIR__.'/Blog_Management.php';
require __DIR__.'/Faqs.php';
require __DIR__.'/Menu.php';
require __DIR__.'/LogViewer.php';

require __DIR__.'/Laundry.php';
require __DIR__.'/Address.php';
require __DIR__.'/Userdevice.php';
require __DIR__.'/Product.php';
require __DIR__.'/Category.php';
require __DIR__.'/Service.php';
require __DIR__.'/Device.php';
require __DIR__.'/Coupon.php';
require __DIR__.'/Areadriver.php';
require __DIR__.'/Order.php';
require __DIR__.'/Orderstatus.php';
require __DIR__.'/Orderdetail.php';
require __DIR__.'/Contact.php';
require __DIR__.'/Ordercomplain.php';
require __DIR__.'/Votedlocation.php';
require __DIR__.'/Translation.php';
require __DIR__.'/Pushnotification.php';
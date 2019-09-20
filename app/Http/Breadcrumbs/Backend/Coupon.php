<?php

Breadcrumbs::register('admin.coupons.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.coupons.management'), route('admin.coupons.index'));
});

Breadcrumbs::register('admin.coupons.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.coupons.index');
    $breadcrumbs->push(trans('menus.backend.coupons.create'), route('admin.coupons.create'));
});

Breadcrumbs::register('admin.coupons.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.coupons.index');
    $breadcrumbs->push(trans('menus.backend.coupons.edit'), route('admin.coupons.edit', $id));
});

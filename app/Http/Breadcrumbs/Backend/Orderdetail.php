<?php

Breadcrumbs::register('admin.orderdetails.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.orderdetails.management'), route('admin.orderdetails.index'));
});

Breadcrumbs::register('admin.orderdetails.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.orderdetails.index');
    $breadcrumbs->push(trans('menus.backend.orderdetails.create'), route('admin.orderdetails.create'));
});

Breadcrumbs::register('admin.orderdetails.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.orderdetails.index');
    $breadcrumbs->push(trans('menus.backend.orderdetails.edit'), route('admin.orderdetails.edit', $id));
});

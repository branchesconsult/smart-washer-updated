<?php

Breadcrumbs::register('admin.ordercomplains.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.ordercomplains.management'), route('admin.ordercomplains.index'));
});

Breadcrumbs::register('admin.ordercomplains.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.ordercomplains.index');
    $breadcrumbs->push(trans('menus.backend.ordercomplains.create'), route('admin.ordercomplains.create'));
});

Breadcrumbs::register('admin.ordercomplains.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ordercomplains.index');
    $breadcrumbs->push(trans('menus.backend.ordercomplains.edit'), route('admin.ordercomplains.edit', $id));
});

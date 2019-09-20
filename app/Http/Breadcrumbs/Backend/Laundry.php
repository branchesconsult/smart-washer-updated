<?php

Breadcrumbs::register('admin.laundries.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.laundries.management'), route('admin.laundries.index'));
});

Breadcrumbs::register('admin.laundries.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.laundries.index');
    $breadcrumbs->push(trans('menus.backend.laundries.create'), route('admin.laundries.create'));
});

Breadcrumbs::register('admin.laundries.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.laundries.index');
    $breadcrumbs->push(trans('menus.backend.laundries.edit'), route('admin.laundries.edit', $id));
});

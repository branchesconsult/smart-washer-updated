<?php

Breadcrumbs::register('admin.userdevices.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.userdevices.management'), route('admin.userdevices.index'));
});

Breadcrumbs::register('admin.userdevices.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.userdevices.index');
    $breadcrumbs->push(trans('menus.backend.userdevices.create'), route('admin.userdevices.create'));
});

Breadcrumbs::register('admin.userdevices.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.userdevices.index');
    $breadcrumbs->push(trans('menus.backend.userdevices.edit'), route('admin.userdevices.edit', $id));
});

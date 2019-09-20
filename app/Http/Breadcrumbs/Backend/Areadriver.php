<?php

Breadcrumbs::register('admin.areadrivers.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.areadrivers.management'), route('admin.areadrivers.index'));
});

Breadcrumbs::register('admin.areadrivers.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.areadrivers.index');
    $breadcrumbs->push(trans('menus.backend.areadrivers.create'), route('admin.areadrivers.create'));
});

Breadcrumbs::register('admin.areadrivers.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.areadrivers.index');
    $breadcrumbs->push(trans('menus.backend.areadrivers.edit'), route('admin.areadrivers.edit', $id));
});

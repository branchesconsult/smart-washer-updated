<?php

Breadcrumbs::register('admin.pushnotifications.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.pushnotifications.management'), route('admin.pushnotifications.index'));
});

Breadcrumbs::register('admin.pushnotifications.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.pushnotifications.index');
    $breadcrumbs->push(trans('menus.backend.pushnotifications.create'), route('admin.pushnotifications.create'));
});

Breadcrumbs::register('admin.pushnotifications.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.pushnotifications.index');
    $breadcrumbs->push(trans('menus.backend.pushnotifications.edit'), route('admin.pushnotifications.edit', $id));
});

<?php

Breadcrumbs::register('admin.services.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.services.management'), route('admin.services.index'));
});

Breadcrumbs::register('admin.services.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.services.index');
    $breadcrumbs->push(trans('menus.backend.services.create'), route('admin.services.create'));
});

Breadcrumbs::register('admin.services.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.services.index');
    $breadcrumbs->push(trans('menus.backend.services.edit'), route('admin.services.edit', $id));
});

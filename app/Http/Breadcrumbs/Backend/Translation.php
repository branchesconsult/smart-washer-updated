<?php

Breadcrumbs::register('admin.translations.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.translations.management'), route('admin.translations.index'));
});

Breadcrumbs::register('admin.translations.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.translations.index');
    $breadcrumbs->push(trans('menus.backend.translations.create'), route('admin.translations.create'));
});

Breadcrumbs::register('admin.translations.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.translations.index');
    $breadcrumbs->push(trans('menus.backend.translations.edit'), route('admin.translations.edit', $id));
});

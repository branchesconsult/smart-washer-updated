<?php

Breadcrumbs::register('admin.votedlocations.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(trans('menus.backend.votedlocations.management'), route('admin.votedlocations.index'));
});

Breadcrumbs::register('admin.votedlocations.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.votedlocations.index');
    $breadcrumbs->push(trans('menus.backend.votedlocations.create'), route('admin.votedlocations.create'));
});

Breadcrumbs::register('admin.votedlocations.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.votedlocations.index');
    $breadcrumbs->push(trans('menus.backend.votedlocations.edit'), route('admin.votedlocations.edit', $id));
});

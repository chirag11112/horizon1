<?php

Breadcrumbs::for('admin.sub_category.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('index', route('admin.sub_category.index'));
});

Breadcrumbs::for('admin.sub_category.create', function ($trail) {
    $trail->parent('admin.sub_category.index');
    $trail->push('Create', route('admin.sub_category.create'));
});

Breadcrumbs::for('admin.sub_category.show', function ($trail, $id) {
    $trail->parent('admin.sub_category.index');
    $trail->push('Show', route('admin.sub_category.show', $id));
});

Breadcrumbs::for('admin.sub_category.edit', function ($trail, $id) {
    $trail->parent('admin.sub_category.index');
    $trail->push('Edit', route('admin.sub_category.edit', $id));
});

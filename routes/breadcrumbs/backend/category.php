<?php

Breadcrumbs::for('admin.category.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('index', route('admin.category.index'));
});

Breadcrumbs::for('admin.category.create', function ($trail) {
    $trail->parent('admin.category.index');
    $trail->push('Create', route('admin.category.create'));
});

Breadcrumbs::for('admin.category.show', function ($trail, $id) {
    $trail->parent('admin.category.index');
    $trail->push('Show', route('admin.category.show', $id));
});

Breadcrumbs::for('admin.category.edit', function ($trail, $id) {
    $trail->parent('admin.category.index');
    $trail->push('Edit', route('admin.category.edit', $id));
});

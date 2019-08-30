<?php

Breadcrumbs::for('admin.user_inquiry.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('User Inquiry', route('admin.user_inquiry.index'));
});

Breadcrumbs::for('admin.user_inquiry.show', function ($trail, $id) {
    $trail->parent('admin.user_inquiry.index');
    $trail->push('Show', route('admin.user_inquiry.show', $id));
});
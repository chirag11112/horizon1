<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/category.php';
require __DIR__.'/sub_category.php';
require __DIR__.'/vendor_inquiry.php';
require __DIR__.'/user_inquiry.php';
require __DIR__.'/log-viewer.php';

<?php

Breadcrumbs::for('admin.vendor_inquiry.index', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Vendor Inquiry', route('admin.vendor_inquiry.index'));
});

Breadcrumbs::for('admin.vendor_inquiry.show', function ($trail, $id) {
    $trail->parent('admin.vendor_inquiry.index');
    $trail->push('Show', route('admin.vendor_inquiry.show', $id));
});
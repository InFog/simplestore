<?php

require __DIR__ . '/../src/bootstrap_admin.php';

$products = get_products();

echo render_admin_template('catalog', [
    'products' => $products,
    'user' => get_current_admin_user(),
]);

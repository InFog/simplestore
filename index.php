<?php

require __DIR__ . '/src/bootstrap.php';

$products = get_products_to_show();

echo render_store_template('catalog', [
    'products' => $products,
    'cart_products_count' => get_cart_products_count(),
    'cart_total_amount' => get_cart_total_amount(),
]);

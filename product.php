<?php

require __DIR__ . '/src/bootstrap.php';

$product = get_product_by_slug($_GET['slug']);

echo render_store_template('product', [
    'product' => $product,
    'cart_products_count' => get_cart_products_count(),
    'cart_total_amount' => get_cart_total_amount(),
]);

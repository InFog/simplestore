<?php

require __DIR__ . '/src/bootstrap.php';

clean_cart();

echo render_store_template('checkout', [
    'cart_products_count' => 0,
    'cart_total_amount' => 0,
]);

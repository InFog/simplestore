<?php

require __DIR__ . '/src/bootstrap.php';

if (array_key_exists('clean_cart', $_GET)) {
    clean_cart();

    header('Location: /index.php');
    die();
}

if (array_key_exists('add_product_id', $_GET)) {
    add_product_to_cart($_GET['add_product_id']);

    header('Location: /cart.php');
    die();
}

if (array_key_exists('remove_product_id', $_GET)) {
    remove_product_from_cart($_GET['remove_product_id']);

    header('Location: /cart.php');
    die();
}

$cart_products = get_cart_products();

echo render_store_template('cart', [
    'cart_products' => $cart_products,
    'cart_products_count' => get_cart_products_count(),
    'cart_total_amount' => get_cart_total_amount(),
]);

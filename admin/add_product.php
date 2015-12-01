<?php

require __DIR__ . '/../src/bootstrap_admin.php';

$product = [
    'id' => 0,
    'name' => get_from_post('name', ''),
    'price' => get_from_post('price', 0),
    'brand' => get_from_post('brand', ''),
    'description' => get_from_post('description', ''),
    'categories' => get_from_post('categories', ''),
];

if (has_post()) {
    save_product($product);

    header('Location: /admin/index.php');
    die();
}

echo render_admin_template('product_form', [
    'title' => 'Add product',
    'product' => $product,
    'user' => get_current_admin_user(),
]);

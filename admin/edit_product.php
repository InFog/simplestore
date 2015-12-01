<?php

require __DIR__ . '/../src/bootstrap_admin.php';

if (has_post()) {
    $product = get_product_by_id($_POST['product_id']);

    $updated_product = [
        'id' => get_from_post('product_id', $product['id']),
        'name' => get_from_post('name', $product['name']),
        'price' => get_from_post('price', $product['price']),
        'brand' => get_from_post('brand', $product['brand']),
        'description' => get_from_post('description', $product['description']),
        'categories' => get_from_post('categories', $product['categories']),
    ];

    update_product($updated_product);

    header('Location: /admin/index.php');
    die();
}

if (! array_key_exists('product_id', $_GET)) {
    header('Location: /admin/index.php');
    die();
}

$product = get_product_by_id($_GET['product_id']);

echo render_admin_template('product_form', [
    'title' => 'Edit product',
    'product' => $product,
    'user' => get_current_admin_user(),
]);

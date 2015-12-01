<?php

require __DIR__ . '/../src/bootstrap_admin.php';

if (has_post()) {
    if (array_key_exists('image', $_FILES)) {
        $image = $_FILES['image'];

        if (! is_file_type_allowed($image['type'])) {
            header('Location: /admin/index.php');
            die();
        }

        $moved = move_uploaded_file(
            $image['tmp_name'],
            __DIR__ . '/../img/products/' . $image['name']
        );

        $image_data = [
            'product_id' => $_POST['product_id'],
            'src' => $image['name'],
            'description' => '',
        ];

        save_image($image_data);
    }

    header('Location: /admin/index.php');
    die();
}

if (! array_key_exists('product_id', $_GET)) {
    header('Location: /admin/index.php');
    die();
}

echo render_admin_template('add_image_to_product', [
    'product_id' => $_GET['product_id'],
    'user' => get_current_admin_user(),
]);

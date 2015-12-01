<?php

require __DIR__ . '/../src/bootstrap_admin.php';

if (array_key_exists('product_id', $_GET)) {
    delete_product($_GET['product_id']);
}

header('Location: /admin/index.php');

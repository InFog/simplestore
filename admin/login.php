<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/admin.php';

$login_failed = false;

if (has_post()) {
    if (login($_POST['user'], $_POST['password'])) {
        header('Location: /admin/index.php');
        die();
    }

    $login_failed = true;
}

echo render_admin_template('login', [
    'login_failed' => $login_failed,
]);

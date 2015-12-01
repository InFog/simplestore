<?php

require __DIR__ . '/bootstrap.php';
require __DIR__ . '/admin.php';

if (! is_admin_user()) {
    header('Location: /admin/login.php');
    die();
};

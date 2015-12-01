<?php

/**
 * Checks if an admin user is logged in
 */
function is_admin_user()
{
    if (! array_key_exists('admin_user', $_SESSION)) {
        return false;
    }

    return true;
}

/**
 * Gets the current admin user
 */
function get_current_admin_user()
{
    return $_SESSION['admin_user'];
}

/**
 * Attempts user login
 */
function login($user, $password)
{
    $users = [
        'admin' => [
            'name' => 'Administrator',
            'password' => 'secret',
        ],
    ];

    if (! array_key_exists($user, $users)) {
        return false;
    }

    if ($password != $users[$user]['password']) {
        return false;
    }

    $_SESSION['admin_user'] = [
        'name' => $users[$user]['name'],
    ];

    return true;
}

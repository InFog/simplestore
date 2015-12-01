<?php

/**
 * Renders a template inside a base template
 */
function render_template($base, $template, $args)
{
    ob_start();
    extract($args);
    require __DIR__ . "/templates/{$template}.php";
    $content = ob_get_contents();
    ob_end_clean();

    ob_start();
    require __DIR__ . "/templates/{$base}.php";
    $result = ob_get_contents();
    ob_end_clean();

    return $result;
}

/**
 * Renders a store template
 */
function render_store_template($template, $args)
{
    return render_template('base', $template, $args);
}

/**
 * Renders an admin template
 */
function render_admin_template($template, $args)
{
    return render_template('admin/base', "admin/{$template}", $args);
}

/**
 * Formats a number to display as currency
 */
function format_price($price)
{
    return number_format($price, 2, ',', '') . ' €';
}

/**
 * Checks if the request contains post data
 */
function has_post()
{
    return (count($_POST) > 0);
}

/**
 * Tries to get a value from get, returns default value in case of non existing get data
 */
function get_from_get($name, $default)
{
    return (array_key_exists($name, $_GET)) ? $_GET[$name] : $default;
}

/**
 * Tries to get a value from post, returns default value in case of non existing post data
 */
function get_from_post($name, $default)
{
    return (array_key_exists($name, $_POST)) ? $_POST[$name] : $default;
}

/**
 * Turn an string into a slug for URL, the simplest way
 */
function slugfy($text)
{
    return str_replace(' ', '-', strtolower($text));
}

/**
 * Checks if a file type is allowed
 */
function is_file_type_allowed($file_type)
{
    $allowed_types = [
        'image/jpeg',
    ];

    return in_array($file_type, $allowed_types);
}

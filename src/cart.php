<?php

/**
 * Gets an array of cart items
 */
function get_cart_items()
{
    return (array_key_exists('cart_items', $_SESSION)) ? $_SESSION['cart_items'] : [];
}

/**
 * Gets an array of cart products
 */
function get_cart_products()
{
    $cart_products = [];

    $cart_items = get_cart_items();

    foreach ($cart_items as $cart_item) {
        $cart_products[] = get_product_by_id($cart_item['product_id']);
    }

    return $cart_products;
}

/**
 * Gets the total amount of products in the cart
 */
function get_cart_products_count()
{
    $cart_items = get_cart_items();

    return count($cart_items);
}

/**
 * Gets the total amount by summing up all product's prices in the cart
 */
function get_cart_total_amount()
{
    $amount = 0;

    $cart_items = get_cart_items();

    foreach ($cart_items as $cart_item) {
        $amount += $cart_item['price'];
    }

    return $amount;
}

/**
 * Adds one product to the cart
 */
function add_product_to_cart($product_id)
{
    $cart_items = (array_key_exists('cart_items', $_SESSION)) ? $_SESSION['cart_items'] : [];

    foreach ($cart_items as $cart_item) {
        if ($cart_item['product_id'] == $product_id) {
            return false;
        }
    }

    $product = get_product_by_id($product_id);

    $cart_items[] = [
        'product_id' => $product_id,
        'price' => $product['price'],
    ];

    $_SESSION['cart_items'] = $cart_items;
}

/**
 * Removes one product from the cart
 */
function remove_product_from_cart($product_id)
{
    $cart_items = get_cart_items();

    foreach ($cart_items as $cart_id => $cart_item) {
        if ($product_id == $cart_item['product_id']) {
            unset($cart_items[$cart_id]);
        }
    }

    $_SESSION['cart_items'] = $cart_items;
}

/**
 * Cleans the cart
 */
function clean_cart()
{
    $_SESSION['cart_items'] = [];
}

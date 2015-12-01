<?php

/**
 * Gets products to show on store
 */
function get_products_to_show()
{
    $products = get_products();

    foreach ($products as $list_id => $product) {
        if (count($product['images']) == 0) {
            unset($products[$list_id]);
        }
    }

    return $products;
}

/**
 * Gets all products from database
 */
function get_products()
{
    $products = [];

    $db = get_connection();

    $sql = <<<SQL
        SELECT *
        FROM products
        WHERE
            1 = 1
SQL;

    $results = $db->query($sql, PDO::FETCH_ASSOC);

    foreach ($results as $result) {
        $result = (array) $result;
        $result['images'] = get_images($result['id']);

        $products[] = $result;
    }

    return $products;
}

function get_images($product_id)
{
    $db = get_connection();

    $sql = <<<SQL
        SELECT *
        FROM product_images
        WHERE
            product_id = :product_id
SQL;

    $statement = $db->prepare($sql);
    $statement->execute([
        ':product_id' => $product_id,
    ]);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Looks for products using a keyword
 */
function find_products($keyword)
{
    return get_products();
}

/**
 * Gets one product by id
 */
function get_product_by_id($id)
{
    $db = get_connection();

    $sql = <<<SQL
        SELECT *
        FROM products
        WHERE
            id = :id
SQL;

    $statement = $db->prepare($sql);
    $statement->execute([
        ':id' => $id,
    ]);

    $product = (array) $statement->fetch(PDO::FETCH_ASSOC);
    $product['images'] = get_images($product['id']);

    return $product;
}

/**
 * Gets one product by slug
 */
function get_product_by_slug($slug)
{
    $db = get_connection();

    $sql = <<<SQL
        SELECT *
        FROM products
        WHERE
            slug = :slug
SQL;

    $statement = $db->prepare($sql);
    $statement->execute([
        ':slug' => $slug,
    ]);

    $product = (array) $statement->fetch(PDO::FETCH_ASSOC);
    $product['images'] = get_images($product['id']);

    return $product;
}

/**
 * Saves a product to database
 */
function save_product(array $product)
{
    $db = get_connection();

    $sql = <<<SQL
        INSERT INTO products
        (name, slug, price, brand, description, categories)
        VALUES
        (:name, :slug, :price, :brand, :description, :categories)
SQL;

    $statement = $db->prepare($sql);
    $statement->execute([
        ':name' => $product['name'],
        ':slug' => slugfy($product['name']),
        ':price' => $product['price'],
        ':brand' => $product['brand'],
        ':description' => $product['description'],
        ':categories' => $product['categories'],
    ]);
}

/**
 * Saves a product's image to database
 */
function save_image(array $image)
{
    $db = get_connection();

    $sql = <<<SQL
        INSERT INTO product_images
        (product_id, src, description)
        VALUES
        (:product_id, :src, :description)
SQL;

    $statement = $db->prepare($sql);
    $statement->execute([
        ':product_id' => $image['product_id'],
        ':src' => $image['src'],
        ':description' => $image['description'],
    ]);
}

/**
 * Updates a product in database
 */
function update_product(array $product)
{
    $db = get_connection();

    $sql = <<<SQL
        UPDATE products SET
            name = :name,
            slug = :slug,
            price = :price,
            brand = :brand,
            description = :description,
            categories = :categories
        WHERE id = :id
SQL;

    $statement = $db->prepare($sql);
    $statement->execute([
        ':id' => $product['id'],
        ':name' => $product['name'],
        ':slug' => slugfy($product['name']),
        ':price' => $product['price'],
        ':brand' => $product['brand'],
        ':description' => $product['description'],
        ':categories' => $product['categories'],
    ]);
}

/**
 * Deletes a product
 */
function delete_product($product_id)
{
    $db = get_connection();

    $sql = <<<SQL
        DELETE FROM products
        WHERE id = :id
SQL;

    $statement = $db->prepare($sql);
    $statement->execute([
        ':id' => $product_id,
    ]);
}

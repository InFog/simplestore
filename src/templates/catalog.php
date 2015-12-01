<div class="column-group gutters">
    <?php foreach ($products as $product) : ?>
        <div class="all-33 small-100 tiny-100 product_item">
            <h3><?php echo substr($product['name'], 0, 30); ?></h3>
            <p class="list_image"><img src="/img/products/<?php echo $product['images'][0]['src']; ?>" /></p>
            <h4><?php echo format_price($product['price']); ?></h4>
            <p>
                <a href="/product.php?slug=<?php echo $product['slug']; ?>">Details</a>
            </p>
        </div>
    <?php endforeach; ?>
</div>

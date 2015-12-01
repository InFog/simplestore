<div class="column-group gutters">
    <div class="all-66 small-100 tiny-100">
        <h2><?php echo $product['name']; ?></h2>
        <h3>By <?php echo $product['brand']; ?></h3>
        <div class="column-group gutters">
            <?php foreach ($product['images'] as $image) : ?>
                <div class="all-33 small-100 tiny-100">
                    <img src="/img/products/<?php echo $image['src']; ?>" />
                </div>
            <?php endforeach; ?>
        </div>
        <p><?php echo $product['description']; ?></p>
    </div>
    <div class="all-33 small-100 tiny-100 rightalign">
        <h2><?php echo format_price($product['price']); ?></h2>
        <a href="/cart.php?add_product_id=<?php echo $product['id']; ?>" class="ink-button green">Add to cart</a>
    </div>
</div>

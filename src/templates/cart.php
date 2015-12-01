<div class="column-group gutters">
    <div class="all-66 small-100 tiny-100">
        <h2>Products in the Cart</h2>
        <div class="column-group gutters">
            <?php if (count($cart_products) == 0) : ?>
                <div class="all-100 small-100 tiny-100">
                    <p>The cart is empty</p>
                </div>
            <?php else : ?>
                <?php foreach ($cart_products as $cart_product) : ?>
                    <div class="all-15 small-100 tiny-100">
                        <img src="/img/products/<?php echo $cart_product['images'][0]['src']; ?>" />
                    </div>
                    <div class="all-70 small-100 tiny-100">
                        <p><?php echo $cart_product['name']; ?></p>
                        <p>
                            <a href="/product.php?slug=<?php echo $cart_product['slug']; ?>">Details</a>
                        </p>
                    </div>
                    <div class="all-15 small-100 tiny-100">
                        <p class="rightalign"><?php echo format_price($cart_product['price']); ?></p>
                        <p class="rightalign">
                            <a href="/cart.php?remove_product_id=<?php echo $cart_product['id']; ?>" class="ink-button red small">Remove</a>
                        </p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="all-33 small-100 tiny-100 rightalign">
        <h2><?php echo format_price($cart_total_amount); ?></h2>
        <a href="/checkout.php" class="ink-button green">Checkout</a>
    </div>
</div>

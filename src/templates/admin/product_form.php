<h2><?php echo $title; ?></h2>

<div class="column-group gutters">
    <div class="all-30 small-100 tiny-100">
    </div>
    <div class="all-40 small-100 tiny-100">
        <form class="ink-form" action="/admin/<?php echo ($product['id'] == 0) ? 'add_product' : 'edit_product'; ?>.php" method="post">
            <input id="product_id" name="product_id" type="hidden" value="<?php echo $product['id']; ?>">
            <div class="control-group required">
                <label for="name">Name</label>
                <div class="control">
                    <input id="name" name="name" type="text" maxlength="50" placeholder=""
                        value="<?php echo $product['name']; ?>"
                    >
                </div>

                <label for="price">Price</label>
                <div class="control">
                    <input id="price" name="price" type="text" maxlength="10" placeholder=""
                        value="<?php echo $product['price']; ?>"
                    >
                </div>

                <label for="brand">Brand</label>
                <div class="control">
                    <input id="brand" name="brand" type="text" maxlength="20" placeholder=""
                        value="<?php echo $product['brand']; ?>"
                    >
                </div>

                <label for="categories">Categories</label>
                <div class="control">
                    <input id="categories" name="categories" type="text" placeholder=""
                        value="<?php echo $product['categories']; ?>"
                    >
                </div>

                <label for="description">Description</label>
                <div class="control">
                    <textarea id="description" name="description"><?php echo $product['description']; ?></textarea>
                </div>
            </div>
            <div class="control-group rightalign">
                <input class="ink-button blue" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div class="all-30 small-100 tiny-100">
    </div>
</div>

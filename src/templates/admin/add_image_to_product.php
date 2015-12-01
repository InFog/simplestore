<h2>Add image to product</h2>

<form class="ink-form" action="/admin/add_image_to_product.php" method="post" enctype="multipart/form-data">
    <input id="product_id" name="product_id" type="hidden" value="<?php echo $product_id; ?>">
    <div class="control-group required">
        <label for="image">Image</label>
        <div class="control">
            <input id="image" name="image" type="file">
        </div>
    </div>
    <div class="control-group rightalign">
        <input class="ink-button blue" type="submit" value="Submit">
    </div>
</form>

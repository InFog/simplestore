<div class="column-group gutters">
    <div class="all-100 small-100 tiny-100 rightalign">
        <a href="/admin/add_product.php" class="ink-button blue small">Add a new product</a>
    </div>
</div>
<table class="ink-table">
    <thead>
        <tr>
            <th class="align-left">Image</th>
            <th class="align-left">Name</th>
            <th class="align-right">Price</th>
            <th class="align-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td class="admin_list_image">
                    <?php if (count($product['images']) > 0) : ?>
                        <img src="/img/products/<?php echo $product['images'][0]['src']; ?>" />
                    <?php else: ?>
                        <p>
                            This product has no images!<br />
                            It will not be shown on store.
                        </p>
                    <?php endif; ?>
                </td>
                <td>
                    <?php echo $product['name']; ?>
                </td>
                <td class="rightalign">
                    <?php echo format_price($product['price']); ?>
                </td>
                <td class="rightalign">
                    <a title="Add image" href="/admin/add_image_to_product.php?product_id=<?php echo $product['id']; ?>">
                        <i class="fa fa-image"></i>
                    </a>
                    <a title="Edit" href="/admin/edit_product.php?product_id=<?php echo $product['id']; ?>">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a title="Remove the product" href="/admin/delete_product.php?product_id=<?php echo $product['id']; ?>" class="ink-label red">
                        <i class="fa fa-remove"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

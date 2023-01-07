<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">

                <h1 class="text-center">Product List</h1>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) : ?>

                            <tr>
                                <td> <?php echo $product['id'] ?> </td>
                                <td> <?php echo $product['product_name'] ?> </td>
                                <?php #foreach($cats as $cat) : 
                                ?>
                                <td> <?php #echo $cat['cat_name'] 
                                        ?> Electric </td>
                                <?php #endforeach
                                ?>

                                <td><?php echo $product['product_details'] ?></td>
                                <td> <?php echo $product['product_price'] ?> </td>
                                <td>
                                    <img width="100" src="<?= base_url($product['product_image']) ?>" alt="image">
                                </td>

                            </tr>

                        <?php endforeach ?>
                        <!-- id	product_name product_details product_price	 -->
                    </tbody>
                    
                </table>

                <!-- Pagination -->
                <!-- <div class="pagination justify-content-end">
                    <?php #if ($pager) : ?>
                        <?php #$pagi_path = 'index.php//pages/list'; ?>
                        <?php #$pager->setPath($pagi_path); ?>
                        <?php # echo $pager->links() ?>
                    <?php #endif ?>
                    
                </div> -->

                <?php echo $pager->links('group1', 'bs_full'); ?>

            </div>
        </div>
    </div>



</body>

</html>
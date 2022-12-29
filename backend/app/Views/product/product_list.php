<?php echo  view('layouts/product_header.php'); ?>

<!-- top nav -->
<?php echo  view('layouts/top_nav.php'); ?>

<!-- Left sidebar nav -->
<?php echo  view('layouts/left_sidebar.php'); ?>


<!-- content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><a class="btn btn-primary"  href="/products/new"> Add New Product </a> </h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>

                    <!-- Seesion msg -->
                    <?php
                    
                        if(session()->has('msg')): ?>
                            <div class="alert alert-success">
                                <?= session()->msg; ?>
                            </div>
                    <?php endif; ?>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">

                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <h1 class="text-center">Product List</h1>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Details</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($products as $product) : ?>
                                        
                                    <tr>
                                        <td> <?php echo $product['id'] ?> </td>
                                        <td> <?php echo $product['product_name'] ?> </td>
                                        <?php foreach($cats as $cat) : ?>
                                            <td> <?php echo $cat['cat_name'] ?> </td>
                                        <?php endforeach?>                          

                                        <td><?php echo $product['product_details'] ?></td>
                                        <td> <?php echo $product['product_price'] ?> </td>
                                        <td>  
                                            <img width="100"  src="<?= $product['product_image'] ?>" alt="image">
                                        </td>
                                        <td>  
                                            <a class="btn btn-primary" href="<?= site_url("products/edit/".$product['id']) ?>">
                                                <i class="fa fa-pen" ></i> &nbsp
                                            </a>  
                                            <a class="btn btn-danger" href="products/delete/<?= $product['id'] ?>">
                                                <i class="fa fa-trash" ></i>
                                            </a>

                                        </td>
                                        
                                    </tr>

                                    <?php endforeach?>                          
                                        <!-- id	product_name product_details product_price	 -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Details</th>
                                        <th>Price</th>
                                        <th>Action </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </section>

            </div>
            <!-- /.row (main row) -->



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Footer -->
<?php echo  view('layouts/product_footer'); ?>
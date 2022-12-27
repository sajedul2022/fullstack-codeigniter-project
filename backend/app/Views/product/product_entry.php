<?php echo  view('layouts/header.php'); ?>

<!-- top nav -->
<?php echo  view('layouts/top_nav.php'); ?>

<!-- Left sidebar nav -->
<?php echo  view('layouts/left_sidebar.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-2"> </div>

                <div class="col-md-8">

                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start --> 
                        <form method="post" action="<?= base_url('products/create')?>" >

                        <?php 
                            // if(isset($validation)){
                            //     $errors = $validation->getErrors();
                            //         if(count($errors)> 0){
                            //             echo "<ul>";
                            //                 foreach($errors as $err){
                            //                     echo "<li> $err </li>";
                            //                 }
                            //             echo "</ul>";
                            //         }
                            // }
                        ?>
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?= set_value('product_name') ?>" >
                                    <span class="text-danger" >
                                        <?php 
                                            if(isset($validation)){
                                                $error = $validation->getError('product_name');
                                                echo $error;
                                            }
                                        ?>
                                    </span>
                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product Details</label>
                                    <textarea name="product_details" id="summernote"  cols="30" rows="5" placeholder="Enter Product Details"> <?= set_value('product_details') ?>
                                    </textarea>

                                    <span class="text-danger" >
                                        <?php 
                                            if(isset($validation)){
                                                $error = $validation->getError('product_details');
                                                echo $error;
                                            }
                                        ?>
                                    </span>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price</label>
                                    <input name="product_price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Price" value="<?= set_value('product_price') ?>">

                                    <span class="text-danger" >
                                        <?php 
                                            if(isset($validation)){
                                                $error = $validation->getError('product_price');
                                                echo $error;
                                            }
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->




                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!-- Footer -->
<?php echo  view('layouts/footer.php'); ?>
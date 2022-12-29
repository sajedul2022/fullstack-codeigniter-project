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

    <!-- Seesion msg -->
    <?php           
            if(session()->has('msg')): ?>
            <div class="alert alert-success">
                <?= session()->msg; ?>
            </div>
    <?php endif; ?>

      <!-- error session store -->
        <?php 
            $errors =  [];
            if(session()->has('errors')){
                $errors =  session()->errors;
            }
        ?>

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
                        <form method="post" action="<?= base_url('products/create')?>" enctype="multipart/form-data" >
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" value="<?php echo old('product_name') ?>" >
                                    <span class="text-danger" >
                                        <?=isset($errors['product_name']) ? $errors['product_name'] : ""?>
                                    </span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Category</label>
                                    <select name="product_category" class="form-control">
                                        <option value="" selected disabled > Select One</option>
                                        <?php foreach($cats as $cat) : ?>
                                            <option value="<?= $cat['id']; ?>" > <?= $cat['cat_name']; ?> </option>
                                        <?php endforeach; ?>
                                    </select> 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Product Details</label>
                                    <textarea name="product_details" id="summernote"  cols="30" rows="5" placeholder="Enter Product Details"> <?= old('product_details') ?>
                                    </textarea>

                                    <span class="text-danger" >
                                        <?=isset($errors['product_details']) ? $errors['product_details'] : ""?>
                                    </span>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price</label>
                                    <input name="product_price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Price" value="<?= old('product_price') ?>">

                                    <span class="text-danger" >
                                        <?=isset($errors['product_price']) ? $errors['product_price'] : ""?>
                                    </span>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Image</label>
                                    <input name="product_image" type="file" class="form-control" id="exampleInputEmail1"  value="<?= old('product_image') ?>">

                                    <span class="text-danger" >
                                        <?=isset($errors['product_image']) ? $errors['product_image'] : ""?>
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
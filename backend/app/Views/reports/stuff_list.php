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
                    
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Reports</li>
                    </ol>

                    <!-- Seesion msg -->
                    <?php

                    if (session()->has('msg')) : ?>
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
                                <h1 class="text-center">Office Wise Stuff List</h1>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">

                            <h3>Office List</h3> 

                                <form action="">
                                    <select name="" id="officecode">
                                        <option value="" disabled selected > Select One </option>

                                        <?php foreach($offices as $office):  ?>
                                            <option value="<?= $office['officeCode'] ?>" >
                                                <?= $office['city'] . "(". $office['country'] .")" ?> 
                                            </option>
                                        <?php endforeach;  ?>

                                    </select>
                                    
                                </form>

                            <div class="card-body" id="show"> </div>

                            <!-- pagination -->
                            <?php #echo $pager->links('group1', 'bs_full'); ?>

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
<?php
include "../../config/config.php";
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Kiran Jwellers</title>
         <?php include('../../includes/header-styles.php'); ?>
    </head>

    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        
        <?php include ('../../includes/header.php'); ?>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Sub Category</h2>
                </div>
                <!-- Input -->
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">    
                                <form action="" method="post" enctype="multipart/form-data">
                                <h4>Category Name</h4>               

                                <div class="row clearfix">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="scname" placeholder="Sub Category Name" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                        <button class="btn btn-sm btn-primary waves-effect" name="submit" type="submit">SUBMIT</button>
                                    </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>SUB CATEGORY LIST</h2>	
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Sub Category</th>
                                                <th>Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $cat_id=$_GET['id'];
                                            $sql = "SELECT * FROM sub_cat where cat_id='$cat_id'";
                                            $cnt=0;
                                            $res_data = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res_data)) {
                                                $cnt++;
                                                $id = $row['id'];
                                                $scname = $row['scname'];
                                                $cat_id = $row['cat_id'];
                                                
                                                $sql2="select name from category where id='$cat_id'";
                                                $res_data1 = mysqli_query($conn, $sql2);
                                                while ($row = mysqli_fetch_array($res_data1)) {
                                                    $cname=$row['name'];
                                                }
                                                ?>
                                            <tr>
                                                <td><?php echo $cnt; ?></td>
                                                <td><?php echo $scname; ?></td>
                                                <td><?php echo $cname; ?></td>
                                                <td class="justify-content-between text-center">
                                                    <a href="edit_sub_cat.php?id=<?php echo $id; ?>"><button class="btn btn-sm btn-primary  btn-sm waves-effect" type="button"  data-toggle="modal" data-target="#editSubCategoryModal"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                    <a href="delete_sub_cat.php?id=<?php echo $id; ?>"><button type="button" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>
                                                </td>	
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Input -->
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="../../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../../plugins/node-waves/waves.js"></script>

        <!-- Autosize Plugin Js -->
        <script src="../../plugins/autosize/autosize.js"></script>

        <!-- Moment Plugin Js -->
        <script src="../../plugins/momentjs/moment.js"></script>

        <!-- Jquery DataTable Plugin Js -->
        <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>


        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/tables/jquery-datatable.js"></script>
        <script src="../../js/pages/forms/basic-form-elements.js"></script>

        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>

        <script src="../../js/pages/category/sub_category.js"></script>
    </body>
    <?php
    if (isset($_POST['submit'])) {
        $cat_id=$_GET['id'];
        $scname = $_POST['scname'];

        $sql = "INSERT INTO sub_cat (scname,cat_id) values ('$scname','$cat_id')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            echo'<script>window.location="sub_category.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</html>


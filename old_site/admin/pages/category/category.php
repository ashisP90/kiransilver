<?php
include "../../config/config.php";

if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];

    $target_dir = "images";
    $tmp_name = $_FILES["image"]["tmp_name"];
    $name = $_FILES["image"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name");
    $image = $name;

    $sql = "INSERT INTO category (name,image) values ('$cname','$image')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo'<script>window.location="category.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
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

        <?php include ('../../includes/header.php'); ?>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Category</h2>
                </div>
                <!-- Input -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">                   
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="cname" placeholder="Category Name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-4 col-lg-11 d-flex flex-row justify-content-between">
                                            <div class="form-group d-flex flex-column ">
                                                <label class="label-text">Upload Image</label>
                                                <input type="file"name="image">	
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
                </div>
                
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>CATEGORY LIST</h2>	
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Home Page</th>
                                                <th>Sub Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM category";
                                            $cnt = 0;
                                            $res_data = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res_data)) {
                                                $cnt++;
                                                $id = $row['id'];
                                                $cname = $row['name'];
                                                $image = $row['image'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $cname; ?></td>
                                                    <td>
                                                        <img class="img-responsive thumbnail" style="margin: auto;width: 5rem;" src="images/<?php echo $image; ?>">
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label><input type="checkbox" checked=""><span class="lever switch-col-red"></span></label>
                                                            <!--<label>Add To Arrival</label>-->
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="sub_category.php?id=<?php echo $id; ?>"> <span>&#128065;</span> Sub Category</a>
                                                    </td>
                                                    <td class="justify-content-between text-center">
                                                        <a href="edit_category.php?id=<?php echo $id; ?>"><button class="btn btn-sm btn-primary  btn-sm waves-effect" type="button" data-toggle="modal" data-target="#editCategoryModal"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                        <a href="delete_category.php?id=<?php echo $id; ?>"><button type="button" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>
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

        <!-- EDIT CATEGORY -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Category</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row clearfix">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Category Name" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary waves-effect">Edit</button>
                        <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- VIEW SUB CATEGORY LIST -->
        <div class="modal fade" id="viewSubCategoryModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">View Sub Category List</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row clearfix">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <p>Sub Category 1</p>
                                    <p>Sub Category 2</p>
                                    <p>Sub Category 3</p>
                                    <p>Sub Category 4</p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include('../../includes/footer-scripts.php'); ?>
    </body>
</html>

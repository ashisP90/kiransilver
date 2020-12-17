<?php
include "../../config/config.php";
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Kiran Jwellers</title>
        <!-- Favicon-->
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />


        <!-- JQuery DataTable Css -->
        <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Wait Me Css -->
        <link href="../../plugins/waitme/waitMe.css" rel="stylesheet" />

        <!-- Bootstrap Select Css -->
        <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../../css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/all-themes.css" rel="stylesheet" />
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
                    <h2>Instagram</h2>
                </div>
                <!-- Input -->
                <div class="row justify-content-around clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="body"> 

                                <?php
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM producst_detail where id='$id'";
                                $res_data = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($res_data);

                                $id = $row['id'];
                                $pcode = $row['pcode'];
                                $image = $row['image'];
                                $stone_color = $row['stone_color'];
                                $stone_shape = $row['stone_shape'];
                                $plating = $row['plating'];
                                $collection = $row['collection'];
                                $purity = $row['purity'];
                                $unit_pcs = $row['unit_pcs'];
                                $unit_packet = $row['unit_packet'];
                                $weight = $row['weight'];
                                $size = $row['size'];
                                $in_stock = $row['in_stock'];
                                $prod_id = $row['prod_id'];
                                ?>
                                <div class="row clearfix">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="text-center p-b-20">
                                            <img src="images/<?php echo $image; ?>" height=100px width=100px>
                                            <button type="button" class="btn btn-info btn-lg text-center" data-toggle="modal" data-target="#myModal" id="addimg">Change the Image</button>
                                        </div>

                                    </form>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" name="pcode" value="<?php echo $pcode; ?>" class="form-control" placeholder="Product Code" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="sel1">Stone Color:</label>
                                                <select class="form-control" name="stone_color">
                                                    <option selected><?php echo $stone_color; ?></option>
                                                    <option>white</option>
                                                    <option>yellow</option>
                                                    <option>marun</option>
                                                    <option>purple</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="sel1">Stone Shape:</label>
                                                <select class="form-control" name="stone_shape">
                                                    <option selected><?php echo $stone_shape; ?></option>
                                                    <option>Round</option>
                                                    <option>Square</option>
                                                    <option>Oval</option>
                                                    <option>Triangle</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="sel1">Plating:</label>
                                                <select class="form-control" name="plating">
                                                    <option selected><?php echo $plating; ?></option>
                                                    <option>Silver</option>
                                                    <option>Oxodise</option>
                                                    <option>High Polish</option>
                                                    <!--<option>Triangle</option>-->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" value="<?php echo $collection; ?>" name="collection" placeholder="collection" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" value="<?php echo $purity; ?>" name="purity" placeholder="purity" />
                                                </div>
                                            </div>
                                        </div>

                                        <!--                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                                                                    <div class="form-group">
                                                                                        <div class="form-line">
                                                                                            <input type="varchar" class="form-control" value="<?php echo $unit_pcs; ?>" name="unit_pcs" placeholder="Unit pcs" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->   
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="sel1">unit Pcs:</label>
                                                <select class="form-control" name="unit_pcs">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <!--<option>Triangle</option>-->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="sel1">unit Packet:</label>
                                                <select class="form-control" name="unit_packet">
                                                    <option selected><?php echo $unit_packet; ?></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8/option>
                                                    <option>9</option>
                                                    <!--<option>Triangle</option>-->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" value="<?php echo $weight; ?>" name="weight" placeholder="Weight" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" value="<?php echo $size; ?>" name="size" placeholder="size" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" value="<?php echo $in_stock; ?>" name="in_stock" placeholder="In Stock" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                            <button class="btn btn-sm btn-primary waves-effect" type="submit" name="submit">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Input -->
            </div>
        </section>

        <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Change The Image</h4>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <label class="fg-label">Upload The Image</label>
                                <input type="file" name="image" class="form-control fg-input form-group" required="">
                                <input type="submit" name="submit1" class="btn btn-primary">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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


        <script src="../../js/pages/home-page/instagram.js"></script>
    </body>

    <?php
    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $pcode = $_POST['pcode'];
        $stone_color = $_POST['stone_color'];
        $stone_shape = $_POST['stone_shape'];
        $plating = $_POST['plating'];
        $collection = $_POST['collection'];
        $purity = $_POST['purity'];
        $unit_pcs = $_POST['unit_pcs'];
        $unit_packet = $_POST['unit_packet'];
        $weight = $_POST['weight'];
        $size = $_POST['size'];
        $in_stock = $_POST['in_stock'];

        $sql = "UPDATE producst_detail SET pcode='$pcode',stone_color='$stone_color',stone_shape='$stone_shape',plating='$plating',collection='$collection',purity='$purity',unit_pcs='$unit_pcs',unit_packet='$unit_packet',weight='$weight',size='$size',in_stock='$in_stock' where id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            echo'<script>window.location="product-details.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>    

    <?php
    if (isset($_POST['submit1'])) {
        $id = $_GET['id'];

        $target_dir = "images";
        $tmp_name = $_FILES["image"]["tmp_name"];
        $name = $_FILES["image"]["name"];
        move_uploaded_file($tmp_name, "$target_dir/$name");
        $image = $name;

        $sql = "UPDATE producst_detail SET image='$image' where id='$id'";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            echo'<script>window.location="edit_pro_detail.php?id=' . $id . '";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>  

</html>
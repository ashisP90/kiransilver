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

        <?php include ('../../includes/header.php'); ?>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Media & Press</h2>
                </div>
                <!-- Input -->
                <div class="row justify-content-around clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="body">      
                                <?php
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM media_press where sr_no='$id'";
                                $res_data = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($res_data);

                                $id = $row['sr_no'];
                                $news_title = $row['news_title'];
                                $description = $row['description'];
                                $image = $row['image'];
                                ?>
                                <div class="row clearfix">
<!--                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="text-center p-b-20">
                                            <img src="images/<?php echo $image; ?>" height=100px width=100px>
                                            <button type="button" class="btn btn-info btn-lg text-center" data-toggle="modal" data-target="#myModal" id="addimg">Change the video</button>
                                        </div>
                                    </form>-->
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" value="<?php echo $news_title; ?>" placeholder="YouTube Link" name="news_title" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="description" cols="20" placeholder="Description" rows="2" class="form-control no-resize" required><?php echo $description; ?></textarea>
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
            </div>
        </section>


<!--        <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Change The video</h4>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <label class="fg-label">Upload The video</label>
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
        </div>-->

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


        <script src="../../js/pages/home-page/media-press.js"></script>
    </body>
    <?php
    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $news_title = $_POST['news_title'];
        $description= $_POST['description'];
        
        $sql = "UPDATE media_press SET news_title='$news_title',description='$description' where sr_no='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            echo'<script>window.location="media-press.php";</script>';
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

        $sql = "UPDATE media_press SET image='$image' where sr_no='$id'";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            echo'<script>window.location="edit_media.php?id=' . $id . '";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?> 

</html>

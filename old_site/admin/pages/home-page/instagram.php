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
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="body">                   
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row clearfix">

                                        <div class="col-3 col-sm-3 col-md-4 col-lg-11 d-flex flex-row justify-content-between">
                                            <div class="form-group d-flex flex-column ">
                                                <label class="label-text">Upload Image</label>
                                                <input type="file" name="image">	
                                            </div>
                                            <!-- <img id="smallImage" src="#" alt="your image" /> -->
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="photo_name" class="form-control" placeholder="Link" />
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

                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>FACEBOOK LIST</h2>	
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                            <tr>
                                                <th width="10%">Sr No</th>
                                                <th width="30%">Uploded Photo</th>
                                                <th width="30%">Link</th>
                                                <th width="30%">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM instagram";

                                            $res_data = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res_data)) {

                                                $id = $row['sr_no'];
                                                $photo_name = $row['photo_name'];
                                                $image = $row['image'];
                                                ?>
                                            <tr>
                                                <td><?php echo $id; ?></td>
                                                <td>
                                                    <img class="img-responsive thumbnail" style="margin: auto;width: 5rem;" src="images/<?php echo $image; ?>">
                                                </td>
                                                <td><?php echo $photo_name; ?></td>
                                                <td class="justify-content-between text-center">
                                                    <a href="edit_instagram.php?id=<?php echo $id; ?>"><button class="btn btn-sm btn-primary  btn-sm waves-effect" type="button" data-toggle="modal" data-target="#editInstagramModal"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                    <a href="delete_instagram.php?id=<?php echo $id; ?>"><button type="button" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>
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


        <script src="../../js/pages/home-page/instagram.js"></script>
    </body>
    
    <?php
    if (isset($_POST['submit'])) {
        $photo_name = $_POST['photo_name'];

        $target_dir = "images";
        $tmp_name = $_FILES["image"]["tmp_name"];
        $name = $_FILES["image"]["name"];
        move_uploaded_file($tmp_name, "$target_dir/$name");
        $image = $name;

        $sql = "INSERT INTO instagram (photo_name,image) values ('$photo_name','$image')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            echo'<script>window.location="facebook.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
    
</html>

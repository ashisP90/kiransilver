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


                <!-- CKEditor -->
                <div class="row clearfix">
                    <form action="" method="post">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>CONTACT US</h2>
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
                                <textarea id="ckeditor" name="contact_info">
							<h2>CONTACT US</h2>
							
							<h3>Address</h3>
							<p>23/25, 2nd Agiyari Lane, Prakash Bhawan, 2nd Floor, Opp. Nasta Galli & IBJA , Zaveri Bazar, Mumbai-400003, Maharashtra. INDIA</p>

							<h3>Sales Enquiry</h3>
							<p> +91 9930 925 925</p>

							<h3>Phone</h3>
							<p> +91 9930 925 925 /  +91 9930 925 925</p>

							<h3>Email</h3>
							<p>info@kiransilver.com</p>
							
							
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <button class="btn btn-sm btn-primary waves-effect" name="submit" type="submit">SUBMIT</button>
                    </div>
                    </form>
                </div>
                <!-- #END# CKEditor -->
                <!-- TinyMCE -->

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

        <!-- Ckeditor -->
        <script src="../../plugins/ckeditor/ckeditor.js"></script>

        <!-- TinyMCE -->
        <script src="../../plugins/tinymce/tinymce.js"></script>

        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/forms/editors.js"></script>

        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>

        <script src="../../js/pages/footer/contact_us.js"></script>
    </body>
<?php
    if (isset($_POST['submit'])) {
        $contact_info = $_POST['contact_info'];

        $sql = "UPDATE contact_us SET contact_info='$contact_info'";

        if (mysqli_query($conn, $sql)) {
            echo " successfully updated";
            echo'<script>window.location="contact_us.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</html>

<?php
include "../../config/config.php";
if (isset($_POST['submit'])) {
    $person_name = $_POST['person_name'];
    $contact_no = $_POST['contact_no'];

    $sql = "INSERT INTO contact (person_name,contact_no) values ('$person_name','$contact_no')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo'<script>window.location="contact_details.php";</script>';
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
                    <h2>Contact</h2>
                </div>
                <!-- Input -->
                <div class="row clearfix">
<!--                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">                   
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="person_name" class="form-control" placeholder="Person Name" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="contact_no" class="form-control" placeholder="Contact" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                            <button class="btn btn-sm btn-primary waves-effect" type="submit" name="submit">SUBMIT</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>-->

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>CONTACT LIST</h2>	
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Person Name</th>
                                                <th>Contact</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM contact";
                                            $cnt = 0;
                                            $res_data = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res_data)) {
                                                $cnt++;
                                                $id = $row['sr_no'];
                                                $person_name = $row['person_name'];
                                                $contact_no = $row['contact_no'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $person_name; ?></td>
                                                    <td><?php echo $contact_no; ?></td>
                                                    <td class="justify-content-between text-center">
                                                        <a href="edit_contact.php?id=<?php echo $id; ?>"><button class="btn btn-sm btn-primary  btn-sm waves-effect" type="button" data-id='' data-toggle="modal" data-target="#editContactModal"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                        <!--<button class="btn btn-sm btn-danger  btn-sm waves-effect" type="button">Delete</button>-->
                                                        <!--<a href="delete_contact.php?id=<?php echo $id; ?>"><button type="button" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>-->

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

        <!-- EDIT CONTACT -->
<!--        <div class="modal fade" id="editContactModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Contact</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row clearfix">
                                <div class="row clearfix">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="person_name" class="form-control" placeholder="Person Name" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="contact_no" class="form-control" placeholder="Contact" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-sm btn-primary waves-effect">Edit</button>
                        <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <?php include('../../includes/footer-scripts.php'); ?>
</body>
</html>
<?php
include "config/config.php";
checkIfLoggedIn();

$sql = "SELECT * FROM reg_user";
$res_data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Kiran Jwellers</title>
        <?php include('includes/header-styles.php'); ?>
    </head>

    <body class="theme-red">
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
        <div class="overlay"></div>
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>

        <?php include ('includes/header.php'); ?>

        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-around clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>REGISTERED USER LIST</h2>	
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
                                                <th width="5%">Sr No</th>
                                                <th width="15%">Name</th>
                                                <th width="20%">Mobile No.</th>
                                                <th width="20%">Company Name</th>
                                                <th width="20%">Area</th>
                                                <th width="20%">Email</th>
                                                <!-- <th width="20%">Action</th> -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_array($res_data)) {

                                                $id = $row['id'];
                                                $name = $row['name'];
                                                $mobile = $row['mobile'];
                                                $c_name = $row['c_name'];
                                                $email = $row['email'];
                                                $area = $row['area'];
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $mobile; ?></td>
                                                    <td><?php echo $c_name; ?></td>
                                                    <td><?php echo $area; ?></td>
                                                    <td><?php echo $email; ?></td>
                                                    <!-- <td class="justify-content-between text-center">
                                                            <button class="btn btn-sm btn-primary  btn-sm waves-effect" type="button" data-toggle="modal" data-target="#editProductModal">Edit</button>
                                                            <button class="btn btn-sm btn-danger  btn-sm waves-effect" type="button">Delete</button>
                                                    </td> -->	
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product Details</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row clearfix">

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Product Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="sel1">Category:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Category 1</option>
                                            <option>Category 2</option>
                                            <option>Category 3</option>
                                            <option>Category 4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="sel1">Sub Category:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Sub Category 1</option>
                                            <option>Sub Category 2</option>
                                            <option>Sub Category 3</option>
                                            <option>Sub Category 4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="description" cols="20" placeholder="Description" rows="2" class="form-control no-resize" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="more info" cols="20" placeholder="More Info" rows="2" class="form-control no-resize" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="feature" cols="20" placeholder="Feature" rows="2" class="form-control no-resize" required></textarea>
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
        <?php include('includes/footer-scripts.php'); ?>
        <script src="assets/js/pages/user/registered_user.js"></script>
    </body>
</html>

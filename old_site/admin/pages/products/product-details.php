<?php
include "../../config/config.php";
checkIfLoggedIn();

$id = $_GET['id'];
$sql = "SELECT * FROM product where id='$id'";
$res_data = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res_data);

$id = $row['id'];
$pname = $row['pname'];
$pcode = $row['pcode'];
                                
if (isset($_POST['submit'])) {
    $pro_id = $_GET['id'];
    $pcode = $_POST['pcode'];
    $stone_shape = $_POST['stone_shape'];
    $stone_color = $_POST['stone_color'];
    $plating = $_POST['plating'];
    $collection = $_POST['collection'];
    $purity = $_POST['purity'];
    $unit_pcs = $_POST['unit_pcs'];
    $unit_packet = $_POST['unit_packet'];
    $weight = $_POST['weight'];
    $size = $_POST['size'];
    $in_stock = $_POST['in_stock'];

    $target_dir = "images";
    $tmp_name = $_FILES["image"]["tmp_name"];
    $name = $_FILES["image"]["name"];
    move_uploaded_file($tmp_name, "$target_dir/$name");
    $image = $name;

    $sql = "INSERT INTO producst_detail(`image`, `pcode`, `stone_color`, `stone_shape`, `plating`, `collection`, `purity`, `unit_pcs`, `unit_packet`, `weight`, `size`, `in_stock`, `prod_id`) VALUES('$image','$pcode','$stone_color','$stone_shape','$plating','$collection','$purity','$unit_pcs','$unit_packet','$weight','$size','$in_stock','$pro_id')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo'<script>window.location="product-details.php?id=' . $pro_id. '";</script>';
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
                    <h2>Product Details (Product Name) </h2>
                </div>
                <!-- Input -->
                <div class="row justify-content-around clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="body">                   
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row clearfix">

                                        <div class="col-3 col-sm-3 col-md-4 col-lg-11 d-flex flex-row justify-content-between">
                                            <div class="form-group d-flex flex-column ">
                                                <label class="label-text">Upload Image</label>
                                                <input type="file" name="image">	
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="sel1">Stone Color:</label>
                                                <select class="form-control" name="stone_color">
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
                                                    <input type="varchar" class="form-control" name="collection" placeholder="collection e.g. Religious" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" name="purity" placeholder="purity in carat" />
                                                </div>
                                            </div>
                                        </div>

<!--                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" name="unit_pcs" placeholder="Unit pcs" />
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

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" name="weight" placeholder="Weight" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" name="size" placeholder="size" />
                                                </div>
                                            </div>
                                        </div>

<!--                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="varchar" class="form-control" name="in_stock" placeholder="In Stock" />
                                                </div>
                                            </div>
                                        </div>-->

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                            <button class="btn btn-sm btn-primary waves-effect" name="submit" type="submit">SUBMIT</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>PRODUCT DETAILS LIST </h2>
                                <h4>Product name:<?php echo $pname; ?> and Product code:<?php echo $pcode; ?></h4>
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
                                                <th width="20%">Product Photo</th>
                                                <!--<th width="10%">Product code</th>-->
                                                <th width="15%">Stone color</th>
                                                <th width="10%">stone shape</th>
                                                <th width="10%">plating</th>
                                                <th width="20%">collection</th>
                                                <th width="10%">purity</th>
                                                <th width="15%">unit pcs</th>
                                                <th width="10%">unit packet</th>
                                                <th width="10%">weight</th>
                                                <th width="10%">Size</th>
                                                <!--<th width="10%">In stock</th>-->
                                                <!--<th width="10%">Product id</th>-->
                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <?php
                                                $pro_id = $_GET['id'];
                                                $sql = "SELECT * FROM producst_detail where prod_id='$pro_id'";

                                                $cnt = 0;
                                                $res_data = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($res_data)) {
                                                    $cnt++;
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
                                                    <td><?php echo $cnt; ?></td>
                                                    <td>
                                                        <img class="img-responsive thumbnail" style="margin: auto;width: 5rem;" src="images/<?php echo $image; ?>">
                                                    </td>
                                                    <!--<td><?php echo $pcode; ?></td>-->
                                                    <td><?php echo $stone_color; ?></td>
                                                    <td><?php echo $stone_shape; ?></td>
                                                    <td><?php echo $plating; ?></td>
                                                    <td><?php echo $collection; ?></td>
                                                    <td><?php echo $purity; ?></td>
                                                    <td><?php echo $unit_pcs; ?></td>
                                                    <td><?php echo $unit_packet; ?></td>
                                                    <td><?php echo $weight; ?></td>
                                                    <td><?php echo $size; ?></td>
                                                    <!--<td><?php echo $in_stock; ?></td>-->
                                                    <!--<td><?php echo $prod_id; ?></td>-->

                                                    <td class="justify-content-between text-center">
                                                        <a href="edit_pro_detail.php?id=<?php echo $id; ?>"><button class="btn btn-sm btn-primary  btn-sm waves-effect" type="button" data-toggle="modal" data-target="#editproductDetailModal"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                        <a href="delete_pro_detail.php?id=<?php echo $id; ?>"><button type="button" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>
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

        <!-- EDIT ISTAGRAM DETAILS -->
        <div class="modal fade" id="editproductDetailModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit product Details</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row clearfix">

                                <div class="col-3 col-sm-3 col-md-4 col-lg-11 d-flex flex-row justify-content-between">
                                    <div class="form-group d-flex flex-column ">
                                        <label class="label-text">Upload Image</label>
                                        <input 
                                            type="file"  
                                            accept=".png, .jpg, .jpeg"  
                                            enctype="multipart/form-data" 
                                            id="imageUploadFiles" 
                                            onchange="smallImageFiles(this);"

                                            >	
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Size" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Colour" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Weight" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Price" />
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



        <!-- EDIT PRODUCT DETAILS -->
        <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
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

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="description" cols="20" placeholder="Description" rows="2" class="form-control no-resize" required></textarea>
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
        <?php include('../../includes/footer-scripts.php'); ?>
        <script src="../../js/pages/products/product-details.js"></script>
    </body>
</html>

<?php
include "config/config.php";
checkIfLoggedIn();

if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $description = $_POST['description'];
    $more_info = ''; //$_POST['more_info'];
    $features = ''; //$_POST['features'];
    $pcode = $_POST['pcode'];
    $prod_cat = $_POST['prod_cat'];
    $sub_cat  = $_POST['sub_cat'];
    $product_type  = $_POST['product_type'];
    $video_url  = $_POST['video_url'];
    
    $product_image = '';
    if($_FILES['product_image']){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
        //$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["product_image"]["tmp_name"]);
        if($check !== false) {
            if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
                $product_image = $_FILES["product_image"]["name"];
            }
        }
    }
    $sql = "INSERT INTO product (pname,pcode,description,product_image,type,video_url, more_info,features,prod_cat,sub_cat) values ('$pname', '$pcode', '$description', '$product_image', $product_type, '$video_url', '$more_info','$features','$prod_cat','$sub_cat')";

    if (mysqli_query($conn, $sql)) {
        echo "Product added succcefully";
        echo '<script>window.location="products.php";</script>';
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
                                <h2>PRODUCT LIST</h2>	
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
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="button" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#addProductModal" >Add Product</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>

                                            <tr>
                                                <th width="5%">sr no</th>
                                                <th width="15%">Title</th>
                                                <th width="15%">Product Code</th>
                                                <th width="20%">Description</th>
<!--                                                <th width="20%">More Info</th>
                                                <th width="20%">Feature</th>-->
                                                <!--<th width="10%">New Arrival</th>-->
                                                <th width="20%">Product Category</th>
                                                <th width="20%">Sub category</th>
                                                <th width="20%">New Arrivals</th>
                                                <th width="10%">Other Details</th>
                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM product";
                                            $cnt = 0;
                                            $res_data = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res_data)) {
                                                $cnt++;
                                                $id = $row['id'];
                                                $pname = $row['pname'];
                                                $description = $row['description'];
                                                $more_info = $row['more_info'];
                                                $features = $row['features'];
                                                $pcode = $row['pcode'];
                                                $sub_cat = $row['sub_cat'];
                                                $prod_cat = $row['prod_cat'];
                                                ?>
                                                <tr>                                                
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo $pname; ?></td>
                                                    <td><?php echo $pcode; ?></td>
                                                    <td><?php echo $description; ?></td>
    <!--                                            <td><?php echo $more_info; ?></td>
                                                    <td><?php echo $features; ?></td>-->
                                                    <td><?php echo $sub_cat ?></td>
                                                    <td><?php echo $prod_cat ?></td>
                                                    <td>
                                                        <div class="switch">
                                                            <label><input type="checkbox" checked=""><span class="lever switch-col-red"></span></label>
                                                            <!--<label>Add To Arrival</label>-->
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="pages/products/product-details.php?id=<?php echo $id; ?>">Other Details</a>
                                                    </td>
                                                    <td class="justify-content-between text-center">
                                                        <a href="pages/products/edit_product.php?id=<?php echo $id; ?>"><button class="btn btn-sm btn-primary  btn-sm waves-effect" type="button"><span class="glyphicon glyphicon-edit"></span></button></a>
                                                        <a href="pages/products/delete_product.php?id=<?php echo $id; ?>"><button type="button" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a>
                                                    </td>	
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

        <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Product</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="pname" placeholder="Product Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pcode" class="form-control" placeholder="Product Code" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <?php foreach($productTypes as $productType => $typeName): ?>
                                            <div class="col-md-6">
                                                <label>
                                                    <input type="radio" name="product_type" class="form-radio" value="<?php echo $productType; ?>" />
                                                    <?php echo $typeName; ?>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="description" cols="20" name="description" placeholder="Description" rows="4" class="form-control no-resize" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="product_image" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="video_url" class="form-control" placeholder="Enter Youtube URL" />
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea name="more info" cols="20" name="more_info" placeholder="More Info" rows="2" class="form-control no-resize" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea cols="20" name="features" placeholder="Feature" rows="2" class="form-control no-resize" required></textarea>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Product category:</label>
                                        <select class="category form-control" name="prod_cat">
                                            <?php
                                            $sql = "SELECT * FROM category";
                                            $res_data = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res_data)) {

                                                $id = $row['id'];
                                                $cname = $row['name'];
                                                ?>
                                                <option><?php echo $cname; ?></option>
                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Sub category:</label>
                                        <select class="sub_cat form-control" name="sub_cat">                                           
                                            <?php
                                            $sql = "SELECT * FROM sub_cat";
                                            $res_data = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res_data)) {

                                                $id = $row['id'];
                                                $scname = $row['scname'];
                                                ?>
                                                <option><?php echo $scname; ?></option>
                                                <?php
                                            }
                                            ?>                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-sm btn-primary waves-effect">Submit</button>
                            <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- EDIT PRODUCT DETAILS -->
        <!--        <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog">
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
                </div>-->
        <?php include('includes/footer-scripts.php'); ?>
        <script src="assets/js/pages/products/products.js"></script>
        <script>
        $(document).ready(function () {
            $(".category").change(function () {
                var cat_id = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "ajax.php",
                    data: {id: cat_id},
                    success: function (data) {
                        $(".sub_cat").html(data);
                    }
                });
            });
        });
    </script>
    </body>
</html>
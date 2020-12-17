<?php
include "../../config/config.php";
checkIfLoggedIn();

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $pname = $_POST['pname'];
    $more_info = $_POST['more_info'];
    $description = $_POST['description'];
    $features = $_POST['features'];
    $prod_cat= $_POST['prod_cat'];
    $sub_cat= $_POST['sub_cat'];

    $sql = "UPDATE product SET pname='$pname',description='$description',more_info=',prod_cat='$prod_cat',sub_cat='$sub_cat' where id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        echo'<script>window.location="products.php";</script>';
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

        <?php include ('../../includes/header.php'); ?>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Edit Product</h2>
                </div>
                <!-- Input -->
                <div class="row justify-content-around clearfix">   
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="body">      
                                <?php
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM product where id='$id'";
                                $res_data = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($res_data);

                                $id = $row['id'];
                                $pname = $row['pname'];
                                $description = $row['description'];
                                $more_info = $row['more_info'];
                                $features = $row['features'];
                                $prod_cat = $row['prod_cat'];
                                $sub_cat = $row['sub_cat'];
                                ?>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" value="<?php echo $pname; ?>" name="pname" placeholder="Product Name" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="description" cols="20" name="description" placeholder="Description" rows="2" class="form-control no-resize" required><?php echo $description; ?></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <!--                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                                    <div class="form-group">
                                                                                        <div class="form-line">
                                                                                            <textarea name="more info" cols="20" name="more_info" placeholder="More Info" rows="2" class="form-control no-resize" required><?php echo $more_info; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                        
                                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                                                                    <div class="form-group">
                                                                                        <div class="form-line">
                                                                                            <textarea cols="20" name="features" placeholder="Feature" rows="2" class="form-control no-resize" required><?php echo $features; ?></textarea>
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

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                            <button class="btn btn-sm btn-primary waves-effect" name="submit" type="submit">SUBMIT</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('../../includes/footer-scripts.php'); ?>
        <script src="../../js/pages/home-page/media-press.js"></script>
    </body>   
</html>
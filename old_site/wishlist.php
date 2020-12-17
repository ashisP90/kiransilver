<?php include ('system/configs.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta name="description" content="">
    <title>Wishlist | Kiran Jewellers</title>

    <?php include ('includes/header-styles.php'); ?>
    <link rel="stylesheet" href="assets/css/wishlist.css">
</head>

<body>

    <?php include ('includes/header.php');; ?>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>/</li>
                            <li>wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--wishlist area start -->
    <div class="wishlist_area">
                <div class="container">   
                    <form action="#"> 
                        <div class="row">
                            <div class="col-12">
                                <div class="table_desc wishlist">
                                    <div class="cart_page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product_remove">Delete</th>
                                                    <th class="product_thumb">Image</th>
                                                    <th class="product_name">Product</th>
                                                    <th class="product_quantity">Stock Status</th>
                                                    <th class="product_total">Add To Cart</th>
                                                </tr>
                                            </thead>
                                            <tbody id="wishlistTableBody">
                                                <tr>
                                                   <td class="product_remove"><a href="#">X</a></td>
                                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                                    <td class="product_quantity">In Stock</td>
                                                    <td class="product_total"><a href="#"  onclick="addToCartClick('from_wishlist','product_id_02','1.png','product_name_01','23','2','200')">Add To Cart</a></td>
                                                </tr>

                                                <tr>
                                                   <td class="product_remove"><a href="#">X</a></td>
                                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbags justo</a></td>
                                                    <td class="product_quantity">In Stock</td>
                                                    <td class="product_total"><a href="#">Add To Cart</a></td>
                                                </tr>
                                                <tr>
                                                   <td class="product_remove"><a href="#">X</a></td>
                                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product3.jpg" alt=""></a></td>
                                                    <td class="product_name"><a href="#">Handbag elit</a></td>
                                                    <td class="product_quantity">In Stock</td>
                                                    <td class="product_total"><a href="#">Add To Cart</a></td>
                                                </tr>

                                            </tbody>
                                        </table>   
                                    </div>  

                                </div>
                             </div>
                         </div>

                    </form> 
                    <div class="row">
                        <div class="col-12">
                             <div class="wishlist_share">
                                <h4>Share on:</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                </ul>      
                            </div>
                        </div> 
                    </div>
                    
                </div>
            </div>
 
 <?php include ('includes/footer.php');; ?>
 
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- add to cart js -->
<script src="assets/js/add_to_cart.js"></script> 

<!-- Wishlist JS -->
<script src="assets/js/wishlist.js"></script>



</body>

</html>
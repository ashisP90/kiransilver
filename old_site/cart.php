<?php include ('system/configs.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kiran Jewellers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/cart.css">

</head>

<body>
    
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
  <?php include ('includes/header.php');?>
 
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>/</li>
                            <li>cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container-fluid">  
            <form action="#"> 
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 ">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_weight">Weight</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartTableBody">
                                        <tr>
                                           <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"><a href="#"><img src="assets/img/product/product details/2.png" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbags justo</a></td>
                                            <td class="product_quantity"><input min="1" max="100" value="1" type="number"></td>
                                            <td class="product_quantity"><input min="1" max="100" value="1" type="number"></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>  



                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th ></th>
                                            <th ></th>
                                            <th ></th>
                                            <th>Total Quantity</th>
                                            <th >Total Weight</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td style="border:none;"></td>
                                            <td style="border:none;"></td>
                                            <td style="border:none;"></td>
                                            <td style="border:none;" id="totalQuantity">3</td>
                                            <td style="border:none;" id="totalWeight">45</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>   


                            </div>  
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>      
                        </div>
                    </div>
                </div>
                
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row justify-content-center">
<!--                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">   
                                    <p>Enter your coupon code if you have one.</p>                                
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>    
                            </div>
                        </div>-->
                        <div class="col-lg-8 col-md-8 ">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount">£215.00</p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Hand Courier charges</p>
                                       <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                   </div>
                                   <a href="#">Calculate shipping</a>

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount">£215.00</p>
                                   </div>
                                   <div class="checkout_btn"  data-toggle="modal" data-target="#bookOrderModal">
                                       <a href="#"> BOOK ORDER</a>
                                       <p class="mb-0 mt-1">" Until your product is delivered, the product is insured "</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
                
            </form> 
        </div>     
    </div>
    <!--shopping cart area end -->
    
     <!--Instagram area start--> 
        <section class="instagram_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Follow us On Instagram</h2>
                            <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                        </div>
                    </div>
                </div>
                <div class="instagram_home_block">
                    <div class="row">
                        <div class="instagram_wrapper instagram_column5 owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="assets/img/bg/insta/1.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="assets/img/bg/insta/1.png"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="assets/img/bg/insta/2.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="assets/img/bg/insta/2.png"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="assets/img/bg/insta/3.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="assets/img/bg/insta/3.png"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="assets/img/bg/insta/4.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="assets/img/bg/insta/4.png"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="assets/img/bg/insta/5.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="assets/img/bg/insta/5.png"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="assets/img/bg/insta/6.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="assets/img/bg/insta/6.png"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text_follow">
                                <a href="#">#Follow us on Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Instagram area end--> 
    
  <?php include ('includes/footer.php');;?>

  <!-- modal area start-->
    <div class="modal fade" id="bookOrderModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog  modal-sm">
            <div class="modal-content">
               
                <div class="modal_body pt-2">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <h4 style="color:green;text-align:center;letter-spacing: 2px;">Your order has been done.</h4>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>

            </div>
        </div>
       
    </div>

<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
<script src="assets/js/add_to_cart.js"></script>



</body>

</html>
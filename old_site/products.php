<?php
include ('system/configs.php');

$productArgs = [
    'limit' => 16
];
$products = getProducts($productArgs);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>All Products | Kiran Jewellers</title>
        <meta name="description" content="">
        <?php include ('includes/header-styles.php'); ?>
        <link rel="stylesheet" href="assets/css/shop.css">
    </head>
    <body>
        <?php include ('includes/header.php'); ?>

        <div class="breadcrumbs_area">
            <div class="container">   
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a href="index.php">home</a></li>
                                <li>/</li>
                                <li>shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>         
        </div>

        <div class="shop_area shop_reverse">
            <div class="container">
                <div class="shop_inner_area">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <!--sidebar widget start-->
                            <div class="sidebar_widget">
                                <!-- FILTER BY PRICE SLIDER -->
                                <div class="widget_list widget_filter">
                                    <h2>Filter by Weight</h2>
                                    <form action="#"> 
                                        <div id="slider-range"></div>   
                                        <button type="button" id="weightFilter">Filter</button>
                                        <input type="text" name="text" id="weight" />   

                                    </form> 
                                </div>
                                <div class="widget_list widget_categories">
                                    <h2>Product categories</h2>
                                    <ul class="nav" id="needblock" role="tablist">

                                        <li><a href="#menu1" role="tab" aria-controls="menu1" aria-selected="true"><input type="checkbox" id="subCategory1" onclick="checkSubProduct('6.png', 'Ladies Ring', 'subCategoryId1', 1)" name="subCategory1" value="">&nbsp;Ladies Rings <span>6</span></a> </li>

                                        <li><a href="#menu2" role="tab" aria-controls="menu2" aria-selected="true"><input type="checkbox" id="subCategory2" onclick="checkSubProduct('2.png', 'Ladies Kada', 'subCategoryId2', 2)" name="subCategory2" value="">&nbsp;Ladies Kada <span>6</span></a> </li>

                                        <li><a  href="#menu3" role="tab" aria-controls="menu3" aria-selected="true"><input type="checkbox" id="subCategory3" onclick="checkSubProduct('3.png', 'Baby Rings', 'subCategoryId3', 3)" name="subCategory3" value="">&nbsp;Baby Rings<span>4</span></a> </li>

                                        <li><a  href="#menu4" role="tab" aria-controls="menu4" aria-selected="true"><input type="checkbox" id="subCategory4" onclick="checkSubProduct('4.png', 'Baby Bracelet', 'subCategoryId4', 4)" name="subCategory4" value="">&nbsp;Baby  Bracelet /kadli / kada <span>4</span></a> </li>

                                                                                                                <!-- <li><a  href="#menu5" role="tab" aria-controls="menu5" aria-selected="true"><input type="checkbox" id="subCategoryId5"  onclick="checkSubProduct('Baby  Bracelet','subCategoryId5' , 5)" name="subCategory5" value="">&nbsp;Earrings <span>3</span></a> </li>

                                                                                                                <li><a  href="#menu6" role="tab" aria-controls="menu6" aria-selected="true"><input type="checkbox" id="subCategoryId6"  onclick="checkSubProduct('Baby  Bracelet','subCategoryId6' , 6)" name="subCategory6" value="">&nbsp;Tops <span>3</span></a> </li>

                                                                                                                <li><a  href="#menu7" role="tab" aria-controls="menu7" aria-selected="true"><input type="checkbox" id="subCategoryId7"  onclick="checkSubProduct('Baby  Bracelet','subCategoryId7' , 7)" name="subCategory7" value="">&nbsp;Jhumki<span>3</span></a> </li>

                                                                                                                <li><a  href="#menu8" role="tab" aria-controls="menu8" aria-selected="true"><input type="checkbox" id="subCategoryId8"  onclick="checkSubProduct('Baby  Bracelet','subCategoryId8' , 8)" name="subCategory8" value="">&nbsp;Pendant <span>3</span></a> </li>

                                                                                                                <li><a  href="#menu9" role="tab" aria-controls="menu9" aria-selected="true"><input type="checkbox" id="subCategoryId9"  onclick="checkSubProduct('Baby  Bracelet','subCategoryId9' , 9)" name="subCategory9" value="">&nbsp;Pendant sets<span>3</span></a> </li>

                                                                                                                <li><a  href="#menu10" role="tab" aria-controls="menu10" aria-selected="true"><input type="checkbox" id="subCategoryId10"  onclick="checkSubProduct('Baby  Bracelet','subCategoryId10' , 10)" name="subCategory10" value="">&nbsp;Ladies bracelet<span>3</span></a> </li>

                                                                                                                <li><a  href="#menu11" role="tab" aria-controls="menu11" aria-selected="true"><input type="checkbox" id="subCategoryI11"  onclick="checkSubProduct('Baby  Bracelet','subCategoryI11' , 11)" name="subCategory11" value="">&nbsp;Bichiya/ Toe Ring <span>3</span></a> </li>
                                        -->
                                                                                                                                                       <!-- <li><a  href="#menu12" role="tab" aria-controls="menu12" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Gents Rings<span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Gents Kada / Bracelet<span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Antique payal / Kada<span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Italian Payal<span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Thread payal<span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Bichiya antique <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;juda Antique <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Keychain Antique <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Earrings Antique <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Chain Antique  <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Earrings Antique <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Chain <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Bali <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Mangalsutra nylon <span>3</span></a> </li>
                                                                                                                                                       <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Ball Pen <span>3</span></a> </li> -->

                                    </ul>
                                </div>
                                <!-- 
                        <div class="widget_list widget_categories">
                                        <h2>Manufacturer</h2>
                                        <ul>
                                                        <li><a href="#">Calvin Klein <span>6</span></a> </li>
                                                        <li><a href="#"> Chanel <span>10</span></a> </li>
                                                        <li><a href="#">Christian Dior <span>4</span></a> </li>
                                                        <li><a href="#"> ferragamo <span>4</span></a> </li>
                                                        <li><a href="#">hermes <span>10</span></a> </li>
                                                        <li><a href="#">louis vuitton <span>8</span></a> </li>
                                                        <li><a href="#">Tommy Hilfiger <span>7</span></a> </li>
                                                        <li><a href="#">Versace <span>6</span></a> </li>

                                                </ul>
                                </div> -->
                                <!-- <div class="widget_list widget_categories">
                                                <h2>Select By Color</h2>
                                                <ul>
                                                                <li><a href="#">Black <span>6</span></a> </li>
                                                                <li><a href="#"> Blue <span>10</span></a> </li>
                                                                <li><a href="#">Brown <span>4</span></a> </li>
                                                                <li><a href="#"> Green <span>4</span></a> </li>
                                                                <li><a href="#">Pink <span>7</span></a> </li>
                                                                <li><a href="#">White<span>8</span></a> </li>
                                                                <li><a href="#">Yellow <span>5</span></a> </li>

                                                </ul>
                                </div> -->
                                <!-- <div class="widget_list tag-cloud">
                                                <h2>Popular Tags</h2>
                                                <div class="tag_widget">
                                                                <ul>
                                                                                <li><a href="#">Creams</a></li>
                                                                                <li><a href="#">Eyebrow Pencil</a></li>
                                                                                <li><a href="#">Eyeliner</a></li>
                                                                                <li><a href="#">Eye Shadow</a></li>
                                                                                <li><a href="#">Lotions</a></li>
                                                                                <li><a href="#">Mascara</a></li>
                                                                                <li><a href="#">Oils</a></li>
                                                                                <li><a href="#">Powders</a></li>
                                                                                <li><a href="#">Shampoos</a></li>
                                                                </ul>
                                                </div>
                                </div> --> 
                            </div>
                            <!--sidebar widget end-->
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <!--shop wrapper start-->
                            <!--shop toolbar start-->
                            <div class="shop_title">
                                <h1>Products</h1>
                            </div>
                            <div class="shop_toolbar_wrapper">
                                <div class="shop_toolbar_btn">

                                    <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                                    <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                                    <button data-role="grid_5" type="button"  class="btn-grid-5" data-toggle="tooltip" title="5"></button>

                                    <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                                </div>
                                <div class=" niceselect_option">

                                    <form class="select_option" >
                                        <select onchange="myFunction()" id="sortByWeight">
                                            <option  value="1">Sort by weight</option>
                                            <option  value="1-10">1 to 10 Grams</option>
                                            <option value="11-20">11 to 20 Grams</option>
                                            <option value="21-30">21 to 30 Grams</option>
                                            <option value="31-40">31 to 40 Grams</option>
                                            <option value="41+">41 + Grams</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="page_amount">
                                    <p>Showing 1–9 of 21 results</p>
                                </div>
                            </div>

                            <div class="row shop_wrapper" id="filterProductList">
                            </div>

                            <div class="row shop_wrapper" id="defaultAllProductList">

                                <?php if ($products && count($products)): ?>
                                    <?php foreach ($products as $product): ?>
                                        <div class="col-lg-4 col-md-4 col-12 ">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product.php?id=<?php echo $product->id; ?>"><img src="admin/uploads/<?php echo $product->product_image; ?>" alt=""></a>
                                                    <a class="secondary_img" href="product.php?id=<?php echo $product->id; ?>"><img src="admin/uploads/<?php echo $product->product_image; ?>" alt=""></a>
                                                    <div class="product_action">
                                                        <div class="hover_action">
                                                            <a href="#"><i class="fa fa-plus"></i></a>
                                                            <div class="action_button">
                                                                <ul>
                                                                    <li><a  href="cart.php?id=<?php echo $product->id; ?>" title="add to cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                    <li><a href="wishlist.php?id=<?php echo $product->id; ?>" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                    <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  <div class="quick_button"> 
                                                    <div class="label_product">-->
                                                    <!--    <span>new</span>-->
                                                    <!--</div>-->
                                                </div>

                                                <div class="product_content grid_content">
                                                    <h3><a href="product.php?id=<?php echo $product->id; ?>"><?php echo $product->pname; ?></a></h3>
                                                </div>

                                                <div class="product_content list_content">
                                                    <h3><a href="product.php?id=<?php echo $product->id; ?>"><?php echo $product->pname; ?></a></h3>
                                                    <div class="product_ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="product_desc">
                                                        <p><?php echo $product->description; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>

                            <div class="shop_toolbar t_bottom">
                                <div class="pagination">
                                    <ul>
                                        <li class="current">1</li>
                                        <!-- <li><a href="register.php">2</a></li> -->
                                        <li><a href="#" data-toggle="modal" data-target="#modal_box12" title="quick_view">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#">next</a></li>
                                        <li><a href="#">>></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   

            </div>
        </div>
        <!--shop  area end-->

        <!--Instagram area start--> 
<!--        <section class="instagram_area">
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
        </section>-->
        <!--Instagram area end--> 

        <!-- add to cart modal -->

        <div class="modal" id="addCartModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 ">
                                    <div class="form-group d-flex flex-column">
                                        <label>Size : </label>
                                        <select class="niceselect_option" id="size" name="produc_color">
                                            <!--<option selected value="1">size</option>-->
                                            <option selected value="16"> 16</option>
                                            <option value="20"> 20</option>
                                            <option value="24"> 24</option>
                                            <option value="26">26</option>
                                            <option value="30"> 30</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 ">
                                    <div class="form-group d-flex flex-column">
                                        <label>Color : </label>
                                        <select class="niceselect_option" id="color" name="produc_color">
                                            <option selected value="Red">Red</option>
                                            <option value="Green">Green</option>
                                            <option value="Yellow">Yellow</option>
                                            <option value="Blue">Blue</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 ">
                                    <div class="form-group d-flex flex-column">
                                        <label>Weight : </label>
                                        <select class="niceselect_option" id="cartWeight" name="produc_color">
                                            <option value="16"> 16</option>
                                            <option selected value="20"> 20</option>
                                            <option value="24"> 24</option>
                                            <option value="26">26</option>
                                            <option value="30"> 30</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-3 col-sm-3 col-md-3 col-lg-3 ">
                                    <div class="form-group d-flex flex-column">
                                        <label>Enter Quantity : </label>
                                        <input type="number" id="qtyCart" class="form-control"  min='1' max='100' value="1" name="">
                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"  onclick="addToCartClick('from_product_list', 'product_id_22', '5.png', 'product_name_1', '23', '2', '200')" >Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
 
        <?php include ('includes/footer.php'); ?>
 
        <div class="modal fade" id="modal_box12" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal_body">
                        <div class="customer_login padtop">
                            <div class="container">
                                <!--<div class="row">-->
                                <section class="banner_section banner_section_two">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="section_title">
                                                <h2>Register Now</h2>
                                                <p>Contemporary, minimal and modern designs </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-sub-categories.php"><img id="bigimage" src="assets/img/slider/login/Untitled design.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>Register</h1>
                                                            <p>Big Sale Off Final Sale Items. Caught in the moment!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="account_form register">

                                                    <form action="#">
                                                        <div class="form-group col-lg-12">
                                                            <label>Username</label>
                                                            <input type="text" name="" class="form-control" id="" value="">
                                                        </div>

                                                        <div class="form-group col-lg-12">
                                                            <label>Password</label>
                                                            <input type="password" name="" class="form-control" id="" value="">
                                                        </div>

                                                        <div class="form-group col-lg-12">
                                                            <label>Repeat Password</label>
                                                            <input type="password" name="" class="form-control" id="" value="">
                                                        </div>

                                                        <div class="form-group col-lg-12">
                                                            <label>Email Address</label>
                                                            <input type="email" name="" class="form-control" id="" value="">
                                                        </div>

                                                        <div class="form-group col-lg-12">
                                                            <label>Repeat Email Address</label>
                                                            <input type="text" name="" class="form-control" id="" value="">
                                                        </div>			

                                                        <div class="login_submit">
                                                            <button type="submit"><a href="shop-sub-categories.php">Register</a></button>
                                                        </div>
                                                    </form>
                                                </div>    
                                            </div>

                                        </div>
                                    </div>
                                </section>
                                <!--register area start-->

                                <!--register area end-->
                            </div>
                        </div>    
                    </div>    
                </div>
            </div>
        </div> 
        <!-- modal area start-->


        <!-- JS
        ============================================ -->

        <!-- Plugins JS -->
        <script src="assets/js/plugins.js"></script>

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
        <!-- add to cart js -->
        <script src="assets/js/add_to_cart.js"></script> 

        <!-- add to wishlist js -->
        <script src="assets/js/wishlist.js"></script> 

        <!-- filter product js -->
        <script src="assets/js/filter_products.js"></script> 



    </body>

</html>
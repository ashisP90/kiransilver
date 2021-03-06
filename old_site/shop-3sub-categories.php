<?php include ('system/configs.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kiran Jewellers - shop</title>
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
        <link rel="stylesheet" href="assets/css/shop.css">
    </head>

    <body>

        <?php include ('includes/header.php');; ?>

        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="container">   
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a href="index.php">home</a></li>
                                <li>/</li>
                                <li>Products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        <!--breadcrumbs area end-->

        <!--shop  area start-->
        <div class="shop_area shop_reverse">
            <div class="container">
                <div class="shop_inner_area">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <!--sidebar widget start-->
                            <div class="sidebar_widget">
                                <div class="widget_list widget_filter">
                                    <h2>Filter by price</h2>
                                    <form action="#"> 
                                        <div id="slider-range"></div>   
                                        <button type="submit">Filter</button>
                                        <input type="text" name="text" id="amount" />   

                                    </form> 
                                </div>
                                <div class="widget_list widget_categories">
                                    <h2>Product categories</h2>
                                    <ul class="nav" id="needblock" role="tablist">
                                        
                                        <li><a href="#menu1" role="tab" aria-controls="menu1" aria-selected="true"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Ladies Rings <span>6</span></a> </li> <br>
                                        <li><a  href="#menu2" role="tab" aria-controls="menu2" aria-selected="false" id="needmargintop"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Ladies Kada<span>10</span></a> </li>
                                        <li><a  href="#menu3" role="tab" aria-controls="menu3" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Baby Rings<span>4</span></a> </li>
                                        <li><a  href="#menu4" role="tab" aria-controls="menu4" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Baby  Bracelet /kadli / kada <span>4</span></a> </li>
                                        <li><a  href="#menu5" role="tab" aria-controls="menu5" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Earrings <span>3</span></a> </li>
                                        <li><a  href="#menu6" role="tab" aria-controls="menu6" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Tops <span>3</span></a> </li>
                                        <li><a  href="#menu7" role="tab" aria-controls="menu7" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Jhumki<span>3</span></a> </li>
                                        <li><a  href="#menu8" role="tab" aria-controls="menu8" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Pendant <span>3</span></a> </li>
                                        <li><a  href="#menu9" role="tab" aria-controls="menu9" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Pendant sets<span>3</span></a> </li>
                                        <li><a  href="#menu10" role="tab" aria-controls="menu10" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Ladies bracelet<span>3</span></a> </li>
                                        <li><a  href="#menu11" role="tab" aria-controls="menu11" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Bichiya/ Toe Ring <span>3</span></a> </li>
                                        <li><a  href="#menu12" role="tab" aria-controls="menu12" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Gents Rings<span>3</span></a> </li>
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
                                        <li><a  href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp;Ball Pen <span>3</span></a> </li>
                                        
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

                                <form class="select_option" action="#">
                                    <select name="orderby" id="short">

                                        <option selected value="1">Sort by average rating</option>
                                        <option  value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by price: low to high</option>
                                        <option value="5">Sort by price: high to low</option>
                                        <option value="6">Product Name: Z</option>
                                    </select>
                                </form>


                            </div>
                            <div class="page_amount">
                                <p>Showing 1–9 of 21 results</p>
                            </div>
                        </div>
                         <!--shop toolbar end-->
                        
                         <div class="row shop_wrapper">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/products-listings/6.png" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/products-listings/6.png" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="double_base">-->
                                        <!--    <div class="product_sale">-->
                                        <!--        <span>-7%</span>-->
                                        <!--    </div>-->
                                        <!--    <div class="label_product">-->
                                        <!--        <span>new</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/products-listings/1.png" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/products-listings/1.png" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="label_product">-->
                                        <!--    <span>new</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Koss KPH7 Portable</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Koss KPH7 Portable</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/products-listings/2.png" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/products-listings/2.png" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="double_base">-->
                                        <!--    <div class="product_sale">-->
                                        <!--        <span>-7%</span>-->
                                        <!--    </div>-->
                                        <!--    <div class="label_product">-->
                                        <!--        <span>new</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Beats Solo2 Solo 2</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Beats Solo2 Solo 2</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/products-listings/3.png" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/products-listings/3.png" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="label_product">-->
                                        <!--    <span>new</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Beats EP Wired</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Beats EP Wired</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/products-listings/4.png" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/products-listings/4.png" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="product_sale">-->
                                        <!--    <span>-7%</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Bose SoundLink Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Bose SoundLink Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/products-listings/5.png" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/products-listings/5.png" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="double_base">-->
                                        <!--    <div class="product_sale">-->
                                        <!--        <span>-7%</span>-->
                                        <!--    </div>-->
                                        <!--    <div class="label_product">-->
                                        <!--        <span>new</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Apple iPhone SE 16GB</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Apple iPhone SE 16GB</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/products-listings/6.png" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/products-listings/6.png" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="product_sale">-->
                                        <!--    <span>-7%</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Beats Solo Wireless</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Beats Solo Wireless</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/product25.jpg" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/product26.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="label_product">-->
                                        <!--    <span>new</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Apple iPad with Retina</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Apple iPad with Retina</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/product27.jpg" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/product28.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="product_sale">-->
                                        <!--    <span>-7%</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->
                                        <!-- <div class="label_product">-->
                                        <!--    <span>new</span>-->
                                        <!--</div>   -->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">JBL Flip 3 Portable</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">JBL Flip 3 Portable</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="product_sale">-->
                                        <!--    <span>-7%</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/product6.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="double_base">-->
                                        <!--    <div class="product_sale">-->
                                        <!--        <span>-7%</span>-->
                                        <!--    </div>-->
                                        <!--    <div class="label_product">-->
                                        <!--        <span>new</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="product_sale">-->
                                        <!--    <span>-7%</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="product_sale">-->
                                        <!--    <span>-7%</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product.php"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product.php"><img src="assets/img/product/product12.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                        <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                    </ul>
                                                </div>
                                           </div>
                                        </div>
<!--                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>-->

                                        <!--<div class="label_product">-->
                                        <!--    <span>new</span>-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product.php">Marshall Portable  Bluetooth</a></h3>
                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product_price">
                                            <span class="current_price">£60.00</span>
                                            <span class="old_price">£86.00</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores eligendi quia fugiat minus doloribus distinctio assumenda pariatur, quidem laborum quae quasi suscipit. Cupiditate dolor blanditiis rerum aliquid temporibus, libero minus nihil, veniam suscipit? Autem repellendus illo, amet praesentium fugit, velit natus? Dolorum perferendis reiciendis in quam porro ratione eveniet, tempora saepe ducimus, alias?</p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
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
                        <!--shop toolbar end-->
                        <!--shop wrapper end-->
                    </div>
                    </div>
                </div>   

            </div>
        </div>
        <!--shop  area end-->

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



        <!--footer area start-->
        <?php include ('includes/footer.php');; ?>
        <!--footer area end-->

        <!-- modal area start-->
        <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="modal_tab">  
                                        <div class="tab-content product-details-large">
                                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product4.jpg" alt=""></a>    
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product6.jpg" alt=""></a>    
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product8.jpg" alt=""></a>    
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product2.jpg" alt=""></a>    
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab5" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="assets/img/product/product12.jpg" alt=""></a>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal_tab_button">    
                                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                                <li >
                                                    <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/s-product/product3.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/s-product/product4.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false"><img src="assets/img/s-product/product5.jpg" alt=""></a>
                                                </li>

                                            </ul>
                                        </div>    
                                    </div>  
                                </div> 
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="modal_right">
                                        <div class="modal_title mb-10">
                                            <h2>Handbag feugiat</h2> 
                                        </div>
                                        <!--<div class="modal_price mb-10">-->
                                        <!--    <span class="new_price">$64.99</span>    -->
                                        <!--    <span class="old_price" >$78.99</span>    -->
                                        <!--</div>-->
                                        <div class="modal_description mb-15">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                        </div> 
                                        <div class="variants_selects">
                                            <div class="variants_size">
                                                <h2>size</h2>
                                                <select class="select_option">
                                                    <option selected value="1">s</option>
                                                    <option value="1">m</option>
                                                    <option value="1">l</option>
                                                    <option value="1">xl</option>
                                                    <option value="1">xxl</option>
                                                </select>
                                            </div>
                                            <div class="variants_color">
                                                <h2>color</h2>
                                                <select class="select_option">
                                                    <option selected value="1">purple</option>
                                                    <option value="1">violet</option>
                                                    <option value="1">black</option>
                                                    <option value="1">pink</option>
                                                    <option value="1">orange</option>
                                                </select>
                                            </div>
                                            <div class="modal_add_to_cart">
                                                <form action="#">
                                                    <input min="0" max="100" step="2" value="1" type="number">
                                                    <button type="submit">add to cart</button>
                                                </form>
                                            </div>   
                                        </div>
                                        <div class="modal_social">
                                            <h2>Share this product</h2>
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>    
                                        </div>      
                                    </div>    
                                </div>    
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



    </body>

</html>
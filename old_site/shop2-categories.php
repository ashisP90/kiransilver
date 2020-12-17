<?php include ('system/configs.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kiran Jewellers- shop</title>
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
                                <li>shop</li>
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
                                        
                                        <li><a data-toggle="tab" href="#menu1" role="tab" aria-controls="menu1" aria-selected="true"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>6</span></a> </li> <br>
                                        <li><a data-toggle="tab" href="#menu2" role="tab" aria-controls="menu2" aria-selected="false" id="needmargintop"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>10</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu3" role="tab" aria-controls="menu3" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>4</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu4" role="tab" aria-controls="menu4" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>4</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu5" role="tab" aria-controls="menu5" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>3</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu6" role="tab" aria-controls="menu6" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU <span>3</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu7" role="tab" aria-controls="menu7" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>3</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu8" role="tab" aria-controls="menu8" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>3</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu9" role="tab" aria-controls="menu9" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>3</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu10" role="tab" aria-controls="menu10" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>3</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu11" role="tab" aria-controls="menu11" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>3</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu12" role="tab" aria-controls="menu12" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>3</span></a> </li>
                                        <li><a data-toggle="tab" href="#menu13" role="tab" aria-controls="menu13" aria-selected="false"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; 1st SUB MENU<span>3</span></a> </li>
                                        
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
                                <h1>Category</h1>
                            </div>

                            <section class="banner_section banner_section_three ">

                                <div class="tab-content">

                                    <div class="container-fluid tab-pane fade show active" id="menu1" role="tabpanel" >
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid tab-pane fade" id="menu2" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU </h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu3" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu4" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1> 2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1> 2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu5" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu6" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu7" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1> 2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu8" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu9" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu10" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu12" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid tab-pane fade" id="menu13" role="tabpanel">
                                        <div class="row " id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/1.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/2.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="paddingCategory">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/3.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="banner_area">
                                                    <div class="banner_thumb">
                                                        <a href="shop-3sub-categories.php"><img src="assets/img/bg/background/4.png" alt="#"></a>
                                                        <div class="banner_content">
                                                            <h1>2nd SUB MENU</h1>
                                                            <a href="shop-3sub-categories.php">Discover Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--                        <div class="shop_toolbar_wrapper">
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
                                                    </div>-->
                            <!--shop toolbar end-->

                            <!--                         <div class="row shop_wrapper">
                                                        <div class="col-lg-4 col-md-4 col-12 ">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                    <a class="primary_img" href="product.php"><img src="assets/img/product/product15.jpg" alt=""></a>
                                                                    <a class="secondary_img" href="product.php"><img src="assets/img/product/product16.jpg" alt=""></a>
                                                                    <div class="product_action">
                                                                        <div class="hover_action">
                                                                           <a  href="#"><i class="fa fa-plus"></i></a>
                                                                            <div class="action_button">
                                                                                <ul>
                                                                                    <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="double_base">
                                                                        <div class="product_sale">
                                                                            <span>-7%</span>
                                                                        </div>
                                                                        <div class="label_product">
                                                                            <span>new</span>
                                                                        </div>
                                                                    </div>
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
                                                                    <a class="primary_img" href="product.php"><img src="assets/img/product/product22.jpg" alt=""></a>
                                                                    <a class="secondary_img" href="product.php"><img src="assets/img/product/product23.jpg" alt=""></a>
                                                                    <div class="product_action">
                                                                        <div class="hover_action">
                                                                           <a  href="#"><i class="fa fa-plus"></i></a>
                                                                            <div class="action_button">
                                                                                <ul>
                                                                                    <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="label_product">
                                                                        <span>new</span>
                                                                    </div>
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
                                                                    <a class="primary_img" href="product.php"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                                    <a class="secondary_img" href="product.php"><img src="assets/img/product/product11.jpg" alt=""></a>
                                                                    <div class="product_action">
                                                                        <div class="hover_action">
                                                                           <a  href="#"><i class="fa fa-plus"></i></a>
                                                                            <div class="action_button">
                                                                                <ul>
                                                                                    <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="double_base">
                                                                        <div class="product_sale">
                                                                            <span>-7%</span>
                                                                        </div>
                                                                        <div class="label_product">
                                                                            <span>new</span>
                                                                        </div>
                                                                    </div>
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
                                                                    <a class="primary_img" href="product.php"><img src="assets/img/product/product17.jpg" alt=""></a>
                                                                    <a class="secondary_img" href="product.php"><img src="assets/img/product/product18.jpg" alt=""></a>
                                                                    <div class="product_action">
                                                                        <div class="hover_action">
                                                                           <a  href="#"><i class="fa fa-plus"></i></a>
                                                                            <div class="action_button">
                                                                                <ul>
                                                                                    <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="label_product">
                                                                        <span>new</span>
                                                                    </div>
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
                                                                    <a class="primary_img" href="product.php"><img src="assets/img/product/product19.jpg" alt=""></a>
                                                                    <a class="secondary_img" href="product.php"><img src="assets/img/product/product20.jpg" alt=""></a>
                                                                    <div class="product_action">
                                                                        <div class="hover_action">
                                                                           <a  href="#"><i class="fa fa-plus"></i></a>
                                                                            <div class="action_button">
                                                                                <ul>
                                                                                    <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="product_sale">
                                                                        <span>-7%</span>
                                                                    </div>
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
                                                                    <a class="primary_img" href="product.php"><img src="assets/img/product/product21.jpg" alt=""></a>
                                                                    <a class="secondary_img" href="product.php"><img src="assets/img/product/product22.jpg" alt=""></a>
                                                                    <div class="product_action">
                                                                        <div class="hover_action">
                                                                           <a  href="#"><i class="fa fa-plus"></i></a>
                                                                            <div class="action_button">
                                                                                <ul>
                                                                                    <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="double_base">
                                                                        <div class="product_sale">
                                                                            <span>-7%</span>
                                                                        </div>
                                                                        <div class="label_product">
                                                                            <span>new</span>
                                                                        </div>
                                                                    </div>
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
                                                                    <a class="primary_img" href="product.php"><img src="assets/img/product/product23.jpg" alt=""></a>
                                                                    <a class="secondary_img" href="product.php"><img src="assets/img/product/product24.jpg" alt=""></a>
                                                                    <div class="product_action">
                                                                        <div class="hover_action">
                                                                           <a  href="#"><i class="fa fa-plus"></i></a>
                                                                            <div class="action_button">
                                                                                <ul>
                                                                                    <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="product_sale">
                                                                        <span>-7%</span>
                                                                    </div>
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
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="label_product">
                                                                        <span>new</span>
                                                                    </div>
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
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="product_sale">
                                                                        <span>-7%</span>
                                                                    </div>
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
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                                                                     <div class="label_product">
                                                                        <span>new</span>
                                                                    </div>   
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
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="product_sale">
                                                                        <span>-7%</span>
                                                                    </div>
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
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="double_base">
                                                                        <div class="product_sale">
                                                                            <span>-7%</span>
                                                                        </div>
                                                                        <div class="label_product">
                                                                            <span>new</span>
                                                                        </div>
                                                                    </div>
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
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="product_sale">
                                                                        <span>-7%</span>
                                                                    </div>
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
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="product_sale">
                                                                        <span>-7%</span>
                                                                    </div>
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
                                                                                    <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                       </div>
                                                                    </div>
                                                                    <div class="quick_button">
                                                                        <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                                                    </div>
                            
                                                                    <div class="label_product">
                                                                        <span>new</span>
                                                                    </div>
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
                                                    </div>-->

                            <div class="shop_toolbar t_bottom">
                                <div class="pagination">
                                    <ul>
                                        <li><a href="#">1</a></li>
                                        <!-- <li><a href="register.php">2</a></li> -->
                                        <li class="current"><a href="#" data-toggle="modal" data-target="#modal_box12" title="quick_view">2</a></li>
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
                            <a href="shop.html"><img id="bigimage" src="assets/img/slider/login/Untitled design.png" alt="#"></a>
                            <div class="banner_content">
                               <h1>Register</h1>
                               <p>Big Sale Off Final Sale Items. Caught in the moment!</p>
                                <!--<a href="shop.html">Discover Now</a>-->
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
                                <button type="submit"><a href="shop2-categories.php">Register</a></button>
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



    </body>

</html>
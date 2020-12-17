<?php
if(!defined('BASEPATH')) EXIT("No direct script access allowed");
$basepath = base_url("assets/frontend/");
$logoCondition = "(`id` = '1' AND `is_deleted` <> '1')";
$logo_data = getRowData(PAGES, $logoCondition);

$logged_in_id = $this->session->userdata('user_id');
$logged_in_user_details = getLoggedinDetails($logged_in_id);
$categories= categories();
$menu_categories = menuCategories();
$wishlist_item_count = wishlistProductCount($logged_in_id); 
$count_item = ($wishlist_item_count? count(unserialize($wishlist_item_count->wishlist_products)): "0");                  
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta name="description" content="">
<title>Kiran Silver | Trust & Purity Forever</title>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"/>

<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display+SC&family=Tangerine:wght@700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

<link rel="stylesheet" href="<?=$basepath?>css/plugins.css"/>
<link rel="stylesheet" href="<?=$basepath?>css/style.css"/>
<link rel="stylesheet" href="<?=$basepath?>css/home.css"/>
<link rel="stylesheet" href="<?=$basepath?>css/shop.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/fancybox.css">
  <!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  <link href="<?php echo base_url(); ?>assets/alertify/themes/alertify.core.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/alertify/themes/alertify.default.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="off_canvars_overlay"></div>

<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)">
                        <i class="ion-navicon"></i>
                    </a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                    </div>
                    <div class="welcome_text">
                        <ul>
                            <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                            <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                        </ul>
                    </div>
                    <div class="top_right">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone"></i>&nbsp;+91 9930925925</a></li>
                            <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <?php if($logged_in_user_details){ ?>
                                    <li><a href="<?php echo base_url().'my-account';?>"><i class="fa fa-user"></i>&nbsp;My Account</a></li>
                                    <li><a href="<?php echo base_url().'logout';?>"> Logout</a></li>	
                                    <?php }
                                    else{								
                                    ?>
                                    <li><a href="<?php echo base_url().'login';?>">Login</a></li>
                                    <li><a href="<?php echo base_url().'register';?>"> Register</a></li>
                                    <?php }?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="search_bar">
                        <form action="#">
                            <select class="select_option" name="select" id="categori" style="display: none;">
                                <option selected value="">All Categories</option>
                                <?php
                                if($categories){
                                    foreach($categories as $category){ ?>
                                    <option value="<?php echo $category->id;?>" <?php echo (isset($_REQUEST['search_category']) && $category->id == $_REQUEST['search_category'] ? "selected" : "");?>><?php echo $category->name;?></option>	
                                <?php	}
                                } ?>
                            </select>
                            <input placeholder="Search entire store here..." type="text">
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                 
                    <div class="cart_area">
                        <div class="cart_link">
                            <a href="<?php echo base_url('cart');?>"><i class="fa fa-shopping-basket"></i><b id="cart_text"><?php echo $rows = count($this->cart->contents());?> items</b></a>
                        </div>
                        <div class="cart_link">
                            <a href="<?php echo base_url('wishlist');?>"><i class="fa fa-heart-o"></i><b id="cart_text"><?php echo $count_item;?> items</b></a>
                        </div>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="mega_items"><a href="<?php echo base_url().'shop';?>">Shop</a></li>

                            <li><a href="<?php echo base_url().'about-us';?>">About</a></li>
                            <?php  
                             
		                      if($menu_categories){
		                        foreach($menu_categories as $category){ ?>
                                    <li class="mega_items"><a href="<?php echo base_url().PRODUCT_URL.'?cat='.$category->id;?>"><?php echo ucfirst($category->name);?> <i id="dropdown_arrow" class="fa fa-angle-down"></i></a>
                                    <?php 
                                        $sub_categories_list =  getSubCategoryListByCatId($category->id);
                                        if($sub_categories_list){
                                    ?>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <?php
                                                            foreach($sub_categories_list as $sub_category_list){ ?>
                                                            <li><a href="<?php echo base_url().PRODUCT_URL.'?sub_cat='.$sub_category_list->id;?>"><?php echo ucfirst($sub_category_list->scname);?></a></li>	
                                                        <?php }?>	
                                                    </ul>
                                                </li>
                                            </ul>   
                                        <?php } ?>
                                    </li>
                            <?php }
                            } ?>
                            <li class="mega_items"><a href="<?php echo base_url().'contact-us';?>">Contact Us</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--header area start-->
<header class="header_area">
    <div id="liveSilver">
        <p id="SilverTitle">Live Silver Price</p>
        <p>₹ 628</p>
    </div>
    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-12 col-md-12 top-right-header">
                    <div class="top_right text-right">
                        <ul id="nomoremargin1">
                            <li><a href="mailto:info@kiransilver.com">info@kiransilver.com</a></li>
                            <li><a href="tel:919930925925">+91 9930925925</a></li>
                            <?php if($logged_in_user_details){ ?>
							<li><a href="<?php echo base_url().'my-account';?>">My Account</a></li>
                            <li><a href="<?php echo base_url().'logout';?>"> Logout</a></li>	
							<?php }
							else{								
                            ?>
                            <li><a href="<?php echo base_url().'login';?>">Login</a></li>
                            <li><a href="<?php echo base_url().'register';?>"> Register</a></li>
                            <?php }?>
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->

    <div class="header_middel header_middel9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-5">
                    <div class="logo">
                        <a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/uploads/logo/').$logo_data->image;?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="search_bar">
                        <form action="<?php echo base_url().PRODUCT_URL;?>" method="POST">
                            <select class="select_option" name="search_category" id="search_category">
                                <option selected value="">All Categories</option>
                              <?php 
                              $categories= categories();
                              if($categories){
									foreach($categories as $category){ ?>
								 <option value="<?php echo $category->id;?>" <?php echo (isset($_REQUEST['search_category']) && $category->id == $_REQUEST['search_category'] ? "selected" : "");?>><?php echo $category->name;?></option>	
								<?php	}
								} ?>
                            </select>

                            <input type="text" id="product_name" name="product_name" placeholder="Search by Product code / Product name" value="<?php echo (isset($_REQUEST['product_name']) ? $_REQUEST['product_name'] : "");?>" ></input>
                            <button type="submit" name="search_data"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6 offset-md-6 offset-lg-0">
                    <div class="cart_area">
                        <div class="cart_link">
                            <a href="<?php echo base_url('cart');?>"><i class="fa fa-shopping-basket"></i><b id="cart_text"><?php echo $rows = count($this->cart->contents());?> items</b></a>
                        </div>
                        <div class="cart_link">
                            <a href="<?php echo base_url('wishlist');?>"><i class="fa fa-heart-o"></i><b id="cart_text"><?php echo $count_item;?> items</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--header bottom satrt-->
    <div class="header_bottom header_bottom9 sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="header_static">
                     <div class="main_menu_inner">
    <div class="main_menu">
        <nav>
            <ul id="lespad1" onclick="myFunction(event)">
                <li><a href="<?php echo base_url();?>">Home</a>
                <li class="mega_items"><a href="<?php echo base_url().'shop';?>">Shop</a></li>
                <li><a href="<?php echo base_url().'about-us';?>">About</a>
                <?php 
                    if($menu_categories){
                        foreach($menu_categories as $category){ ?>
				            <li class="mega_items"><a href="<?php echo base_url().PRODUCT_URL.'?cat='.$category->id;?>"><?php echo ucfirst($category->name);?> <i id="dropdown_arrow" class="fa fa-angle-down"></i></a>
                            <?php 
                            $sub_categories_list =  getSubCategoryListByCatId($category->id);
                            if($sub_categories_list){
                            ?>
                            <ul class="sub_menu pages">
                            <?php
						   	    foreach($sub_categories_list as $sub_category_list){ ?>
							        <li><a href="<?php echo base_url().PRODUCT_URL.'?sub_cat='.$sub_category_list->id;?>"><?php echo ucfirst($sub_category_list->scname);?></a></li>	
							<?php }?>
                            </ul>   
                	        <?php } ?>
                	        </li>
                        <?php	}
                    } ?>   
                <li><a href="<?php echo base_url().'contact-us';?>">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header bottom end-->
</header>
<!--header area end-->

<div id="myModal123" class="modal fade">
    <div class="customer_login">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">

                        <form action="#">
                            <span class="b-close"><span>close</span></span>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h2>login</h2>

                            <p>
                                <label>Username or email <span>*</span></label>
                                <input type="text">
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password">
                            </p>
                            <div class="login_submit">
                                <a href="#">Lost your password?</a>
                               
                                <button type="submit">login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


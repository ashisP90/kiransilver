<head>
<!--Offcanvas menu area start-->

<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display+SC&family=Tangerine:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/jquery-ui.css">
<link rel="stylesheet" href="assets/css/header-2.css">
 <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--> 

</head>
<div class="off_canvars_overlay">
</div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
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
                            <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="wishlist.html">My Wish List </a></li>
                                    <li><a href="my-account.html">My Account </a></li>
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="compare.html">Compare Products </a></li>
                                </ul>
                            </li>
                            <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> English <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#"><img src="assets/img/logo/cigar.jpg" alt=""> French</a></li>
                                    <li><a href="#"><img src="assets/img/logo/language2.png" alt="">German</a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">BRL</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="search_bar">
                        <form action="#">
                            <select class="select_option" name="select" id="categori">
                                <option selected value="1">All Categories</option>
                                <option value="2">Accessories</option>
                                <option value="3">Bridge</option>
                                <option value="4">Hub</option>
                                <option value="5">Repeater</option>
                                <option value="6">Switch</option>
                                <option value="7">Video Games</option>
                                <option value="8">PlayStation 3</option>
                                <option value="9">PlayStation 4</option>
                                <option value="10">Xbox 360</option>
                                <option value="11">Xbox One</option>
                            </select>
                            <div class="ui-widget">
                                <input id="tags" placeholder="Search by Product code / Product name "  type="text">
                            </div>
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>


                    <div class="cart_area">
                        <div class="middel_links">
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li>/</li>
                                <li><a href="register.php">Register</a></li>
                            </ul>

                        </div>

                        <!--cart area-->
                        <div class="cart_link">
                            <a href="#"><i class="fa fa-shopping-basket"></i>2 item(s)</a>
                            mini cart
                            <div class="mini_cart">
                                <div class="cart_item top">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets/img/product/product details/1.png" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Apple iPhone SE 16GB</a>

                                        <span>1x $60.00</span>

                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item bottom">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets/img/product/product details/2.png" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Marshall Portable Bluetooth</a>
                                        <span> 1x $160.00</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart__table">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">Sub-Total :</td>
                                                <td class="text-right">$150.00</td>
                                            </tr>

                                            <tr>
                                                <td class="text-left">Total :</td>
                                                <td class="text-right">$184.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="cart_button view_cart">
                                    <a href="cart.php">View Cart</a>
                                </div>
                                <div class="cart_button checkout">
                                    <a href="checkout.php">Checkout</a>
                                </div>
                            </div>


                        </div>
                        <!--mini cart end-->
                    </div>
                    <div class="contact_phone">
                        <p>Email Us: <a href="#">contact@kiransilver.com</a></p>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu" onclick="myFunction(event)">
                            <li>
                                <a href="index.php">Home</a>
                                <!--                                    <ul class="sub-menu">
                                                                        <li><a href="index.php">Home 1</a></li>
                                                                        <li><a href="index-2.html">Home 2</a></li>
                                                                        <li><a href="index-3.html">Home 3</a></li>
                                                                        <li><a href="index-4.html">Home 4</a></li>
                                                                        <li><a href="index-5.html">Home 5</a></li>
                                                                        <li><a href="index-6.html">Home 6</a></li>
                                                                        <li><a href="index-7.html">Home 7</a></li>
                                                                        <li><a href="index-8.html">Home 8</a></li>
                                                                        <li><a href="index-9.html">Home 9</a></li>
                                                                    </ul>-->
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Layouts</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.php">shop</a></li>
                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                            <li><a href="shop-list.html">List View</a></li>
                                        </ul>
                                    </li>
                                    <!--                                        <li class="menu-item-has-children">
                                                                                <a href="#">other Pages</a>
                                                                                <ul class="sub-menu">
                                                                                    <li><a href="portfolio.html">portfolio</a></li>
                                                                                    <li><a href="portfolio-details.html">portfolio details</a></li>
                                                                                    <li><a href="cart.html">cart</a></li>
                                                                                    <li><a href="checkout.html">Checkout</a></li>
                                                                                    <li><a href="my-account.html">my account</a></li>
                                                                                </ul>
                                                                            </li>-->
                                    <!--                                        <li class="menu-item-has-children">
                                                                                <a href="#">Product Types</a>
                                                                                <ul class="sub-menu">
                                                                                    <li><a href="product-details.html">product details</a></li>
                                                                                    <li><a href="product-sidebar.html">product sidebar</a></li>
                                                                                    <li><a href="product-grouped.html">product grouped</a></li>
                                                                                    <li><a href="variable-product.html">product variable</a></li>
                                                                                </ul>
                                                                            </li>-->
                                </ul>
                            </li>
                            <!--                                <li class="menu-item-has-children">
                                                                <a href="#">blog</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="blog.html">blog</a></li>
                                                                    <li><a href="blog-details.html">blog details</a></li>
                                                                    <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
                                                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                                </ul>
                            
                                                            </li>-->
                            <!--                                <li class="menu-item-has-children">
                                                                <a href="#">pages </a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="about.html">About Us</a></li>
                                                                    <li><a href="services.html">services</a></li>
                                                                    <li><a href="faq.html">Frequently Questions</a></li>
                                                                    <li><a href="contact.html">contact</a></li>
                                                                    <li><a href="login.html">login</a></li>
                                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                                    <li><a href="404.html">Error 404</a></li>
                                                                    <li><a href="compare.html">compare</a></li>
                                                                    <li><a href="privacy-policy.html">privacy policy</a></li>
                                                                    <li><a href="coming-soon.html">coming soon</a></li>
                                                                </ul>
                                                            </li>-->
                            <!--                                <li class="menu-item-has-children">
                                                                <a href="my-account.html">my account</a>
                                                            </li>-->
                            <li class="menu-item-has-children">
                                <a href="about.php">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

<!--header area start-->
<header class="header_area">
    <!--header top start-->
       <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- <div class="col-lg-5 col-md-12">
                        <div class="welcome_text">
                            <ul>
                                <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                                <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-12 col-md-12 top-right-header">
                        <div class="top_right text-right">
                            <ul id="nomoremargin1">
                            <li><a href="#"><i class="fa fa-phone"></i>&nbsp;+91 8888888888</a></li>
                            <li>|</li>
                            <li><a href="#">contact@kiransilver.com</a></li>
                            <!-- <li>|</li>
                                <li><a href="my-account.php">Login</a></li>
                                <li>|</li>
                                <li class="language"><a href="#"> Register</a></li> -->
                                <!-- <ul class="dropdown_links">
                                    <li><a href="wishlist.html">My Wish List </a></li>
                                    <li><a href="my-account.php">My Account </a></li>
                                                                        <li><a href="#">Sign In</a></li>
                                                                        <li><a href="compare.html">Compare Products  </a></li>
                                    
                                </ul> -->
    
                               
                                
                                <!-- <li class="language"><a href="#"> +91 8888888888 </a> -->
                                                                        <!-- <ul class="dropdown_language">
                                                                            <li><a href="#"><img src="assets/img/logo/cigar.jpg" alt=""> French</a></li>
                                                                            <li><a href="#"><img src="assets/img/logo/language2.png" alt="">German</a></li>
                                                                        </ul> -->
                                
                                                            <!-- <i class="currency"><a href="#"></a>
                                                                        <ul class="dropdown_currency">
                                                                            <li><a href="#">EUR</a></li>
                                                                            <li><a href="#">BRL</a></li>
                                                                        </ul>
                                    <ul>
                                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                                                </ul> -->
                                
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
                        <a href="index.php"><img src="assets/img/logo/mainkiranlogo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="search_bar">
                        <form action="#">
                            <select class="select_option" name="select" id="categori">
                                <option selected value="1">All Categories</option>
                                <option value="2">T100 Utensils</option>
                                <option value="3"> 925 Articles</option>
                                <option value="4">835 Articles</option>
                                <option value="5">Nathdwara Articles</option>
                                <option value="6">Kolhapur Articles</option>
                                <option value="7">Jain Pooja Articles</option>
                                <option value="8">Kolhapur Articles 3</option>
                                <option value="9">Reg.Jewellery</option>
                                <option value="10">925 Jewellery</option>
                                <option value="11">Frames (999)</option>
                                <option value="9">Pure Chap</option>
                                <option value="10">Ganpati Items</option>
                                <option value="11">Coins Pure</option>
                            </select>
                            <input placeholder="Search by Product code / Product name." type="text">
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>

                </div>
                
                <div class="col-lg-5 col-md-6 ">
                    
                    <div class="row">
                        <div class="col-md-12">

                            <div class="cart_area">

                                

                                <!--cart area starts-->
                                <!--                                                        <div class="cart_link">
                                                                                            <a href="cart.php"><i class="fa fa-shopping-basket"></i>2 item(s)</a>
                                                                
                                                                                            <div class="mini_cart">
                                                                                                <div class="cart_item top">
                                                                                                    <div class="cart_img">
                                                                                                        <a href="#"><img src="assets/img/product/product details/1.png" alt=""></a>
                                                                                                    </div>
                                                                                                    <div class="cart_info">
                                                                                                        <a href="#">Apple iPhone SE 16GB</a>
                                                                
                                                                                                        <span>1x $60.00</span>
                                                                
                                                                                                    </div>
                                                                                                    <div class="cart_remove">
                                                                                                        <a href="#"><i class="ion-android-close"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cart_item bottom">
                                                                                                    <div class="cart_img">
                                                                                                        <a href="#"><img src="assets/img/product/product details/2.png" alt=""></a>
                                                                                                    </div>
                                                                                                    <div class="cart_info">
                                                                                                        <a href="#">Marshall Portable Bluetooth</a>
                                                                                                        <span> 1x $160.00</span>
                                                                                                    </div>
                                                                                                    <div class="cart_remove">
                                                                                                        <a href="#"><i class="ion-android-close"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cart__table">
                                                                                                    <table>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td class="text-left">Sub-Total :</td>
                                                                                                                <td class="text-right">$150.00</td>
                                                                                                            </tr>
                                                                
                                                                                                            <tr>
                                                                                                                <td class="text-left">Total :</td>
                                                                                                                <td class="text-right">$184.00</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                
                                                                                                <div class="cart_button view_cart">
                                                                                                    <a href="cart.php">View Cart</a>
                                                                                                </div>
                                                                                                <div class="cart_button checkout">
                                                                                                    <a href="checkout.php">Checkout</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>-->

                                <!--cart area ends-->






                            </div>
                        </div>       

                        <!--wish list starts-->
                        <!--                    <div class="cart_area">
                        
                                                <div class="middel_links">
                                                    <ul>
                        
                                                        <li><a href="wishlist.php">Wish List</a></li>
                        
                                                    </ul>
                                                </div>
                                            </div> -->
                        <!--wishlist ends-->

                        <div class="col-md-12">

                            <div class="row">

                                <div class="col-md-12 setcartandwishlist">
                                <div class="cart_link">
                                        <a href="wishlist.php"><b id="cart_text">Login</b></a>
                                    </div>
                                    <div class="cart_link">
                                        <a href="wishlist.php"><b id="cart_text">Register</b></a>
                                    </div>
                                    <div class="cart_link">
                                        <a href="cart.php"><i class="fa fa-shopping-basket"></i><b id="cart_text"></b></a>
                                        <!--<a href="cart.php"><i class="fa fa-shopping-basket"></i>2 item(s)</a>-->
                                        <div class="mini_cart">
                                            <div class="cart_item top">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/product/product details/1.png" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Apple iPhone SE 16GB</a>

                                                    <span>1x $60.00</span>

                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item bottom">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/product/product details/2.png" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Marshall Portable Bluetooth</a>
                                                    <span> 1x $160.00</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart__table">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left">Sub-Total :</td>
                                                            <td class="text-right">$150.00</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="text-left">Total :</td>
                                                            <td class="text-right">$184.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="cart_button view_cart">
                                                <a href="cart.php">View Cart</a>
                                            </div>
                                            <div class="cart_button checkout">
                                                <a href="checkout.php">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart_link">
                                        <a href="wishlist.php"><i class="fa fa-heart-o"></i><b id="cart_text"></b></a>
                                    </div>
                                   
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--header bottom satrt-->
    <div class="header_bottom header_bottom9 sticky-header">
        <div class="">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="header_static">
                        <!--                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">ALL CATEGORIES</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                        <li class="menu_item_children"><a href="#">Brake Parts <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                            <li class="menu_item_children"><a href="#">Dresses</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Sweater</a></li>
                                                    <li><a href="">Evening</a></li>
                                                    <li><a href="">Day</a></li>
                                                    <li><a href="">Sports</a></li>
                                                </ul>
                                            </li>
                                                                                    <li class="menu_item_children"><a href="#">Handbags</a>
                                                                                        <ul class="categorie_sub_menu">
                                                                                            <li><a href="">Shoulder</a></li>
                                                                                            <li><a href="">Satchels</a></li>
                                                                                            <li><a href="">kids</a></li>
                                                                                            <li><a href="">coats</a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="menu_item_children"><a href="#">shoes</a>
                                                                                        <ul class="categorie_sub_menu">
                                                                                            <li><a href="">Ankle Boots</a></li>
                                                                                            <li><a href="">Clog sandals </a></li>
                                                                                            <li><a href="">run</a></li>
                                                                                            <li><a href="">Books</a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li class="menu_item_children"><a href="#">Clothing</a>
                                                                                        <ul class="categorie_sub_menu">
                                                                                            <li><a href="">Coats  Jackets </a></li>
                                                                                            <li><a href="">Raincoats</a></li>
                                                                                            <li><a href="">Jackets</a></li>
                                                                                            <li><a href="">T-shirts</a></li>
                                                                                        </ul>
                                                                                    </li>
                                    </ul>
                                    </li>
                                        <li class="menu_item_children"><a href="#"> Wheels & Tires  <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_3">
                                            <li class="menu_item_children"><a href="#">Chair</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Dining room</a></li>
                                                    <li><a href="">bedroom</a></li>
                                                    <li><a href=""> Home & Office</a></li>
                                                    <li><a href="">living room</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Lighting</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Ceiling Lighting</a></li>
                                                    <li><a href="">Wall Lighting</a></li>
                                                    <li><a href="">Outdoor Lighting</a></li>
                                                    <li><a href="">Smart Lighting</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Sofa</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Fabric Sofas</a></li>
                                                    <li><a href="">Leather Sofas</a></li>
                                                    <li><a href="">Corner Sofas</a></li>
                                                    <li><a href="">Sofa Beds</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                        <li class="menu_item_children"><a href="#"> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="#">Brake Tools</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Driveshafts</a></li>
                                                    <li><a href="">Spools</a></li>
                                                    <li><a href="">Diesel </a></li>
                                                    <li><a href="">Gasoline</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Emergency Brake</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Dolls for Girls</a></li>
                                                    <li><a href="">Girls' Learning Toys</a></li>
                                                    <li><a href="">Arts and Crafts for Girls</a></li>
                                                    <li><a href="">Video Games for Girls</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                        <li class="menu_item_children"><a href="#"> Turbo System <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="#">Check Trousers</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Building</a></li>
                                                    <li><a href="">Electronics</a></li>
                                                    <li><a href="">action figures </a></li>
                                                    <li><a href="">specialty & boutique toy</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Calculators</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Dolls for Girls</a></li>
                                                    <li><a href="">Girls' Learning Toys</a></li>
                                                    <li><a href="">Arts and Crafts for Girls</a></li>
                                                    <li><a href="">Video Games for Girls</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"> T100 Utensils</a></li>
                                    <li><a href="#"> 925 Articles</a></li>
                                    <li><a href="#">835 Articles</a></li>
                                    <li><a href="#">Nathdwara Articles</a></li>
                                    <li><a href="#"> Kolhapur Articles</a></li>
                                    <li><a href="#"> Jain Pooja Articles</a></li>
                                    <li><a href="#"> Kolhapur Articles</a></li>
                                    <li><a href="#"> Reg.Jewellery</a></li>
                                    <li><a href="#"> 925 Jewellery</a></li>
                                    <li><a href="#">Frames (999)</a></li>
                                    <li><a href="#"> Pure Chap</a></li>
                                    <li><a href="#"> Ganpati Items</a></li>
                                    <li><a href="#"> Coins Pure</a></li>
                                                                            <li id="cat_toggle" class="has-sub"><a href="#"> More Categories</a>
                                                                                <ul class="categorie_sub">
                                                                                    <li><a href="#">Hide Categories</a></li>
                                                                                </ul>   
                                    
                                                                            </li>
                                </ul>
                            </div>
                        </div>-->
                        <div class="main_menu_inner">
                            <div class="main_menu text-center">
                                <nav>
                                    <ul id="lespad1" onclick="myFunction(event)">
                                        <!-- <li class="text-center"><a href="index.php">HOME</a>
                                                                                           <ul class="sub_menu">
                                                                                                <li><a href="index.php">Home 1</a></li>
                                                                                                <li><a href="index-2.html">Home 2</a></li>
                                                                                                <li><a href="index-3.html">Home 3</a></li>
                                                                                                <li><a href="index-4.html">Home 4</a></li>
                                                                                                <li><a href="index-5.html">Home 5</a></li>
                                                                                                <li><a href="index-6.html">Home 6</a></li>
                                                                                                <li><a href="index-7.html">Home 7</a></li>
                                                                                                <li><a href="index-8.html">Home 8</a></li>
                                                                                                <li><a href="index-9.html">Home 9</a></li>
                                                                                            </ul>
                                        </li> -->

                                        <!-- <li><a href="about.php">ABOUT US</a></li>  -->

                                        <!-- <li class="mega_items"><a href="shop.php">PRODUCTS <i id="dropdown_arrow" class="fa fa-angle-down"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                       
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                       


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                       

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li> -->



                                        <!--                                            <li><a href="blog.html">blog <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                            </ul>
                                        </li>-->
                                        <!--                                            <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="services.html">services</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                                <li><a href="coming-soon.html">coming soon</a></li>
                                            </ul>
                                        </li>-->
                                        
                                        
                                        <li class="mega_items"><a href="shop-sub-categories.php">T100 UTENSILS <i id="dropdown_arrow" class="fa fa-angle-down"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class="mega_items"><a href="shop-sub-categories.php">925 ARTICLES <i id="dropdown_arrow" class="fa fa-angle-down"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>
                                        <li class="mega_items"><a href="shop-sub-categories.php">835 ARTICLES <i id="dropdown_arrow" class="fa fa-angle-down"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>
                                       

                                        <li class="mega_items"><a href="shop-sub-categories.php">Nathdwara Articles <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">Kolhapur Articles <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">Jain Pooja Articles <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">Kolhapur Articles 3 <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">Reg.Jewellery <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">925 Jewellery <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">Frames (999) <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">Pure Chap <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">Ganpati Items<i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

                                        <li class="mega_items"><a href="shop-sub-categories.php">Coins Pure <i class="fa fa-angle-down" id="dropdown_arrow"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html"> T100 UTENSILS</a></li>
                                                        <li><a href="shop-fullwidth-list.html">925 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar.html">835 ARTICLES</a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> COINS PURE</a></li>
                                                        <!--<li><a href="shop-list.html">List View</a></li>-->
                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="portfolio.html">NATHDWARA ARTICLES </a></li>
                                                        <li><a href="portfolio-details.html">KOLHAPUR ARTICLES</a></li>
                                                        <li><a href="cart.html">JAIN POOJA ARTICLES</a></li>
                                                        <!--<li><a href="checkout.html">Checkout</a></li>-->
                                                        <!--<li><a href="my-account.html">my account</a></li>-->


                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="product-details.html"> KOLHAPUR ARCTICLES</a></li>
                                                        <li><a href="product-sidebar.html"> REG. JEWELLERY</a></li>
                                                        <li><a href="product-gallery.html">925 JEWELLERY</a></li>
                                                        <!--                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>-->

                                                    </ul>
                                                </li>
                                                <li><a href="#"></a>
                                                    <ul>
                                                        <li><a href="shop.php">FRAMES (999)</a></li>
                                                        <li><a href="shop.php">PURE CHAP</a></li>
                                                        <li><a href="shop.php"> GANPATI ITEMS</a></li>
                                                        <!--                                                        <li><a href="shop.php">Shoes</a></li>
                                                        <li><a href="shop.php">Check Trousers</a></li>-->

                                                    </ul>
                                                </li>
                                                <li class="banner_menu"><a href="#"><img src="assets/img/bg/background/mp4.png" alt=""></a></li>
                                            </ul>
                                        </li>

<!--                                        <li class=""><a href="index.php">T100 UTENSILS</a>
                                        <li class=""><a href="index.php">
                                                925 ARTICLES</a>
                                        <li class=""><a href="index.php">835 ARTICLES</a>
                                        <li class=""><a href="index.php">NATHDWARA ARTICLES</a>-->


                                        <!-- <li><a href="contact.php">CONTACT US</a></li> -->

                                    </ul>

                                </nav>

                            </div>

                        </div>
<!--                        <div class="contact_phone">
                            <p>Email Us: <a href="#">contact@kiransilver.com</a></p>
                        </div>-->
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
                                <!-- <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label> -->
                                <button type="submit">login</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whatsapp">
    <a href="#" title="Need Some help? Contact us now on whatsapp">  <img src="assets/img/WhatsApp.png" height="10%" width="auto" id="whatsapp" alt=""></a>
</div>

<script src="assets/js/jquery-2.1.3.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/header.js"></script>



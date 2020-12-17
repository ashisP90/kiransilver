<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="../index.php">KIRAN JWELLERS</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <div class=" text-center" style="position: absolute;left: 50%;" >
                <img class="img-responsive thumbnail" style="margin: auto;width: 17rem;height: 7rem;" src="<?php echo BASE_URL; ?>assets/images/mainkiranlogo.png">
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<section>
    <aside id="leftsidebar" class="sidebar">
        <div class="user-info">
            <div class="image">
                <img src="<?php echo BASE_URL; ?>assets/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo BASE_URL; ?>?action=logout"><i class="material-icons">input</i>Sign Out</a></li>
                        <!--<a ><button class="btn btn-lg pull-right" style="margin: 30px 80px 0 0">Log Out</button></a>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a  href="<?php echo BASE_URL; ?>registered_user.php" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Registered User</span>
                    </a>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Header</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/header-section/contact_details.php">Contact</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/header-section/slider_section.php">Slider Photos</a>
                        </li>
                    </ul>
                </li> 

                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Home Page</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/home-page/facebook.php">Facebook</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/home-page/media-press.php">Media</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/home-page/testimonials.php">Testimonials</a>
                        </li>
                        <!-- <li>
                            <a href="pages/home-page/associate-members.php">Associate Members</a>
                        </li>-->
                    </ul>
                </li> 

                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Products</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo BASE_URL; ?>products.php">Products</a>
                        </li>
                    </ul>
                </li> 

                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Product Category</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/category/category.php">Category</a>
                        </li>
                    </ul>
                </li> 

                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Booked Order</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/booked-order/new_order.php">New Order</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/booked-order/completed_order.php">Completed Order</a>
                        </li>
                    </ul>
                </li> 

                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Footer</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/footer/about_us.php">About Us</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/footer/contact_us.php">Contact Us</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/footer/quick_link.php">Quick Links</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL; ?>pages/footer/social_media.php">Social Media</a>
                        </li>
                    </ul>
                </li> 
            </ul>
        </div>
    </aside>
</section>
<?php 
if(!defined('BASEPATH')) EXIT("No direct script access allowed");
?>   
   
    <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="container">   
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a href="<?php echo site_url();?>">home</a></li>
                                <li>/</li>
                                <li><?php echo $category->name;?></li>
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
                                <div class="widget_list widget_categories">
                                    <h2>Categories</h2>
                                    <ul class="nav" id="needblock" role="tablist">
                                       <?php if($all_main_category) { 
                                      
                                       foreach($all_main_category as $main_category) {
									   ?>
									   <li><a href="<?php echo base_url().'category/'.$main_category->id;?>"><input type="checkbox" id="vehicle1" name="vehicle1" value="">&nbsp; <?php echo $main_category->name;?><span>3</span></a></li>
                                        <?php }
                                        }?>
                                        
                                    </ul>
                                </div>
                              
                            </div>
                            <!--sidebar widget end-->
                        </div>
                     
                     
                        <div class="col-lg-9 col-md-12">
                            
                           

                          <!--  <section>
                              <?php if($sub_categories){           
							  	foreach($sub_categories as $sub_category){ ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner_area">
                                             <div class="banner_content">
                                                <h4><?php echo $sub_category->scname;?></h4>
                                                <a href="<?php echo site_url().'sub-cat-products/'.$sub_category->id;?>">Discover Now</a>
                                            </div>
                                    </div>
                                </div>
                                 <?php		
								  }
							    }
                                ?>
                            </section>
-->



       <section class="banner_section banner_section_three ">
            <div class="shop_title">
                                <h1>Product Categories</h1>
                            </div>
            <div class="container">
                <?php if($sub_categories){
                  $cat_count = count($sub_categories);
                  $div_row = $cat_count/2;
                  $temp=0;
                	
                  for($main_div_row = 0; $main_div_row <= $div_row; $main_div_row++){
				   ?>
                   <div class="row paddingCategory" >
					<?php 
					for($i = $temp; $i < $temp+2; $i++){
					if($cat_count > $i){
					 ?>  
                      <div class="col-lg-6 col-md-6">
                        <div class="banner_area">
                            <div class="banner_thumb">
                              <a href="<?php echo base_url().'sub-cat-products/'.$sub_category->id;?>" class="fancy imag"><img src="<?php echo base_url('assets/frontend/img/bg/insta/test2.jpg');?>" alt="<?php echo $sub_categories[$i]->scname; ?>"></a>
                                <div class="banner_content">
                                    <h1><?php echo $sub_categories[$i]->scname; ?></h1>
                                    <a href="<?php echo base_url().'sub-cat-products/'.$sub_category->id;?>">Discover Now</a>
                                </div>
                            </div>
                        </div>
                      </div>
                     <?php  
	                     }
		               }
		              $temp=$temp+2;
					  ?>
                    </div>
                   <?php  } 
                   }
                   ?>  
            </div>
        </section>








                          
<!--
                            <div class="shop_toolbar t_bottom">
                                <div class="pagination">
                                    <ul>
                                        <li class="current">1</li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#">next</a></li>
                                        <li><a href="#">>></a></li>
                                    </ul>
                                </div>
                            </div>-->
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



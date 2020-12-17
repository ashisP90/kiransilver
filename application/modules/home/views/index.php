<?php $basepath = base_url("assets/frontend/");?>
<style>
    .single_slider {
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center center;
        background-size: contain;
    }
    .slider_area.owl-carousel .owl-dots {
        position: absolute;
        bottom: 45px;
        width: 100%;
        text-align: center;
    }
</style>
<!--Banner-->


<section>
    <div class="slider_area slider_style home_three_slider owl-carousel">
        <?php if($banners){
		      foreach($banners as $banner) { ?>
        <div class="single_slider" data-bgimg="<?php echo site_url().'assets/uploads/banners/'.$banner->image;?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_one">
                            <a href="javascript:void(0);">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>    
        </div>
       <?php	
		 }	
		}
        ?>
    </div>
</section>

<!--  category -->

<section class="banner_section banner_section_three ">
            <div class="row">   
                <div class="col-12">
                    <div class="section_title">
                        <h2>Categories</h2>
                        <p>Contemporary, minimal and modern designs</p>
                    </div>
                </div> 
            </div> 

            <div class="container">
                <?php if($categories){
                  $cat_count = count($categories);
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
                        <div class="banner_area mx-3">
                            <div class="banner_thumb">
                                <a href="<?php echo site_url().PRODUCT_URL.'?cat='.$categories[$i]->id;?>">
                                    <img src="<?php echo base_url().'assets/uploads/categories/'.$categories[$i]->image;?>" alt="<?php echo $categories[$i]->name;?>" />
                                </a>
                                <div class="banner_content">
                                    <!-- <h1><?php echo $categories[$i]->name; ?></h1> -->
                                    <!-- <a href="<?php echo site_url().PRODUCT_URL.'?cat='.$categories[$i]->id;?>">Discover Now</a> -->
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
        
     
<!-- New Arrivals   --> 

 <!--  <section class="banner_section banner_section_three ">
            <div class="row">   
                <div class="col-12">
                    <div class="section_title">
                        <h2>New Arrivals </h2>
                        <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                    </div>
                </div> 
            </div> 

            <div class="container">
                
              
                   <div class="row paddingCategory">
					 
                  <?php if($new_arrivals){ ?>
                  <?php
                    $count = 0;
                    ?>
                    <?php foreach($new_arrivals as $new_arrival){
                    ?>  
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_area mx-3">
                            <div class="banner_thumb">
                               <a href="<?php echo base_url().'assets/uploads/products/'.$new_arrival->product_image;?>" class="fancy imag"><img src="<?php echo base_url().'assets/uploads/products/'.$new_arrival->product_image;?>" alt="<?php echo $new_arrival->pname;?>" id="fancyLaunch" ></a>
                                <div class="banner_content">
                                    <h1><?php echo $new_arrival->pname; ?></h1>
                                    <a href="<?php echo base_url().'products/'.$new_arrival->id;?>">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                     <?php 
					
					  $count++;           
	                  }
					
					  } ?>  
                    
                    
                    </div>
                 
            </div>
        </section>
  
  -->
  <?php if($new_arrivals){ ?>
                
      
  <section class="product_section womens_product" id="pro12">
    <div class="container">
        <div class="row">   
            <div class="col-12">
                <div class="section_title">
                    <h2>New Arrivals</h2>
                    <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                </div>
            </div> 
        </div>
                  
          <div class="row">
            <div class="blog_wrapper blog_column3 owl-carousel">
                
              <?php  $count = 0; ?>
                <?php foreach($new_arrivals as $new_arrival){ ?>  
                                    
                <div class="col-lg-4">
                <div class="single_product">
                    <div class="product_thumb">
                                              
                        <a class="primary_img" href="<?php echo base_url().'products/'.$new_arrival->id;?>"><img src="<?php echo base_url().'assets/uploads/products/'.$new_arrival->product_image;?>" alt=""></a>
                                                
                     <!--   <a class="secondary_img" href="<?php echo base_url().'products/'.$new_arrival->id;?>"><img src="<?php echo base_url().'assets/uploads/products/'.$new_arrival->product_image;?>" alt=""></a>
                           -->
                        
                         <div class="product_action">
                                                    <div class="hover_action">
                                                        <a  href="#"><i class="fa fa-plus"></i></a>
                                                        <div class="action_button">
                                                            <ul>
                                                                <li><a title="add to cart" href="cart.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                                <li><!--<a href="wishlist.php" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>-->
                                                                
                                                                <a href="javascript:void(0);" class="addtowishlist" data-action="add" data-data="<?php echo $new_arrival->id;?>" title="Add to Wishlist"><i class="fa fa-heart-o whishstate" aria-hidden="true"></i></a>
                                                                
                                                                </li>
                                                                <!--<li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>-->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                        
                        
                        <div class="product_content">
                            <h3><a href="<?php echo base_url().'products/'.$new_arrival->id;?>"><?php echo $new_arrival->pname; ?></a></h3>                       
                        </div>
                     </div>
                   </div>   
                </div>   
                
                                <?php } ?>
                            </div>
                        </div>
                   
      				 </div>
				</section>
  
  
   <?php  } ?>  
  
  
  
  
        
    <!-- FEATURES-->   
        
    <section class="trial-block shadow3" id="ContactUs">
    <div class="height450">
       <div class="col-12">
            <div class="section_title">
                <h2>Our Process</h2>
                <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p> 
            </div>
        </div>
        <div class="social-overlap process-scetion mt100">
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="">
                            <div class="social-icons mb-3 iconpad text-center">
                                <a href="" target="_blank" class="slider-nav-item"> <img src="<?=$basepath?>img/icon/newicons/promptservice.png" class="imgpadding11" ><p>Contact us</p></a>
                                <a href="" target="_blank" class="slider-nav-item"> <img src="<?=$basepath?>img/icon/newicons/consult.png" class="imgpadding11" ><p>Consult with us</p></a>
                                <a href="" target="_blank" class="slider-nav-item"> <img src="<?=$basepath?>img/icon/newicons/site.png" class="imgpadding11" ><p>Place Order</p></a>
                                <a href="" target="_blank" class="slider-nav-item"> <img src="<?=$basepath?>img/icon/newicons/years.png" class="imgpadding11" ><p>Get it delivered</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>
        
   
 <!--  Drop In-->     
  
  <section class="testimonials section-padding1 bg-img bg-fixed" style=" background: url(<?=$basepath?>img/bg/background/mp3.jpg); background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="title valign col-lg-12 text-center">
                <div>
                    <h3>Drop in to a Kiran Jewellers Store near you</h3>
                    <!--<button  class="btn btn-danger" id="nobtn11">Know More</button>--> 
                </div>
            </div>
        </div>
    </div>
</section>
  
  <!--Why Us-->
        
  <section id="whykiran">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>	Why Kiran Sliver ? </h2>
                            <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p> 
                        </div>
                    </div> 
                    <div class="col-xs-6 col-sm-4 col-md-4">            
                        <div class="thumbnail">
                            <div class="caption">

                                <p id="fonth5">Always at your doorstep</p>
                                <hr>
                                <p id="fontp1">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <p><a href="" class="label label-danger" id="read1">Read More</a></p>
                                <!--<a href="" class="label label-default">Download</a>-->
                            </div>
                            <div class="text-center" id="fixedbox">
                                <img  src="<?=$basepath?>img/icon/newicons/years.png" alt="...">
                                <h4 id="fonth4">Timely delivery</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">            
                        <div class="thumbnail">
                            <div class="caption">

                                <p id="fonth5">Best in-class pricing</p>
                                <hr>
                                <p id="fontp1">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <p><a href="" class="label label-danger" id="read1">Read More</a></p><!--
                                   <a href="" class="label label-default">Download</a></p>-->
                            </div>
                            <div class="text-center" id="fixedbox">
                                <img  src="<?=$basepath?>img/icon/newicons/pricing.png" alt="...">
                                <h4 id="fonth4" >Competitive Rate</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">            
                        <div class="thumbnail">
                            <div class="caption">

                                <p id="fonth5">More than 25 years of experience</p>
                                <hr>
                                <p id="fontp1">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <p><a href="" class="label label-danger" id="read1">Read More</a></p><!--
                                    <a href="" class="label label-default">Download</a></p>-->
                            </div>
                            <div class="text-center" id="fixedbox">
                                <img  src="<?=$basepath?>img/icon/newicons/experience.png" alt="...">
                                <h4 id="fonth4">Years of Experience</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">            
                        <div class="thumbnail">
                            <div class="caption">

                                <p id="fonth5">Certified state-of-art products</p>
                                <hr>
                                <p id="fontp1">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <p><a href="" class="label label-danger" id="read1">Read More</a></p><!--
                                   <a href="" class="label label-default">Download</a></p>-->
                            </div>
                            <div class="text-center" id="fixedbox">
                                <img  src="<?=$basepath?>img/icon/newicons/quality.png" alt="...">
                                <h4 id="fonth4">Quality of Products</h4>
                            </div>
                        </div>  
                    </div> 
                    <div class="col-xs-6 col-sm-4 col-md-4">            
                        <div class="thumbnail">
                            <div class="caption">

                                <p id="fonth5">After sales services line</p>
                                <hr>
                                <p id="fontp1">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <p><a href="" class="label label-danger" id="read1">Read More</a></p>
<!--                                <p><a href="" class="label label-danger">Zoom</a>
                                   <a href="" class="label label-default">Download</a></p>-->
                            </div>
                            <div class="text-center" id="fixedbox">
                                <img  src="<?=$basepath?>img/icon/newicons/promptservice.png" alt="...">
                                <h4 id="fonth4">Prompt Service</h4>
                            </div>
                        </div>  
                    </div> 
                    <div class="col-xs-6 col-sm-4 col-md-4">            
                        <div class="thumbnail">
                            <div class="caption">

                                <p id="fonth5">For all pharmaceutical equipment manufacturing units</p>
                                <hr>
                                <p id="fontp1">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                                <p><a href="" class="label label-danger" id="read1">Read More</a></p>
<!--                                <p><a href="" class="label label-danger">Zoom</a>
                                    <a href="" class="label label-default">Download</a></p>-->
                            </div>
                            <div class="text-center" id="fixedbox">
                                <img  src="<?=$basepath?>img/icon/newicons/site.png" alt="...">
                                <h4 id="fonth4">Free Insurance</h4>
                            </div>
                        </div>  
                    </div> 
                </div>

                <!--                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        Original <a href="http://bootsnipp.com/snippets/featured/thumbnail-caption-hover-effect">Thumbnail Caption Hover Effect</a> by <a href="http://bootsnipp.com/sevenx.de">sevenx.de</a>
                                    </div>
                                </div>-->

            </div><!-- /.container -->
        </section>      
        
     <!-- Testimonial section-->  
        
        <section class="testimonials section-padding bg-img bg-fixed"

                 style="background: url(<?=$basepath?>img/bg/back1212.jpg);">
         
            <div class="container">
                <div class="row">

                    <div class="title valign col-lg-5">
                        <div>
                            <h3>What Our</h3>
                            <h3 class="font-weight-normal"><i>Clients</i> Say?</h3>
                            <span class="icon valign">
                                <img src="http://tolmatol.com/uploads-images/testimonials/quote.svg" alt="">
                            </span>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="cont">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae fugit molestias in magnam, adipisci quod placeat nostrum doloremque debitis animi! Voluptatem a, ex magnam! Odio unde facere perferendis! Perferendis, accusamus. "
                                    </p>
                                    <div class="info">
                                        <div class="author">
                                            <img src="http://tolmatol.com/uploads-images/testimonials/boy.png" alt="">
                                        </div>
                                        <h6>Mr. Patel <span>Customer</span> </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cont">
                                    <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae fugit molestias in magnam, adipisci quod placeat nostrum doloremque debitis animi! Voluptatem a, ex magnam! Odio unde facere perferendis! Perferendis, accusamus. "
                                    </p>
                                    <div class="info">
                                        <div class="author">
                                            <img src="http://tolmatol.com/uploads-images/testimonials/boy.png" alt="">
                                        </div>
                                        <h6>pushpak <span>Tolmatol customer</span> </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cont">
                                    <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae fugit molestias in magnam, adipisci quod placeat nostrum doloremque debitis animi! Voluptatem a, ex magnam! Odio unde facere perferendis! Perferendis, accusamus. "
                                    </p>
                                    <div class="info">
                                        <div class="author">
                                            <img src="http://tolmatol.com/uploads-images/testimonials/boy.png" alt="">
                                        </div>
                                        <h6>Alex Martin <span>Envato Customer</span> </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="cont">
                                    <p>" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae fugit molestias in magnam, adipisci quod placeat nostrum doloremque debitis animi! Voluptatem a, ex magnam! Odio unde facere perferendis! Perferendis, accusamus. "
                                    </p>
                                    <div class="info">
                                        <div class="author">
                                            <img src="http://tolmatol.com/uploads-images/testimonials/boy.png" alt="">
                                        </div>
                                        <h6>Vishwa <span>Customer</span> </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!--Media & Press-->
        
        
        <section class="blog_section">
        <div class="container">
        <div class="row" id="pading11">
            <div class="col-12">
                <div class="section_title">
                    <h2>Media & Press</h2>
                    <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog_wrapper blog_column3 owl-carousel">
                <div class="col-lg-4">
                    <div class="single_blog">
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="<?=$basepath?>img/bg/blog/1.png" alt=""></a>
                            <div class="blog_icon">
                                <a href="blog-details.html"></a>
                            </div>
                        </div>
                        <div class="blog_content">
                            <h3><a href="blog-details.html">Mercedes Benz– Mirror To The Soul 360</a></h3>
                            <div class="author_name">
                                <p> 
                                    <span class="post_by">by</span>
                                    <span class="themes">ecommerce Themes</span>
                                    / 30 Oct 2017
                                </p>
                            </div>
                            <div class="post_desc">
                                <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_blog">
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="<?=$basepath?>img/bg/blog/2.png" alt=""></a>
                            <div class="blog_icon">
                                <a href="blog-details.html"></a>
                            </div>
                        </div>
                        <div class="blog_content">
                            <h3><a href="blog-details.html">Dior F/W 2015 First Fashion Experience</a></h3>
                            <div class="author_name">
                                <p> 
                                    <span class="post_by">by</span>
                                    <span class="themes">ecommerce Themes</span>
                                    / 30 Oct 2017
                                </p>

                            </div>
                            <div class="post_desc">
                                <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_blog">
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="<?=$basepath?>img/bg/blog/3.png" alt=""></a>
                            <div class="blog_icon">
                                <a href="blog-details.html"></a>
                            </div>
                        </div>
                        <div class="blog_content">
                            <h3><a href="blog-details.html">London Fashion Week & Royal Day</a></h3>
                            <div class="author_name">
                                <p> 
                                    <span class="post_by">by</span>
                                    <span class="themes">ecommerce Themes</span>
                                    / 30 Oct 2017
                                </p>

                            </div>
                            <div class="post_desc">
                                <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single_blog">
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="<?=$basepath?>img/bg/blog/1.png" alt=""></a>
                            <div class="blog_icon">
                                <a href="blog-details.html"></a>
                            </div>
                        </div>
                        <div class="blog_content">
                            <h3><a href="blog-details.html">Best of New York Spring/Summer 2016</a></h3>
                            <div class="author_name">
                                <p> 
                                    <span class="post_by">by</span>
                                    <span class="themes">ecommerce Themes</span>
                                    / 30 Oct 2017
                                </p>

                            </div>
                            <div class="post_desc">
                                <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

  
    <!--Follow us On Facebook-->
     

   <section class="instagram_area" id="insta12">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Follow us On Facebook</h2>
                            <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                        </div>
                    </div>
                </div>
                <div class="instagram_home_block">
                    <div class="row">
                        <div class="instagram_wrapper instagram_column5 owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="<?=$basepath?>img/bg/insta/1.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="<?=$basepath?>img/bg/insta/1.png"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="<?=$basepath?>img/bg/insta/2.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="<?=$basepath?>img/bg/insta/2.png"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="<?=$basepath?>img/bg/insta/3.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="<?=$basepath?>img/bg/insta/3.png"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="<?=$basepath?>img/bg/insta/4.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="<?=$basepath?>img/bg/insta/4.png"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="<?=$basepath?>img/bg/insta/5.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="<?=$basepath?>img/bg/insta/5.png"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_instagram">
                                    <a href="#"><img src="<?=$basepath?>img/bg/insta/6.png" alt=""></a>
                                    <div class="instagram_icone">
                                        <a class="instagram_pupop" href="<?=$basepath?>img/bg/insta/6.png"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text_follow">
                                <a href="#">#Follow us on Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--Associate Members-->

<div class="container nedbotpad mb-5">
            <div class="section_title">
                <h2>Associate Members</h2>
                <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
            </div>
            <section class="customer-logos slider-associate">
               
                <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
                
                <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
            </section>
        </div>  
        

        <div class="breadcrumbs_area product_bread">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a href="<?php echo base_url();?>">home</a></li>
                                <li>/</li>
                                <li><a href="<?php echo base_url().PRODUCT_URL;?>">Products</a></li>
                                <li>/</li>
                                <li><?php echo $product->pname; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product_details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="product-details-tab">

                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="<?php echo base_url().'assets/uploads/products/'.$product->product_image;?>" data-zoom-image="<?php echo base_url().'assets/uploads/products/'.$product->product_image;?>" alt="<?php echo $product->pname; ?>">
                                </a>
                            </div>

                          <!--  <div class="single-zoom-thumb">
                                <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/products-listings/6.png" data-zoom-image="assets/img/product/products-listings/6.png">
                                            <img src="assets/img/product/products-listings/6.png" alt="zo-th-1" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/products-listings/6.png" data-zoom-image="assets/img/product/products-listings/6.png">
                                            <img src="assets/img/product/products-listings/6.png" alt="zo-th-1" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/products-listings/6.png" data-zoom-image="assets/img/product/products-listings/6.png">
                                            <img src="assets/img/product/products-listings/6.png" alt="zo-th-1" />
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/products-listings/6.png" data-zoom-image="assets/img/product/products-listings/6.png">
                                            <img src="assets/img/product/products-listings/6.png" alt="zo-th-1" />
                                        </a>

                                    </li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="product_d_right">
                            <form action="#">
                          
                            <?php pr($product_other_details);?>
                            
                                <h1><?php echo $product->pname; ?></h1>
                                <!-- <div class=" product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="review"><a href="#"> 1 review </a></li>
                                        <li class="review"><a href="#"> Write a review </a></li>
                                    </ul>
                                </div> -->
                                <!-- <div class="product_price">
                                    <span class="current_price">$70.00</span>
                                </div> -->
                                <div class="product_desc">
                                    <p><?php echo $product->description; ?></p>
                                </div>

                                <?php if($product_other_details) { ?>
									
									
							
                                <div class="product_variant quantity">
                                   
                                   
                                    <label>&nbsp;&nbsp;Size</label>&nbsp;&nbsp;&nbsp;
                                    <select class="niceselect_option" id="color1" name="produc_color">
                                       <?php for($i=0; $i<count($product_other_details); $i++){ ?>								       
                                        <option value="<?php echo $product_other_details[$i]->size;?>"><?php echo $product_other_details[$i]->size;?></option>
                                      <?php }?>
                                    </select>
                                    
                                    <label>&nbsp;&nbsp;Color</label>&nbsp;&nbsp;&nbsp;
                                    <select class="niceselect_option" id="color" name="produc_color">
                                        <option selected value="Red">Red</option>
                                        <option value="Green">Green</option>
                                        <option value="Yellow">Yellow</option>
                                        <option value="Blue">Blue</option>
                                    </select>

                                    <label>&nbsp;&nbsp;Weight</label>&nbsp;&nbsp;&nbsp;
                                    <select class="niceselect_option" id="weight1" name="produc_color">
                                        <option value="16"> 16</option>
                                        <option selected value="20"> 20</option>
                                        <option value="24"> 24</option>
                                        <option value="26">26</option>
                                        <option value="30"> 30</option>
                                    </select>

                                    <!-- <label>&nbsp;&nbsp;Weight</label>&nbsp;&nbsp;&nbsp;
                                    <select class="niceselect_option" id="weight" name="produc_color">
                                        <option value="16"> 16</option>
                                        <option selected value="20"> 20</option>
                                        <option value="24"> 24</option>
                                        <option value="26">26</option>
                                        <option value="30"> 30</option>
                                    </select> -->

                                    <label>&nbsp;&nbsp;Quantity</label>&nbsp;&nbsp;&nbsp;
                                    <input min="1" max="100" value="1" id="quantity" type="number">

                                </div>
                               
                                <!--<div class="product_variant quantity">-->
                                <!--    <label>Quantity</label>-->
                                <!--    <input min="1" max="100" value="1" id="quantity" type="number">-->

                                <!--<button class="button" >add to cart</button>-->
                                <!--</div>-->
                               	<?php 
                               	  	}
                               	
                               	?> 
                          
                          
                          
                            </form>

                            <div id="note1">
                                <p>You can add bulk item here</p>
                            </div>

                            <div class="product_variant quantity">
                                <button class="add-row btn-lg button">
                                    ADD ITEM
                                </button>
                                <!-- <a href="cart.php"> <button class="button" >add to cart</button>  </a> -->


                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Weight</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <tr>

                                    </tr>
                                </tbody>

                                <!-- total weight & qty -->
                                <thead>
                                    <tr>
                                        <th style="border:none;"></th>
                                        <th></th>
                                        <th>Total Weight</th>
                                        <th>Total Quantity</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td id="totalWeight"></td>
                                        <td id="totalQuantity"></td>
                                        <td></td>

                                    </tr>
                                </tbody>
                            </table>
                            <form>
                                <input type="text" class="form-control" placeholder="Remark" id="remark" name="">
                            </form>
                            <div class="product_variant quantity">
                                <a href="<?php echo base_url('products/addToCart/'.$product->id); ?>" id="addToCart"> <button class="button" style="padding: 0 88px;">Add to Cart</button> </a>
                                
                                
                                
                            </div>
                            <div class="row">
                                <div class="product_d_action">
                                    <ul>
                                        <li><a href="#" id="addToWishlist" title="Add to wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wish List</a></li>
                                        <!--<li><a href="#" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i> Compare this Product</a></li>-->
                                    </ul>
                                </div>
                                <div class="priduct_social">
                                    <h3>Share on:</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                       <!--  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product details end-->
       
        <!--product info start-->
      
      <?php if($product->more_info){ ?>
	  	
      
        <div class="product_d_info">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">More info</a>
                                    </li>
                                  
                                </ul>
                            </div>
                          
                          
                          
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel">
                                    <div class="product_info_content">
                                        <p><?php echo $product->more_info;?></p>
                                    </div>
                                </div>
    
                               <!-- <div class="tab-pane fade" id="sheet" role="tabpanel">
                                    <div class="product_d_table">
                                        <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Compositions</td>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Styles</td>
                                                        <td>Girly</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Properties</td>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>
                                </div>-->
                               <!--  <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>
                                    <div class="product_info_inner">
                                        <div class="product_ratting mb-10">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                            <strong>Posthemes</strong> 
                                            <p>09/07/2018</p>
                                        </div>
                                        <div class="product_demo">
                                            <strong>demo</strong>
                                            <p>That's OK!</p>
                                        </div>
                                    </div> 
                                    <div class="product_review_form">
                                        <form action="#">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published. Required fields are marked </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author"  type="text">
    
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email"  type="text">
                                                </div>  
                                            </div>
                                            <button type="submit">Submit</button>
                                         </form>   
                                    </div>     
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
	  <?php }?>
        
        <!--product info end-->

        <!--product section area start-->
         <!-- <section class="product_section related_product">
            <div class="container">
                <div class="row">   
                    <div class="col-12">
                       <div class="section_title">
                           <h2>Related Products</h2>
                           <p>Contemporary, minimal and modern designs embody the Lavish Alice handwriting</p>
                       </div>
                    </div> 
                </div>    
                <div class="product_area"> 
                     <div class="row">
                        <div class="product_carousel product_three_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product21.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product22.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
    
                                                        <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
    
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
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Marshall Portable  Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product27.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product28.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
    
                                                        <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
    
                                                        <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
    
                                                    </ul>
                                                </div>
                                           </div>
    
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Koss KPH7 Portable</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
    
                                                        <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
    
                                                        <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
    
                                                    </ul>
                                                </div>
                                           </div>
    
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>
    
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Beats Solo2 Solo 2</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
    
                                                        <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
    
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
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Beats EP Wired</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product24.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product25.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
    
                                                        <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
    
                                                        <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
    
                                                    </ul>
                                                </div>
                                           </div>
    
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Bose SoundLink Bluetooth</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
                                                        <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
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
                                    <div class="product_content">
                                        <h3><a href="product-details.html">Apple iPhone SE 16GB</a></h3>
                                        <span class="current_price">£60.00</span>
                                        <span class="old_price">£86.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product23.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product24.jpg" alt=""></a>
                                        <div class="product_action">
                                            <div class="hover_action">
                                               <a  href="#"><i class="fa fa-plus"></i></a>
                                                <div class="action_button">
                                                    <ul>
    
                                                        <li><a title="add to cart" href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                        <li><a href="wishlist.html" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
    
                                                        <li><a href="compare.html" title="Add to Compare"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
    
                                                    </ul>
                                                </div>
                                           </div>
    
                                        </div>
                                        <div class="quick_button">
                                            <a href="#" data-toggle="modal" data-target="#modal_box" title="quick_view">+ quick view</a>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="product-details.html">JBL Flip 3 Portable</a></h3>
                                        <span class="current_price">£60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
            </div>
        </section>-->
        <!--product section area end-->

       
       
       
 <script>
            let lineNo = 1, total_weight = 0, total_quantity = 0;
            var cart = [], cart_details = [], duplicate_cart_array = [];
            var wishlist = [], wishlist_details = [];


            var add_more_flag = false, cart_info;

            $(document).ready(function () {
                cart_details = JSON.parse(sessionStorage.getItem('add_to_cart_array'));

                wishlist_details = JSON.parse(sessionStorage.getItem('add_to_wishlist_array'));

                if (cart_details == null) {
                    cart = [];
                } else {
                    cart = cart_details;
                }


                if (wishlist_details == null) {
                    wishlist = [];
                } else {
                    wishlist = wishlist_details;
                }
                ;

                console.log("cart_details === ", cart);
                console.log("wishlist_details === ", wishlist);

                $("#addToWishlist").click(function () {

                    wishlist.push({
                        "product_id": 1,
                        "image": '6.png',
                        "product": 'product_1',
                        "price": 69,
                        "qty": 2,
                        "weight": 200
                    });
                    console.log("wishlist array = ", wishlist);

                    sessionStorage.setItem("add_to_wishlist_array", JSON.stringify(wishlist));
                });

                $(".add-row").click(function () {
                    add_more_flag = true;
                    var size = document.getElementById('color1').value;
                    var quantity = parseInt(document.getElementById('quantity').value);
                    var weight = parseInt(document.getElementById('weight1').value);
                    var color = document.getElementById('color').value;

                    total_weight = (total_weight + weight);
                    total_quantity = (total_quantity + quantity);

                    $("#totalWeight").text(total_weight);
                    $("#totalQuantity").text(total_quantity);

                    markup = "<tr class='add-more-row-" + lineNo + "' ><td>" + size + "</td><td>" + color + "<td>" + weight + "</td><td>" + quantity + "</td><td style='cursor:pointer' onclick='removeRow(" + lineNo + "," + weight + " , " + quantity + ")' >&nbsp;&nbsp;<a href='#'><i style='font-size:14px;'class='fa fa-trash'></i></a> Remove</td></tr>";
                    tableBody = $("table #tbody");
                    tableBody.append(markup);

                    cart_info = {
                        "product_id": lineNo,
                        "image": '5.png',
                        "product": 'product_name',
                        "price": 50,
                        "qty": quantity,
                        "weight": weight,
                        "color": color,
                        "size": size
                    };

                    duplicate_cart_array.push(cart_info);
                    console.log("duplicate_cart_array ==== ", duplicate_cart_array);

                    // if (cart_details == null) {
                    //     cart = [];
                    //      cart.push(cart_info);
                    // }else{
                    //     cart = cart_details;

                    //     for (var i = 0; i < cart.length; i++) {

                    //         console.log("carttttt = ", cart[i]);
                    //         if (cart[i]["product_id"] === lineNo ) {


                    //             console.log("SAME PRODUCT ID = ", cart[i]);
                    //             let add_qty = (cart[i]["qty"] + quantity);
                    //             console.log("add qty = ", add_qty);
                    //             cart.splice(i,1);

                    //             cart.push({
                    //                 "product_id":lineNo,
                    //                 "image":'5.png',
                    //                 "product":'product_name',
                    //                 "price":50,
                    //                 "qty":parseInt(add_qty),
                    //                 "weight":weight
                    //             });


                    //         }else{
                    //             console.log("DIFFERENT PRODUCT ID");

                    //             cart.push(cart_info);

                    //         }
                    //     }
                    // };


                    lineNo++;
                });

                // add to cart
                $("#addToCart").click(function () {
                    var remark = $("#remark").val();
                    console.log("remark = ", remark);
                    console.log("duplicate cart array = ", duplicate_cart_array);

                    for (var i = 0; i < duplicate_cart_array.length; i++) {
                        cart.push({
                            "product_id": duplicate_cart_array[i]["product_id"],
                            "image": duplicate_cart_array[i]["image"],
                            "product": duplicate_cart_array[i]["product"],
                            "price": duplicate_cart_array[i]["price"],
                            "qty": duplicate_cart_array[i]["qty"],
                            "weight": duplicate_cart_array[i]["weight"],
                            "color": duplicate_cart_array[i]["color"],
                            "size": duplicate_cart_array[i]["size"],
                            "remark": remark
                        })
                    }

                    console.log("cart == ", cart);
                    if (add_more_flag) {
                        sessionStorage.setItem("add_to_cart_array", JSON.stringify(cart));
                    } else if (!add_more_flag) {
                        console.log("FALSE ADD MORE");

                        var size = document.getElementById('color1').value;
                        var quantity = document.getElementById('quantity').value;
                        var weight = document.getElementById('weight').value;
                        var color = document.getElementById('color').value;

                        cart_info = {
                            "product_id": 1,
                            "image": 'image',
                            "product": 'product_name',
                            "price": 50,
                            "qty": quantity,
                            "weight": weight,
                            "remark": remark
                        };

                        console.log("card info == ", cart_info);
                        cart.push(cart_info);
                        sessionStorage.setItem("add_to_cart_array", JSON.stringify(cart));
                    }

                    console.log("cart array = ", cart);

                });
            });


            // remove row (give product id in remove row argument))
            function removeRow(index, weight_val, qty_val) {
                console.log("index = ", index);
                console.log("weight = ", weight_val);
                console.log("quantity = ", qty_val);

                total_weight = (total_weight - weight_val);
                total_quantity = (total_quantity - qty_val);

                $("#totalWeight").text(total_weight);
                $("#totalQuantity").text(total_quantity);

                var product_id = index;

                $(".add-more-row-" + index).remove();

                for (var i = 0; i < cart.length; i++) {
                    if (cart[i]["product_id"] === product_id) {

                        cart.splice(i, 1);
                    }
                }
                console.log("after remove cart array = ", cart);
            }
        </script>       
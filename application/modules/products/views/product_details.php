<?php $current_user_id = $this->session->userdata('user_id');	?>
<style>
 .modal-dialog {
  max-width: 950px;
  margin: 30px auto;
  }
  .product_variant.quantity.modal_div {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    margin-bottom: 0px;
}
</style>
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
        <div class="single-zoom-thumb">
            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01"> 
               
               <?php
               if($modal_product_other_details){ ?>
                <li>
                <a href="javascript:void(0);" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url().'assets/uploads/products/'.$product->product_image; ?>" data-zoom-image="<?php echo base_url().'assets/uploads/products/'.$product->product_image; ?>"> <img src="<?php echo base_url().'assets/uploads/products/'.$product->product_image;?>" width="50"/></a> 
                </li>
               <?php 
               foreach($modal_product_other_details as $product_details){ ?>
			    <?php 
			    if($product_details->image){
				 $imageURL =  base_url('assets/uploads/products/'.$product_details->image) ; 
                 ?>
                <li>
                <a href="javascript:void(0);" class="elevatezoom-gallery active" data-update="" data-image="<?php echo $imageURL; ?>" data-zoom-image="<?php echo $imageURL; ?>"> <img src="<?php echo $imageURL; ?>" width="50"/></a> 
                </li>
			   	<?php
			      }
			     }
                }  
               ?> 
            </ul>
            </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-7">
        <div class="product_d_right">
          <form action="<?php echo base_url('products/addToCart/'.$product->id ); ?>" method="post" name="add_to_cart">
             
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
             
               <label> Size</label> 
               <select class="niceselect_option" id="size" name="size" onchange="getProductOtherdetailsBySize(this.value, '<?php  echo $product->id;?>' );">
                <?php for($i=0; $i<count($product_other_details); $i++){ ?>	
                <option value="<?php echo $product_other_details[$i]->size;?>"><?php echo $product_other_details[$i]->size;?></option>
                <?php }?>
               </select> 
              
              <span class="product_variant quantity modal_div" id="return_color_weight">
        
               <?php $size_units = explode(',', $product_other_details[0]->size_unit); ?>
               <?php if($size_units){ ?>
               <select class="niceselect_option" name="size_unit" id="size_unit">
                   <?php foreach($size_units as $size_unit){ ?>
                    <option value="<?php echo ($size_unit);?>" ><?php echo ($size_unit);?></option>
                   <?php 
                     }?>
               </select>
              <?php }?>
        
              <label>&nbsp;&nbsp;Color</label>&nbsp;&nbsp;&nbsp;
              <select class="niceselect_option stone_color" id="stone_color" name="stone_color">
                <?php for($i=0; $i<1; $i++){ ?>	
                <option value="<?php echo $product_other_details[$i]->stone_color;?>"><?php echo $product_other_details[$i]->stone_color;?></option>
                <?php }?>
              </select>
              <label>&nbsp;&nbsp;Weight(gm)</label>&nbsp;&nbsp;&nbsp;
              <select class="niceselect_option weight" id="weight1" name="weight">
                <?php for($i=0; $i<1; $i++){ ?>	
                <option value="<?php echo $product_other_details[$i]->weight;?>"><?php echo $product_other_details[$i]->weight;?></option>
                <?php }?>
              </select>
           
           </span>
           
              <label>&nbsp;&nbsp;Quantity</label>&nbsp;&nbsp;&nbsp;
              <input min="1" max="100" value="1" id="quantity" name="quantity" type="number">
            </div>
         
            <?php 
              }
              ?> 
        
         <div id="note1">
            <p>You can add bulk item here</p>
           </div>
          <div class="product_variant quantity">
          
           <?php 
            if($current_user_id && count($modal_product_other_details) > 1 ){ 
            ?>
           
            <a href="javascript:void(0);" class="btn btn-success" id="bulk_product_add" data-toggle="modal" data-target="#productModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Item</a> 
           <?php } 
            elseif(!$current_user_id){ ?>
         
            <a href="<?php echo site_url('login');?>" class="btn btn-success" id="bulk_product_add"><i class="fa fa-plus" aria-hidden="true"></i> Add Item</a> 
           <?php }?>
         
           </div>
         
         
          <div class="alert alert-info alert-dismissable" role="alert" id="delete_success" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          </div>
          
          <table class="table table-bordered">
            <thead>
              <tr> 
                <th>Image</th>
                <th>Stone Shape</th>
                <th>Plating</th>
                <th>Size</th>
                <th>Color</th>
                <th>Weight</th>
                <th>Quantity</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="tbody">
            <?php if($bulk_products){
            	foreach($bulk_products as $bulk_product){ ?>
			 <tr id="data-<?php echo $bulk_product->bulk_id;?>"> 
				  <td>
				  <?php $imageURL = !empty($bulk_product->image)?base_url('assets/uploads/products/'.$bulk_product->image):base_url('assets/uploads/logo/mainkiranlogo.png'); ?>
                  <a href="<?php echo $imageURL;?>" class="fancy imag"><img src="<?php echo $imageURL; ?>" width="50"/></a>
				 </td>			 	
				 <td><?php echo $bulk_product->stone_shape;?> </td>			 	
				 <td><?php echo $bulk_product->plating;?> </td>			 	
				 <td><?php echo $bulk_product->size.' '.$bulk_product->size_unit;?> </td>				 	
				 <td><?php echo $bulk_product->stone_color;?></td>			 		
				 <td><?php echo $bulk_product->weight;?> </td>			 		
				 <td><?php echo $bulk_product->qty;?> </td>
				 <td><a href="javascript:void(0);" class="btn btn-warning" onclick="deleteData('<?php echo $bulk_product->bulk_id;?>', 'bulk_products', 'bulk_id');" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
			 </tr>		
			<?php	}
				
			 }?>
              
            </tbody>
          
          </table>
        <!--  <form>
            <input type="text" class="form-control" placeholder="Remark" id="remark" name="">
          </form>-->
       
         
        <!-- Add To Cart Button-->
          <?php
          if($bulk_products){ 
           ?>
		  <div class="product_variant quantity">
            <a href="<?php echo base_url('products/bulkAddToCart/'.$product->id); ?>" id="addToCart" class="button" style="padding: 0 88px;"> Add to Cart</a> 
          </div>
		  	
		 <?php }
           elseif($product_other_details){ ?>
          <div class="product_variant quantity">
          <!--  <a href="<?php echo base_url('products/addToCart/'.$product->id.'/'.$product_other_details[0]->id); ?>" id="addToCart"> --><button class="button" type="submit" style="padding: 0 88px;">Add to Cart</button>
          </div>
          <?php } ?>
          <!-- Add To Cart Button-->
          
           </form> 
         
         
          <div class="alert alert-info alert-dismissable" role="alert" id="wishlist_div" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          </div>
         
          <div class="row">
            <div class="product_d_action">
              <ul>
                <li><a href="javascript:void(0);" class="addtowishlist" data-action="add" data-data="<?php echo $product->id;?>" title="Add to Wishlist"><i class="fa fa-heart-o whishstate" aria-hidden="true"></i> Add to Wish List</a></li>
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



<!-- product Bulk Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="<?php echo base_url().'products/blukAdd/'.$product->id;?>" method="post">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Product</h4>
        </div>
        <div class="modal-body"> 
          
          <h4><?php echo $product->pname; ?></h4> 
          <div class="product_variant quantity">             
           
            <table class="table table-bordered" id="data_table">
            <thead>
              <tr>
                <th></th>
                <th>Image</th>
                <th>Stone Shape</th>
                <th>Plating</th>
                <th>Size</th>
                <th>Color</th>
                <th>Weight</th>
                <th>Quantity</th>
               
              </tr>
            </thead>
            <tbody id="tbody">
             <?php
           if($modal_product_other_details){ 
           foreach($modal_product_other_details as $other_details){
           ?>   
			 <tr id="data-<?php echo $bulk_product->bulk_id;?>"> 
			 <td>   
             <input type="checkbox" name="select_product_details[]" value="<?php echo $other_details->id;?>"/>
         </td>
				 <td>
				  <?php $imageURL = !empty($other_details->image)?base_url('assets/uploads/products/'.$other_details->image):base_url('assets/uploads/logo/mainkiranlogo.png'); ?>
                  <a href="<?php echo $imageURL;?>" class="fancy imag"><img src="<?php echo $imageURL; ?>" width="50"/></a>
				 </td>			 	
				 <td><?php echo $other_details->stone_shape;?> </td>			 	
				 <td><?php echo $other_details->plating;?> </td>			 	
				 <td><?php echo $other_details->size.' '.$other_details->size_unit;?> </td>			 	
				 <td><?php echo $other_details->stone_color;?></td>			 		
				 <td><?php echo $other_details->weight;?> </td>			 		
				 <td><input min="1" max="100" value="1" name="quantity_<?php echo $other_details->id;?>" type="number"></td>
				
			 </tr>		
			<?php	}
				
			 }?>
              
            </tbody>
          
          </table>
            
              
<!--              
              <?php if($other_details->image){ ?>			 
            
               <a href="<?php echo base_url().'assets/uploads/products/'.$other_details->image;?>" class="fancy imag">
                      <img src="<?php echo base_url().'assets/uploads/products/thumb/'.$other_details->image;?>" alt="<?php echo $product->pname;?>"  id="fancyLaunch" class="img-circle"></a>
              <?php }?> 
              
              <?php if($other_details->stone_shape){ ?>			 
              <label> &nbsp;&nbsp; Stone Shape
              &nbsp;&nbsp;<?php echo $other_details->stone_shape;?></label> 
              <?php }?> 
              
              <?php if($other_details->plating){ ?>			 
              <label> &nbsp;&nbsp; Polish
               &nbsp;&nbsp;<?php echo $other_details->plating;?></label>
              <?php }?>
              
              <?php if($other_details->size){ ?>			 
              <label> &nbsp;&nbsp;Size</label> 
              <input type="text" disabled="disabled" name="size" value="<?php echo $other_details->size.' '.$other_details->size_unit;?>"/>                            
              <?php }?>
              <?php if($other_details->stone_color){ ?>
              <label>&nbsp;&nbsp;Color</label>            
              <input type="text" disabled="" name="stone_color" value="<?php echo $other_details->stone_color;?>"/> 
              <?php } ?>
              <?php if($other_details->weight){ ?>
              <label>&nbsp;&nbsp;Weight(gm)</label>              
              <input type="text" disabled="" name="weight" value="<?php echo $other_details->weight;?>"/> 
              <?php }?>
              
              <label>&nbsp;&nbsp;Quantity</label> 
              <input min="1" max="100" value="1" name="quantity_<?php echo $other_details->id;?>" type="number">-->
           
           
        
          </div> 
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-sm btn-primary waves-effect" value="submit">Add </button>
          <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- Modal End -->

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

<?php $basepath = base_url("assets/");?>
<link href="<?=$basepath?>alertify/themes/alertify.core.css" rel="stylesheet" type="text/css" />
<link href="<?=$basepath?>alertify/themes/alertify.default.css" rel="stylesheet" type="text/css" />
<script src="<?=$basepath?>alertify/js/alertify.min.js"></script>

<script>
    function deleteData(dataId, table_name, delete_for ){
	alertify.confirm("Are you sure you want to delete?", function (e) { 
    if (e) {     
		var ajaxurl = '<?php echo base_url();?>admin/Ajax/deleteData';
		$.ajax({
			url: ajaxurl,
			type: 'post',
			data: {dataId : dataId, table_name : table_name, delete_for : delete_for},
			success: function(response){			
				if (response == "1"){					
				   $('#data-'+dataId).remove();
				   $('#delete_success').show();
			       $('#delete_success').html('Product Removed Successfully').fadeIn('fast').delay(2000).fadeOut('slow');
			      }
			    }
 			});
 	}
	});	
}
</script>


<script>
	function getProductOtherdetailsBySize(size, product_id){
		if(product_id){
		var ajaxurl = '<?php echo base_url();?>products/getProductOtherdetailsBySize/';
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {size : size, product_id : product_id},
			success: function(response){			
				 $("#return_color_weight_modal").html(response);
				 $("#return_color_weight").html(response);
			    }
 			});
 		}	
	}
</script>

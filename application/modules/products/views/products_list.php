<?php  $current_user_id = $this->session->userdata('user_id');	?>
	   
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb_content">
          <ul>
            <li><a href="<?php echo site_url();?>">Home</a></li>
            <li>/</li>
            <li>Shop</li>
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
          <div class="sidebar_widget ">
            <div class="widget_list widget_categories">
              <h2>Categories</h2>
              <form action="<?php echo base_url().PRODUCT_URL;?>" method="post" name="filter_cat">
                <button type="submit" id="categories_filter" name="sidebar_search">Filter</button>
                <ul class="mt-3 menu-content" id="menu-content">
                  <?php if($all_main_category) {
                    foreach($all_main_category as $main_category) {
                      $cat_products_count = $this->Products->getCatProductsByCatId($main_category->id, '', '' );
                  ?>
                    <li class="">
                      <label class="collapsed" data-target="#submenu_<?php echo $main_category->id;?>" data-toggle="collapse" for="category_<?php echo $main_category->id;?>">
                        <input type="checkbox" id="category_<?php echo $main_category->id;?>" name="category[]" value="<?php echo $main_category->id;?>"
                        <?php if(isset($_REQUEST['category'])){ 
                          foreach ($_REQUEST['category'] as $sel_cat){
                            if($sel_cat == $main_category->id){
                              echo "checked";	
                            }		
                          }             	
                          }elseif(isset($_REQUEST['cat'])){                        
                            if($_REQUEST['cat'] == $main_category->id){
                              echo "checked";			
                            }         	
                        }?>
                        />
                        <p><?php echo ucfirst($main_category->name);?></p>
                        <?php 
                          $sub_categories_list =  getSubCategoryListByCatId($main_category->id);
                          if($sub_categories_list){
                        ?>
                          <i class="fa"></i>
                        <?php } ?>
                        <span><?php echo count($cat_products_count);?></span>
                      </label>
                      <?php 
                        $sub_categories_list =  getSubCategoryListByCatId($main_category->id);
                        if($sub_categories_list){
                      ?>
                        <ul id="submenu_<?php echo $main_category->id;?>" class="subcat-sidebar sub-menu collapse fade">
                        <?php
                          foreach($sub_categories_list as $sub_category_list){ 
                          $sub_cat_products_count = $this->Products->getProductsBySubCatId($sub_category_list->id);
                        ?>
                          <li class="ml-3">
                            <label for="subcategory_<?php echo $sub_category_list->id;?>">
                              <input type="checkbox" id="subcategory_<?php echo $sub_category_list->id;?>" name="sub_category[]" value="<?php echo $sub_category_list->id;?>" 
                              <?php if(isset($_REQUEST['sub_category'])){                        	
                                  foreach ($_REQUEST['sub_category'] as $sel_sub){
                                    if($sel_sub == $sub_category_list->id){
                                    echo "checked";	
                                    }								
                                  }         	
                                } elseif(isset($_REQUEST['sub_cat'])){                        
                                    if($_REQUEST['sub_cat'] == $sub_category_list->id){
                                      echo "checked";			
                                    }        	
                                }
                                ?> />
                              <p><?php echo ucfirst($sub_category_list->scname);?></p>
                              <span><?php echo count($sub_cat_products_count);?></span>
                            </label>
                          </li>
                        <?php } ?>
                        </ul>
                      <?php } ?>
                    </li>
                  <?php }} ?>  
                </ul>
              </form>
            </div>
            <!-- FILTER BY PRICE SLIDER -->
            <!--<div class="widget_list widget_filter">
              <h2>Filter by Weight</h2>
              <form action="#">
                <div id="slider-range"></div>
                <button type="button" id="weightFilter">Filter</button>
                <input type="text" name="text" id="weight" />   
              </form>
            </div>-->
          <!--  <div class="widget_list widget_filter">
              <h2>Filter by Plating</h2>
              <form action="#">
                <select class="form-control" name="plating" id="plating">
                  <option value="">All</option>
                  <?php foreach(STONE_PLATING as $stone_plating){ ?>
                  <option value="<?php echo $stone_plating;?>"><?php echo $stone_plating;?></option>
                  <?php }?>
                </select>
                <p></p>
                <button type="button" id="weightFilter">Filter</button>
              </form>
            </div>-->
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
              <!-- <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>
              <button data-role="grid_5" type="button"  class="btn-grid-5" data-toggle="tooltip" title="5"></button> -->
              <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
            </div>
            <div class="page_amount">
              <p>Showing <?php echo count($products);?> of <?php echo count($products);?> results</p>
            </div>
          </div>
          <!--shop toolbar end-->
          <!-- neha filter test -->
          <!-- END neha filter test -->							 	
          <div class="row shop_wrapper" id="filterProductList">
          </div>
          <div class="row shop_wrapper" id="defaultAllProductList">
            <?php if($products){                              	
              foreach($products as $product){
              ?>
            <div class="col-lg-4 col-md-4 col-12 ">
              <div class="single_product">
                <div class="product_thumb">
                  <a class="primary_img" href="<?php echo site_url().'products/'.$product->id;?>"><img src="<?php echo base_url().'assets/uploads/products/thumb/'.$product->product_image;?>" alt="<?php echo $product->pname;?>"></a>
                  <a class="secondary_img" href="<?php echo site_url().'products/'.$product->id;?>"><img src="<?php echo base_url().'assets/uploads/products/'.$product->product_image;?>" alt="<?php echo $product->pname;?>"></a>
                  <div class="product_action">
                    <div class="hover_action">
                      <a  href="#"><i class="fa fa-plus"></i></a>
                      <div class="action_button">
                        <ul>
                          <li><a title="add to cart"  data-toggle="modal" data-target="#addCartModal" ><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                          <li><a href="javascript:void(0);" class="addtowishlist" data-action="add" data-data="<?php echo $product->id;?>" title="Add to Wishlist"><i class="fa fa-heart-o whishstate" aria-hidden="true"></i></a>
           <!--               
                          <?php if($wishlistItemIds && isset($wishlistItemIds[$productId])): ?>
                           <a href="javascript:void(0);" title="" data-original-title="Remove From wishlist" class="update_wishlist added_to_wishlist" data-product_id="<?= $productId; ?>" data-action="remove" data-page_type="products-list"><i class="icon icon-Heart"></i></a>
                         <?php else: ?>
                          <a href="javascript:void(0);" title="" data-original-title="Add to wishlist" class="update_wishlist" data-product_id="<?= $productId; ?>" data-action="add" data-page_type="products-list"><i class="icon icon-Heart"></i></a>
                          <?php endif; ?>
                          -->
                          
                          
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product_content grid_content">
                  <h3><a href="<?php echo site_url().'products/'.$product->id;?>"><?php echo $product->pname;?></a></h3>
                </div>
                <div class="product_content list_content">
                  <h3><a href="<?php echo site_url().'products/'.$product->id;?>"><?php echo $product->pname;?></a></h3>
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
                    <p><?php echo $product->description;?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php		
                } }?>
          </div>
          <div class="shop_toolbar t_bottom">
            <?php if(!$current_user_id){ ?>
              <div>
                <a href="<?php echo base_url('login'); ?>"> <button class="button" style="padding: 0 88px;">view More Products</button></a> 
            </div>
            <?php }
              
              else { ?>
            <div><p>No Product Found</p></div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--shop  area end-->
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
<!-- end add to cart modal -->


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>/</li>
                            <li>wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <?php //pr($wishlistItemDetails);?>
    <!--wishlist area start -->
    <div class="wishlist_area">
                <div class="container">   
                    <form action="#"> 
                        <div class="row">
                            <div class="col-12">
                            
                             <div class="alert alert-info alert-dismissable" role="alert" id="wishlist_div" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          </div>
                            
                                <div class="table_desc wishlist">
                                    <div class="cart_page table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product_remove">Delete</th>
                                                    <th class="product_thumb">Image</th>
                                                    <th class="product_name">Product</th>
                                                    <th class="product_quantity">Stock Status</th>
                                                    <th class="product_total">Add To Cart</th>
                                                </tr>
                                            </thead>
                                            <tbody id="wishlistTableBody">
                                               <?php  
                                               if($wishlistItemDetails){
											   foreach($wishlistItemDetails as $product){ ?>
                                                <tr>
                                                   <td class="product_remove"><a href="javascript:void(0);" class="addtowishlist" data-action="remove" data-data="<?php echo $product->id;?>" title="Add to Wishlist"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                                    <td class="product_thumb"><a href="<?php echo base_url().'assets/uploads/products/'.$product->product_image;?>" class="fancy imag">
                      <img src="<?php echo base_url().'assets/uploads/products/thumb/'.$product->product_image;?>" alt="<?php echo $product->pname;?>"  id="fancyLaunch" class="img-circle"></a></td>
                                                    <td class="product_name"><a href="<?php echo site_url().'products/'.$product->id;?>"><?php echo $product->pname;?></a></td>
                                                    <td class="product_quantity">In Stock</td>
                                                    <td class="product_total"><a href="javascript:void(0);" >Add To Cart</a></td>
                                                </tr>
                                                <?php }
												}
												else{ ?>
												<tr><td>Empty Wishlist</td></tr>
                                               <?php }?>

                                            </tbody>
                                        </table>   
                                    </div>  

                                </div>
                             </div>
                         </div>

                    </form> 
                    <div class="row">
                        <div class="col-12">
                             <div class="wishlist_share">
                                <h4>Share on:</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                </ul>      
                            </div>
                        </div> 
                    </div>
                    
                </div>
            </div>

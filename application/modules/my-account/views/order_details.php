    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo base_url();?>">home</a></li>
                            <li>/</li>
                            <li>Order Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
   
    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">   
            <div class="account_dashboard">
                <div class="row">                   
                    <div class="col-sm-12 col-md-9 col-lg-9">
                    
                       <h3><a href="<?php echo site_url().'products/'.$order_details->product_id;?>"><?php echo 'Product Name: '. $order_details->pname. '<br>';?></a></h3>
                       <?php
                       $imageURL = !empty($order_details->image)?base_url('assets/uploads/products/'.$order_details->image):base_url('assets/uploads/products/'.$order_details->product_image);?>
                      <?php echo 'Product Image: ';?> 
                      <a href="<?php echo site_url().'products/'.$order_details->product_id;?>"><img src="<?php echo $imageURL;?>" alt="<?php echo $order_details->product_image;?>" width="75" id="fancyLaunch"></a> <br>
                      
                       <?php echo 'Quantity: '. $order_details->quantity. '<br>';?>
                       <?php echo 'Product Code: '. $order_details->pcode. '<br>';?>
                       <?php echo 'Product Size: '. $order_details->size.' '.$order_details->size_unit.'<br>';?>
                       <?php echo 'Product Weight: '. $order_details->weight. '<br>';?>
                       <?php echo 'Stone Color: '. $order_details->stone_color. '<br>';?>
                       <?php echo 'Billing Name: '. $order_details->billing_name. '<br>';?>
                       <?php echo 'Billing Phone: '. $order_details->billing_phone. '<br>';?>
                       <?php echo 'Billing State: '. $order_details->billing_state. '<br>';?>
                       <?php echo 'Billing city: '. $order_details->billing_city. '<br>';?>
                       <?php echo 'Billing Address: '. $order_details->billing_address. '<br>';?>
                       <?php echo 'Billing Pincode: '. $order_details->billing_pincode. '<br>';?>
                       <?php echo 'Shipping Name: '. $order_details->shipping_name. '<br>';?>
                       <?php echo 'Shipping Phone: '. $order_details->shipping_phone. '<br>';?>
                       <?php echo 'Shipping State: '. $order_details->shipping_state. '<br>';?>
                       <?php echo 'Shipping City: '. $order_details->shipping_city. '<br>';?>
                       <?php echo 'Shipping Address: '. $order_details->shipping_address. '<br>';?>
                       <?php echo 'Shipping Pincode: '. $order_details->shipping_pincode. '<br>';?>
                     
                      
                    </div>
                </div>
            </div>  
        </div> <hr>
       	
    </section>	

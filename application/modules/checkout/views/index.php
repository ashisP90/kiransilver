<?php 
  $basepath = base_url("assets/frontend/");
?>
<link rel="stylesheet" href="<?=$basepath?>css/cart.css" />
<!--breadcrumbs area start-->
<div class="breadcrumbs_area other_bread">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb_content">
          <ul>
            <li><a href="<?php echo base_url();?>">home</a></li>
            <li>/</li>
            <li><a href="<?php echo base_url().'cart';?>">cart</a></li>
            <li>/</li>
            <li>checkout</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs area end-->
<div class="product_details">
  <div class="container">
    <h3>CHECKOUT</h3>
    <div class="checkout">
      <div class="row">
        <?php if(!empty($error_msg)){ ?>
        <div class="col-md-12">
          <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
        <?php } ?>
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your Cart</span>
            <span class="badge badge-secondary badge-pill"><?php echo $this->cart->total_items(); ?></span>
          </h4>
          <ul class="list-group mb-3">
            <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <?php $imageURL = !empty($item["image"])?base_url('assets/uploads/products/'.$item["image"]):base_url('assets/uploads/logo/mainkiranlogo.png'); ?>
                <img src="<?php echo $imageURL; ?>" width="75"/>
                <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                <small class="text-muted"><?php echo 'Size: '. $item["size"].' '.$item["size_unit"].'<br>'; //AMOUNT_SIGN.$item["price"]; ?></small> 
                
                <small class="text-muted"><?php echo 'Stone Color: '. $item["stone_color"].'<br>'; ?> </small> 
                
                <small class="text-muted"><?php echo 'Weight: '. $item["weight"].'<br>'; ?> </small>
              </div>
              <span class="text-muted"><?php echo 'Quantity: '.$item["qty"]; //AMOUNT_SIGN.$item["subtotal"]; ?></span>
            </li>
            <?php } 
              }
              else{ ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <p>No items in your cart...</p>
            </li>
            <?php } ?>
          <!--  <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong><?php echo AMOUNT_SIGN.$this->cart->total(); ?></strong>
            </li>-->
          </ul>
          <a href="<?php echo base_url('shop/'); ?>" class="btn btn-block btn-info">Add Items</a>
        </div>
        <form method="post" action="" name="checkout_form" id="checkout_form">
         
          <div class="row">
            
            <!-- Billing Details -->
          
            <div class="col-md-6 order-md-1">
              <?php if(validation_errors()){ ?>
		       <div class="alert alert-danger alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error! </strong>
               <?php echo validation_errors();?>     
               </div>
              <?php }?>
              
              <h4 class="mb-3">Billing Details</h4>
              <div class="mb-3">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="billing_name" value="<?php echo $user_details->billing_name; ?>" placeholder="Enter Full Name" id="billing_name">
                <?php echo form_error('billing_name','<p class="help-block error">','</p>'); ?>
              </div>  
           
              <div class="mb-3">
                <label for="phone">Mobile</label>
                <input type="text" class="form-control" name="billing_phone" id="billing_phone" value="<?php echo $user_details->billing_phone; ?>" placeholder="Enter Mobile" >
                <?php echo form_error('billing_phone','<p class="help-block error">','</p>'); ?>
              </div>
              <div class="mb-3">
                <label for="phone">State</label>
                <input type="text" class="form-control" name="billing_state" value="<?php echo $user_details->billing_state; ?>" placeholder="Enter State" >
                <?php echo form_error('billing_state','<p class="help-block error">','</p>'); ?>
              </div>
              <div class="mb-3">
                <label for="phone">City</label>
                <input type="text" class="form-control" name="billing_city" value="<?php echo $user_details->billing_city; ?>" placeholder="Enter City" >
                <?php echo form_error('billing_city','<p class="help-block error">','</p>'); ?>
              </div>
              <div class="mb-3">
                <label for="phone">Pincode</label>
                <input type="text" class="form-control" name="billing_pincode"  id="billing_pincode" value="<?php echo $user_details->billing_pincode; ?>" placeholder="Enter Pincode" >
                <?php echo form_error('billing_pincode','<p class="help-block error">','</p>'); ?>
              </div>
              <div class="mb-3">
                <label for="address">Address</label>
                <textarea class="form-control" name="billing_address"  id="billing_address" placeholder="Enter address" ><?php echo strip_tags($user_details->billing_address); ?></textarea>
                <?php echo form_error('billing_address','<p class="help-block error">','</p>'); ?>
              </div>
           
            </div>
            
            <!-- Shipping Details -->
            
            <div class="col-md-6 order-md-1">
             
              <h4 class="mb-3">Shipping Details</h4>
              <div class="mb-3">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="shipping_name" value="<?php echo $user_details->shipping_name; ?>" placeholder="Enter First Name" id="shipping_name">
                <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
              </div>  
            
              <div class="mb-3">
                <label for="shipping_phone">Mobile</label>
                <input type="text" class="form-control" name="shipping_phone" id="shipping_phone" value="<?php echo $user_details->shipping_phone; ?>" placeholder="Enter Mobile" >
                <?php echo form_error('shipping_phone','<p class="help-block error">','</p>'); ?>
              </div>
             
              <div class="mb-3">
                <label for="shipping_state">State</label>
                <input type="text" class="form-control" name="shipping_state" value="<?php echo $user_details->shipping_state; ?>" placeholder="Enter State" >
                <?php echo form_error('shipping_state','<p class="help-block error">','</p>'); ?>
              </div>
              <div class="mb-3">
                <label for="shipping_city">City</label>
                <input type="text" class="form-control" name="shipping_city" value="<?php echo $user_details->shipping_city; ?>" placeholder="Enter City" id="shipping_city" >
                <?php echo form_error('shipping_city','<p class="help-block error">','</p>'); ?>
              </div>
              <div class="mb-3">
                <label for="shipping_pincode">Pincode</label>
                <input type="text" class="form-control" name="shipping_pincode" id="shipping_pincode" value="<?php echo $user_details->shipping_pincode; ?>" placeholder="Enter Pincode" >
                <?php echo form_error('shipping_pincode','<p class="help-block error">','</p>'); ?>
              </div>
              <div class="mb-3">
                <label for="shipping_address">Address</label>
                <textarea class="form-control" name="shipping_address" id="shipping_address" placeholder="Enter address" ><?php echo  strip_tags($user_details->shipping_address); ?></textarea>
                <?php echo form_error('shipping_address','<p class="help-block error">','</p>'); ?>
              </div>
             
            </div>
           
           </div>
           
          <div class="row">
             <div class="col-md-12">         
          	  <h4 class="mb-3">Payment Details</h4>
              <label><input type="radio" name="payment_method" id="payment_method" checked="checked" value="COD"/> COD</label> 
              <input class="btn btn-success btn-lg btn-block" type="submit" name="placeOrder" value="Place Order">        
             </div>
          </div>
          
         
        </form>
      </div>
    </div>
  </div>
</div>

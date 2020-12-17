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
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

    <div class="shopping_cart_area">
        <div class="container-fluid">  
            <form action="#"> 
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 ">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product_name">Size</th>
                                            <th class="product_name">Color</th>
                                            <th class="product_weight">Weight</th> 
                                            <th class="product_quantity">Quantity</th>
                                           
                                          <!--  <th class="product_weight">Total</th>-->
                                        </tr>
                                    </thead>
                                    <tbody id="cartTableBody">

    <?php 
     $total_qty = 0;
     $total_weight = 0;  
    if($this->cart->total_items() > 0){ 
    foreach($cartItems as $item){ ?>
    <tr>
        <td class=""><button class="btn btn-sm" onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('cart/removeItem/'.$item["rowid"]); ?>':false;"><i class="fa fa-trash-o"></i></button> </td>
        <td>
            <?php $imageURL = !empty($item["image"])?base_url('assets/uploads/products/'.$item["image"]):base_url('assets/uploads/logo/mainkiranlogo.png'); ?>
           <a href="<?php echo site_url().'products/'.$item['main_pro_id'];?>"><img src="<?php echo $imageURL; ?>" width="50"/></a>
        </td>
        <td><?php echo $item["name"]; ?></td>
        <td><?php //echo AMOUNT_SIGN.$item["price"]; 
         echo $item["size"].' '.$item["size_unit"];?></td>
        <td><?php echo $item["stone_color"]; ?></td>
        <td><?php
         if($item["weight"]){
         	$weight = $item["qty"]*$item["weight"]; 
            echo $item["weight"].'('. $item["qty"].'*'.$item["weight"]. ')'; } 
            else { echo $weight =0; }?></td>
         
        <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>     
      
       <!-- <td class="text-right"><?php echo AMOUNT_SIGN.$item["subtotal"]; ?></td>-->
       
    </tr>
    <?php 
    $total_qty += $item["qty"];
    $total_weight +=  $weight;
    } 
    }
    else{ ?>
    <tr><td colspan="6"><p>Your cart is empty.....</p></td></tr>
    <?php } ?>
 
   <!-- <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><strong>Cart Total</strong></td>
        <td class="text-right"><strong><?php echo AMOUNT_SIGN.$this->cart->total().' USD'; ?></strong></td>
        
    </tr>-->
   
       <tr>
       <td>
		<a href="<?php echo base_url().'shop';?>" class="btn btn-block btn-light">Continue Shopping</a>
	   </td>
        </tr>
   
     </tbody>
    </table>  

                     <?php if($this->cart->total_items() > 0){ ?>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>                                           
                                            <th></th>                                           
                                            <th>Total Quantity</th>
                                            <th>Total Weight</th>
                                            <th> </th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td style="border:none;"></td>
                                            <td style="border:none;"></td>
                                            <td style="border:none;"></td>
                                            <td style="border:none;" id="totalQuantity"><?php echo $total_qty;?></td>
                                            <td style="border:none;" id="totalWeight"><?php echo $total_weight;?></td>
                                           <!-- <td style="border:none;" id="totalWeight"><?php echo AMOUNT_SIGN.$this->cart->total(); ?></td>-->
                                           
                                       <td>
                                       <div class="checkout_btn"  data-toggle="modal" data-target="#bookOrderModal">
                                       <a href="<?php echo base_url().'checkout';?>"> BOOK ORDER</a>
                                       <p class="small">" Until your product is delivered, the product is insured "</p>
                                       </div>
                                          </td>    
                                        </tr>
                                       
                                    </tbody>
                                </table>   

                      
                            </div>  
                            
                        </div>
                    </div>
                </div>
               
                <!--coupon code area start-->
              <!--  <div class="coupon_area">
                    <div class="row justify-content-center">
<!--                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">   
                                    <p>Enter your coupon code if you have one.</p>                                
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>    
                            </div>
                        </div> 
                        <div class="col-lg-8 col-md-8 ">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount"><?php echo AMOUNT_SIGN.$this->cart->total(); ?></p>
                                   </div>
                                <!--   <div class="cart_subtotal ">
                                       <p>Hand Courier charges</p>
                                       <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                   </div>
                                   <a href="#">Calculate shipping</a> 

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount"><?php echo AMOUNT_SIGN.$this->cart->total(); ?></p>
                                   </div>
                                   <div class="checkout_btn"  data-toggle="modal" data-target="#bookOrderModal">
                                       <a href="<?php echo base_url().'checkout';?>"> BOOK ORDER</a>
                                       <p class="mb-0 mt-1">" Until your product is delivered, the product is insured "</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--coupon code area end-->
                <?php } ?>
              
                
            </form> 
        </div>     
    </div>
    <!--shopping cart area end -->



<script>
// Update item quantity
function updateCartItem(obj, rowid){
    $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
        if(resp == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
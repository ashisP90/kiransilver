<?php 
  $basepath = base_url("assets/frontend/");
?>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area other_bread">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb_content">
          <ul>
            <li><a href="<?php echo base_url();?>">home</a></li>
            <li>/</li>
            <li><a href="<?php echo base_url().'shop';?>">shop</a></li>
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
    <h3>ORDER STATUS</h3>

    <?php if(!empty($order)){ ?>
    <div class="col-md-12">
        <div class="alert alert-success">Your order has been placed successfully.</div>
    </div>
	
    <!-- Order status & shipping info -->
    <div class="row col-lg-12 ord-addr-info">
        <div class="hdr">Order Info </div>
        <p><b>Reference ID:</b> #<?php echo $order['id']; ?></p><br>
      <!--  <p><b>Total:</b> <?php echo AMOUNT_SIGN.$order['grand_total']; ?></p>-->
        <p><b>Placed On:</b> <?php echo $order['created']; ?></p><br>
        <p><b>Buyer Name:</b> <?php echo $order['first_name'].' '.$order['last_name']; ?></p><br>
        <p><b>Email:</b> <?php echo $order['email']; ?></p><br>
        <p><b>Mobile:</b> <?php echo $order['mobile']; ?></p><br>
        <p><b>Payment Method:</b> <?php echo $order['payment_method']; ?></p>
      
    </div>
	
    <!-- Order items -->
    <div class="row col-lg-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Weight</th>
                  <!--  <th>Price</th>-->
                    <th>QTY</th>
                  <!--  <th>Sub Total</th>-->
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($order['items'])){  
                    foreach($order['items'] as $item){ 
                ?>
                <tr>
                    <td>
                        <?php                       
                         $imageURL = !empty($item["image"])?base_url('assets/uploads/products/'.$item["image"]):base_url('assets/uploads/products/'.$item["product_image"]);
                          ?>
                        <img src="<?php echo $imageURL; ?>" width="75"/>
                    </td>
                    <td><?php echo $item["pname"]; ?></td>
                    <td><?php echo $item["size"].' '.$item["size_unit"]; ?></td>
                    <td><?php echo $item["stone_color"]; ?></td>
                    <td><?php echo $item["weight"]; ?></td>
                 <!--   <td><?php echo AMOUNT_SIGN.$item["amount"]; ?></td>-->
                    <td><?php echo $item["quantity"]; ?></td>
                  <!--  <td><?php echo AMOUNT_SIGN.$item["sub_total"]; ?></td>-->
                </tr>
                <?php } 
                } ?>
            </tbody>
        </table>
    </div>
<?php } 

	else{ ?>
	<div class="col-md-12">
	    <div class="alert alert-danger">Your order submission failed.</div>
	</div>
	<?php } ?>
	
	  </div>
</div>
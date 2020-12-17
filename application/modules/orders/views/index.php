<?php 
  if(!defined('BASEPATH')) EXIT("No direct script access allowed");
  ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Orders Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Orders List</li>
    </ol>
  </section>
  
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h4 class="title abourt">Orders List</h4>
          </div> 
      
          <div class="alert alert-info alert-dismissable" role="alert" id="status_success" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          </div>
             
							      
         <div class="box-body"> 
           <div class="svt">          
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="data_table">
                <thead>
                                          <tr>
											<th width="5%">Sl.no</th>
											<th width="20%">Buyer Info</th>									
											<th width="23%">Billing Address</th> 	 	 	
											<th width="22%">Shipping Address</th> 	 	 	
											<th width="5%">Status</th> 
											<th width="15%">Order Placed On</th> 
											<th width="10%">View Details</th> 	 	 	
                                          </tr>
                                        </thead>
                                        <tbody>
										<?php 
										if(!empty($orders)){
									      foreach($orders as $order){ 
										?>
										<tr>
											<td>#<?php echo $order->id; ?></td>
											<td><?php echo '<strong>Buyer Name: </strong>'.$order->first_name.' '.$order->last_name. '<br>'; ?>
											<?php echo '<strong>Email: </strong>'.$order->email. '<br>'; ?>
											<?php echo '<strong>Mobile: </strong>'.$order->mobile. '<br>'; ?></td>
											<td><?php echo '<strong>Billing Name: </strong>'. $order->billing_name. '<br>';?>
											<?php echo '<strong>Billing Phone: </strong>'. $order->billing_phone. '<br>';?>
											<?php echo '<strong>Billing State: </strong>'. $order->billing_state. '<br>';?>
											<?php echo '<strong>Billing city: </strong>'. $order->billing_city. '<br>';?>
											<?php echo '<strong>Billing Address: </strong>'. $order->billing_address. '<br>';?>
											<?php echo '<strong>Billing Pincode: </strong>'. $order->billing_pincode. '<br>';?>
											</td>
											<td>
											<?php echo '<strong>Shipping Name: </strong>'. $order->shipping_name. '<br>';?>
											<?php echo '<strong>Shipping Phone: </strong>'. $order->shipping_phone. '<br>';?>
											<?php echo '<strong>Shipping State: </strong>'. $order->shipping_state. '<br>';?>
											<?php echo '<strong>Shipping City: </strong>'. $order->shipping_city. '<br>';?>
											<?php echo '<strong>Shipping Address: </strong>'. $order->shipping_address. '<br>';?>
											<?php echo '<strong>Shipping Pincode: </strong>'. $order->shipping_pincode. '<br>';?>
											</td>
											<td>
											
											<select name="order_status" id="order_status" onchange=" order_status('<?php echo $order->id;?>',this.value);">
												<option value="Approved" <?php echo ($order->status == "Approved" ? "selected" : "");?>>Approved</option>
												<option value="Rejected" <?php echo ($order->status == "Rejected" ? "selected" : "");?>>Rejected</option>
												<option value="Processing" <?php echo ($order->status == "Processing" ? "selected" : "");?>>Processing</option>
												<option value="Shipped" <?php echo ($order->status == "Shipped" ? "selected" : "");?>>Shipped</option>
											</select>
											</td>
											
											<td><?php echo $order->created; ?></td>
										
											<td><a href="<?php echo base_url('orders/orderDetails/'.$order->id);?>" class="btn btn-success edit-btn" title="View"><i class="fa fa-eye"></i></a></td>
										</tr>
										<?php 
										 
										    }
										 } 
										 else{
										 	
										 	
										 }
										?>
                                        </tbody>
                                    </table>
           </div>
                               
                            
                   </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
     </div>
    </div>
    </div>
    <!-- /.row -->
  </section>
</div>

<script>
   function order_status(order_id, status){
 	var ajaxurl = '<?php echo base_url();?>orders/orderStatus';
 	
    jQuery.ajax({ 
            url: ajaxurl,
			type: 'post',
			data: {order_id : order_id, status : status },
			success: function(response){
			if (response == "1"){
				jQuery('#status_success').show();
				jQuery('#status_success').html('Order status updated successfully').fadeIn('fast').delay(2000).fadeOut('slow');
				}
              }
            });
   }
</script>
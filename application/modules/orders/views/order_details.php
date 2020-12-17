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
      <li><a href="<?php echo base_url('orders');?>"><i class="fa fa-dashboard"></i> Orders List</a></li>
      <li class="active">Order Deatils</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h4 class="title abourt">Orders Details</h4>
          </div>
          <div class="box-body">
            <div class="svt">
              <!-- my account start  -->
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th width="5%">Sl.no</th>
                      <th width="17%">Buyer Info</th>
                      <th width="28%">Billing Address</th>
                      <th width="28%">Shipping Address</th>
                      <th width="5%">Status</th>
                      <th width="15">Order Placed On</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if(!empty($order)){
                      ?>
                    <tr>
                      <td>#<?php echo $order->id; ?></td>
                      <td><?php echo '<strong>Buyer Name: </strong>'.$order->first_name.' '.$order->last_name. '<br>'; ?>
                        <?php echo '<strong>Email: </strong>'.$order->email. '<br>'; ?>
                        <?php echo '<strong>Mobile: </strong>'.$order->mobile. '<br>'; ?>
                      </td>
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
                      <td><?php echo '<strong>'.$order->status.'</strong>'; ?></td>
                      <td><?php echo $order->created; ?></td>                     
                    </tr>
                    <?php   } ?>
                  </tbody>
                </table>
              </div>
               <h4 class="title abourt">Product Details</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th width="20%">Image</th>
                      <th width="20%">Product Name</th>
                      <th width="20%">Size</th>
                      <th width="20%">Color</th>
                      <th width="20%">Weight</th>
                      <th width="5%">QTY</th>                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      if($order_details){
                      foreach($order_details as $item){ 
                      ?>
                    <tr>
                      <?php                       
                        $imageURL = !empty($item["image"])?base_url('assets/uploads/products/'.$item["image"]):base_url('assets/uploads/products/'.$item["product_image"]);?>
                      <td><a href="<?php echo $imageURL;?>" class="fancy imag" >
                        <img src="<?php echo $imageURL;?>" alt="<?php echo $item["pname"];?>" width="75" id="fancyLaunch"></a>
                      </td>
                      <td><a href="<?php echo site_url().'products/'.$item["product_id"];?>" target="_blank"><?php echo $item["pname"];?></a></td>
                      <td><?php echo  $item["size"].' '.$item["size_unit"];?></td>
                      <td><?php echo  $item["stone_color"];?></td>
                      <td><?php echo  $item["weight"];?></td>                      
                      <td><?php echo $item["quantity"];?></td>
                    </tr>
                    <?php 
                      
                       }
                      } 
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>
    <!-- /.row -->
  </section>
</div>

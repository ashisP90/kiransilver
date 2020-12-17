    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo base_url();?>">home</a></li>
                            <li>/</li>
                            <li>my account</li>
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
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
<!--                                <li><a href="#downloads" data-toggle="tab" class="nav-link">Downloads</a></li>-->
                                <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>
                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
                                <li><a href="<?php echo base_url().'logout';?>" class="nav-link">logout</a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                     <?php
						if($this->session->flashdata('succ')){
						$message = $this->session->flashdata('succ');
						?>      
						<div class="alert alert-success alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong><?php print_r($message);?>
						</div>
						<?php
						}
						if($this->session->flashdata('Err')){
						?>
						<div class="alert alert-danger alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error! </strong>
						<?php
						$message = $this->session->flashdata('Err');
						foreach($message as $messageVal){
						echo ($messageVal);
						}
						?>
						</div>
						<?php
						}
					   ?>
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                       
                        
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#orders" data-toggle="tab">recent orders</a>, manage your <a href="#address" data-toggle="tab">shipping and billing addresses</a> and <a href="#account-details" data-toggle="tab">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <?php 
								if(!empty($orders)){
									foreach($orders as $order)  { ?>
							     
								<div class="row col-lg-12 ord-addr-info">
								
								<p><b>Reference ID:</b> #<?php echo $order['id']; ?></p>
								<p><b>Total:</b> <?php echo AMOUNT_SIGN.$order['grand_total']; ?></p>
								<p><b>Placed On:</b> <?php echo $order['created']; ?></p>
								<p><b>Buyer Name:</b> <?php echo $order['first_name'].' '.$order['last_name']; ?></p>
								<p><b>Email:</b> <?php echo $order['email']; ?></p>
								<p><b>Mobile:</b> <?php echo $order['mobile']; ?></p>
								<p><b>Payment Method:</b> <?php echo $order['payment_method']; ?></p>

								</div>
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                          <tr>
											<th width="20%">Image</th>
											<th width="20%">Product Name</th>
											<th width="20%">Size/ Color/ Weight</th>
											<th width="5%">QTY</th>
											<th width="10%">Price</th>
											<th width="10%">Sub Total</th> 	 	 	
											<th width="10%">View Deatils</th> 	 	 	
                                          </tr>
                                        </thead>
                                        <tbody>
										<?php 
										$i=0;
									    $order['items'] = $this->Login->getUsersOrdersDetails($order['id']);
										if($order['items']){
										foreach($order['items'] as $item){ 
										?>
										<tr>
										   <?php                       
											$imageURL = !empty($item[$i]["image"])?base_url('assets/uploads/products/'.$item[$i]["image"]):base_url('assets/uploads/products/'.$item[$i]["product_image"]);
											?>
											<td><a href="<?php echo $imageURL;?>" class="fancy imag" >
                      <img src="<?php echo $imageURL;?>" alt="<?php echo $item[$i]["pname"];?>" width="75" id="fancyLaunch"></a></td>
											<td><a href="<?php echo site_url().'products/'.$item[$i]["product_id"];?>"><?php echo $item[$i]["pname"]; ?></a></td>
											<td><?php echo "Size: ". $item[$i]["size"]. '<br>'.
											 "Color: ".$item[$i]["stone_color"]. '<br>'.
											 "Weight: ".$item[$i]["weight"];?></td>
											<td><?php echo $item[$i]["quantity"]; ?></td>
											<td><?php echo AMOUNT_SIGN.$item[$i]["amount"]; ?></td>
											<td><?php echo AMOUNT_SIGN.$item[$i]["sub_total"]; ?></td>
										</tr>
										<?php 
										  $i++;
										  	
										   }
										 } 
										?>
                                        </tbody>
                                    </table>
                                    </div>
                                
                                
                                <?php    } ?>
                               	<?php } ?>		 
                            </div>
                          
                            <div class="tab-pane" id="address">
                               <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="#" class="view">Edit</a>
                                <p><strong>Bobby Jackson</strong></p>
                                <address>
                                    House #15<br>
                                    Road #1<br>
                                    Block #C <br>
                                    Banasree <br>
                                    Dhaka <br>
                                    1212
                                </address>
                                <p>Bangladesh</p>   
                            </div>
                          
                          
                          
                       
                               <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
									
								   <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                         <form action="<?php echo base_url().'login/profileEdit/'.$profile->id;?>" method="POST" name="profile_edit_form" id="profile_edit_form" enctype="multipart/form-data">     
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1" name="gender" <?php echo ($profile->gender == 1 || $profile->gender == 0 ? "checked" : "");?>> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="2" name="gender" <?php echo ($profile->gender == 2 ? "checked" : "");?>> Mrs.</span>
                                                </div> <br>
                                               	<input type="hidden" id="id" name="id" value="<?php echo $profile->id;?>">   
                 
                                                <label>First Name</label>
                                                <input type="text" name="first_name" id="first_name" value="<?php echo $profile->first_name;?>">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" id="last_name" value="<?php echo $profile->last_name;?>">     
                                                <label>User Name</label>
                                                <input type="text" name="username" id="username" value="<?php echo $profile->username;?>" disabled="" >
                                                <label>Email</label>
                                                <input type="email" name="email" value="<?php echo $profile->email;?>" id="email">
                                                <label>Password</label>
                                                <input type="password" name="edit_password" id="edit_password">
                                                <label>Mobile</label>
                                                <input type="text" name="mobile" id="mobile" value="<?php echo $profile->mobile;?>">
                                                <label>Birthdate</label>
                                                <input type="text" placeholder="MM/DD/YYYY" id="datepicker" class="datepicker" name="dob" value="<?php echo date("m/d/Y", strtotime( $profile->dob));?>">
                                                <span class="example">
                                                  (E.g.: 05/31/1970)
                                                </span>
                                                <br>
                                              <!--  <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="optin">
                                                    <label>Receive offers from our partners</label>
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="newsletter">
                                                    <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                </span>-->
                                                <div class="save_button primary_btn default_button">
                                                    <button type="submit" class="btn btn-warning">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div> <hr>
       	
    </section>	

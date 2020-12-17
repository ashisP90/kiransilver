<?php 
  if(!defined('BASEPATH')) EXIT("No direct script access allowed");
  ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      User Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit Product</li>
    </ol>
  </section>


<section id="main-content">
  <div class="col-md-12">
   
    <?php if($this->session->flashdata('validation_errors')){?>
    <div class="alert alert-info"><small class="text-danger"><?php echo $this->session->flashdata('validation_errors'); ?></small></div>
    <?php }?>
    <?php if($this->session->flashdata('msg_success')){?>
    <div class="alert alert-success"><small class="text-danger"><?php echo $this->session->flashdata('msg_success');?></small></div>
    <?php }?>
  </div>
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <form method="post" name="user_form" id="user_form" action="<?php echo base_url('users/editUser/'.$user_details->u_id);?>">
	<?php echo validation_errors(); ?>	
			<div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">Personal Information</div>
                    <div class="panel-body">
                     
                      <div class="col-md-3">                      
                        <!--<div class="mr-subsitel">
                            <select name="gender" class="" id="gender">
                                <option value="Mr." <?php if (isset($user_details->gender)) { if($user_details->gender == "1") { echo "selected='selected'"; } }?>>Mr.</option>
                                <option value="Mrs." <?php if (isset($user_details->gender)) { if($user_details->gender == "2") { echo "selected='selected'"; } }?>>Mrs.</option>
                                <option value="Ms." <?php if (isset($user_details->gender)) { if($user_details->gender == "3") { echo "selected='selected'"; } }?>>Ms.</option>
                            </select>                          
                        </div>-->
                        <label for="first_name">First Name <span style="color:#c80000">*</span></label>
                        <input type="text" class="form-control salutation" name="first_name" placeholder="First Name" value="<?php echo $user_details->first_name;?>">
                        <?php echo form_error('first_name','<small class="text-danger">','</small>'); ?>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="state_name">Last Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" value="<?php if($current_user_id > 0) echo $user_details->last_name;?>" maxlength="50">
                           <?php echo form_error('last_name','<small class="text-danger">','</small>'); ?>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="state_name">Username<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="username"  name="username" value="<?php if($current_user_id > 0) echo $user_details->username;?>" maxlength="100" disabled>
                        </div>
                      </div> 
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="state_name">Email Id <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="email" placeholder="Email Id" name="email" value="<?php if($current_user_id > 0) echo $user_details->email;?>" maxlength="100" disabled>
                        </div>
                      </div>
                 
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="state_name">Mobile <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile" value="<?php if($current_user_id > 0) echo $user_details->mobile;?>">
                          <?php echo form_error('mobile'); ?>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Gender <span class="text-danger">*</span></label>
                          <select name="gender" id="gender" class="form-control">
                            <option value="1" <?php if($user_details->gender == "1"){?> selected <?php }?>>Male</option>
                            <option value="2" <?php if($user_details->gender == "2"){?> selected <?php }?>>Female</option>
                          </select>
                        </div>
                      </div>
                                   
                      
                      <div class="col-md-3">
                        <div class="form-group">
                        <label for="sel1">Status:</label>
                         <select class="sub_cat form-control" name="status" id="status">
                          <option value="Active" <?php echo ( $user_details->status == "Active" ? "selected" : "");?>>Active</option>
                          <option value="Inactive" <?php echo ( $user_details->status == "Inactive" ? "selected" : "");?>>Inactive</option>
                         </select>
                       </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
               
              </div>
           
            </div>
            
            
           <!-- Billing Information-->
            
           	<div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">Billing Information</div>
                    <div class="panel-body">
                     
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Billing Name</label>
                          <input type="text" class="form-control" name="billing_name" id="billing_name" placeholder="Billing name" value="<?php echo $user_details->billing_name;?>" maxlength="10" >
                          <span id="billing_name"></span>
                          <?php echo form_error('billing_name','<small class="text-danger">','</small>'); ?>
                        </div>
                      </div> 
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Billing Postal/Zipcode</label>
                          <input type="text" class="form-control" name="billing_pincode" id="billing_pincode" placeholder="Billing Postal/Zipcode" value="<?php echo $user_details->billing_pincode;?>" maxlength="10" >
                          <span id="billing_pincode"></span>
                          <?php echo form_error('billing_pincode','<small class="text-danger">','</small>'); ?>
                        </div>
                      </div>
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Billing State</label>
                          <input type="text" class="form-control" name="billing_state" id="billing_state" placeholder="Billing State" value="<?php echo $user_details->billing_state;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Billing City</label>
                          <input type="text" class="form-control" name="billing_city" id="billing_city" placeholder="Billing City" value="<?php echo $user_details->billing_city;?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="inputAddress">Billing Address </label>
                        <textarea class="form-control" id="billing_address" placeholder="Billing Address" name="billing_address"><?php echo $user_details->billing_address;?></textarea>
                        <?php echo form_error('billing_address','<small class="text-danger">','</small>'); ?>
                      </div>
                   
                    </div>
                  </div>
                </div>
               
              </div>
           
            </div>
           
        <!--  Shipping Information  -->
              
           	<div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">Shipping Information</div>
                    <div class="panel-body">
                     
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Shipping Name</label>
                          <input type="text" class="form-control" name="shipping_name" id="shipping_name" placeholder="Shipping Postal/Zipcode" value="<?php echo $user_details->shipping_name;?>" maxlength="10" >
                          <span id="shipping_name"></span>
                          <?php echo form_error('shipping_name','<small class="text-danger">','</small>'); ?>
                        </div>
                      </div>  
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Shipping Postal/Zipcode</label>
                          <input type="text" class="form-control" name="shipping_pincode" id="shipping_pincode" placeholder="Shipping Postal/Zipcode" value="<?php echo $user_details->shipping_pincode;?>" maxlength="10" >
                          <span id="shipping_pincode"></span>
                          <?php echo form_error('shipping_pincode','<small class="text-danger">','</small>'); ?>
                        </div>
                      </div>
                    
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Shipping State</label>
                          <input type="text" class="form-control" name="shipping_state" id="shipping_state" placeholder="Shipping State" value="<?php echo $user_details->shipping_state;?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="">Shipping City</label>
                          <input type="text" class="form-control" name="shipping_city" id="shipping_city" placeholder="Shipping City" value="<?php echo $user_details->shipping_city;?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="inputAddress">Shipping Address </label>
                        <textarea class="form-control" id="shipping_address" placeholder="Shipping Address" name="shipping_address"><?php echo $user_details->shipping_address;?></textarea>
                        <?php echo form_error('shipping_address','<small class="text-danger">','</small>'); ?>
                      </div>
                  
                   
               
                      
                    </div>
                  </div>
                </div>
               
              </div>
           
            </div>
            
            
            
            
            <div class="box-footer">
             <!-- <button type="button" class="btn btn-danger pull-left" onclick="window.location.href='<?php echo site_url(ADMIN_URL_PREFIX.'/agents/agentList');?>'">Cancel</button>	-->
              <button type="submit" class="btn btn-primary pull-right"><?php if($current_user_id > 0){?>Update<?php }else{?>Save<?php }?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</section>

</div>
<?php
if (!defined('BASEPATH'))
    EXIT("No direct script access allowed");
?>
<div class="login_sc">
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="login-form">
            <div class="box-header with-border">
              <h3 class="box-title" style="padding-left: 15px;">Administrator Login</h3>
            </div>
			  <?php 
				if($this->session->flashdata('success')){
					?>
					<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> <?=$this->session->flashdata('success')?></div>
					<?php
				}
				elseif($this->session->flashdata('error')){
					?>
					<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error !</strong> <?=$this->session->flashdata('error')?></div>
					<?php
				}
			?>
            <!-- /.box-header -->
            <!-- form start -->
             <form action="<?= base_url() . uri_string() ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                   <input type="email" name="email" class="form-control" placeholder="adminlogin@email.com" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email');?>
                  </div>
                  
                  <div class="clear"></div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" placeholder="password" value="<?php echo set_value('password'); ?>">
                    <?php echo form_error('password'); ?>
                  </div>
                  
                  <div class="clear"></div>
                </div>
             
              </div>
				<div class="row">
				<div class="col-md-12"><?php echo form_error();?></div>
				</div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="javascript:void(0);" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>';" >Cancel</a>
                
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
   </div>
    <div class="clear"></div>
   </div>
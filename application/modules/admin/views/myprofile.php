<?php 
if(!defined('BASEPATH')) EXIT("No direct script access allowed");
?>
  <div class="content-wrapper">
  <div class="box box-warning">
            <div class="box-header with-border">
				    <h3 class="box-title">Edit Profile</h3>
		  </div>
            <!-- /.box-header -->
        
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
			<div class="content">
			 <div class="box-body">
				<form action="<?php echo base_url().'admin/profileEdit';?>" method="POST" name="admin_frm" id="admin_frm" enctype="multipart/form-data">
					
					<div class="row">
                    <div class="col-md-6">
                     <div class="form-group">
						<label for="exampleInputEmail1">First Name</label>
						<input type="text" class="form-control" id="fname" name="fname"  placeholder="Enter First Name" value="<?php echo $profile->fname;?>">
					</div>
					<input type="hidden" id="id" name="id" value="<?php echo $profile->id;?>">   
                        
                        
                        
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
						<label for="exampleInputEmail1">Last Name</label>
						<input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name" value="<?php echo $profile->lname;?>">
					</div>
                        
                        
                        </div>
                    
                    
                    </div>	
                    
                    <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email" value="<?php echo $profile->email;?>" name="email">

					</div>
					 
                        
                        </div>
                        <div class="col-md-6">
                        
                        	<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="password" class="form-control" id="edit_password"  placeholder="Enter Password" name="edit_password" >
					</div>
                        
                        </div>
                    
                    
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
						<label for="examplecon_pass">Confirm Password</label>
						<input type="password" class="form-control" id="edit_con_pass"  placeholder="Enter Confirm Password" name="edit_con_pass" >
					</div>
                        
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
						<label for="examplemobile">Mobile</label>
						<input type="text" class="form-control" id="mobile" value="<?php echo $profile->mobile;?>" placeholder="Enter Mobile" name="mobile" >
					</div>
                        
                        </div>
                    
                    </div>
					
					<div class="form-group">
						<label for="exampleInputFile">Profile Image</label>
						<input type="file" class="form-control-file" id="image" aria-describedby="fileHelp" name="image" accept="image/*">
						<a href="<?php echo base_url().'assets/uploads/admin/'.$profile->image;?>" class="fancy"><img src = "<?php echo base_url().'assets/uploads/admin/'.$profile->image;?>" alt="<?php echo $profile->image;?>" width="100px" height="100px" id="fancyLaunch" class="images"></a>
					</div>
					
			     <button type="submit" class="btn btn-warning">Submit</button>
				</form>
             </div>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
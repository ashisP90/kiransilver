<?php 
  if(!defined('BASEPATH')) EXIT("No direct script access allowed");
  ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Users Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Users List</li>
    </ol>
  </section>
  
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h4 class="title abourt">Users List</h4>
          </div> 
        <!--  <a href="javascript:void(0);" class="btn btn-success" id="product_add" ><i class="fa fa-plus" aria-hidden="true"></i> Add User</a>   -->
          <?php
            if ($this->session->flashdata('succ')) {
            $message = $this->session->flashdata('succ');
            ?>                
          <div class="alert alert-success alert-dismissable" role="alert" id="alert-success">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php print_r($message);?></div>
          <?php
            }
            ?>
          <?php
            if ($this->session->flashdata('Err')) {
            ?>
          <div class="alert alert-danger alert-dismissable" role="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <?php
              $message = $this->session->flashdata('Err');
              echo ($message);
              ?>
          </div>
          <?php
            }
            ?>
          <div class="alert alert-info alert-dismissable" role="alert" id="delete_success" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
          </div>
          
            
          <div class="box-body"> 
           <div class="svt">          
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="data_table">
                <thead>
                  <tr>
                    <th width="5%">Sr No</th>
                    <th width="15%">User Name</th>  
                    <th width="20%">Full Name</th>                    
                    <th width="20%">Email</th>                    
                    <th width="10%">mobile</th>                    
                    <th width="10%">Status</th>   
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                <tbody> 
                <?php if($users){ ?>
                  <?php
                    $count= 1; 
                    foreach($users as $user){
                    ?>                 
                   <tr class="odd gradeX" id="data-<?php echo $user->id;?>">
                    <td><?php echo $count;?> </td>                    
                
                    <td><?php echo $user->username;?></td>                  
                    <td><?php echo $user->first_name.' '.$user->last_name;?></td>                  
                    <td><?php echo $user->email;?></td>   
                    <td><?php echo $user->mobile;?></td>                  
                    <td><?php echo $user->status;?></td>                  
                                  
                    <td><a href="<?php echo base_url('users/editUser/'.$user->id);?>" class="btn btn-warning edit-btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="deleteData('<?php echo $user->id;?>', '<?php echo USERS;?>', 'id');" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                  </tr>                
                 <?php 
                    $count++;                   
	               }
                 } ?>                  
                </tbody>
              </table>
            </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
</div>
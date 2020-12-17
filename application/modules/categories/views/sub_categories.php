<?php 
  if(!defined('BASEPATH')) EXIT("No direct script access allowed");
  ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Sub Categories Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Sub Categories List</li>
    </ol>
  </section>
  
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h2><?php echo '<strong>Main Category: </strong>'.$category_details->name ;?></h2>
          </div>  
          
          <?php if( isset($_REQUEST['edit']) && !empty($_REQUEST['edit']) ){  ?>
		  <div class="box-header">
            <h4 class="title abourt"> Edit Sub Category</h4>
          </div> 
          
          <div class="box-body"> 
          <form action="<?php echo base_url('categories/subCategories/'.$category_details->id);?>" method="post" enctype="multipart/form-data" id="cat_form" name="cat_form">
          	      <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                      <div class="form-group">
                        <label>Sub Category Name</label>
                        <div class="form-line">
                          <input type="text" name="sub_cat_name" id="sub_cat_name" placeholder="Sub Category Name" value="<?php echo $edit_sub_category->name;?>"/>
                           <?php echo form_error('sub_cat_name'); ?>
                        </div>
                      </div>
                    </div> 
                 <button type="submit" name="submit" class="btn btn-sm btn-primary waves-effect" value="submit">Submit</button>     
          </form>
          </div>
          
          <?php }
          
          else { ?>
          <div class="box-header">
            <h4 class="title abourt"> Add Sub Category</h4>
          </div> 
         <div class="box-body"> 
          <form action="<?php echo base_url('categories/subCategories/'.$category_details->id);?>" method="post" enctype="multipart/form-data" id="cat_form" name="cat_form">
          	      <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                      <div class="form-group">
                        <label>Sub Category Name</label>
                        <div class="form-line">
                          <input type="text" name="sub_cat_name" id="sub_cat_name" placeholder="Sub Category Name"/>
                           <?php echo form_error('sub_cat_name'); ?>
                        </div>
                      </div>
                    </div> 
                 <button type="submit" name="submit" class="btn btn-sm btn-primary waves-effect" value="submit">Submit</button>     
          </form>
          </div>
         
         <?php }?>
        
          <div class="box-header">
            <h4 class="title abourt">Sub Categories List</h4>
          </div> 
       
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
            
          <div class="box-body"> 
           <h4><?php echo '<strong>Main Category: </strong>'.$category_details->name ;?></h4>
           <div class="svt">          
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="data_table">
                <thead>
                  <tr>
                    <th width="5%">Sr No</th>
                    <th width="10%">Sub Category Name</th> 
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                <tbody> 
                <?php if($sub_categories){ ?>
                  <?php
                    $count= 1; 
                    foreach($sub_categories as $sub_category){
                    ?>                 
                   <tr class="odd gradeX" id="data-<?php echo $sub_category->id;?>">
                    <td><?php echo $count;?> </td>
                    <td><?php echo $sub_category->scname;?></td> 
                    <td>
                      <!--<a href="<?php echo base_url('categories/subCategories?edit='.$sub_category->id);?>" class="btn btn-info edit-btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>      -->
                      <a href="javascript:void(0);" class="btn btn-warning" onclick="deleteData('<?php echo $sub_category->id;?>', '<?php echo SUB_CATEGORIES;?>', 'id');" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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



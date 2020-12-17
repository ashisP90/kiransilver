<?php 
  if(!defined('BASEPATH')) EXIT("No direct script access allowed");
  ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Categories Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Categories List</li>
    </ol>
  </section>
  
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
         
            <a href="javascript:void(0);" class="btn btn-warning" id="product_add" data-toggle="modal" data-target="#categoryModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>   
         
         <?php if( isset($_REQUEST['edit']) && !empty($_REQUEST['edit']) ){  ?>
		  <div class="box-header">
            <h4 class="title abourt"> Edit Category</h4>
          </div> 
       
          <form action="<?php echo base_url('categories/editCategory/'.$edit_category->id);?>" method="post" enctype="multipart/form-data" id="cat_form" name="cat_form">
          	      <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                      <div class="form-group">
                        <label>Category Name</label>
                        <div class="form-line">
                          <input type="text" name="cat_name" id="cat_name" placeholder="Category Name" value="<?php echo $edit_category->name;?>"/>
                           <?php echo form_error('cat_name'); ?>
                        </div>
                      </div>
                    </div> 
                    
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                      <div class="form-group">
                        <label>Category Image</label>
                        <div class="form-line">
                         <input type="file" name="cat_image" id="cat_image" accept="image/*"/>
                          
                          <a href="<?php echo base_url().'assets/uploads/categories/'.$edit_category->image;?>" class="fancy imag"><img src="<?php echo base_url().'assets/uploads/categories/thumb/'.$edit_category->image;?>" alt="<?php echo $edit_category->name;?>" id="fancyLaunch" class="img-circle"></a>
                           
                           <?php echo form_error('cat_image'); ?>
                        </div>
                      </div>
                    </div>
                    
                 <button type="submit" name="submit" class="btn btn-sm btn-primary waves-effect" value="submit">Submit</button>     
          </form>
		 <?php	
		 }
		 ?>
        
          <div class="box-header">
            <h4 class="title abourt">Categories List</h4>
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
           <div class="svt">          
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="data_table" >
                <thead>
                  <tr>
                    <th width="5%">Sr No</th>
                    <th width="15%">Image</th>                              
                    <th width="10%">Category Name</th>                    
                    <th width="10%">Home Category</th>                    
                    <th width="10%">Menu Category</th>                    
                    <th width="10%">Sub Category</th> 
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                <tbody> 
                <?php if($categories){ ?>
                  <?php
                    $count= 1; 
                    foreach($categories as $category){
                    ?>                 
                   <tr class="odd gradeX" id="data-<?php echo $category->id;?>">
                    <td><?php echo $count;?> </td> 
                    <td><a href="<?php echo base_url().'assets/uploads/categories/'.$category->image;?>" class="fancy imag"><img src="<?php echo base_url().'assets/uploads/categories/thumb/'.$category->image;?>" alt="<?php echo $category->name;?>" id="fancyLaunch" class="img-circle"></a></td>                  
                          
                    <td><?php echo $category->name; ?></td>   
                    <!--home category-->
                    <td>
					<fieldset class="rating">
						<input type="checkbox" id="star_<?php echo $category->id;?>" name="is_home" value="1"><label class = "full <?php echo ($category->is_home == '1' ? "star_rating" : "");?>" for="star1" title="Home Category" style="cursor: pointer;" id="home_arrivals_<?php echo $category->id;?>" onClick="selectHomeCategory(<?php echo $category->id;?>);"></label>
					</fieldset>
                    </td>  
                   <!--menu category-->
                    <td>
					<fieldset class="rating">
						<input type="checkbox" id="star_<?php echo $category->id;?>" name="is_menu" value="1"><label class = "full <?php echo ($category->is_menu == '1' ? "star_rating" : "");?>" for="star1" title="New Arrivals" style="cursor: pointer;" id="menu_cat_<?php echo $category->id;?>" onClick="selectMenuCategory(<?php echo $category->id;?>);"></label>
					</fieldset>
                    </td>   
                   
                    <td><a href="<?php echo base_url('categories/subCategories/'.$category->id);?>" class="btn btn-info edit-btn"><i class="fa fa-eye" aria-hidden="true"></i> Sub Categories</a></td>                                      
                    <td>
                     <a href="<?php echo base_url('categories?edit='.$category->id);?>" class="btn btn-info edit-btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>               
                    <a href="javascript:void(0);" class="btn btn-danger" onclick="deleteData('<?php echo $category->id;?>', '<?php echo CATEGORIES;?>', 'id');" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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

<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

          <form action="<?php echo base_url('categories/addCategory/');?>" method="post" enctype="multipart/form-data" id="cat_form" name="cat_form">
          	    
          	      <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Category</h4>
                        </div>
                        <div class="modal-body">
          	    
          	          <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                      <div class="form-group">
                        <label>Category Name</label>
                        <div class="form-line">
                          <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Category Name"/>
                           <?php echo form_error('cat_name'); ?>
                        </div>
                      </div>
                    </div> 
                    
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                      <div class="form-group">
                        <label>Category Image</label>
                        <div class="form-line">
                         <input type="file" class="form-control" name="cat_image" id="cat_image" accept="image/*"/>
                           <?php echo form_error('cat_image'); ?>
                        </div>
                      </div>
                    </div>
                    
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-sm btn-primary waves-effect" value="submit">Submit</button>
                            <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>   
          </form>
</div>


<script>
   function selectHomeCategory(cat_id){
		var ajaxurl = '<?php echo base_url();?>categories/homeCategory';
		jQuery.ajax({
			url: ajaxurl,
			type: 'post',
			data: {cat_id : cat_id },
			success: function(response){
			if (response == "add"){
				 jQuery("#home_arrivals_"+cat_id).addClass('star_rating');
				}
			 else if(response == "removed"){
			 	 jQuery("#home_arrivals_"+cat_id).removeClass('star_rating');
			 	
			    }
			   }
 			}); 		
   }  
   
   function selectMenuCategory(cat_id){
		var ajaxurl = '<?php echo base_url();?>categories/menuCategory';
		jQuery.ajax({
			url: ajaxurl,
			type: 'post',
			data: {cat_id : cat_id },
			success: function(response){
			if (response == "add"){
				 jQuery("#menu_cat_"+cat_id).addClass('star_rating');
				}
			else if(response == "removed"){
			 	 jQuery("#menu_cat_"+cat_id).removeClass('star_rating');
			 	}
			   }
 			}); 		
   }
</script>

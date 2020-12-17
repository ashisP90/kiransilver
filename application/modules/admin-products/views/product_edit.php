<?php 
  if(!defined('BASEPATH')) EXIT("No direct script access allowed");
  ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Products Management
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Edit Product</li>
    </ol>
  </section>
 <section class="content">
    <div class="row">
      <div class="col-xs-12">
         
       <div class="box box-warning">
            <div class="box-header with-border">
				<h3 class="box-title">Edit User Details</h3>
		  </div>
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
               <form action="<?php echo base_url('admin-products/products/editProduct/'.$product_details->id);?>" method="post" enctype="multipart/form-data" id="product_edit_form" name="product_edit_form">  
                  <div class="row clearfix">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" class="form-control" name="pname" id="pname" placeholder="Product Name" value="<?php echo $product_details->pname;?>" />
                          <?php echo form_error('pname'); ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" name="pcode" id="pcode" class="form-control" placeholder="Product Code" value="<?php echo $product_details->pcode;?>" />
                           <?php echo form_error('pcode'); ?>
                        </div>
                      </div>
                    </div>
                      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                      <label><input type="radio" name="type" id="instock" value="1" <?php echo ($product_details->type == "1" ? "checked" : "");?>/> InStock</label> 
                                       <label><input type="radio" name="type" id="byorder" value="2" <?php echo ($product_details->type == "2" ? "checked" : "");?>/> By Order</label> 
                                   <?php echo form_error('type'); ?>
                                    </div>
                                </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <label>Product Description</label>
                        <div class="form-line">
                          <textarea id="description" cols="20" name="description" placeholder="Description" rows="4" class="form-control no-resize"><?php echo $product_details->description;?></textarea>
                           <?php echo form_error('description'); ?>
                        </div>
                      </div>
                    </div>
                         <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                    <label>Product More Description</label>
                                        <div class="form-line">
                                            <textarea id="more_info" cols="20" name="more_info" placeholder="More Description" rows="4" class="form-control no-resize"><?php echo $product_details->more_info;?></textarea>
                                             <?php echo form_error('more_info'); ?>
                                        </div>
                                    </div>
                                </div>
                                
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <label>Product Image</label>
                        <div class="form-line">
                          <input type="file" name="product_image" accept="image/*" id="product_image">
                          <a href="<?php echo base_url().'assets/uploads/products/'.$product_details->product_image;?>" class="fancy imag">
                          <img src="<?php echo base_url().'assets/uploads/products/thumb/'.$product_details->product_image;?>" alt="<?php echo $product_details->pname;?>" id="fancyLaunch" class="img-circle"></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" name="video_url" id="video_url" class="form-control" placeholder="Enter Youtube URL" value="<?php echo $product_details->video_url;?>"/>
                           <?php echo form_error('video_url'); ?>
                        </div>
                      </div>
                    </div>
                   <?php 
                    $product_categories = getProductCategories($product_details->id);
                    ?>
                    
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="sel1">Product Category:</label>
                       <select class="multi_site_user_select" multiple="multiple" data-placeholder="Select Category" style="width: 100%;" name="prod_cat[]" id="prod_cat" >
                         
                          <option value="">Select Category</option>
                         
                         
                         
                          <?php if($categories){
                            foreach($categories as $category){
                            	?>
                          <option value="<?php echo $category->id;?>" 
                               <?php
                                 if($product_categories){
                                  foreach($product_categories as $sel_category){
							  	   if($sel_category->cat_id == $category->id){
								 	echo "selected";
								   }							  
							      }
							     }
							  ?>><?php echo $category->name;?></option>
                              <?php	
                                 }
                               }?>
                        </select>
                         <?php echo form_error('prod_cat[]'); ?>
                      </div>
                    </div>
                    <?php $product_sub_categories = getProductSubCategories($product_details->id); ?>
                   
                   
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="sel1">Sub Category:</label>
                         <div id="sub_cat_data">
                          <?php if($product_sub_categories){ ?>
                          <select class="multi_site_user_select" multiple="multiple" data-placeholder="Select Sub Category" style="width: 100%;" name="sub_cat[]" id="sub_cat"> 
                          <option value="">Select Sub Categories</option>
                          <?php if($sub_categories){
                                 foreach($sub_categories as $sub_category){
                            	 ?>
                          <option value="<?php echo $sub_category->id;?>" 
                               <?php
                                 if($product_sub_categories){
                                  foreach($product_sub_categories as $sel_sub_category){
							  	   if($sel_sub_category->sub_cat_id == $sub_category->id){
								 	echo "selected";
								   }							  
							      }
							     }
							    ?>><?php echo $sub_category->scname;?></option>
                         	 <?php	
                           	 }
                            }?>                                
                        </select>
                          <?php }
                          else { ?>
                          <label>No Sub Category Selected</label>
                          <?php }?>
                        </div>
                         <?php echo form_error('sub_cat[]'); ?>
                      </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="sel1">Status:</label>
                        <select class="sub_cat form-control" name="status" id="status">
                          <option value="Active" <?php echo ( $product_details->status == "Active" ? "selected" : "");?>>Active</option>
                          <option value="Inactive" <?php echo ( $product_details->status == "Inactive" ? "selected" : "");?>>Inactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
               
                <div class="footer">
                  <button type="submit" name="submit" class="btn btn-sm btn-primary waves-effect" value="submit">Submit</button>
                  
                  <a href="<?php echo base_url('admin-products/products');?>" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">Back</a>
                </div>
               </form>
           </div>
         </div>
  
      </div>
      </div>
      </section>
  
  </div>



<script>

    jQuery(function() {

	jQuery('#prod_cat').change(function () {
      
       var optionSelected = jQuery("option:selected", this);
       var cat_id = jQuery(this).val();
       var ajaxurl = '<?php echo base_url();?>admin/Ajax/fetchSubCategories';
		jQuery.ajax({
			dataType: "json",
			url: ajaxurl,
			type: 'post',
			data: {cat_id},
			cache: true,
			success: function(results) {
			var posts = results;	
		    
		    if( posts.response !=0){
		    var listItems = '<select class="multi_site_user_select" multiple="multiple" name="sub_cat[]" id="sub_cat">'; 
     		 for (var i = 0; i < posts.response.length; i++) {
             listItems += "<option value='" + posts.response[i].id + "'>" + posts.response[i].name + "</option>";
        	 }
        	 listItems += '</select>';
        	 } 
        	 else{
			 var listItems = '<select name="sub_cat" id="sub_cat" class="multi_site_user_select">'; 
     		 for (var i = 0; i < posts.response.length; i++) {
             listItems += "<option value='No Data Found'>No Data Found</option>";
        	 }
        	 listItems += '</select>';
        	 } 	
        	 
             jQuery("#sub_cat_data").html(listItems);             
               (function(jQuery) {
		          jQuery(function() {
		              window.fs_test = jQuery('.multi_site_user_select').fSelect();
		          });
		      })(jQuery);
		             
			},
			error: function() {
			console.log('Cannot retrieve data.');
			}
 			
 			});
 
	});
});
</script>

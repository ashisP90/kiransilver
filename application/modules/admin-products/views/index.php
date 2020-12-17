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
      <li class="active">Products List</li>
    </ol>
  </section>
  
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h4 class="title abourt">Products List</h4>
          </div> 
          <a href="javascript:void(0);" class="btn btn-success" id="product_add" data-toggle="modal" data-target="#productModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</a>   
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
                    <th width="15%">Image</th>  
                    <th width="20%">Product Details</th>                    
                    <th width="20%">Product Description</th>                    
                    <th width="10%">Product Category</th>                    
                    <th width="10%">Product Sub Category</th>                    
                    <th width="5%">New Arrivals</th>                    
                    <th width="10%">Other Details</th>                                       
                    <th width="10%">Action</th>
                  </tr>
                </thead>
                <tbody> 
                <?php if($products_List){  
                    $count= 1; 
                    foreach($products_List as $product){
                    ?>                 
                   <tr class="odd gradeX" id="data-<?php echo $product->id;?>">
                    <td><?php echo $count;?> </td>                    
                    <td>
                      <a href="<?php echo base_url().'assets/uploads/products/'.$product->product_image;?>" class="fancy imag">
                      <img src="<?php echo base_url().'assets/uploads/products/thumb/'.$product->product_image;?>" alt="<?php echo $product->pname;?>"  id="fancyLaunch" class="img-circle" ></a>
                    </td>  
                    <td><?php echo 'Product Name:  <strong>'.$product->pname.'</strong><br/>'.
                                   'Product Code:  <strong>'.$product->pcode.'</strong>';?></td>                  
                    <td><?php echo $limited_word = word_limiter($product->description, 20);?></td>   
                    <td><?php $product_categories = getProductCategories($product->id);
                              if($product_categories){
                              	$i=1;
							   foreach($product_categories as $category){
							  	echo $i.': <strong>'.$category->name.'</strong><br>';
							  	$i++;
							   }
							  }
                    ?></td>                  
                    <td><?php $product_sub_categories = getProductSubCategories($product->id);
                              if($product_sub_categories){
                              	$i=1;
							   foreach($product_sub_categories as $sub_category){
							  	echo $i.': <strong>'.$sub_category->scname.'</strong><br>';
							  	$i++;
							   }
							  }
                    ?></td>             
                    
                    <td>
					<fieldset class="rating">
						<input type="checkbox" id="star_<?php echo $product->id;?>" name="new_arrivals" value="1"><label class = "full <?php echo ($product->new_arrivals == '1' ? "star_rating" : "");?>" for="star1" title="New Arrivals" style="cursor: pointer;" id="new_arrivals_<?php echo $product->id;?>" onClick="selectNewArrivals(<?php echo $product->id;?>);"></label>
					</fieldset>
                    </td>  
                                
                    <td><a href="<?php echo base_url('admin-products/products/productOtherDetails/'.$product->id);?>" class="btn btn-info "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Other Details</a></td>                  
                    <td><a href="<?php echo base_url('admin-products/products/editProduct/'.$product->id);?>" class="btn btn-danger " title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="javascript:void(0);" class="btn btn-danger" onclick="deleteData('<?php echo $product->id;?>', '<?php echo PRODUCTS;?>', 'id');" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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


<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

     <form action="<?php echo base_url('admin-products/products/addProduct/');?>" method="post" enctype="multipart/form-data" id="product_add_form" name="product_add_form">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Product</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">

                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="pname" id="pname" placeholder="Product Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pcode" id="pcode" class="form-control" placeholder="Product Code" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                      <label> <input type="radio" name="type" id="instock" value="1"/> InStock</label>
                                     <label>  <input type="radio" name="type" id="byorder" value="2"/> By Order</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                    <label>Product Description</label>
                                        <div class="form-line">
                                            <textarea id="description" cols="20" name="description" placeholder="Description" rows="4" class="form-control no-resize"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                    <label>Product More Description</label>
                                        <div class="form-line">
                                            <textarea id="more_info" cols="20" name="more_info" placeholder="More Description" rows="4" class="form-control no-resize"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                    <label>Product Image</label>
                                        <div class="form-line">
                                            <input type="file" name="product_image" accept="image/*" id="product_image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="video_url" id="video_url" class="form-control" placeholder="Enter Youtube URL" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Product Category:</label>
                                        <select class="multi_site_user_select" multiple="multiple" data-placeholder="Select Category" style="width: 100%;" name="prod_cat[]" id="prod_cat">
                                        <option value="">Select Category</option>  
                                        <?php if($categories){
											foreach($categories as $category){
												?>
											<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>	
											<?php	
											}
										}?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Sub Category:</label>
                                        <div id="sub_cat_data">
                                        <select class="multi_site_user_select" multiple="multiple" data-placeholder="Select Sub Category" style="width: 100%;" name="sub_cat[]" id="sub_cat">   
                                        <option value="">Select Sub Categories</option>	
                                                                             
                                        </select>
                                        </div>
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
   function selectNewArrivals(pro_id){
		var ajaxurl = '<?php echo base_url();?>admin/Ajax/featureProduct';
		jQuery.ajax({
			url: ajaxurl,
			type: 'post',
			data: {pro_id : pro_id },
			success: function(response){
			if (response == "add")
          		{
				 jQuery("#new_arrivals_"+pro_id).addClass('star_rating');
				}
			 else if(response == "remove")  {
			 	 jQuery("#new_arrivals_"+pro_id).removeClass('star_rating');
			 	
			    }
			    
			    }
 			}); 		
   }
</script>


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
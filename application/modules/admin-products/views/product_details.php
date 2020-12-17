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
      <li class=""><a href="<?php echo base_url('admin-products/products');?>">Products List</a></li>
      <li class="active">Product Details</li>
    </ol>
  </section>  
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-warning">
        
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
             echo $message = $this->session->flashdata('Err');
              ?>
          </div>
          <?php
            }
            ?>    
          <?php if(validation_errors()){ ?>
		   <div class="alert alert-danger alert-dismissable fade in" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error! </strong>
             <?php echo validation_errors();?>     
           </div>
          <?php }?>
         <a href="javascript:void(0);" onclick="product_details_add()" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add Product Details</a>
        
        
        <div class="product_details_add_div" style="display: none;">
          <div class="box-header with-border">
            <h3 class="box-title">Add Product Other Details</h3>
          </div>
         
          <div class="content">
           <form action="<?php echo base_url('admin-products/products/productOtherDetails/'.$product->id);?>" method="post" enctype="multipart/form-data" id="product_details_add_form" name="product_details_add_form">  
              <div class="row clearfix">
                <div class="col-3 col-sm-3 col-md-4 col-lg-11 d-flex flex-row justify-content-between">
                  <div class="form-group d-flex flex-column ">
                    <label class="label-text">Extra Product Images Upload</label>
                    <input type="file" name="pro_other_image" accept="image/*" id="pro_other_image" >	
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="stone_color">Stone Color: </label>
                    <select class="form-control" name="stone_color" id="stone_color">
                     <?php foreach(STONE_COLORS as $stone_color){ ?>
					 	<option value="<?php echo $stone_color;?>"><?php echo $stone_color;?></option>
					<?php }?>
                    </select>
                     <?php echo form_error('stone_color'); ?>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="stone_shape">Stone Shape: <span style="color: red">*</span></label>
                    <select class="form-control" name="stone_shape" id="stone_shape">
                      <?php foreach(STONE_SHAPES as $stone_shapes){ ?>
					 	<option value="<?php echo $stone_shapes;?>"><?php echo $stone_shapes;?></option>
					<?php }?>
                    </select>
                     <?php echo form_error('stone_shape'); ?>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="plating">Polish: </label>
                    <select class="form-control" name="plating" id="plating">
                     <?php foreach(STONE_PLATING as $stone_plating){ ?>
					 	<option value="<?php echo $stone_plating;?>"><?php echo $stone_plating;?></option>
					<?php }?>
                    </select>
                   <?php echo form_error('plating'); ?>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="collection">Collection: </label>
                      <input type="text" class="form-control" name="collection" id="collection" placeholder="collection e.g. Religious" value=""/>
                       <?php echo form_error('collection'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="purity">Purity:</label>
                      <input type="text" class="form-control" name="purity" id="purity" placeholder="purity in carat"  value=""/>
                       <?php echo form_error('purity'); ?>
                    </div>
                  </div>
                </div>
              
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
<<<<<<< HEAD
                      <label for="weight">Weight :</label>
=======
                      <label for="weight">Weight(gm) : <span style="color: red">*</span></label>
>>>>>>> 72341eb3217dc6eb552d3ca66ed443391de3b3cd
                      <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight" value="" />
                     <?php echo form_error('weight'); ?>
                    </div>
                  </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <div class="form-line">
                    <label for="unit_packet">Unit Packet: <span style="color: red">*</span></label>
                    <select class="form-control" name="unit_packet" id="unit_packet">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                    </select>
                     <?php echo form_error('unit_packet'); ?>
                  </div>
                </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="size">Size: </label>
                      <input type="number" class="form-control" name="size" id="size" placeholder="Size"  value=""/>
                       <?php echo form_error('size'); ?>
                    </div>
                  </div>
                </div>    
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="size_unit">Size Unit: </label>
                      <select class="form-control" name="size_unit[]" id="size_unit">
                        <option value="inches">Inches</option>
                      	<option value="cm">Cm</option>
                      	<option value="mm">Mm</option>
                      </select>
                    
                       <?php echo form_error('size_unit'); ?>
                    </div>
                  </div>
                </div>    
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="amount">Amount: </label>
                      <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount"  value=""/>
                       <?php echo form_error('amount'); ?>
                    </div>
                  </div>
                </div>
                 
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="pro_qty">Product Quantity: </label>
                      <input type="number" class="form-control" name="pro_qty" id="pro_qty" placeholder="Product Quantity"  value=""/>
                       <?php echo form_error('pro_qty'); ?>
                    </div>
                  </div>
                </div>
                
                
                   <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <div class="form-line">
                    <label for="unit_pcs">Unit Pcs: <span style="color: red">*</span></label>
                    <select class="form-control" name="unit_pcs" id="unit_pcs">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                    </select>
                     <?php echo form_error('unit_pcs'); ?>
                  </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
               
                  <button class="btn btn-sm btn-primary waves-effect" name="submit" value="submit" type="submit">SUBMIT</button>  
                  <a class="btn btn-sm btn-danger waves-effect" href="javascript:void(0);" onclick="close_add_div();">Close</a>
                </div>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 
 
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h4 class="title abourt">Products Details</h4>
          </div>
          <h4>Product Name: <strong><?php echo $product->pname;?></strong> and Product Code: <strong><?php echo $product->pcode;?></strong></h4>
          <div class="box-body">
            <div class="svt">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                  <thead>
                    <tr>
                      <th width="20%">Other Product Photo</th>
                      <th width="15%">Stone Color</th>
                      <th width="10%">Stone Shape</th>
                      <th width="10%">Plating</th>
                      <th width="20%">Collection</th>
                      <th width="10%">Purity</th>
                      <th width="15%">Unit Pcs</th>
                      <th width="10%">Unit Packet</th>
                      <th width="10%">Weight(gm)</th>
                      <th width="10%">Size</th>
                      <th width="10%">Product Quantity</th>                    
                      <th width="10%">Action</th>                    
                    </tr>
                  </thead>
                  <tbody>
                  <?php if($product_other_details){ 
                        foreach($product_other_details as $product_other_detail) { ?>
				     <tr>
                      <td>
                      <a href="<?php echo base_url().'assets/uploads/products/'.$product_other_detail->image;?>" class="fancy imag">
                      <img class="img-responsive thumbnail" style="margin: auto;width: 5rem;" src="<?php echo base_url().'assets/uploads/products/thumb/'.$product_other_detail->image;?>" id="fancyLaunch"></a></td>
                      <td><?php echo $product_other_detail->stone_color;?></td>
                      <td><?php echo $product_other_detail->stone_shape;?></td>
                      <td><?php echo $product_other_detail->plating;?></td>
                      <td><?php echo $product_other_detail->collection;?></td>
                      <td><?php echo $product_other_detail->purity;?></td>
                      <td><?php echo $product_other_detail->unit_pcs;?></td>
                      <td><?php echo $product_other_detail->unit_packet;?></td>
                      <td><?php echo $product_other_detail->weight;?></td>
                      <td><?php echo $product_other_detail->size;?></td>                    
                      <td><?php echo $product_other_detail->pro_qty;?></td>   
                      <td><a href="<?php echo base_url('admin-products/products/editProductOtherDetails/'.$product_other_detail->pro_dt_id);?>" class="btn btn-warning edit-btn" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>                 
                    </tr>
                    <?php 
	                  }
                    }
                    else{ ?>
					<tr>
						<td>No Product Details</td>
					</tr>	
					<?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.row -->
    </div>
  </section>




<script>
function product_details_add(){
	jQuery(".product_details_add_div").show('3000');
}

function close_add_div(){
	jQuery(".product_details_add_div").hide('3000');
}
	
</script>
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
      <li class="active">Product Details</li>
    </ol>
  </section>
  

<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-warning">
        
          <div class="box-header with-border">
            <h3 class="box-title">Edit Product Other Details</h3>
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
             echo $message = $this->session->flashdata('Err');
              ?>
          </div>
          <?php
            }
            ?>    
                  	
          <div class="content">
           <form action="<?php echo base_url('admin-products/products/editProductOtherDetails/'.$product_other_details->pro_dt_id);?>" method="post" enctype="multipart/form-data" id="product_details_add_form" name="product_details_add_form">  
              <div class="row clearfix">
                <div class="col-3 col-sm-3 col-md-4 col-lg-11 d-flex flex-row justify-content-between">
                  <div class="form-group d-flex flex-column ">
                    <label class="label-text">Extra Product Images Upload</label>
                    <input type="file" name="image" accept="image/*" id="image" >	
                     <a href="<?php echo base_url().'assets/uploads/products/'.$product_other_details->image;?>" class="fancy imag">
                     <img src="<?php echo base_url().'assets/uploads/products/thumb/'.$product_other_details->image;?>"  id="fancyLaunch" class="img-circle"></a>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="stone_color">Stone Color:</label>
                    <select class="form-control" name="stone_color" id="stone_color">
                     <?php foreach(STONE_COLORS as $stone_color){ ?>
					 	<option value="<?php echo $stone_color;?>" <?php echo ($product_other_details->stone_color == $stone_color ? "selected" : "");?>><?php echo $stone_color;?></option>
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
					 	<option value="<?php echo $stone_shapes;?>" <?php echo ($product_other_details->stone_shape == $stone_shapes ? "selected" : "");?>><?php echo $stone_shapes;?></option>
					<?php }?>
                    </select>
                     <?php echo form_error('stone_shape'); ?>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="plating">Polish: <span style="color: red">*</span></label>
                    <select class="form-control" name="plating" id="plating">
                     <?php foreach(STONE_PLATING as $stone_plating){ ?>
					 	<option value="<?php echo $stone_plating;?>"  <?php echo ($product_other_details->plating == $stone_plating ? "selected" : "");?>><?php echo $stone_plating;?></option>
					<?php }?>
                    </select>
                   <?php echo form_error('plating'); ?>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="collection">Collection:</label>
                      <input type="text" class="form-control" name="collection" id="collection" placeholder="collection e.g. Religious" value="<?php echo $product_other_details->collection;?>"/>
                       <?php echo form_error('collection'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="purity">Purity:</label>
                      <input type="text" class="form-control" name="purity" id="purity" placeholder="purity in carat"  value="<?php echo $product_other_details->purity;?>"/>
                       <?php echo form_error('purity'); ?>
                    </div>
                  </div>
                </div>
              
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="weight">Weight(gm): <span style="color: red">*</span></label>

                      <input type="number" class="form-control" name="weight" id="weight" placeholder="Weight" value="<?php echo $product_other_details->weight;?>" />
                     <?php echo form_error('weight'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="unit_packet">Unit Packet: </label>
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
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="size">Size: </label>
                      <input type="number" class="form-control" name="size" id="size" placeholder="Size"  value="<?php echo $product_other_details->size;?>"/>
                       <?php echo form_error('size'); ?>
                    </div>
                  </div>
                </div>     
                
                <?php $size_units = explode(',', $product_other_details->size_unit); ?>
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="size_unit">Size Unit: </label>
                      <select class="form-control" name="size_unit[]" id="size_unit">
                      	<option value="inches" <?php if($size_units){ foreach($size_units as $size_unit){  if ($size_unit == 'inches'){ echo 'selected'; }}}?>>Inches</option>
                      	<option value="cm" <?php if($size_units){ foreach($size_units as $size_unit){  if ($size_unit == 'cm'){ echo 'selected'; }}}?>>Cm</option>
                      	<option value="mm" <?php if($size_units){ foreach($size_units as $size_unit){  if ($size_unit == 'mm'){ echo 'selected'; }}}?>>Mm</option>
                      </select>
                       <?php echo form_error('size_unit'); ?>
                    </div>
                  </div>
                </div>    
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="amount">Amount:</label>
                      <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount"  value="<?php echo $product_other_details->amount;?>"/>
                       <?php echo form_error('amount'); ?>
                    </div>
                  </div>
                </div>
                 
                
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                  <div class="form-group">
                    <div class="form-line">
                      <label for="pro_qty">Product Quantity: </label>
                      <input type="number" class="form-control" name="pro_qty" id="pro_qty" placeholder="Product Quantity"  value="<?php echo $product_other_details->pro_qty;?>"/>
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
                  <a class="btn btn-sm btn-info waves-effect" href="<?php echo base_url('admin-products/products');?>"  >Back</a>
                </div>
              </div>
            </form>
          </div>         
        </div>
      </div>
    </div>
  </section>
<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Products extends MY_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Products_model', 'Products');	
		$this->load->helper('text');
	}
	
	/**
	* 
	* Index Page
	* 
	*/
	
	public function index(){
		$data=array();			
		$this->session_checked($is_active_session = 1);	
		
		/**
		* 
		* @var All Products
		* 
		*/	
		$all_products_conditions = " (`status` = 'Active' )";
		$data['products_List'] = $this->BlankModel->getTableData(PRODUCTS, $all_products_conditions, '*', '2','id', 'id', 'DESC'); 
		/**
		* 
		* Categories
		* 
		*/
		$select_fields = '*';
    	$is_multy_result = 2;
		$conditions = " ( `status` = 'Active' )";
		
		$data['categories'] = $this->BlankModel->getTableData(CATEGORIES, $conditions, $select_fields, $is_multy_result);	
		
		$data['sub_categories'] = $this->BlankModel->getTableData(SUB_CATEGORIES, $conditions, $select_fields, $is_multy_result);
				
		common_viewloader('admin-products/index', $data);
	}
	
	/**
	* 
	* Product ADD
	*/
	
	public function addProduct(){
		$this->session_checked($is_active_session = 1);	
	    //check whether submit button was clicked or not
        if($this->input->post('submit')){
        	
    	  $product_name  = $this->input->post('pname');
    	  $product_code  = $this->input->post('pcode');
    	  $description   = $this->input->post('description');
    	  $more_info     = $this->input->post('more_info');
    	  $type          = $this->input->post('type');
    	  $video_url     = $this->input->post('video_url');
    	  
			
    	  $product_uploads  = image_uploads('products',$thumb_Size_width = '200', $thumb_Size_hight = '150', 'product_image');
       
     	  if( !is_array($product_uploads)) {
				$this->session->set_flashdata('Err', $product_uploads);
				header('location:'.base_url().'admin-products/products');	
				exit;    
			   }
			   
			   	//save the file info in the database
				$product_data = array('pname'=> $product_name,'pcode'=> $product_code, 'description'=> $description, 'more_info'=> $more_info, 'type'=> $type, 'product_image'=> $product_uploads['file_name'], 'video_url'=> $video_url, 'status'=> 'Active', 'create_date'=> date('Y-m-d H:i:s'), 'modify_date' => date('Y-m-d H:i:s'));
				
				$add_product_data = $this->BlankModel->addTableData(PRODUCTS, $product_data);
				
				//$product_other_details = array('prod_id'=> $add_product_data,'create_date'=> date('Y-m-d H:i:s'), 'modify_date' => date('Y-m-d H:i:s'));
				
				//$add_product_other_details = $this->BlankModel->addTableData(PRODUCT_DETAILS, $product_other_details);
				
				$prod_cat      = $this->input->post('prod_cat');
    	        $sub_cat       = $this->input->post('sub_cat');
    	        /**
				* 
				* Main Category
				* 
				*/
    	        if($prod_cat){
					foreach($prod_cat as $cat){
					$cat_select_data = array('pro_id'=> $add_product_data, 'cat_id'=> $cat, 'create_date'=> date('Y-m-d H:i:s'), 'modify_date' => date('Y-m-d H:i:s'));
					
					$add_product_category_details = $this->BlankModel->addTableData(PRODUCT_CATEGORIES, $cat_select_data);	
					}
				}  
				/**
				* 
				* Sub Category
				* 
				*/
				if($sub_cat){
					foreach($sub_cat as $sub_cat){
					$sub_cat_select_data = array('pro_id'=> $add_product_data, 'sub_cat_id'=> $sub_cat, 'create_date'=> date('Y-m-d H:i:s'), 'modify_date' => date('Y-m-d H:i:s'));
					
					$add_product_sub_category_details = $this->BlankModel->addTableData(PRODUCT_SUB_CATEGORIES, $sub_cat_select_data);	
					}
				}
			
				$this->session->set_flashdata('succ', 'New Product Added successfully');
				header('location:'.base_url().'admin-products/products');	
				exit; 
		 }
	
	}
	
	/**
	* Product EDIT
	*/
	
	public function editProduct($product_id=0){
		$this->session_checked($is_active_session = 1);	
	    
		if($product_id > 0){
		   $data['product_details'] = $this->Products->getProductData($product_id);
		}
		/**
		* 
		* @categories
		* 
		*/
		$select_fields = '*';
    	$is_multy_result = 2;
		$conditions = " ( `status` = 'Active' )";
		
		$data['categories'] = $this->BlankModel->getTableData(CATEGORIES, $conditions, $select_fields, $is_multy_result);	
		$data['sub_categories'] = $this->BlankModel->getTableData(SUB_CATEGORIES, $conditions, $select_fields, $is_multy_result);
				
		if($this->input->post()){
				
			$this->form_validation->set_rules('pname', 'Product Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('pcode', 'Product Code', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('type', 'Product Type', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('description', 'Product Description', 'trim|required|xss_clean');
			$this->form_validation->set_rules('more_info', 'Product More Description', 'trim|xss_clean');
			$this->form_validation->set_rules('video_url', 'Youtube Video Link', 'trim|xss_clean');
			$this->form_validation->set_rules('prod_cat[]', 'Select Category', 'trim|required|xss_clean');
			$this->form_validation->set_rules('sub_cat[]', 'Select Sub Category', 'trim|xss_clean');
	
		  if ($this->form_validation->run() === TRUE) {
			
		  $product_name  = $this->input->post('pname');
    	  $product_code  = $this->input->post('pcode');
    	  $type          = $this->input->post('type');
    	  $description   = $this->input->post('description');
    	  $more_info     = $this->input->post('more_info');
    	  $video_url     = $this->input->post('video_url');   
    	  $status        = $this->input->post('status');
				
		//--------Product image upload section-----------//
	
		if($_FILES['product_image']['name']==''){
		   $product_image = $data['product_details']->product_image;		
		}
		else
		{
		   $product_uploads = image_uploads('products', $thumb_Size_width = '200', $thumb_Size_hight = '150', 'product_image');
			
		   if(is_array($product_uploads)){
		 	$product_image = $product_uploads['file_name'];
		   }		
		   if(!is_array($product_uploads)){
		  	$this->session->set_flashdata('Err', $product_uploads);
		 	header('location:'.base_url().'admin-products/products/editProduct/'.$product_id);
		   }
		  }
			
		  $conditions = " ( `id` = '".$product_id."' )";
  		  $product_data = array(  'pname'        => $product_name,
						  		  'pcode'        => $product_code, 
						  		  'type'         => $type, 
						  		  'description'  => $description, 
						  		  'more_info'    => $more_info, 
						  		  'product_image'=> $product_image, 
						  		  'video_url'    => $video_url,						  		 
						  		  'status'       => $status, 
						  		  'modify_date'  => date('Y-m-d H:i:s'));
  		
  		  $product_edit = $this->BlankModel->editTableData(PRODUCTS, $product_data, $conditions);
  		  
  		  $prod_cat      = $this->input->post('prod_cat');
    	  $sub_cat       = $this->input->post('sub_cat');
    	
    	  
           /**
			* 
			* Main Category
			* 
			*/
            if(!empty($prod_cat)){            	
            	$this->Products->deleteProductCategories($product_id);    	
				foreach($prod_cat as $cat){
				$cat_select_data = array('pro_id'=> $product_id, 'cat_id'=> $cat, 'create_date'=> date('Y-m-d H:i:s'), 'modify_date' => date('Y-m-d H:i:s'));
				
				$add_product_other_details = $this->BlankModel->addTableData(PRODUCT_CATEGORIES, $cat_select_data);	
				}
			}  
			/**
			* 
			* Sub Category
			* 
			*/
			
			if($sub_cat){
				
				$this->Products->deleteProductSubCategories($product_id);
				if($sub_cat != 'No Data Found'){
				 foreach($sub_cat as $sub_cat){
				  $sub_cat_select_data = array('pro_id'=> $product_id, 'sub_cat_id'=> $sub_cat, 'create_date'=> date('Y-m-d H:i:s'), 'modify_date' => date('Y-m-d H:i:s'));
				  $add_product_other_details = $this->BlankModel->addTableData(PRODUCT_SUB_CATEGORIES, $sub_cat_select_data);
				 }	
				}
				
			}
  		  $this->session->set_flashdata('succ', 'Product Updated successfully');
	      $redirect_url=base_url().'admin-products/products/editProduct/'.$product_id;
	      header('location:'.$redirect_url);
		 }
	   }
	   
	  common_viewloader('admin-products/product_edit', $data);
	}
	
	/**
	* Product Details
	*/
	
	public function productOtherDetails($product_id=0){
		
		$data = array();			
		$this->session_checked($is_active_session = 1);	
		$data['product'] = $this->Products->getProductData($product_id);
        
        if($this->input->post()){
			//$this->form_validation->set_rules('stone_color', 'Stone Color', 'trim|required|xss_clean');
			$this->form_validation->set_rules('stone_shape', 'Stone Shape', 'trim|required|max_length[150]|xss_clean');
			//$this->form_validation->set_rules('plating', 'Plating', 'trim|required|xss_clean');
			$this->form_validation->set_rules('unit_pcs', 'Unit Pcs', 'required|trim|xss_clean');
			//$this->form_validation->set_rules('weight', 'Weight', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('pro_qty', 'Product Quantity', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('size', 'Product Size', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('size_unit[]', 'Size Unit', 'trim|required|xss_clean');
			/*$this->form_validation->set_rules('amount', 'Amount', 'trim|required|xss_clean');
			*/
	
		  if ($this->form_validation->run() === TRUE){
			$stone_color  = $this->input->post('stone_color');
			$stone_shape  = $this->input->post('stone_shape');
			$collection   = $this->input->post('collection');
			$plating      = $this->input->post('plating');
			$purity       = $this->input->post('purity');
			$unit_pcs     = $this->input->post('unit_pcs');
			$unit_packet  = $this->input->post('unit_packet');
			$weight       = $this->input->post('weight');
			$pro_qty      = $this->input->post('pro_qty');
			$amount       = $this->input->post('amount');
			$size         = $this->input->post('size');
			$post_size_unit = $this->input->post('size_unit[]');

			$size_unit_join = join(",", $post_size_unit);
			$size_unit = rtrim($size_unit_join, ",");
				
		//--------Product image upload section-----------//
	       $product_oth_image = "";
	       if(!empty($_FILES['pro_other_image']['name'])){
           
	       $product_uploads = image_uploads('products', $thumb_Size_width = '200', $thumb_Size_hight = '150', 'pro_other_image');
			
		   if(is_array($product_uploads)){
		 	$product_oth_image = $product_uploads['file_name'];
		   }		
		   if(!is_array($product_uploads)){
		  	$this->session->set_flashdata('Err', $product_uploads);
		 	header('location:'.base_url().'admin-products/products/productOtherDetails/'.$product_id);
		   }
		  }
		 
		 
		 
  		  $product_details_data = array(  
  		                          'prod_id'    => $product_id,
  		                          'stone_color'=> $stone_color,
						  		  'stone_shape'=> $stone_shape, 
						  		  'image'      => $product_oth_image, 
						  		  'collection' => $collection, 
						  		  'plating'    => $plating, 
						  		  'purity'     => $purity, 
						  		  'unit_pcs'   => $unit_pcs, 
						  		  'unit_packet'=> $unit_packet, 
						  		  'weight'     => $weight, 
						  		  'pro_qty'    => $pro_qty, 
						  		  'amount'     => $amount, 
						  		  'size'       => $size, 
						  		  'size_unit'  => $size_unit, 
						  		  'modify_date'=> date('Y-m-d H:i:s'));
				
		  $product_details_edit = $this->BlankModel->addTableData(PRODUCT_DETAILS, $product_details_data);
  		  $this->session->set_flashdata('succ', 'Product details Updated successfully');
	      $redirect_url=base_url().'admin-products/products/productOtherDetails/'.$product_id;
	      header('location:'.$redirect_url);
		 }
	   }
			
	   /**
	   * 
	   * Get Product details
	   * 
	   */
	  
	   $data['product_other_details'] = $this->Products->getProductOtherDetails($product_id);
	   common_viewloader('admin-products/product_details', $data);
	}
	
	
	/**
	* Product details edit
	*/
	
	public function editProductOtherDetails($o_id=0){
		$data = array();			
		$this->session_checked($is_active_session = 1);	
	  
	  /**
	   * 
	   * Get Product details
	   * 
	   */
	  
	   $data['product_other_details'] = $this->Products->getProductOtherDetailsByDetId($o_id);
	  
        if($this->input->post()){
			//$this->form_validation->set_rules('stone_color', 'Stone Color', 'trim|required|xss_clean');
			$this->form_validation->set_rules('stone_shape', 'Stone Shape', 'trim|required|max_length[150]|xss_clean');
			//$this->form_validation->set_rules('plating', 'Plating', 'trim|required|xss_clean');
			$this->form_validation->set_rules('unit_pcs', 'Unit Pcs', 'required|trim|xss_clean');
			//$this->form_validation->set_rules('weight', 'Weight', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('pro_qty', 'Product Quantity', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('size', 'Product Size', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('size_unit[]', 'Size Unit', 'trim|required|xss_clean');
		/*	$this->form_validation->set_rules('amount', 'Amount', 'trim|required|xss_clean');
		*/	
	
		  if($this->form_validation->run() === TRUE){
			  $stone_color  = $this->input->post('stone_color');
	    	  $stone_shape  = $this->input->post('stone_shape');
	    	  $collection   = $this->input->post('collection');
	    	  $plating      = $this->input->post('plating');
	    	  $purity       = $this->input->post('purity');
	    	  $unit_pcs     = $this->input->post('unit_pcs');
	    	  $unit_packet  = $this->input->post('unit_packet');
	    	  $weight       = $this->input->post('weight');
	    	  $pro_qty      = $this->input->post('pro_qty');
	    	  $amount       = $this->input->post('amount');
	    	  $size         = $this->input->post('size');
	    	  $post_size_unit    = $this->input->post('size_unit[]');
	    	  
	    	  $size_unit_join = join(",", $post_size_unit);
	    	  $size_unit = rtrim($size_unit_join, ",");
	    	  
				
		//--------Product image upload section-----------//
	       $product_image = "";
	        
	       if($_FILES['image']['name']==''){
		    $product_image = $data['product_other_details']->image;		
		   }
		   else
		   {	       
	        $product_uploads = image_uploads('products', $thumb_Size_width = '200', $thumb_Size_hight = '150', 'image');
			
		   if(is_array($product_uploads)){
		 	$product_image = $product_uploads['file_name'];
		   }		
		   if(!is_array($product_uploads)){
		  	$this->session->set_flashdata('Err', $product_uploads);
		 	header('location:'.base_url().'admin-products/products/editProductOtherDetails/'.$o_id);
		   }
		  }
		 	
		  $conditions = " ( `id` = '".$o_id."' )";
  		  $product_details_data = array(  
  		                          'stone_color'=> $stone_color,
						  		  'stone_shape'=> $stone_shape, 
						  		  'image'      => $product_image, 
						  		  'collection' => $collection, 
						  		  'plating'    => $plating, 
						  		  'purity'     => $purity, 
						  		  'unit_pcs'   => $unit_pcs, 
						  		  'unit_packet'=> $unit_packet, 
						  		  'weight'     => $weight, 
						  		  'pro_qty'    => $pro_qty, 
						  		  'amount'     => $amount, 
						  		  'size'       => $size, 
						  		  'size_unit'  => $size_unit, 
						  		  'modify_date'=> date('Y-m-d H:i:s'));
				
		  $product_details_edit = $this->BlankModel->editTableData(PRODUCT_DETAILS, $product_details_data, $conditions);
  		  $this->session->set_flashdata('succ', 'Product details Updated successfully');
	    
	      $redirect_url=base_url().'admin-products/products/editProductOtherDetails/'.$o_id;
	      header('location:'.$redirect_url);
		 }
	   }
			
	  
	   common_viewloader('admin-products/product_details_edit', $data);
	}
	
		
}
?>
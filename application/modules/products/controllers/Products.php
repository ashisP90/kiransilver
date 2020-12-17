<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Products extends MY_Controller {
	function __construct(){
		parent::__construct();	
		$this->load->model('Products_model', 'Products');
	}
	
	/**
	* 
	* Index Page
	* 
	*/
	
    public function index(){
	    $current_user_id = $this->session->userdata('user_id');	
	   /**
		* 
		* All Products
		* 
		*/
		
		/**
		* 
		* Header Menu Search
		* 
		*/
				
		if(isset($_REQUEST['search_data'])){
			
		
		if(empty($current_user_id)){
			$limit_condition = ' LIMIT '. PRODUCT_SHOW_LIMIT; 
		}
		else{
			$limit_condition = '';
		}
			
		$cat_id       = $_REQUEST['search_category']; 
		$product_name = $_REQUEST['product_name']; 
	
		$data['products'] = $this->Products->getSearchProducts($cat_id, $product_name, $limit_condition);	
		
		}
		
		/**
		* 
		* Left sidebar search
		* 
		*/
		
		elseif(isset($_REQUEST['sidebar_search'])){
 
       	if(empty($current_user_id)){
			$limit_condition = ' LIMIT '. PRODUCT_SHOW_LIMIT; 
		}
		else{
			$limit_condition = '';
		}			
			
   			
		$cat_products = array();
		$sub_cat_products = array();
		$cat_id = $this->input->post('category'); 
		$sub_cat_id = $this->input->post('sub_category'); 
	    if($cat_id){
		   $cat_products = $this->Products->getCatSearchProducts($cat_id, $limit_condition);	
		}
		if($sub_cat_id){
		   $sub_cat_products = $this->Products->getSubCatSearchProducts( $sub_cat_id, $limit_condition);				
		}
	
		$total_products = array_merge($cat_products, $sub_cat_products);
		$temp = array_unique(array_column($total_products, 'id'));
        $data['products'] = array_intersect_key($total_products, $temp);
		
		}
		
		/**
		* Get Main Category Products By CatId
		*/
		
		elseif(isset($_REQUEST['cat'])){
			
	    if(empty($current_user_id)){
		    $limit = PRODUCT_SHOW_LIMIT;
			$start = 0;
		}
		else{
			$limit = '';
			$start = '';
		}			
						
		$cat_id = $_REQUEST['cat']; 
		$data['products'] = $this->Products->getCatProductsByCatId($cat_id, $limit, $start);
		}
		
		/**
		* Get Sub Category Products By Sub CatId
		*/
		
		elseif(isset($_REQUEST['sub_cat'])){			
		$sub_cat_id = $_REQUEST['sub_cat']; 
		
		if(empty($current_user_id)){
			$limit_condition = ' LIMIT '. PRODUCT_SHOW_LIMIT; 
		}
		else{
			$limit_condition = '';
		}	
		$data['products'] = $this->Products->getProductsBySubCatId($sub_cat_id, $limit_condition);
		}
		
		/**
		* 
		* @ Defualt Products
		* 
		*/
		
		else{
	   
	    if(empty($current_user_id)){
		    $limit = PRODUCT_SHOW_LIMIT;
			$start = 0;
		}
		else{
			$limit = '';
			$start = '';
		}
			
		$all_products_conditions = " (`status` = 'Active' )";
		$data['products'] = $this->BlankModel->getTableData(PRODUCTS, $all_products_conditions, '*', '2','id','id','DESC', $limit, $start);
		}
		
		/**
		* 
		* All Categories
		* 
		*/
		$all_cat_conditions = " (`status` = 'Active' )";
		$data['all_main_category'] = $this->BlankModel->getTableData(CATEGORIES, $all_cat_conditions, '*', '2','', 'id', 'DESC');
		
		front_common_viewloader('products/products_list', $data);
			
	 }
		
	 /**
	 *  Products Details
	 */	
		
	public function productDetails($pro_id=0){
		$data =array();		
	    $current_user_id = $this->session->userdata('user_id');	
	   
		if($pro_id>0){
        $data['product'] = $this->Products->productDetails($pro_id);
        $data['product_other_details'] = $this->Products->productOtherDetails($pro_id);
        
        $data['modal_product_other_details'] = $this->Products->modalProductOtherDetails($pro_id);
        
        
        $data['bulk_products'] = array();
        if($current_user_id){
        $data['bulk_products'] = $this->Products->getBulkProducts($current_user_id, $pro_id);
		}
     	
     	front_common_viewloader('products/product_details', $data);
		}
	   
	  }

    /**
	* Bulk Add
	* 
	* @return
	*/ 
     
    public function blukAdd($pro_id){
	
	$current_user_id = $this->session->userdata('user_id');	
	
	
	/*   
	$size         = $this->input->post('size');
	$stone_color  = $this->input->post('stone_color');
	$weight       = $this->input->post('weight');
	
	$_condition = " ( `size` = '".$size."' AND `stone_color` = '".$stone_color."' AND `weight` = '".$weight."' AND `prod_id` = '".$pro_id."' )";
	$product_details = $this->BlankModel->getTableData(PRODUCT_DETAILS, $_condition, 'id', 1);*/
	
	$select_product_details = $this->input->post('select_product_details[]');
	$quantity     = $this->input->post('quantity[]');

    if(!empty($select_product_details)) {
	for ($i=0; $i<count($select_product_details); $i++){	
	
	  $quantity     = $this->input->post('quantity_'.$select_product_details[$i]);
	  $bulk_products = array(
                'user_id'       => $current_user_id,
                'product_id'    => $pro_id,
                'product_oth_id'=> $select_product_details[$i],
                'qty'           => $quantity
        );
       $bluk_product_add = $this->BlankModel->addTableData('bulk_products', $bulk_products);	
      }

	}
	
	redirect('products/'.$pro_id);	
			
	} 
      
  		
	/**
	* Cart Page
	*/	
		 
    function addToCart($pro_id ){
        $weight_sql   = "";
		$size         = $this->input->post('size');
		$stone_color  = $this->input->post('stone_color');
		$weight       = $this->input->post('weight');
		$quantity     = $this->input->post('quantity');
        if($weight){
		 $weight_sql = " AND `weight` = '".$weight."'";
	     }
       
		$_condition = " ( `size` = '".$size."' AND `stone_color` = '".$stone_color."' ".$weight_sql." AND `prod_id` = '".$pro_id."'  )";
		$product_details = $this->BlankModel->getTableData(PRODUCT_DETAILS, $_condition, 'id', 1);
       
         // Fetch specific product by ID
        $product = $this->Products->productDetailsByProidProdet($pro_id, $product_details->id);
 
        // Add product to the cart
        $data = array(
            'id'         => $product->pro_det_id,
            'main_pro_id'=> $pro_id,
            'qty'        => $quantity,
            'weight'     => $product->weight,
            'size'       => $product->size,
            'size_unit'  => $product->size_unit,
            'stone_color'=> $product->stone_color,
            'name'     => trim($product->pname),
            'image'    => ($product->image ? $product->image : $product->product_image),  
            'price'    => ($product->amount ? $product->amount : 0.1),     
        );
   
        $this->cart->insert($data);
  
        // Redirect to the cart page
        redirect('cart/');
     }
	
	/**
	* Multy Cart 
	*/	
		 
    function bulkAddToCart($pro_id){
        $current_user_id = $this->session->userdata('user_id');	
	   
        $bulk_products = array();
        if($current_user_id){
        $bulk_products = $this->Products->getBulkProducts($current_user_id, $pro_id);
		}
        if($bulk_products){
        foreach($bulk_products as $bulk_product){
        $product = $this->Products->productDetailsByProidProdet($pro_id, $bulk_product->product_oth_id);
     
        // Add product to the cart
        $data = array(
            'id'         => $bulk_product->product_oth_id,
            'main_pro_id'=> $product->id,
            'qty'        => $bulk_product->qty,
            'weight'     => $product->weight,
            'size'       => $product->size,
            'size_unit'  => $product->size_unit,
            'stone_color'=> $product->stone_color,
            'name'     => trim($product->pname),
            'image'    => ($product->image ? $product->image : $product->product_image),  
            'price'    => ($product->amount ? $product->amount : 0.1),   
        );
      
        $this->cart->insert($data);
		
		}  	
       
  
       } 
     
      
        redirect('cart/');
     }
	
	
	/**
	* Bulk product add section
	* 
	*
	*/
	
	/**
	* Product details by size
	*/
	public function getProductOtherdetailsBySize(){
		
        $size = $_REQUEST['size'];
        $product_id = $_REQUEST['product_id'];
	  	$_condition = " ( `size` = '".$size."' AND `prod_id` = '".$product_id."' )";
	    $product_details = $this->BlankModel->getTableData(PRODUCT_DETAILS, $_condition, '*', 2,'stone_color');
	    $return_data ='';
	    if($product_details){
        $return_data .=' 
                     <select class="niceselect_option" name="size_unit" id="size_unit">';
                         foreach( $product_details as $pro_det ){ 								       
        $return_data .='<option value="'.$pro_det->size_unit.'">'.$pro_det->size_unit.'</option>';
                        }
        $return_data .='</select>';
	
		$return_data .='<label>&nbsp;&nbsp;Color</label>&nbsp;&nbsp;&nbsp;
            <select class="niceselect_option stone_color" id="stone_color" name="stone_color" onchange="getProductOtherdetailsByColor(this.value, '.$product_id.' );">';
             foreach( $product_details as $pro_det ){ 								       
        $return_data .='<option value="'.$pro_det->stone_color.'">'.$pro_det->stone_color.'</option>';
           
            }
        $return_data .='</select>
         <span class="product_variant return_weight" id="return_weight">
          
            <label>&nbsp;&nbsp;Weight</label>&nbsp;&nbsp;&nbsp;
            <select class="niceselect_option weight" id="weight1" name="weight">';
               foreach( $product_details as $pro_det ){  							       
        $return_data .='<option value="'.$pro_det->weight.'">'.$pro_det->weight.'</option>';
              }
        $return_data .='</select> </span>';
       
        $return_data .=" 
					<script>
						function getProductOtherdetailsByColor(color, product_id){
							if(product_id){
							var ajaxurl = '".base_url()."products/getProductOtherdetailsByColor/';
							$.ajax({
								url: ajaxurl,
								type: 'POST',
								data: {color : color, product_id : product_id},
								success: function(response){			
									 $('.return_weight').html(response);
									 }
					 			});
					 		}	
						}
					</script>"; 
			
					  
		    echo $return_data;  
		  }
	     else{
		 	echo 'no data found';
		 }
	   
	  } 
	  
    /**
	* Product details by size
	*/
	public function getProductOtherdetailsByColor(){
		
        $color = $_REQUEST['color'];
        $product_id = $_REQUEST['product_id'];
	  	$_condition = " ( `stone_color` = '".$color."' AND `prod_id` = '".$product_id."' )";
	    $product_details = $this->BlankModel->getTableData(PRODUCT_DETAILS, $_condition, '*', 2);
	  
	    if($product_details) {
	
        $return_data ='<label>&nbsp;&nbsp;Weight</label>&nbsp;&nbsp;&nbsp;
                      <select class="niceselect_option weight" id="weight1" name="weight">';
                    foreach( $product_details as $pro_det ){  							       
        $return_data .='<option value="'. $pro_det->weight.'">'.$pro_det->weight.'</option>';
                    }
        $return_data .='</select>'; 
		 echo $return_data;  
		}
	     else{
		 	echo 'no data found';
		 }
	   
	  } 
		
}
?>
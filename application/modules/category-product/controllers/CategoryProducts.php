<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class CategoryProducts extends MY_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('CategoryProducts_model', 'CategoryProducts');
	}
	
	/**
	* 
	* Index Page
	* 
	*/
	
	public function index($cat_id=0){
		$data =array();		
		
		/**
		* 
		* All Categories
		* 
		*/
		$all_cat_conditions = " (`status` = 'Active' AND `id` <> $cat_id )";
		$data['all_main_category'] = $this->BlankModel->getTableData(CATEGORIES, $all_cat_conditions, '*', '2');
		
		/**
		* 
		* Main Category
		* 
		*/
		$cat_conditions = " ( `id` = '$cat_id' AND `status` = 'Active' )";
		$data['category'] = $this->BlankModel->getTableData(CATEGORIES, $cat_conditions, '*', '1');
		
		/**
		 * 
		 * Sub Category List
		 * 
		 */
		 
		$sub_cat_conditions = " ( `cat_id` = '".$cat_id."' AND `status` = 'Active')";
		$select_fields = '*';
		$is_multy_result = 2;	

		$data['sub_categories'] = $this->BlankModel->getTableData(SUB_CATEGORIES, $sub_cat_conditions, $select_fields, $is_multy_result, '', 'id', 'DESC');
		 
		if(empty( $data['sub_categories'])){
		/**
		* 
		* Category wise product
		* 
		*/	
        $data['products'] = $this->CategoryProducts->getProductsByCateId($cat_id);
		front_common_viewloader('products/products_list', $data);
		}
	    else{
	  	front_common_viewloader('category-product/sub_cat_list', $data);	  	
	    }
	  }
		
		
	 /**
	 * Sub Category Products
	 */	
		
	   public function subCategoryProducts($sub_cat_id=0){
		
		$data =array();		
		 
		$main_cat_id = getMainCategoryDetailsBySubCatId($sub_cat_id);
		$cat_id = $main_cat_id->cat_id;
		 
		/**
		* 
		* All Categories
		* 
		*/
		$all_cat_conditions = " (`status` = 'Active')";
		$data['all_main_category'] = $this->BlankModel->getTableData(CATEGORIES, $all_cat_conditions, '*', '2');
		
		
		/**
		* 
		* Main Category
		* 
		*/
		$cat_conditions = " ( `id` = '$cat_id' AND `status` = 'Active' )";
		$data['category'] = $this->BlankModel->getTableData(CATEGORIES, $cat_conditions, '*', '1');
		 
		 
		 
		if($sub_cat_id>0){
        $data['products'] = $this->CategoryProducts->getProductsBySubCatId($sub_cat_id);
		front_common_viewloader('products/products_list', $data);
		}
	   
	  }

	
	
		
}
?>
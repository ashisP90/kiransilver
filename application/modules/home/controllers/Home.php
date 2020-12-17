<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Home extends MY_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Home_model', 'Home');		
	}
	
	/**
	* 
	* Index Page
	* 
	*/
	
	public function index(){
		$data=array();			
		
		/**
		* 
		* Categories
		* 
		*/
		
		$select_fields = '*';
    	$is_multy_result = 2;
		$condition = " ( `status` = 'Active' AND `is_home` = '1' )";
		
		$data['categories'] = $this->BlankModel->getTableData(CATEGORIES, $condition, $select_fields, $is_multy_result, '', 'id', 'DESC');
		
		
		$pro_condition = " (`new_arrivals` = '1' AND `status` = 'Active')";
		
		$data['new_arrivals'] = $this->BlankModel->getTableData(PRODUCTS, $pro_condition, $select_fields, $is_multy_result,'', 'id', 'DESC');	
					
		
		$banners_condition = " (`status` = 'Active')";
		
		$data['banners'] = $this->BlankModel->getTableData(Banners, $banners_condition, $select_fields, $is_multy_result,'', 'id', 'DESC');	
					
				
		front_common_viewloader('home/index', $data);
	}
	
	
		
}
?>
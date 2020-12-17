<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Categories extends MY_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Categories_model', 'Categories');		
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
		* Categories
		* 
		*/
		if(isset($_REQUEST['edit'])){
		$cat_id = $_REQUEST['edit'];
    	$edit_conditions = " ( `id` = '$cat_id' AND `status` = 'Active' )";
		$data['edit_category'] = $this->BlankModel->getTableData(CATEGORIES, $edit_conditions, '*', '1','','id', 'DESC');
				
		}		
		
		$select_fields = '*';
    	$is_multy_result = 2;
		$conditions = " ( `status` = 'Active' )";
		
		$data['categories'] = $this->BlankModel->getTableData(CATEGORIES, $conditions, $select_fields, $is_multy_result, '', 'id', 'DESC');			
				
		common_viewloader('categories/index', $data);
	}
	
	/**
	* 
	* Product ADD
	*/
	
	public function addCategory(){
		$this->session_checked($is_active_session = 1);	
	    //check whether submit button was clicked or not
        if($this->input->post('submit')){
        	
    	  $category_name  = $this->input->post('cat_name');
    	  $category_uploads  = image_uploads('categories',$thumb_Size_width = '100', $thumb_Size_hight = '80', 'cat_image');
          $cat_img = "";
     	/*  if( !is_array($category_uploads)) {
				$this->session->set_flashdata('Err', $category_uploads);
				header('location:'.base_url().'categories');	
				exit;    
			   }
		  else*/
		  if(is_array($category_uploads )){
			$cat_img = $category_uploads['file_name'];
		    }
		    else{
				$cat_img = "";
			}
			   
			   	//save the file info in the database
				$category_data = array('name'=> $category_name, 'image'=> $cat_img, 'status'=> 'Active', 'create_date'=> date('Y-m-d H:i:s'), 'modify_date' => date('Y-m-d H:i:s'));
				
				$insert_category_data = $this->BlankModel->addTableData(CATEGORIES, $category_data);
			
			    if($insert_category_data > 0){
				$this->session->set_flashdata('succ', 'New Catgory Added successfully');
				header('location:'.base_url().'categories');	
				exit; 	
				}
				
		 }
	
	}
	
	/**
	* Category EDIT
	*/
	
	public function editCategory($cat_id){
		$this->session_checked($is_active_session = 1);	
    	$conditions = " ( `id` = '$cat_id' AND `status` = 'Active' )";
		$category = $this->BlankModel->getTableData(CATEGORIES, $conditions, '*', '1');	
		
		/**
		* 
		* @categories
		* 
		*/
		
		if($this->input->post()){
		   $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|xss_clean');
				
		 if ($this->form_validation->run() === TRUE) {
		  $cat_name  = $this->input->post('cat_name');
    
		 if($_FILES['cat_image']['name']==''){
		   $category_image = $category->image;		
		 }
		 else
		 {
		   $category_uploads  = image_uploads('categories',$thumb_Size_width = '100', $thumb_Size_hight = '80', 'cat_image');
			
		   if(is_array($category_uploads)){
		 	$category_image = $category_uploads['file_name'];
		 	
		 	 if(!empty($category->image)){
			 unlink('assets/uploads/categories/'.$category->image);
		     }	
		 	
		   }		
		   if(!is_array($category_uploads)){
		  	$this->session->set_flashdata('Err', $category_uploads);
		 	header('location:'.base_url().'categories?edit='.$cat_id);
		   }
		  }
			
		  $edit_conditions = " ( `id` = '".$cat_id."' )";
 		  $category_data = array( 'name'=> $cat_name, 
						 		  'image'=> $category_image, 
						 		  'status'=> 'Active',
						 		  'modify_date' => date('Y-m-d H:i:s'));
  		
  		  $category_edit = $this->BlankModel->editTableData(CATEGORIES, $category_data, $edit_conditions);
  			  
  		  $this->session->set_flashdata('succ', 'Category Updated successfully');
	      $redirect_url=base_url().'categories';
	      header('location:'.$redirect_url);
	      exit;
		 }
	   }
	   
	}
	
	

	public function subCategories($cat_id=0){
		
		$data = array();			
		$this->session_checked($is_active_session = 1);	
		$data['category_details'] = $this->Categories->getCategoriesData($cat_id);
        
        if($this->input->post()){				
		  $this->form_validation->set_rules('sub_cat_name', 'Sub Category Name', 'trim|required|xss_clean');
		  if ($this->form_validation->run() === TRUE) {			
		  $sub_cat_name  = $this->input->post('sub_cat_name');
    	  
    	  $sub_category_data = array('scname'=> $sub_cat_name, 'cat_id'=> $cat_id, 'status'=> 'Active', 'create_date'=> date('Y-m-d H:i:s'), 'modify_date' => date('Y-m-d H:i:s'));
								
		  $insert_sub_category_data = $this->BlankModel->addTableData(SUB_CATEGORIES, $sub_category_data);	  
  		  $this->session->set_flashdata('succ', 'Sub Category Added Successfully');	    
	      $redirect_url=base_url().'categories/subCategories/'.$cat_id;
	      header('location:'.$redirect_url);
		 }
	   }
			
	   /**
	   * 
	   * Get Sub Category details
	   * 
	   */
	  
	   $data['sub_categories'] = $this->Categories->getSubCategoryDetails($cat_id);
   				
	   common_viewloader('categories/sub_categories', $data);
	}
	
	
	
	public function editSubCategory($sub_cat_id){
		
	    $this->session_checked($is_active_session = 1);	
    	$conditions = " ( `id` = '$sub_cat_id' AND `status` = 'Active' )";
		$sub_category = $this->BlankModel->getTableData(SUB_CATEGORIES, $conditions, '*', '1');	
		
		/**
		* 
		* @categories
		* 
		*/
		
		if($this->input->post()){
		   $this->form_validation->set_rules('sub_cat_name', 'Sub Category Name', 'trim|required|xss_clean');
				
		 if ($this->form_validation->run() === TRUE) {
		  $sub_cat_name  = $this->input->post('sub_cat_name');
        
          $edit_conditions = " ( `id` = '".$cat_id."' )";
 		  $category_data = array( 'scname'=> $sub_cat_name,
						 		  'status'=> 'Active',
						 		  'modify_date' => date('Y-m-d H:i:s'));
  		
  		  $category_edit = $this->BlankModel->editTableData(CATEGORIES, $category_data, $edit_conditions);
  			  
  		  $this->session->set_flashdata('succ', 'Sub Category Updated successfully');
	      $redirect_url = base_url().'categories';
	      header('location:'.$redirect_url);
	      exit;
		 }
	   }	
		
		
		
	}
	
	/**
	* Ajax Home Category
	*/
	
	public function homeCategory() {
   	
   	  if(isset($_POST['cat_id'])) {
   		
		$add_is_home ="";
		$change_is_home ="";
		$cat_id = $_POST['cat_id'];
		$select_conditions = " ( `id` = '".$cat_id."')";
		$select_fields = 'id, is_home';
		$is_multy_result = 1;
		$productList = $this->BlankModel->getTableData(CATEGORIES, $select_conditions, $select_fields, $is_multy_result);

		if($productList->is_home == '1'){
		$post_data = array('is_home' => '0');	
		$change_is_home = $this->BlankModel->editTableData(CATEGORIES, $post_data, $select_conditions);
	    }
		else{
		$post_data = array('is_home' => '1');	
		$add_is_home = $this->BlankModel->editTableData(CATEGORIES, $post_data, $select_conditions);
		}	

		if($add_is_home){
		 echo 'add';
		}
		else if($change_is_home){
		 echo 'removed';
		 }
		}
   
    } 	
    
    
    /**
	* Ajax Menu Category
	* 
	* @return
	*/
    
    
    public function menuCategory() {
   	
   	  if(isset($_POST['cat_id'])) {
   		
		$add_product_new_arrival ="";
		$change_product_new_arrival ="";
		$cat_id = $_POST['cat_id'];
		$select_conditions = " ( `id` = '".$cat_id."')";
		$select_fields = 'id, is_menu';
		$is_multy_result = 1;
		$productList = $this->BlankModel->getTableData(CATEGORIES, $select_conditions, $select_fields, $is_multy_result);

		if($productList->is_menu == '1'){
		$post_data = array('is_menu' => '0');	
		$change_product_new_arrival = $this->BlankModel->editTableData(CATEGORIES, $post_data, $select_conditions);
	    }
		else{
		$post_data = array('is_menu' => '1');	
		$add_product_new_arrival = $this->BlankModel->editTableData(CATEGORIES, $post_data, $select_conditions);
		}	

		if($add_product_new_arrival){
		 echo 'add';
		}
		else if($change_product_new_arrival){
		 echo 'removed';
		 }
		}
   
    } 
	
	
		
}
?>
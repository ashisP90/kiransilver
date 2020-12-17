<?php
if(!defined('BASEPATH')) EXIT("No direct script access allowed");

if(!function_exists('common_viewloader')){
	function common_viewloader($viewfilepath='', $param=array()){
		$CI = &get_instance();
		$CI->load->view('includes/back_end/header', $param);
		
		if($viewfilepath!=''){
			$CI->load->view($viewfilepath, $param);
		}
		$CI->load->view('includes/back_end/footer', $param );
	}
}

if(!function_exists('front_common_viewloader')){
	function front_common_viewloader($viewfilepath='',$param=array()){
		$CI = &get_instance();
		$CI->load->view('includes/front_end/header', $param);
		
		if($viewfilepath!=''){
			$CI->load->view($viewfilepath,$param);
		}
		$CI->load->view('includes/front_end/footer', $param);
	}
}


// display function 
if(!function_exists('pr')){
	function pr($display_data=array()){
		if(!empty($display_data)){
			echo "<pre>";
			print_r($display_data);
			echo "</pre>";
		}
	}
}

function short_description($string,$count_value){
		$string = strip_tags($string);
		if (strlen($string) > $count_value) {
		$stringCut = substr($string, 0, $count_value);
		$string = substr($stringCut, 0, strrpos($stringCut, ' ')).' ...'; 
		}
		return $string;
	}


if(!function_exists('get_user_details')){
	function get_user_details($logged_in_id){
		$CI = & get_instance();	
		if(!empty($logged_in_id)){
		$conditions = " ( `id` = '".$logged_in_id."' AND `is_deleted` <> '1' AND `is_active` = '1' )";
		$select_fields = '*';
		$is_multy_result = 1;
		$admindata = $CI->BlankModel->getTableData(SYS_ADMIN, $conditions, $select_fields, $is_multy_result);
		return $admindata;
		}
	}	
}
  
  if(!function_exists('image_uploads')){
	
	function image_uploads($folder_name, $thumb_Size_width, $thumb_Size_hight, $file_name){		
		    $CI = & get_instance();	
		    //file upload destination
            $config['upload_path'] = './assets/uploads/'.$folder_name;
            $config['allowed_types'] = 'jpg|JPG|png|PNG|JPEG|jpeg|mp4';
            $config['max_size']   = '100000000';
  		    $config['max_width']  = '1024000';
  		    $config['max_height'] = '768000';
            $config['max_filename'] = '255';
            $config['encrypt_name'] = TRUE;
         
            //thumbnail path
            $thumb_path = './assets/uploads/'.$folder_name.'/thumb/';
            //  $thumb_path = './assets/uploads/thumb_new/';
            //store file info once uploaded
            $CI->load->library('upload', $config);
            $CI->load->library('image_lib');
            
            $file_data = array();
            //check for errors
            $is_file_error = FALSE;
            //check if file was selected for upload
           if (!$_FILES) {
                $is_file_error = TRUE;
				$display_error  =  handle_error('Select at least one file.');
            }
          
            //if file was selected then proceed to upload
            if (!$is_file_error) {
                //load the preferences
                //$CI->load->library('upload', $config);
                //check file successfully uploaded. 'file_name' is the name of the input
               
                if (!$CI->upload->do_upload($file_name)) {
                    //if file upload failed then catch the errors
                    $display_error  = handle_error($CI->upload->display_errors());
                    $is_file_error = TRUE;
                 } else {
                	  
                    //store the file info
                    $file_data = $CI->upload->data();
                    if (!is_file($thumb_path . $file_data['file_name'])) {
                        $thumb_config = array(
                            'source_image' => $file_data['full_path'], //get original image
                            'new_image' => $thumb_path,
                            'maintain_ratio' => true,
                            'width' => $thumb_Size_width,
                            'height' => $thumb_Size_hight
                        );
                       // $CI->load->library('image_lib', $config); //load library
                       
                         $CI->image_lib->initialize($thumb_config);
                        $CI->image_lib->resize(); //do whatever specified in config
                    }
                }
            }
            // There were errors, we have to delete the uploaded files
            if ($is_file_error) {
                if ($file_data) {
                    $file = './assets/uploads/'.$folder_name.$file_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                    $thumb = $thumb_path . $file_data['file_name'];
                    if ($thumb) {
                        unlink($thumb);
                    }
                }
                $message =  $display_error;
            }
		   if (!$is_file_error) {
                $message = $file_data; 
               	} 
		return $message;
	}
	
}
 

  
 
  function handle_error($err) {
     	$CI = & get_instance();	
        $error = $err . "\r\n";
        return $error;
    }
    
    
  if(!function_exists('getLoggedinDetails')){
	function getLoggedinDetails($logged_in_id){
		$CI = & get_instance();	
		if(!empty($logged_in_id)){
		$conditions = " ( `id` = '".$logged_in_id."')";
		$select_fields = '*';
		$is_multy_result = 1;
		$admindata = $CI->BlankModel->getTableData(USERS, $conditions, $select_fields, $is_multy_result);
		return $admindata;
		}
	}
  }  
  
  
  
  if(!function_exists('getUserDetails')){
	function getUserDetails($logged_in_id){
	 $CI = & get_instance();	
	 if(!empty($logged_in_id)){
		   
	  $CI->db->select('*');
	  $CI->db->from(USERS. ' user');
	  $CI->db->join(USERS_DETAIlS. ' user_det', 'user.id = user_det.user_id', 'LEFT');
	  $CI->db->where('user.id', $logged_in_id);
	  
	  return $CI->db->get()->row();
		
		
      }
	}
  }


	if(!function_exists('getRowData')){
		function getRowData($tablename, $conditions){		
			$CI = & get_instance();	
			if(!empty($tablename)){		
			$select_fields = '*';
			$is_multy_result = 1;
			$admindata = $CI->BlankModel->getTableData($tablename, $conditions, $select_fields, $is_multy_result);
			return $admindata;
			}
		}	
	}
	
	/**
	* 
	* Categories
	* 
	*/
	
	
	if(!function_exists('categories')){
		function categories(){
		$CI= & get_instance();
		
		$select_fields = '*';
    	$is_multy_result = 2;
		$conditions = " ( `status` = 'Active' )";
		
		$categories = $CI->BlankModel->getTableData(CATEGORIES, $conditions, $select_fields, $is_multy_result, '', 'id', 'DESC');	
		return $categories;
		}
	}	
	
	
	/**
	* 
	* Menu Categories
	* 
	*/
	
	if(!function_exists('menuCategories')){
		function menuCategories(){
		$CI= & get_instance();
		$select_fields = '*';
    	$is_multy_result = 2;
		$conditions = " ( `status` = 'Active' AND `is_menu` = '1' )";
		$categories = $CI->BlankModel->getTableData(CATEGORIES, $conditions, $select_fields, $is_multy_result, '', 'id', 'DESC');	
		return $categories;
		}
	}
	
	
	/**
	* 
	*Sub Category
	* 
	* @return
	*/
	 /**
	  * 
	  * Sub Category List by Category ID
	  */  
  	if(!function_exists('getSubCategoryListByCatId')){
	 function getSubCategoryListByCatId($cat_id){
  	 $CI= & get_instance();
	
  	 $sub_cat_conditions = " ( `cat_id` = '".$cat_id."' AND `status` = 'Active')";
	 $select_fields = '*';
	 $is_multy_result = 2;	
		
	 $sub_categories_list = $CI->BlankModel->getTableData(SUB_CATEGORIES, $sub_cat_conditions, $select_fields, $is_multy_result, '', 'id', 'DESC');	
	 return $sub_categories_list;		
	}  
  	
	}
	
	
	/**
	* Product Category
	*/
	
	if(!function_exists('getProductCategories')){
	   function getProductCategories($pro_id){		
		$CI = & get_instance();	
		if(!empty($pro_id)){		
		  $CI->db->select('cat.name, cat.id AS cat_id');
		  $CI->db->from(PRODUCT_CATEGORIES. ' pro_cat');
		  $CI->db->join(CATEGORIES. ' cat', 'cat.id = pro_cat.cat_id', 'INNER');
		  $CI->db->where('pro_cat.pro_id', $pro_id);
		  $CI->db->order_by('cat.name', 'ASC');
		 
		  return $CI->db->get()->result();
		  }
		}		
	}	
	
	/**
	* Product Sub Category
	*/
	
	if(!function_exists('getProductSubCategories')){
	   function getProductSubCategories($pro_id){		
		$CI = & get_instance();	
		if(!empty($pro_id)){		
		  $CI->db->select('sub_cat.scname, sub_cat.id AS sub_cat_id');
		  $CI->db->from(PRODUCT_SUB_CATEGORIES. ' pro_cat');
		  $CI->db->join(SUB_CATEGORIES. ' sub_cat', 'sub_cat.id = pro_cat.sub_cat_id', 'INNER');
		  $CI->db->where('pro_cat.pro_id', $pro_id);
		  $CI->db->order_by('sub_cat.scname', 'ASC');
		 
		  return $CI->db->get()->result();
		  }
		}		
	}
	
	/**
	* 
	* Get Main Category Details By SubCatId
	*/
	
	if(!function_exists('getMainCategoryDetailsBySubCatId')){
	
	function getMainCategoryDetailsBySubCatId($sub_cat_id){
	 
	 $CI= & get_instance();
  	 $sub_cat_conditions = " ( `id` = '".$sub_cat_id."' AND `status` = 'Active')";
	 $select_fields = '*';
	 $is_multy_result = 1;	
	 $category = $CI->BlankModel->getTableData(SUB_CATEGORIES, $sub_cat_conditions, $select_fields, $is_multy_result);	
	 return $category;
		
	}
  }
	
	
 function getCurrentDateTime(){
    return date('Y-m-d H:i:s');
 }

function wishlistProductCount($user_id){
	
	 $CI= & get_instance();
  	 $wishlist_conditions = " ( `user_id` = '".$user_id."' )";
	 $select_fields = '*';
	 $is_multy_result = 1;	
	 $wishlist = $CI->BlankModel->getTableData(WISHLIST, $wishlist_conditions, $select_fields, $is_multy_result);	
	 return $wishlist;
	
	
}


?>
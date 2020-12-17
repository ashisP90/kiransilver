<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categories_model extends MY_Model
{
	var $table = CATEGORIES;
	var $table_sub_categories = SUB_CATEGORIES;

	
	public function __construct()
    {
        parent::__construct();
    }
	   
    /**
	* Category details by cat id
	* 
	*/
    
    public function getCategoriesData($cat_id){
   	  
	 $cat_conditions = " ( `id` = '".$cat_id."' AND `status` = 'Active')";
	 $select_fields = '*';
	 $is_multy_result = 1;	
		
	 $sub_categories_details = $this->BlankModel->getTableData(CATEGORIES, $cat_conditions, $select_fields, $is_multy_result, '', 'id', 'DESC');	
	 return $sub_categories_details;	
	}
  	 
     /**
	  * 
	  * Sub Category List
	  */  
  	
  	public function getSubCategoryDetails($cat_id){
  	
  	 $sub_cat_conditions = " ( `cat_id` = '".$cat_id."' AND `status` = 'Active')";
	 $select_fields = '*';
	 $is_multy_result = 2;	
		
	 $sub_categories_details = $this->BlankModel->getTableData(SUB_CATEGORIES, $sub_cat_conditions, $select_fields, $is_multy_result, '', 'id', 'DESC');	
	 return $sub_categories_details;		
	}  
  	
  	   
  		
     /**
	 * 
	 * Deleted Product Categories
	 */
     public function deleteProductCategories($product_id){
  	
  	  $this->db->delete(PRODUCT_CATEGORIES, array('pro_id'=> $product_id)); 
  	  return true;      
     } 
     
    
  
		
}
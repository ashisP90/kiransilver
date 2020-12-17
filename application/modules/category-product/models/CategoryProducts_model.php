<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoryProducts_model extends MY_Model
{
	var $table = CATEGORIES;
	var $table_sub_categories = SUB_CATEGORIES;
	var $table_products = PRODUCTS;
	var $table_product_categories = PRODUCT_CATEGORIES;
	var $table_product_sub_categories = PRODUCT_SUB_CATEGORIES;

	
	public function __construct()
    {
        parent::__construct();
    }
	   
    /**
	* Category wise product by cat id
	* 
	*/
    
   
    public function getProductsByCateId($cat_id){
   	  
	$sql="SELECT * FROM `".$this->table_product_categories."`, `".$this->table_products."` 
		  WHERE
		  `".$this->table_products."`.`id` = `".$this->table_product_categories."`.`pro_id` 
          AND `".$this->table_product_categories."`.`cat_id`='$cat_id'";
	 $products_list_details = $this->BlankModel->customQuery($sql);
	 return $products_list_details;	
	
	}
  	 
  	 
  	 /**
	* Sub Category wise product by Sub Cat Id
	* 
	*/
 
  	 
    
  	 public function getProductsBySubCatId($sub_cat_id){
   	  
	 $sql="SELECT * FROM `".$this->table_product_sub_categories."`, `".$this->table_products."` 
		  WHERE
		  `".$this->table_products."` .`id` = `".$this->table_product_sub_categories."`.`pro_id` 
          AND `".$this->table_product_sub_categories."`.`sub_cat_id`='$sub_cat_id' ";
	 $products_list = $this->BlankModel->customQuery($sql);
	 return $products_list;	
	
	}
  	   
  	
     
    
  
		
}
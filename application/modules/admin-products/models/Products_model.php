<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products_model extends MY_Model {
	var $table = PRODUCTS;
	var $table_product_details = PRODUCT_DETAILS;
	var $table_categories = CATEGORIES;
	var $table_sub_categories = SUB_CATEGORIES;
	var $table_product_categories = PRODUCT_CATEGORIES;
	var $table_product_sub_categories = PRODUCT_SUB_CATEGORIES;
	
	
	public function __construct()
    {
        parent::__construct();
    }
	
	/**
	* Product List
	* 
	* @return
	*/
	
	public function getProductsList(){
   
	  $this->db->select('pro.*, cat.name, cat.id AS cat_id, sub_cat.scname, sub_cat.id AS sub_cat_id');
	  $this->db->from($this->table. ' pro');
	  $this->db->join($this->table_categories. ' cat', 'cat.id = pro.prod_cat', 'left');
	  $this->db->join($this->table_sub_categories. ' sub_cat', 'sub_cat.id = pro.sub_cat', 'left');
	  $this->db->where('pro.status', 'Active');
	  $this->db->order_by('pro.id', 'DESC');
	 
	  return $this->db->get()->result();
	 
    }
    
    /**
	* Product details by product id
	* 
	*/
    
    public function getProductData($pro_id){
   
	  $this->db->select('pro.*');
	  $this->db->from($this->table. ' pro');
	  $this->db->where('pro.id', $pro_id);
	  
	  return $this->db->get()->row();
	 
    }
  	   
  	/**
	  * 
	  * Get product other details by product id
	  * 
	  */   
  	
  	public function getProductOtherDetails($pro_id){
   
	  $this->db->select(' pro_dt.id AS pro_dt_id, pro_dt.pro_qty, pro_dt.image, pro_dt.stone_color, pro_dt.stone_shape, pro_dt.plating, pro_dt.collection, pro_dt.purity, pro_dt.unit_pcs, pro_dt.unit_packet, pro_dt.weight, pro_dt.size, pro_dt.amount');
	  $this->db->from($this->table_product_details. ' pro_dt');
	  $this->db->where('pro_dt.prod_id', $pro_id);
	  
	  return $this->db->get()->result();
	 
    }  	
    
    
    
    public function getProductOtherDetailsByDetId($pro_det_id){
   
	  $this->db->select('pro_dt.id AS pro_dt_id, pro_dt.pro_qty, pro_dt.image, pro_dt.stone_color, pro_dt.stone_shape, pro_dt.plating, pro_dt.collection, pro_dt.purity, pro_dt.unit_pcs, pro_dt.unit_packet, pro_dt.weight, pro_dt.size, pro_dt.size_unit, pro_dt.amount');
	  $this->db->from($this->table_product_details. ' pro_dt');
	  $this->db->where('pro_dt.id', $pro_det_id);
	  
	  return $this->db->get()->row();
	 
    }
    
    
  	
     /**
	 * 
	 * Deleted Product Categories
	 */
     public function deleteProductCategories($product_id){
  	
  	  $this->db->delete(PRODUCT_CATEGORIES, array('pro_id'=> $product_id));       
     } 
     
     /**
	 * 
	 * Deleted Product Categories
	 */
     public function deleteProductSubCategories($product_id){
  	
  	  $this->db->delete(PRODUCT_SUB_CATEGORIES, array('pro_id'=> $product_id));       
     }
  
		
}
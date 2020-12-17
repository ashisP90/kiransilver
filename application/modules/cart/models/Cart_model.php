<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products_model extends MY_Model
{
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
	* Product Details
	* 
	*/
   
     public function productDetails($pro_id){
   
	  $this->db->select('pro.*, pro_det.prod_id, pro_det.pro_qty, pro_det.image, pro_det.stone_color, pro_det.stone_shape, pro_det.plating, pro_det.collection, pro_det.purity, pro_det.unit_pcs, pro_det.unit_packet, pro_det.weight, pro_det.size, pro_det.amount ');
	  $this->db->from($this->table. ' pro');
	  $this->db->join($this->table_product_details. ' pro_det', 'pro.id = pro_det.prod_id', 'INNER');
	  $this->db->where('pro.id', $pro_id);
	  
	  return $this->db->get()->row();
	 
    }
       
   
    /**
	* 
	* Get Sub Cat Products By CatId
	*/
    public function getSubCatProductsByCatId($cat_id){
   
	  $this->db->select('pro.*');
	  $this->db->from($this->table. ' pro');
	  $this->db->join($this->table_product_sub_categories. ' products_sub', 'pro.id = products_sub.pro_id', 'inner');
	  $this->db->join($this->table_sub_categories. ' sub_cat', 'sub_cat.id = products_sub.sub_cat_id', 'inner');
	 
      $this->db->where('sub_cat.cat_id', $cat_id);
      $this->db->group_by('products_sub.pro_id');   
	 
	  return $this->db->get()->result();
	 
    }
      
     /**
     * 
	 * Get Cat Producrs By CatId
	 * 
	 */ 
    public function getCatProductsByCatId($cat_id){
   
	  $this->db->select('pro.*');
	  $this->db->from($this->table. ' pro');
	  $this->db->join($this->table_product_categories. ' cat', 'cat.pro_id = pro.id', 'inner');
	
      $this->db->where('cat.cat_id', $cat_id);
      $this->db->group_by('cat.pro_id');   
	 
	  return $this->db->get()->result();
	 
    }
     
    /**
	* Get product by sub cat id
	* 
	* @return
	*/
   
   	 public function getProductsBySubCatId($sub_cat_id){
   	  
	 $sql="SELECT * FROM `".$this->table_product_sub_categories."`, `".$this->table."` 
		  WHERE
		  `".$this->table."` .`id` = `".$this->table_product_sub_categories."`.`pro_id` 
          AND `".$this->table_product_sub_categories."`.`sub_cat_id`='$sub_cat_id'";
	 $products_list = $this->BlankModel->customQuery($sql);
	 return $products_list;	
	
	}
  	   
  	/**
	  * Search Products
	  */   
	  
	 public function getSearchProducts($cat_id, $product_name){
	 	
	 	$search_sql= "";
	 	if(!empty($cat_id)){
		 $search_sql.=  " AND `".$this->table_product_categories."`.`cat_id`='$cat_id' ";	
		}
		if(!empty($product_name)){
		 $search_sql.= " AND `".$this->table."`.`pname` LIKE '%$product_name%' ";
		}
	 
	$sql="SELECT * FROM `".$this->table."` 
	INNER JOIN 
		  WHERE
		  `".$this->table."`.`id` = `".$this->table_product_categories."`.`pro_id` 
          ". $search_sql."          
          GROUP BY `".$this->table."`.`id` ORDER BY `".$this->table."`.`id` DESC";
     
     
     
          
          echo $sql;
          
	 $products_list = $this->BlankModel->customQuery($sql);
	
	 return $products_list;
	 	
	 }
  	   
  	   
  	 
  	   	   
  	/**
	  * Sidebar Search Products
	  */   
	  
	 public function getCatSearchProducts($cat_id, $sub_cat){
	 	 
	 	$search_sql     = "";
	 	$cat_join       = "";
	 	$sub_cat_join   = "";
	 
	 	if(!empty($cat_id)){
	 	$cat_ids = implode(",", $cat_id);
		$search_sql.=  " AND `".$this->table_product_categories."`.`cat_id` IN ($cat_ids) ";	
		
		$cat_join = $this->db->join($this->table_product_sub_categories. ' products_sub', 'pro.id = products_sub.pro_id', 'inner');
		}
		if(!empty($sub_cat)){		
		$sub_cat_ids = implode(",", $sub_cat);	 	
		$search_sql.=  " AND `".$this->table_product_sub_categories."`.`sub_cat_id` IN ($sub_cat_ids) ";	
		
		$sub_cat_join = $this->db->join($this->table_product_sub_categories. ' products_sub', 'pro.id = products_sub.pro_id', 'inner');
		
		}
	 
	  $sql="SELECT * FROM `".$this->table_product_categories."`, `".$this->table."` 
		  WHERE
		  `".$this->table."`.`id` = `".$this->table_product_categories."`.`pro_id` 
          ". $search_sql."          
          GROUP BY `".$this->table."`.`id` ORDER BY `".$this->table."`.`id` DESC";
	
	  echo $sql;
	  $products_list = $this->BlankModel->customQuery($sql);
	
	  return $products_list;
	 	
	 }
  	     
  	   
  	   
  	   
  
		
}
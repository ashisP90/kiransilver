<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products_Model extends MY_Model
{
	var $table = PRODUCTS;
	var $table_product_details = PRODUCT_DETAILS;
	var $table_categories = CATEGORIES;
	var $table_sub_categories = SUB_CATEGORIES;
	var $table_product_categories = PRODUCT_CATEGORIES;
	var $table_product_sub_categories = PRODUCT_SUB_CATEGORIES;
	var $ordTable  = ORDERS;
	var $ordItemsTable = ORDER_ITEMS;
	var $users = USERS;
	

	
	public function __construct()
    {
        parent::__construct();
    }
	   
    /**
	* Product Details
	* 
	*/
   
/*     public function productDetails($pro_id){
   
	  $this->db->select('pro.*, pro_det.prod_id, pro_det.pro_qty, pro_det.image, pro_det.stone_color, pro_det.stone_shape, pro_det.plating, pro_det.collection, pro_det.purity, pro_det.unit_pcs, pro_det.unit_packet, pro_det.weight, pro_det.size, pro_det.amount ');
	  $this->db->from($this->table. ' pro');
	  $this->db->join($this->table_product_details. ' pro_det', 'pro.id = pro_det.prod_id', 'LEFT');
	  $this->db->where('pro.id', $pro_id);
	  
	  return $this->db->get()->row();
	 
    }*/
       
     public function productDetails($pro_id){
   
	  $this->db->select('pro.*');
	  $this->db->from($this->table. ' pro');
	  $this->db->where('pro.id', $pro_id);	  
	  return $this->db->get()->row();
	 
    }  
      
     public function productDetailsByProidProdet($pro_id, $pro_det_id){
   
	  $this->db->select('pro.*, pro_det.id AS pro_det_id, pro_det.prod_id AS product_id, pro_det.pro_qty, pro_det.image, pro_det.stone_color, pro_det.stone_shape, pro_det.plating, pro_det.collection, pro_det.purity, pro_det.unit_pcs, pro_det.unit_packet, pro_det.weight, pro_det.size, pro_det.amount, pro_det.size_unit');
	  $this->db->from($this->table. ' pro');
	  $this->db->join($this->table_product_details.' pro_det', 'pro.id = pro_det.prod_id', 'LEFT');
	  $this->db->where('pro.id', $pro_id);
	  $this->db->where('pro_det.id', $pro_det_id);
	  
	   return  $this->db->get()->row();
	 
    } 
      /**
	  * Group by size
	  * 
	  * @return
	  */
       
     public function productOtherDetails($pro_id){
   
	  $this->db->select('*');
	  $this->db->from($this->table_product_details);
	  $this->db->where('prod_id', $pro_id);	  
	  $this->db->group_by('size');	  
	  return $this->db->get()->result();
	 
    } 
    
     /*
     all product list
     */
         
     public function modalProductOtherDetails($pro_id){
   
	  $this->db->select('*');
	  $this->db->from($this->table_product_details);
	  $this->db->where('prod_id', $pro_id);	
	  return $this->db->get()->result();
	 
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
    public function getCatProductsByCatId($cat_id, $limit, $start ){
   
	  $this->db->select('pro.*');
	  $this->db->from($this->table. ' pro');
	  $this->db->join($this->table_product_categories. ' cat', 'cat.pro_id = pro.id', 'inner');
	  $this->db->where('cat.cat_id', $cat_id);
      
      $this->db->group_by('cat.pro_id');   
	  $this->db->order_by('id', 'DESC'); 

	  if($limit != "" ||  $start != ""){
		 $this->db->limit($limit, $start); 
	  }	
	 
	  return $this->db->get()->result();
	 
    }
     
    /**
	* Get product by sub cat id
	* 
	* @return
	*/
   
   	 public function getProductsBySubCatId($sub_cat_id, $limit=''){
   	  
	 $sql="SELECT * FROM `".$this->table_product_sub_categories."`, `".$this->table."` 
		  WHERE
		  `".$this->table."` .`id` = `".$this->table_product_sub_categories."`.`pro_id` 
          AND `".$this->table_product_sub_categories."`.`sub_cat_id`='$sub_cat_id' ORDER BY `".$this->table."`.`id` DESC ".$limit ;
	 $products_list = $this->BlankModel->customQuery($sql);
	 return $products_list;	
	
	}
  	   
  	/**
	  * Search Products
	  */   
	  
  	/**
	  * Search Products
	  */   
	  
	 public function getSearchProducts($cat_id, $product_name, $limit=''){
	 	
	 	$search_sql= "";
	 	If(!empty($cat_id)){
		 $search_sql.=  " AND `".$this->table_product_categories."`.`cat_id`='$cat_id' ";	
		}
		if(!empty($product_name)){
		 $search_sql.= " AND `".$this->table."`.`pname` LIKE '%$product_name%' ";
		}
	 
	$sql="SELECT * FROM `".$this->table_product_categories."`, `".$this->table."` 
		  WHERE
		  `".$this->table."`.`id` = `".$this->table_product_categories."`.`pro_id` 
          ". $search_sql."          
          GROUP BY `".$this->table."`.`id` ORDER BY `".$this->table."`.`id` DESC ".$limit ;
	 $products_list = $this->BlankModel->customQuery($sql);
	
	 return $products_list;
	 	
	 }
  	   
  	 
  	   	   
  	/**
	  * Sidebar Search Products
	  */   
	  
	 public function getCatSearchProducts($cat_id, $limit=''){
	 	 
	 	$cat_join       = "";	 	
	    $cat_condition  = "";
	 
	 	if(!empty($cat_id)){
	 	$cat_ids = implode(",", $cat_id);		
		$cat_join.=  " 		
		 INNER JOIN `".$this->table_product_categories."`		 
		 ON `".$this->table."`.`id` = `".$this->table_product_categories."`.`pro_id`";		 
		 $cat_condition= " AND `".$this->table_product_categories."`.`cat_id` IN ($cat_ids) ";	
		
		}	 
	 
	  $cat_search_sql="SELECT * FROM `".$this->table."` 	  
		  ".$cat_join."  
	      ".$cat_condition."        
          GROUP BY `".$this->table."`.`id` ORDER BY `".$this->table."`.`id` DESC ".$limit;
	  
	  
	  $products_list = $this->BlankModel->customQuery($cat_search_sql);
	
	  return $products_list;
	 	
	 }
  	     
  	 public function getSubCatSearchProducts($sub_cat, $limit=''){
	 	 
	 	$sub_cat_join   = "";	  
	    $sub_cat_condition ="";
	 	
		if(!empty($sub_cat)){		
		$sub_cat_ids = implode(",", $sub_cat);	 			
		$sub_cat_join.=  " 
		 INNER JOIN `".$this->table_product_sub_categories."`		 
		 ON `".$this->table."`.`id` = `".$this->table_product_sub_categories."`.`pro_id`";	 	 
	     $sub_cat_condition=  "	AND `".$this->table_product_sub_categories."`.`sub_cat_id` IN ($sub_cat_ids) ";	
		
		}
	 
	  $sub_search_sql="SELECT * FROM `".$this->table."`	  
		  ".$sub_cat_join."   
          ".$sub_cat_condition."        
          GROUP BY `".$this->table."`.`id` ORDER BY `".$this->table."`.`id` DESC ".$limit;
	   
	  $products_list = $this->BlankModel->customQuery($sub_search_sql);	
	  return $products_list;	 	
	 }
  
  	   
  	   
  	   /**
		 * Cart Section
		 */
  	   
  	   
  	   
  	   /*
     * Fetch products data from the database
     * @param id returns a single record if specified, otherwise all records
     */
    public function getRows($id = ''){
        $this->db->select('*');
        $this->db->from($this->proTable);
        $this->db->where('status', '1');
        if($id){
            $this->db->where('id', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }
        else{
            $this->db->order_by('name', 'asc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        
        return !empty($result)?$result:false;
    }
 	 
  
  /**
  * Bulk Products
  */	   
  	
  	public function getBulkProducts($user_id, $pro_id){
		
	  $this->db->select('bulk_pro.*, pro_det.prod_id, pro_det.pro_qty, pro_det.image, pro_det.stone_color, pro_det.stone_shape, pro_det.plating, pro_det.collection, pro_det.purity, pro_det.unit_pcs, pro_det.unit_packet, pro_det.weight, pro_det.size, pro_det.size_unit');
	  
	  $this->db->from('bulk_products'. ' bulk_pro');
	  $this->db->join($this->table_product_details. ' pro_det', 'bulk_pro.product_oth_id = pro_det.id', 'INNER');
	  $this->db->where('bulk_pro.user_id', $user_id);
	  $this->db->where('bulk_pro.product_id', $pro_id);
	  return  $this->db->get()->result();
		
	}   
  	   
  
		
}
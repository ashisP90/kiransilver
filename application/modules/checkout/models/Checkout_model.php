<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout_model extends MY_Model
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
	   
      /*
     * Fetch order data from the database
     * @param id returns a single record of the specified ID
     */
    public function getOrder($id){
        $this->db->select('o.*, c.first_name, c.last_name, c.email, c.mobile');
        $this->db->from($this->ordTable.' as o');
        $this->db->join($this->users.' as c', 'c.id = o.user_id', 'left');
        $this->db->where('o.id', $id);
        $query  = $this->db->get();
        $result = $query->row_array();
        
        // Get order items
        $this->db->select('i.*, p.pname, p.product_image, p.pcode, p_det.image, p_det.stone_color, p_det.amount, p_det.pro_qty, p_det.weight, p_det.size, p_det.size_unit');
        $this->db->from($this->ordItemsTable.' as i');
        $this->db->join($this->table.' as p', 'p.id = i.product_id', 'left');
        $this->db->join($this->table_product_details.' as p_det', 'p_det.id = i.pro_det_id', 'left');
        $this->db->where('i.order_id', $id);
        $query2 = $this->db->get();
        $result['items'] = ($query2->num_rows() > 0)?$query2->result_array():array();
        
        // Return fetched data
        return !empty($result)?$result:false;
    }
    
   
    
    /*
     * Insert order data in the database
     * @param data array
     */
    public function insertOrder($data){
        // Add created and modified date if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        
        // Insert order data
        $insert = $this->db->insert($this->ordTable, $data);

        // Return the status
        return $insert?$this->db->insert_id():
        false;
    }
    
    /*
     * Insert order items data in the database
     * @param data array
     */
    public function insertOrderItems($data = array()) {
        
        // Insert order items
        $insert = $this->db->insert_batch($this->ordItemsTable, $data);

        // Return the status
        return $insert?true:false;
    }
  	   
  	   
  
		
}
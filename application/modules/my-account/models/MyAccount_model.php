<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MyAccount_model extends MY_Model
{
	var $table = PRODUCTS;
	var $table_product_details = PRODUCT_DETAILS;
	var $table_categories = CATEGORIES;
	var $table_sub_categories = SUB_CATEGORIES;
	var $table_product_categories = PRODUCT_CATEGORIES;
	var $table_product_sub_categories = PRODUCT_SUB_CATEGORIES;
	var $ordTable  = ORDERS;
	var $ordItemsTable = ORDER_ITEMS;
	var $order_details = ORDERS_DETAILS;
	var $users = USERS;
	
	
	public function __construct()
    {
        parent::__construct();
    }
	

	
	 /*
     * Fetch order data from the database
     * @param id returns a single record of the specified ID
     */
     
    public function getUserOrders($user_id){
    	$this->db->select('o.*, c.first_name, c.last_name, c.email, c.mobile');
        $this->db->from($this->ordTable.' as o');
        $this->db->join($this->users.' as c', 'c.id = o.user_id', 'left');
        $this->db->where('o.user_id', $user_id);
        $this->db->order_by('o.id', 'DESC'); 
        $query  = $this->db->get();
        $retun_data = $query->result_array();
       return !empty($retun_data)?$retun_data:false;
    }
    
	
	public function getUsersOrdersDetails($orders_id){
	
        // Get order items
        $this->db->select('i.*, p.pname, p.product_image, p.pcode, p_det.image, p_det.stone_color, p_det.amount, p_det.pro_qty, p_det.weight, p_det.size, p_det.size_unit');
        $this->db->from($this->ordItemsTable.' as i');
        $this->db->join($this->table.' as p', 'p.id = i.product_id', 'left');
        $this->db->join($this->table_product_details.' as p_det', 'p_det.id = i.pro_det_id', 'left');
        $this->db->join($this->order_details.' as od', 'od.order_id = p.id', 'left');
        $this->db->where('i.order_id', $orders_id);
        $query2 = $this->db->get();
        $retun_data  = ($query2->num_rows() > 0)?$query2->result_array():array();
         
        // Return fetched data
        return !empty($retun_data)?$retun_data:false;
	}
		
		
	
    		
		
		
	public function getOrderDetail($order_item_id){
	
        // Get order items
        $this->db->select('i.order_id as item_order_id, 
        i.id as order_item_id, 
        i.pro_det_id, 
        i.quantity, 
        i.sub_total,
        p.id as product_id, 
        p.pname, 
        p.product_image, 
        p.pcode, 
        p_det.image, 
        p_det.stone_color,
        p_det.amount, 
        p_det.pro_qty, 
        p_det.weight, 
        p_det.size, 
        p_det.size_unit, 
        od.order_id as od_order_id,
        od.billing_name ,od.billing_phone ,od.billing_country ,od.billing_state ,od.billing_city ,od.billing_address ,od.billing_pincode , od.shipping_name ,od.shipping_phone ,od.shipping_country ,od.shipping_state ,od.shipping_city ,od.shipping_address ,od.shipping_pincode '
        
        );
        $this->db->from($this->ordItemsTable.' as i');
        $this->db->join($this->table.' as p', 'p.id = i.product_id', 'left');
        $this->db->join($this->table_product_details.' as p_det', 'p_det.id = i.pro_det_id', 'left');
        $this->db->join($this->order_details.' as od', 'od.order_id = i.order_id', 'left');
        $this->db->where('i.id', $order_item_id);
        $query2 = $this->db->get();
        $retun_data = ($query2->num_rows() > 0)?$query2->row():array();
         
        // Return fetched data
        return !empty($retun_data)?$retun_data:false;
	}
	
	
	
	
	
		
	
}
<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Orders extends MY_Controller{
	function __construct(){
		parent::__construct();	
		$this->load->model('Orders_model', 'Orders');
		$this->session_checked($is_active_session = 1);	
	  }
	
	/**
	* 
	* Index Page
	* 	
	*/
	
	public function index(){
		$data=array();
	    $current_user_id = $this->session->userdata('admin_id');
		
		$data['orders'] = $this->Orders->getOrders();
	
   		common_viewloader('orders/index', $data ); 	
	}
	
	
	/**
	* 
	* Order details
	* 
	*/
	
	 public function orderDetails($order_id){	
	    $data['order'] = $this->Orders->getOrderByOrderId($order_id);
	    $data['order_details'] = $this->Orders->getOrderItemDetails($order_id);
   		common_viewloader('orders/order_details', $data ); 	
	 }
	  
	  
	/**
	* 
	* Order status
	* 
	*/
	
	function orderStatus(){	
	     
	    $order_id = $_POST['order_id'];
	    $status = $_POST['status'];
	   	if(!empty( $order_id)){
	   		
	   	$select_conditions = " ( `id` = '".$order_id."')";
		$post_data = array('status' =>  $status);	
		$change_order_status = $this->BlankModel->editTableData(ORDERS, $post_data, $select_conditions);
	    echo '1';
	     }
	  else{
		 echo '0';
		 }
	 }
	  
	 	
	 	
 }
 
?>
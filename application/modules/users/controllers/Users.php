<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Users extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model', 'Users');
		$this->session_checked($is_active_session = 1);	
	 }
	
	/*** Code for Users list start ***/
	
	 public function index(){
		$data = array();

		$select_fields = '*';
    	$is_multy_result = 2;
		$conditions = "";
		$data['users'] = $this->BlankModel->getTableData(USERS, $conditions, $select_fields, $is_multy_result);	
				
		common_viewloader('users/index', $data);
    }
	
	/**
	* User Edit
	*/
	
	public function editUser($u_id=0){
		
		$this->session_checked($is_active_session = 1);	
	    $data['current_user_id'] = $this->session->userdata('admin_id');
		if($u_id > 0){
		   $data['user_details'] = $this->Users->getUserData($u_id);
		}
	
		if($this->input->post()){
				
			$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[150]|xss_clean');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|xss_clean');
				
		  if ($this->form_validation->run() === TRUE) {
		
			$first_name = $this->input->post('first_name');
			$last_name  = $this->input->post('last_name');
			$mobile     = $this->input->post('mobile');    	
			$status     = $this->input->post('status');
			// billing 
			$billing_name   = $this->input->post('billing_name');
			$billing_phone  = $this->input->post('billing_phone');
			$billing_state  = $this->input->post('billing_state');
			$billing_city   = $this->input->post('billing_city');
			$billing_address= $this->input->post('billing_address');
			$billing_pincode= $this->input->post('billing_pincode'); 
			//Shipping 
			$shipping_name   = $this->input->post('shipping_name');
			$shipping_phone  = $this->input->post('shipping_phone');
			$shipping_state  = $this->input->post('shipping_state');
			$shipping_city   = $this->input->post('shipping_city');
			$shipping_address= $this->input->post('shipping_address');
			$shipping_pincode= $this->input->post('shipping_pincode'); 
				
		  $u_conditions = " ( `id` = '".$u_id."' )";
		  $u_data = array( 'first_name' => $first_name,
		  		           'last_name'  => $last_name, 
		  		           'mobile'     => $mobile, 						  		 					  		 
		  		           'status'     => $status, 
		  		           'modify_date'=> date('Y-m-d H:i:s'));
  		
  		 $u_edit = $this->BlankModel->editTableData(USERS, $u_data, $u_conditions);
   		  
   		 $address_condition = " ( `user_id` = '".$u_id."' )";
	   	 $data['address'] = $this->BlankModel->getTableData(USERS_DETAIlS, $address_condition, '*', 1);  
		
		 if($data['address']> 0){	
	
		   $address_data = array(
  		                       'billing_name'   => $billing_name,
						  	   'billing_phone'  => $billing_phone, 
						  	   'billing_state'  => $billing_state, 
						  	   'billing_city'   => $billing_city, 
						       'billing_address'=> $billing_address, 
						  	   'billing_pincode'=> $billing_pincode, 
						  	   'shipping_name'   => $shipping_name,
						  	   'shipping_phone'  => $shipping_phone, 
						  	   'shipping_state'  => $shipping_state, 
						  	   'shipping_city'   => $shipping_city, 
						  	   'shipping_address'=> $shipping_address, 
						       'shipping_pincode'=> $shipping_pincode, 
						  	   'modify_date'     => date('Y-m-d H:i:s'));
  		
  		    $shipping_address_edit = $this->BlankModel->editTableData(USERS_DETAIlS, $address_data, $address_condition);
			}
   		    else{
			$address_data = array(
  		                       'user_id'        => $u_id, 
  		                       'billing_name'   => $billing_name,
						  	   'billing_phone'  => $billing_phone, 
						  	   'billing_state'  => $billing_state, 
						  	   'billing_city'   => $billing_city, 
						       'billing_address'=> $billing_address, 
						  	   'billing_pincode'=> $billing_pincode, 
						  	   'shipping_name'   => $shipping_name,
						  	   'shipping_phone'  => $shipping_phone, 
						  	   'shipping_state'  => $shipping_state, 
						  	   'shipping_city'   => $shipping_city, 
						  	   'shipping_address'=> $shipping_address, 
						       'shipping_pincode'=> $shipping_pincode, 
						  	   'modify_date'     => date('Y-m-d H:i:s'));	
			
			$billing_address_edit = $this->BlankModel->addTableData(USERS_DETAIlS, $address_data);
  		    }
  		    
  		    $this->session->set_flashdata('succ', 'User data updated successfully');
	    
	        redirect('users/editUser/'.$u_id);
		 }
	   }
	   
	    common_viewloader('users/user_edit', $data);
	 }
	
	
	
	
	
}
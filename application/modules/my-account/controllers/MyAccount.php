<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class MyAccount extends MY_Controller{
	function __construct(){
		parent::__construct();	
		$this->load->model('MyAccount_model', 'MyAccount');
		$this->user_session_checked($is_active_session = 1);
				
	}
	
	/**
	* 
	* Index Page
	* 	
	*/
	
	public function index(){
		$data=array();
		$this->user_session_checked($is_active_session = 1);
		$current_user_id = $this->session->userdata('user_id');	
		$select_fields = '*';
    	$is_multy_result = 1;
		$conditions = " ( `id` = '".$current_user_id."' AND `status` = 'Active')";
		$data['profile'] = $this->BlankModel->getTableData(USERS, $conditions, $select_fields, $is_multy_result);
		$data['orders'] = $this->MyAccount->getUserOrders($current_user_id);
		
		$address_condition = " ( `user_id` = '".$current_user_id."' )";
		$data['address'] = $this->BlankModel->getTableData(USERS_DETAIlS, $address_condition, $select_fields, $is_multy_result);
		
   		front_common_viewloader('my-account/index', $data ); 	
	}
	
	
	/**
	* 
	* Order details
	* 
	*/
	
	 public function orderDetails($order_item_id){	 
	    $data['order_details'] = $this->MyAccount->getOrderDetail($order_item_id);
   		front_common_viewloader('my-account/order_details', $data ); 	
	 }
	  
 
	/**
	* 
	* User Porfile Edit
	* 
	*/
	
	public function profileEdit($user_id){
		$data = $this->input->post();
	 
		$err = array();
	 	if(!empty($data['email'])){
		$select_fields = 'email';
    	$is_multy_result = 1;
		$check_mail_condition =" ( `id` <> '".$user_id."' AND `email` ='".$data['email']."' AND `status` = 'Active')";
	 	$chkemail = $this->BlankModel->getTableData( USERS, $check_mail_condition, $select_fields, $is_multy_result);	
		if( $chkemail ){
			$err[] = "Email already exist";
			}
		}
		if(!empty($data['mobile'])){	
		 $select_fields = 'mobile';
    	 $is_multy_result = 1;
		 $check_mobile_condition = " ( `id` <> '".$user_id."' AND `mobile` = '".$data['mobile']."' AND `status` = 'Active')";
	 	 $chkmobile = $this->BlankModel->getTableData(USERS, $check_mobile_condition, $select_fields, $is_multy_result);	
		if( $chkmobile ){
			$err[] = "Mobile Number already exist";
		 }
		}
		if( $err && ($user_id !='')){
			$this->session->set_flashdata('Err', $err);
			header('location:'.base_url().'my-account/'.$user_id);
			exit;		
		}
		elseif($err){
			$this->session->set_flashdata('Err', $err);
			header('location:'.base_url().'my-account/'.$data['user_role']);
			exit;
		}
		
		if($user_id){
			if($data['dob']){
			$dob = date('Y-m-d', strtotime( $data['dob']));
			}	 
			else{
			$dob = "";
			}
		
		$user_data = array('first_name' => $data['first_name'],'last_name' => $data['last_name'],'mobile' => $data['mobile'], 'email' => $data['email'], 'gender' => $data['gender'], 'dob' => $dob);
		$post_data = $user_data;
		
		if(!empty($data['edit_password'])){
	      $encrypted_pass['password'] = md5(SECURITY_SALT.$data['edit_password']);
		  $changed_pass = array('password' => $encrypted_pass['password']);
		  $post_data = array_merge($user_data, $changed_pass);
		}
		
		$conditions = " ( `id` = '".$user_id."' AND `status` = 'Active' )";
  		$usersedit = $this->BlankModel->editTableData(USERS, $post_data, $conditions);
  		$this->session->set_flashdata('succ', 'Profile updated successfully');
         redirect('my-account');
		exit;   
		
		}
	 }
	 
	 
	 /**
	 * Billing Address Add and Update
	 */
	 
	 public function editBilling(){
	 	
	 	$formSubmit = $this->input->post('billing_submit');
		if( $formSubmit == 'billing_submit' )
	 	{	
		 	$current_user_id = $this->session->userdata('user_id');	
		 	$address_condition = " ( `user_id` = '".$current_user_id."' )";
			$data['address'] = $this->BlankModel->getTableData(USERS_DETAIlS, $address_condition, '*', 1);
			
			$billing_name   = $this->input->post('billing_name');
			$billing_phone  = $this->input->post('billing_phone');
			$billing_state  = $this->input->post('billing_state');
			$billing_city   = $this->input->post('billing_city');
			$billing_address= $this->input->post('billing_address');
			$billing_pincode= $this->input->post('billing_pincode'); 
		 	
		 	// Edit Billing Address
		 	if($data['address'] > 0){
			  $billing_conditions = " ( `user_id` = '".$current_user_id."' )";
  		      $billing_data = array('billing_name'   => $billing_name,
						  		  'billing_phone'  => $billing_phone, 
						  		  'billing_state'  => $billing_state, 
						  		  'billing_city'   => $billing_city, 
						  		  'billing_address'=> $billing_address, 
						  		  'billing_pincode'=> $billing_pincode, 
						  		  'modify_date'    => date('Y-m-d H:i:s'));
  		
  		      $billing_address_edit = $this->BlankModel->editTableData(USERS_DETAIlS, $billing_data, $billing_conditions);
  		      $this->session->set_flashdata('succ', 'Billing Address Updated successfully');	
			  redirect('my-account');
			}
	        // Add Billing Address
	        else{
  		      $billing_data = array(
  		                          'billing_name'   => $billing_name,
						  		  'billing_phone'  => $billing_phone, 
						  		  'billing_state'  => $billing_state, 
						  		  'billing_city'   => $billing_city, 
						  		  'billing_address'=> $billing_address, 
						  		  'billing_pincode'=> $billing_pincode, 
						  		  'modify_date'    => date('Y-m-d H:i:s'));
  		
  		      $billing_address_edit = $this->BlankModel->addTableData(USERS_DETAIlS, $billing_data);
  		      $this->session->set_flashdata('succ', 'New Billing Address Added successfully');	
			  redirect('my-account');
			  }
			}
		 }	 	 
	 	 
	 /**
	 * Shipping Address Add and Update
	 */
	 
	 public function editShipping(){
	 	
	 	$formSubmit = $this->input->post('shipping_submit');
		if( $formSubmit == 'shipping_submit' ){	
		 	$current_user_id = $this->session->userdata('user_id');	
		 	
		 	$address_condition = " ( `user_id` = '".$current_user_id."' )";
			$data['address'] = $this->BlankModel->getTableData(USERS_DETAIlS, $address_condition, '*', 1);
			
			$shipping_name   = $this->input->post('shipping_name');
			$shipping_phone  = $this->input->post('shipping_phone');
			$shipping_state  = $this->input->post('shipping_state');
			$shipping_city   = $this->input->post('shipping_city');
			$shipping_address= $this->input->post('shipping_address');
			$shipping_pincode= $this->input->post('shipping_pincode'); 
		 	
		 	// Edit shipping Address
		 	if($data['address'] > 0){
			$shipping_conditions = " ( `user_id` = '".$current_user_id."' )";
  		    $shipping_data = array('shipping_name'   => $shipping_name,
						  		  'shipping_phone'  => $shipping_phone, 
						  		  'shipping_state'  => $shipping_state, 
						  		  'shipping_city'   => $shipping_city, 
						  		  'shipping_address'=> $shipping_address, 
						  		  'shipping_pincode'=> $shipping_pincode, 
						  		  'modify_date'    => date('Y-m-d H:i:s'));
  		
  		    $shipping_address_edit = $this->BlankModel->editTableData(USERS_DETAIlS, $shipping_data, $shipping_conditions);
  		    $this->session->set_flashdata('succ', 'Shipping Address Updated successfully');	
			redirect('my-account');
			}
	        // Add shipping Address
	        else{
			$shipping_data = array(
  		                          'shipping_name'   => $shipping_name,
						  		  'shipping_phone'  => $shipping_phone, 
						  		  'shipping_state'  => $shipping_state, 
						  		  'shipping_city'   => $shipping_city, 
						  		  'shipping_address'=> $shipping_address, 
						  		  'shipping_pincode'=> $shipping_pincode, 
						  		  'modify_date'    => date('Y-m-d H:i:s'));
  	        $shipping_address_edit = $this->BlankModel->addTableData(USERS_DETAIlS, $shipping_data);
  		   	$this->session->set_flashdata('succ', 'New Shipping Address Added successfully');	
			redirect('my-account');
			}
			
		   }
	       
		
		 }
	 
	 	
	 	
 }
 
?>
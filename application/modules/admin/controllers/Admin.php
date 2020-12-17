<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
 class Admin extends MY_Controller {
	function __construct(){
		parent::__construct();			
	}
	
	
	/**
	* Index Page
	* 
	* @return
	*/
	
	public function index(){
		$data=array();			
		$this->session_checked($is_active_session = 1);	
		common_viewloader('admin/index', $data);
	}
	
	/**
	* 
	* System Admin Login Board 
	*/
	
	public function login(){
		$data=array();		
		$this->session_checked($is_active_session = 0);
		$this->load->library(array('form_validation'));
		$rules = array(
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email',
				'errors' => array()
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required',
				'errors' => array()
			)
		);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == true){			
			$conditions = $this->input->post();
        	$conditions['password'] = md5(SECURITY_SALT.$conditions['password']);
        	
        	$conditions = " ( `email` = '".$conditions['email']."' AND `password` ='".$conditions['password']."' AND `is_deleted` <> '1' AND `is_active` = '1')";
			$select_fields = '*';
			$is_multy_result = 1;
			$admin = $this->BlankModel->getTableData(SYS_ADMIN, $conditions, $select_fields, $is_multy_result);			
			if(!empty($admin)){			
				$this->set_admin_session($admin);
				redirect('admin/dashboard');
			} 			
			else{
				$this->session->set_flashdata('error', 'Email or password does not matched');
				common_viewloader('admin/login', $data);
			}
		}
		else{
			common_viewloader('admin/login', $data);
		}
	}
	
	
	public function logout(){
		$this->destroy_admin_session();
		$this->session->set_flashdata('success', 'You logout successfully');
		redirect('admin/login');
	}
	
	public function profile(){
		$current_user_id = $this->session->userdata('admin_id');
		$select_fields = '*';
    	$is_multy_result = 1;
		$conditions = " ( `id` = '".$current_user_id."' AND `is_deleted` <> '1' AND `is_active` = '1')";
		$profile = $this->BlankModel->getTableData(SYS_ADMIN, $conditions, $select_fields, $is_multy_result);
   		common_viewloader('admin/myprofile', array('profile' => $profile)); 
	}
	
	
	public function profileEdit(){
		$data = $this->input->post();
	 	$admin_id ="";
		$admin_id = $data['id'];
		$err = array();
	 	if(!empty($data['email'])){
		$select_fields = 'email';
    	$is_multy_result = 1;
		$check_mail_condition =" ( `id` <> '".$admin_id."' AND `email` ='".$data['email']."' AND `is_deleted` <> '1')";
	 	$chkemail = $this->BlankModel->getTableData( SYS_ADMIN, $check_mail_condition, $select_fields, $is_multy_result);	
		if( $chkemail ){
				$err[] = "Email already exist";
			}
		}
		if(!empty($data['mobile'])){	
		 $select_fields = 'mobile';
    	 $is_multy_result = 1;
		 $check_mobile_condition = " ( `id` <> '".$admin_id."' AND `mobile` = '".$data['mobile']."' AND `is_deleted` <> '1')";
	 	 $chkmobile = $this->BlankModel->getTableData(SYS_ADMIN, $check_mobile_condition, $select_fields, $is_multy_result);	
		if( $chkmobile ){
			$err[] = "Mobile Number already exist";
		 }
		}
		if( $err && ($admin_id !='')){
			$this->session->set_flashdata('Err', $err);
			header('location:'.base_url().'admin/users/useraddedit?users_id='.$admin_id);
			exit;		
		}
		elseif($err){
			$this->session->set_flashdata('Err', $err);
			header('location:'.base_url().'admin/users/useraddedit?user_role='.$data['user_role']);
			exit;
		}
		
		if($admin_id){
			
	    $config['upload_path'] = './assets/uploads/admin/';
        $config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']   = '1000000';
		$config['max_width']  = '1024000';
		$config['max_height'] = '768000';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $data_upload_files = $this->upload->data();
		$select_fields = 'image';
    	$is_multy_result = 1;
		$get_img_conditions = " ( `id` = '".$admin_id."' AND `is_deleted` <> '1')";
		$img = $this->BlankModel->getTableData(SYS_ADMIN, $get_img_conditions, $select_fields, $is_multy_result);	
		
		/**
		* 
		* Unlinnk Profile image
		* 
		*/
			
		if(!empty($data_upload_files['file_name'])){
		$image_name = $data_upload_files['file_name'];
		if(!empty($img)){
			unlink('assets/uploads/admin/'.$img->image);
		  }			
		}		
		elseif(!empty($img)){
		$image_name = $img->image;
		} 		
		else{ 
		$image_name = "";
		}
			
		$data_img = array('image'=> $image_name);
		$user_data = array('fname' => $data['fname'],'lname' => $data['lname'],'mobile' => $data['mobile'], 'email' => $data['email']);
		$post_data = array_merge($user_data, $data_img);   
	    if(!empty($data['edit_password'])){
	      $encrypted_pass['password'] = md5(SECURITY_SALT.$data['edit_password']);
		  $changed_pass = array('password' => $encrypted_pass['password']);
		  $post_data = array_merge($user_data, $changed_pass);
		}
		
		$conditions = " ( `id` = '".$admin_id."' AND `is_deleted` <> '1' )";
  		$usersedit = $this->BlankModel->editTableData(SYS_ADMIN, $post_data, $conditions);
  		$this->session->set_flashdata('succ', 'Update data successfully');
        header('location:'.base_url().'admin/profile');	
		exit;   
		}
	
	 }
	 
	 


	
}
?>
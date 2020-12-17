<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Login extends MY_Controller{
	function __construct(){
		parent::__construct();	
		$this->load->model('Login_model', 'Login');		
	}
	
	
	/**
	* Index Page
	* 
	* @return
	*/
	
	public function index(){
		
	}
	
	/**
	* 
	* User Login Board 
	*/
	
	public function userLogin(){
		
		$data=array();		
	    $this->user_session_checked($is_active_session = 0);
		$this->load->library(array('form_validation'));
		$rules = array(
			array(
				'field' => 'username',
				'label' => 'UserName',
				'rules' => 'required|xss_clean|max_length[30]',
				'errors' => array()
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|xss_clean|max_length[30]',
				'errors' => array()
			)
		);
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == true){			
			$conditions = $this->input->post();
        	$conditions['password'] = md5(SECURITY_SALT.$conditions['password']);
        	
        	$conditions_query = " ( `username` = '".$conditions['username']."' OR `email` = '".$conditions['username']."' ) AND `password` ='".$conditions['password']."' AND `status` = 'Active'";
        	
			$select_fields = '*';
			$is_multy_result = 1;
			$user = $this->BlankModel->getTableData(USERS, $conditions_query, $select_fields, $is_multy_result);	
		
			if(!empty($user)){			
				$this->set_user_session($user);
				if(isset($_REQUEST['red']) && ($_REQUEST['red'] != "")){
					$url= base_url().'checkout';
				}
				else{
					$url= base_url();
				}
				
				redirect($url);
			} 			
			else{
				$this->session->set_flashdata('error', 'Email or password does not matched');
				front_common_viewloader('login/login', $data);
			}
		}
		else{
			front_common_viewloader('login/login', $data);
		}
	}
	
  /**
  * User Account
  */

	public function myAccount(){
		$data=array();
		$this->user_session_checked($is_active_session = 1);
		$current_user_id = $this->session->userdata('user_id');	
		$select_fields = '*';
    	$is_multy_result = 1;
		$conditions = " ( `id` = '".$current_user_id."' AND `status` = 'Active')";
		$data['profile'] = $this->BlankModel->getTableData(USERS, $conditions, $select_fields, $is_multy_result);
		
		$data['orders'] = $this->Login->getUserOrders($current_user_id);
		
   		front_common_viewloader('login/myaccount', $data ); 
	}
	
	/**
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
        header('location:'.base_url().'my-account');	
		exit;   
		
		}
	
	
	 }
	 
	 
	 /**
	 * User Register
	 */
	 
	public function frontendRegistration() { 
		
      
     
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean|max_length[50]');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean|max_length[50]');
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|xss_clean|min_length[6]');
		$this->form_validation->set_rules('rep_password', 'Repeat Password', 'required|xss_clean|min_length[6]');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		
		if ($this->form_validation->run() == true){
	
	    $username    = addslashes($this->input->post('username'));		
        $first_name  = addslashes($this->input->post('first_name'));
        $last_name   = addslashes($this->input->post('last_name'));
        $mobile      = addslashes($this->input->post('mobile'));
        $email       = addslashes($this->input->post('email'));
        $password    = $this->input->post('password');
        $password    = md5(SECURITY_SALT.$password);
	
	    /**
		* 
		* Email Validation
		* 
		*/
        $checkEmail = userValidation(USERS, $select_field='email', $email);
        if($checkEmail == 1){
		   $this->session->set_flashdata('msg','Email already exits. Please try another Email');	
		   header('location:'.base_url().'register');	
	       exit; 
		} 
		/**
		* 
		* UserName Validation
		* 
		*/
		$check_username = userValidation(USERS, $select_field='username', $username);
        if($check_username == 1){
		   $this->session->set_flashdata('msg','UserName already exits. Please try another Username');
		   header('location:'.base_url().'register');	
	       exit; 	
		}
     
	    $data = array('username' => $username, 'first_name' => $first_name, 'last_name' => $last_name, 'password'=> $password, 'email'=> $email, 'mobile'=> $mobile, 'create_time'=> date('Y-m-d H:i:s'));
		
		$user_register = $this->BlankModel->addTableData(USERS, $data);	
			
		$to_email   = ADMIN_EMAIL;	
		$from_email = FROM_EMAIL;			
		$body ="";
	    $body.= "<div class='cont_wrapperInner' style='border:4px solid #ee3b3e; width:670px; padding:10px; text-align:justify;'>
	    	<p style='text-align: center; background-color:#000;padding:10px 0;'><img src=".base_url('assets/uploads/logo/mainkiranlogo.png')." alt='Kiran Silver'></p>
				  <h1 style='color:#ee3b3e' align='center'>New Registration</h1>
				  <table width='100%' border='0' cellpadding='2' cellspacing='2'>			
				     <tr>
				      <td colspan='2'>Hello Administrator,<br>
				        <br>
				        A new ".$username." has been registered. Please check the details below:<br>
				        <br></td>
				    </tr>
                    <tr>
						<td align='left' valign='top'>UserName:</td>
						<td align='left' valign='top'>".$username."</td>  
					</tr>
					<tr>
						<td align='left' valign='top'>FirtName:</td>
						<td align='left' valign='top'>".$first_name."</td>  
					</tr>
					<tr>
						<td align='left' valign='top'>LastName:</td>
						<td align='left' valign='top'>".$last_name."</td>  
					</tr>
					<tr>
				      <td align='left' valign='top'>Email:</td>
				      <td align='left' valign='top'>".$email."</td>
				    </tr>	
					<tr>
						<td align='left' valign='top'>Mobile:</td>
						<td align='left' valign='top'>".$mobile."</td>  
					</tr>
											  
				   </table>
				  <br>
				  <br>
	              Thank you,<br>
	              Kiran Silver Team. </div>";
	 
	 	$config['mailtype'] = 'html';
		$config['charset'] = 'UTF-8';
		$config['newline'] = "\r\n";
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		
     	$this->load->library('email', $config);
		$this->email->from($from_email, 'Kiran Silver');
		$this->email->to($to_email);
		$this->email->subject('New Registration');
		$this->email->message($body);
		$send_email=$this->email->send();
       
        $this->session->set_flashdata('succ', 'Your Registration has been submitted successfully');
	    header('location:'.base_url().'login');	
	    exit; 
			
		}
     else{
			front_common_viewloader('login/register');
		}
	
    }

 	
	/**
	* Logout
	* 
	* @return
	*/
	
	public function logout(){
		$this->destroy_user_session();
		$this->session->set_flashdata('success', 'You logout successfully');
		redirect('login');
	}
	

}
?>
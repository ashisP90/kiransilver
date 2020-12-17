<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class MY_Controller extends CI_Controller{
	protected $create_date_formate = '';

	function __construct(){
		parent::__construct();
 	    $this->load->model('Blank_model', 'BlankModel');
 	   	$this->load->library('session');
	}
	public function set_admin_session($admindata = array()){
		$admin_id = 0;
		if(!empty($admindata)){
			if(is_object($admindata)){
				$admin_id = $admindata->id;
			} 
			elseif(is_array($admindata)){
				$admin_id = $admindata['id'];
			}
			if($admin_id > 0){
			   $this->session->set_userdata('admin_id', $admin_id);
			}
		}
	}	
	public function set_user_session($userdata = array()){
		$user_id = 0;
		if(!empty($userdata)){
			if(is_object($userdata)){
				$user_id = $userdata->id;
			} elseif(is_array($userdata)){
				$user_id = $userdata['id'];
			}
			if($user_id > 0){
			 $logged_in = $this->session->set_userdata('user_id', $user_id);
			}
		}
	}
	public function destroy_admin_session(){
		if($this->session->has_userdata('admin_id')){
			$this->session->unset_userdata('admin_id');
		}
	}
	public function destroy_user_session(){
		if($this->session->has_userdata('user_id')){
			$this->session->unset_userdata('user_id');
		}
	}
	public function session_checked($is_active_session = 1){
		if($is_active_session){
			if(!$this->session->has_userdata('admin_id')){
				redirect('admin/login');
			}
		} else{
			if($this->session->has_userdata('admin_id')){
				redirect('admin/dashboard');
			}
		}
	}	
	
	public function user_session_checked($is_active_session = 1){
		if($is_active_session){
			if(!$this->session->has_userdata('user_id')){
				redirect('login');
			}
		} else{
			if($this->session->has_userdata('user_id')){
				redirect('');
			}
		}
	}
		
		
   
   public function user_cart_session_checked($is_active_session = 1){
		if($is_active_session){
			if(!$this->session->has_userdata('user_id')){
				redirect('login?red=checkout');
			}
		} else{
			if($this->session->has_userdata('user_id')){
				redirect('');
			}
		}
	}
	
	
		
	public function system_session_checked($is_active_session = 1){
		if($is_active_session){
			if(!$this->session->has_userdata('user_id')){
				redirect('admin/systemuser/login');
			}
		} else{
			if($this->session->has_userdata('user_id')){
				redirect('admin/systemuser/dashboard');
			}
		}
	}	
	
	public function user_login_session_checked(){
		if(!$this->session->has_userdata('admin_id')){
				redirect('admin/login');
			}
	 }
}
?>
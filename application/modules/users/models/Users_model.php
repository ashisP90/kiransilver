<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends MY_Model {
	
	var $table   = USERS;
	var $table_user_details   = USERS_DETAIlS;
	
	public function __construct()
    {
        parent::__construct();
    }
	
	
	public function getUserData($u_id){
	  
	  $this->db->select('user.id as u_id, user.username, user.first_name, user.last_name, user.email, user.mobile, user.dob, user.gender, user.status,u_det.* ');
	  $this->db->from($this->table. ' user');
	  $this->db->join($this->table_user_details. ' u_det', 'user.id = u_det.user_id', 'left');
	  $this->db->where('user.id',  $u_id);
	 
	  return $this->db->get()->row();
	}
	
	
}
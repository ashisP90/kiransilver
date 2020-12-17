<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agents_model extends CI_Model
{
	var $table              = TABLE_SITE_USERS;
	var $table_user_agent   = TABLE_SITE_USER_AGENTS;
	var $table_user_address = TABLE_SITE_USER_ADDRESSES;
	
	public function __construct()
    {
        parent::__construct();
    }
	
	public function getAgentList($params = array(), $record_type)
	{
        $this->db->select('u.*,ua.*,uad.*');
		$this->db->from($this->table. ' u');
		$this->db->join($this->table_user_agent. ' ua', 'ua.site_user_id = u.site_user_id',  'left');
		$this->db->join($this->table_user_address. ' uad','uad.site_user_id = u.site_user_id', 'left');
		
        if(!empty($params['search']['site_user_profile_name'])){
            $this->db->like('site_user_profile_name',$params['search']['site_user_profile_name']);
        }
		
		if(!empty($params['search']['site_user_mobile'])){
            $this->db->where('site_user_mobile',$params['search']['site_user_mobile']);
        }
		
		if(!empty($params['search']['site_user_status'])){
            $this->db->where('u.site_user_status',$params['search']['site_user_status']);
        }
		
		$this->db->where('u.site_user_type', 2);
		$this->db->order_by('u.doc','DESC');
		
        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)) {
            $this->db->limit($params['limit'],$params['start']);
        } elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)) {
            $this->db->limit($params['limit']);
        }
        if($record_type == "C") return $this->db->get()->num_rows();
		else return $this->db->get()->result();
    }
	
	public function getGetAgentsList($phrase)
	{
		$agents = array();
		$i = 0;
		$this->db->select('site_user_id, site_user_profile_name, site_user_email');
		$this->db->like('site_user_profile_name', $phrase,'both',false);
		$this->db->order_by('site_user_id', 'ASC');
		$agents_list = $this->db->get($this->table)->result();
		foreach($agents_list as $a_c) {
		    $email	= base64De(BASE64_ENCODE_PROFILE_EMAIL_REPEAT,$a_c->site_user_email);
			$agents[$i]['site_user_id'] = $a_c->site_user_id;
			$agents[$i]['site_user_profile_name'] = $a_c->site_user_profile_name. '('. $email. ')';	
			$i++;
		}

		return $agents;
	}
	
	
	
	public function userAgentSave($data_array, $id = 0)
	{
		if($id == 0) {
			$this->db->insert($this->table_user_agent, $data_array);
			$last_id = $this->db->insert_id();
		} else {
			$this->db->where('site_user_id', $id);
			$this->db->update($this->table_user_agent, $data_array);
			$last_id = $id;
		}
		return $last_id;
	}
	
	public function agentSave($data_array, $id = 0)
	{
		if($id == 0) {
			$this->db->insert($this->table, $data_array);
			$last_id = $this->db->insert_id();
		} else {
			$this->db->where('site_user_id', $id);
			$this->db->update($this->table, $data_array);
			$last_id = $id;
		}
		return $last_id;
	}
	
	public function agentAddressSave($data_array, $id = 0)
	{
		if($id == 0) {
			$this->db->insert($this->table_user_address, $data_array);
			$last_id = $this->db->insert_id();
		} else {
			$this->db->where('site_user_id', $id);
			$this->db->update($this->table_user_address, $data_array);
			$last_id = $id;
		}
		return $last_id;
	}

	public function getAgentById($site_user_id)
	{	
		
		$this->db->select('u.*,ua.*,uad.*');		
		$this->db->from($this->table. ' u');
		$this->db->join($this->table_user_agent. ' ua', 'ua.site_user_id = u.site_user_id',  'left');
		$this->db->join($this->table_user_address. ' uad','uad.site_user_id = u.site_user_id', 'left');
	
		$this->db->where('u.site_user_id', $site_user_id);
		$this->db->limit(1);
		return $this->db->get();
	}		
	
}
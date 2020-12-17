<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_Model {

    public $image_url = '';
 	public function __construct(){
        parent::__construct();
        $this->load->database();
		$this->image_url = base_url('assets/upload/');
	}
	public function customQuery($query = ''){
    
        if (!empty($query)){
            $result = $this->db->query($query)
                    ->result();
                    //echo $this->db->last_query();
		//exit;
            return $result;
        }
        return false;
    }
    
    /**
	* 
	* Get Data
	* 
	*/
    
    public function getTableData($table_name, $condition = "", $field = '*', $get_data = "", $group_by = "", $order = "", $order_by = "" , $limit = "", $start = ""){
  			
    	if (!empty($table_name)){
			$this->db->select($field); 
			$this->db->from($table_name);   
			if(!empty( $condition)){
			$this->db->where($condition);
			}
			$this->db->group_by($group_by); 
			$this->db->order_by($order, $order_by); 

			if($limit != "" ||  $start != ""){
			
			   $this->db->limit($limit, $start); 
			}	
			
			$query = $this->db->get();
			  // echo $this->db->last_query();
		       //exit;
			if ($query->num_rows()){
				$result = $query->result(); 		    
				if ($get_data == '1'){			  
				   $result = $query->row();
				   $table_data = $result;
				} 
				else{
				   $table_data = $result;
				}			
				return $table_data;
			}
		} 
		else{
	   	    return false;
	   }	
	}
	
    /**
	* 
	* Edit Table Data
	* 
	* @return
	*/
    public function editTableData($table_name, $data, $condition ){
    	if(!empty($table_name)){
		$this->db->where($condition);
		$this->db->update($table_name, $data);
		
		//echo $this->db->last_query();
		//exit;
		if ($this->db->affected_rows() > 0){
			return $success = 'yes';
		   }
		else{
			return $success = 'no';
		   }
		}
		else{
			return false;
		}
	
	 }   
    
   
    /**
	* 
	* Insert Data
	* 
	*/
    
   public function addTableData($table_name, $data){
    	$data_insert_id = $this->db->insert($table_name, $data);
		return $this->db->insert_id();
    }
    
    /**
	* 
	* Delete Date
	*
	*/
	
   public function deleteDataId($table_name, $data, $id){
    $this->db->where($data, $id);
    $this->db->delete($table_name);  
 	return $success = "Success";
 	}
	
    
    /**
    * 
	* join two table
	* 
	*/
    
   public function getTableDataByJoin($select_data ,$tbale1, $table2, $table1_primary_key, $tbale2_frg_key,$condition_data_field, $id, $extra_condition, $join, $get_data = 1){
	   if($id){
		  $conditions =" ( `".$tbale1.'`.'."`".$condition_data_field."` = ".$id.")".$extra_condition;
		}

		$join_table = $tbale1.".".$table1_primary_key. '=' .$table2.".".$tbale2_frg_key;
	    $this->db->select($select_data);    
		$this->db->from($tbale1);
		$this->db->join($table2, $join_table, $join);
		if($id){
		   $this->db->where($conditions);
		}
		$query = $this->db->get();
		
		/*echo $this->db->last_query();*/
		
		if($query->num_rows()){
		    $result = $query->result_array(); 
		    if($get_data == '1'){
			 $table_data = array();
		    foreach ($result as $key => $value){
		        	 $table_data   = $value;
		    }
		}
		else{
			$table_data = $result;
		}
		return $table_data;
		}
   }  
   
    /**
	* 
	* Get Row
	* 
	*/
 	
	public function getRow($tablename, $condition){
		$this->db->select('*');
		$this->db->from($tablename);		
		$this->db->where($condition);
		$query = $this->db->get();
		return $result = $query->num_rows();
	}

}
?>
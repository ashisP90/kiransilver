<?php
class Ajax extends MY_Controller {
    function __construct() {
        parent::__construct();
       
    }
   
    /**
	* 
	* Delete Data
	*/
	
   function deleteData() {
   	if(isset($_POST['dataId'])) {
      $select_fields = $_POST['delete_for'];
      $del_data = $_POST['dataId'];
      $data_delete = $this->BlankModel->deleteDataId($_POST['table_name'], $select_fields, $del_data);
      if($data_delete){
	 	echo '1';
	 }
	 else{
	 	echo '0';
	 }
	}
  }  
  
  /**
  * 
  * Feature Product
  * 
  */
   function featureProduct() {
   	
   	if(isset($_POST['pro_id'])) {
   		
		$add_product_new_arrival ="";
		$change_product_new_arrival ="";
		$pro_id = $_POST['pro_id'];
		$select_conditions = " ( `id` = '".$pro_id."')";
		$select_fields = 'id, new_arrivals';
		$is_multy_result = 1;
		$productList = $this->BlankModel->getTableData(PRODUCTS, $select_conditions, $select_fields, $is_multy_result);

		if($productList->new_arrivals == '1'){
		$post_data = array('new_arrivals' => '0');	
		$change_product_new_arrival = $this->BlankModel->editTableData(PRODUCTS, $post_data, $select_conditions);
	    }
		else{
		$post_data = array('new_arrivals' => '1');	
		$add_product_new_arrival = $this->BlankModel->editTableData(PRODUCTS, $post_data, $select_conditions);
		}	

		if($add_product_new_arrival){
		 echo 'add';
		}
		else if($change_product_new_arrival){
		 echo 'remove';
		 }
		}
   
    } 
  
  /**
  * 
  * Sub Category
  * 
  */
  
   function fetchSubCategories(){
	  if(isset($_POST['cat_id'])){
	  	$cat_ids = $_POST['cat_id'];
	  	$sub_cat_list = array();
	    if($cat_ids){
	     
		  foreach($cat_ids as $cat_id){
		   $sub_category = getSubCategoryListByCatId($cat_id);
	  	   if($sub_category){
		 	 
		   foreach($sub_category as $sub_cat){
		   	$list[] = array( 'id'   => $sub_cat->id,
                             'name' => $sub_cat->scname);
             }
		   }
		}
	   	if(!empty($list)){
			 echo json_encode( array( 'response'=>$list) );
             die;
		}
		else{
			echo (json_encode(array('response'=>'0')));
		 }
	  	
	    }
      }
	}
  
  
  
   
   
}
?>
<?php
if(!function_exists('process_validation')){
	
	function process_validation($fan_id, $email, $mobile=""){
	$err = array();
	$CI = &get_instance();
	if(!empty($email)){
		$select_fields = 'email';
    	$is_multy_result = 1;
		$check_mail_condition =" ( `id` <> '".$fan_id."' AND `email` ='".$email."' AND `is_deleted` <> '1')";
	 	$chkemail = $CI->BlankModel->getTableData( 'fans', $check_mail_condition, $select_fields, $is_multy_result);	
		
	if( $chkemail ){
				$err[] = "Email already exist";
			}
		}
	if(!empty($mobile)){	
		 $select_fields = 'mobile';
    	 $is_multy_result = 1;
		 $check_mobile_condition = " ( `id` <> '".$fan_id."' AND `mobile` = '".$mobile."' AND `is_deleted` <> '1')";
	 	 $chkmobile = $CI->BlankModel->getTableData( 'fans', $check_mobile_condition, $select_fields, $is_multy_result);	
			
	if( $chkmobile ){
			$err[] = "Mobile Number already exist";
		 }
		}
		
	return $err;	
	}
}
if(!function_exists('userValidation')){
	function userValidation($table_name, $select_field, $data){
	$err = array();
	$CI = &get_instance();
	if(!empty($data)){
		$select_fields = $select_field;
    	$is_multy_result = 1;
		$check_mail_condition =" (`$select_field` ='".$data."' )";
	 	$chkemail = $CI->BlankModel->getTableData( $table_name, $check_mail_condition, $select_fields, $is_multy_result);	
		
	if( $chkemail ){
		$err = 1;
			}
		}	
	return $err;	
	}
}



function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
?>
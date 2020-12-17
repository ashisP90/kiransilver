<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Whislist_model extends CI_Model
{
	var $table = PRODUCTS;
	public function __construct()
    {
        parent::__construct();
    }
	
    public function getUsersWishlist($userId = NULL, $onlyItemIds = TRUE){
        
        $return = [];
        if(!$userId) $userId = $this->session->userdata('user_id');	
        if($userId){
            $return = $this->db->where('user_id', $userId)->get('wishlist')->row();
            if($return && $onlyItemIds){
                $return = $return->wishlist_products ? unserialize($return->wishlist_products) : [];
            }
        }
        return $return;
    }
    
    public function updateUsersWishlist($updateData, $recordObj = NULL, $userId = NULL){
        
        $return = FALSE;
        if(!$userId) $userId = $this->session->userdata('user_id');	
        if($recordObj){
            $return = $this->db->where('id', $recordObj->id)->where('user_id', $userId)->update('wishlist', $updateData);
        }else{
            $return = $this->db->insert('wishlist', $updateData);
        }
        return $return;
    }
    
    public function productIsInWishList($productId){
        try{
            $return = FALSE;
            $userId = $this->session->userdata('user_id');	
            if($userId){
                $usersWishlistData = $this->getUsersWishlist($userId);
                if($usersWishlistData && count($usersWishlistData)){
                    $return = isset($usersWishlistData[$productId]) ? TRUE : FALSE;
                }
            }
            return $return;
        } catch (Exception $ex) {
            print_r($ex);
        }
    }
}
?>
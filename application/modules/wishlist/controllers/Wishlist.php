<?php
if(!defined('BASEPATH'))
EXIT("No direct script access allowed");
class Wishlist extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Whislist_model');
        $this->user_session_checked($is_active_session = 1);
    }
    
    public function index()
    {
        $data = $head = array();
        $data['wishlistItemDetails'] = '';
        $data['wishlistItemIds'] = '';
        $wishlistItemIds = $this->Whislist_model->getUsersWishlist();
        if($wishlistItemIds && count($wishlistItemIds)){
            $data['wishlistItemIds'] = $wishlistItemIds;
            $data['wishlistItemDetails'] = $this->getWishlistItemDetails($wishlistItemIds);
        }
         front_common_viewloader('wishlist/index', $data ); 	
    }
    
    
    public function getWishlistItemDetails($wishlistItemIds = []){
        
        $return = FALSE;
        if($wishlistItemIds && count($wishlistItemIds)){
            arsort($wishlistItemIds);
            $wishlistItemDetails = $this->db->where_in('id', array_keys($wishlistItemIds))->get('products');
            $return = $wishlistItemDetails ? $wishlistItemDetails->result() : FALSE;
        }
        return $return;
    }
    

    /**
     * Updates Users Wishlist
     */
    public function updateWishlist(){
        
        try{
            $return = ['success' => FALSE];
            $productId = $this->input->post('product_id');
            $action = $this->input->post('action');
            if($productId){
                if($userId = $this->session->userdata('user_id')){
                    $wishlistItems = [];
                    $wishlistItemsQry = $this->Whislist_model->getUsersWishlist($userId, FALSE);
                    if($wishlistItemsQry){
                       $wishlistItems = $wishlistItemsQry->wishlist_products ? unserialize($wishlistItemsQry->wishlist_products) : [];
                    }
                    switch ($action):
                        case 'add':
                            $wishlistItems[$productId] = getCurrentDateTime();
                            break;
                        case 'remove':
                            if(isset($wishlistItems[$productId])) unset($wishlistItems[$productId]);
                            break;
                    endswitch;
                    
                    $updateData = ['user_id' => $userId, 'wishlist_products' => serialize($wishlistItems)];
                    $updated = $this->Whislist_model->updateUsersWishlist($updateData, $wishlistItemsQry);
                    if($updated){
                        $return['success'] = 1;
                        $return['message'] = ($action == 'add') ? "Product added to wishlist successfully" : "Product removed from wishlist successfully"; 
                    }else{
                        $return['message'] = "Failed to update wishlist!!"; 
                    }
                }
                else{
                   $return['message'] = "User Not Logged In!!"; 
                }
            }else{
                $return['message'] = "Missing Product Id!!";
            }
            echo json_encode($return);
        } catch (Exception $ex) {

        }
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends MY_Controller{
    
    function  __construct(){
        parent::__construct();
      
        // Load product model
        $this->load->model('Checkout_model', 'Products');
      
        $this->controller = 'checkout';
    }
    
    function index(){
        // Redirect if the cart is empty
        if($this->cart->total_items() <= 0){
            redirect('shop/');
        }
        $this->user_cart_session_checked($is_active_session = 1);
			   
        $custData = $data = array();
       
        $current_user_id = $this->session->userdata('user_id');	
		
        $data['user_details']= getUserDetails($current_user_id);
        
        // If order request is submitted
        $submit = $this->input->post('placeOrder');
        if(isset($submit)){
            // Form field validation rules
          
            $this->form_validation->set_rules('billing_name', 'Name', 'required');
            $this->form_validation->set_rules('billing_phone', 'Mobile', 'required');
            $this->form_validation->set_rules('billing_city', 'Billing City', 'required');
            $this->form_validation->set_rules('billing_state', 'Billing State', 'required');
            $this->form_validation->set_rules('billing_pincode', 'Billing Pincode', 'required');
            $this->form_validation->set_rules('billing_address', 'Billing Address', 'required');        
            
            
            $this->form_validation->set_rules('shipping_name', 'Shipping Name', 'required');
            $this->form_validation->set_rules('shipping_phone', 'Shipping Mobile', 'required');
            $this->form_validation->set_rules('shipping_city', 'Shipping City', 'required');
            $this->form_validation->set_rules('shipping_state', 'Shipping State', 'required');
            $this->form_validation->set_rules('shipping_pincode', 'Shipping Pincode', 'required');
            $this->form_validation->set_rules('shipping_address', 'Shipping Address', 'required');
             
            // Validate submitted form data
            if($this->form_validation->run() == true){
            	 $payment_method =$this->input->post('payment_method');
                // Insert customer data
                 
                // Check customer data insert status
                if($current_user_id){
                    // Insert order
                    $order = $this->placeOrder($current_user_id, $payment_method);
               
                 // Prepare customer data
           
                $delivaryData = array(
                'order_id'          => $order,
                'billing_name'      => strip_tags($this->input->post('billing_name')),
                'billing_phone'     => strip_tags($this->input->post('billing_phone')),
                'billing_city'      => strip_tags($this->input->post('billing_city')),
                'billing_state'     => strip_tags($this->input->post('billing_state')),
                'billing_pincode'   => strip_tags($this->input->post('billing_pincode')),
                'billing_address'   => strip_tags($this->input->post('billing_address')),
                'shipping_name'     => strip_tags($this->input->post('shipping_name')),
                'shipping_phone'    => strip_tags($this->input->post('shipping_phone')),
                'shipping_city'     => strip_tags($this->input->post('shipping_city')),
                'shipping_state'    => strip_tags($this->input->post('shipping_state')),
                'shipping_pincode'  => strip_tags($this->input->post('shipping_pincode')),
                'shipping_address'  => strip_tags($this->input->post('shipping_address'))
                );
               
                $insert = $this->BlankModel->addTableData(ORDERS_DETAILS, $delivaryData);
                  // If the order submission is successful
                if($order){
                    $this->session->set_userdata('success_msg', 'Order placed successfully.');
                    redirect($this->controller.'/orderSuccess/'.$order);
                }
                else{
                    $data['error_msg'] = 'Order submission failed, please try again.';
                }
               }
               else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
               }
            }
        }
        
        // Customer data
        $data['custData'] = $custData;
        
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();
      
         if($current_user_id){
	     $_condition = " ( `user_id` = '".$current_user_id."' )";
	     $bulk_product = $this->BlankModel->getTableData('bulk_products', $_condition, '*', 2);
	 
         if($bulk_product){
		   $data_delete = $this->BlankModel->deleteDataId('bulk_products', 'user_id', $current_user_id);	
		 }
     	}
        
        // Pass products data to the view
        front_common_viewloader($this->controller.'/index', $data);
    }
    
  
    
    function placeOrder($custID, $payment_method){
        // Insert order data
        $ordData = array(
            'user_id' => $custID,
            'payment_method' => $payment_method,
            'grand_total' => $this->cart->total()
        );
      
        $insertOrder = $this->Products->insertOrder($ordData);
        
        if($insertOrder){
            // Retrieve cart data from the session
            $cartItems = $this->cart->contents();
            
            // Cart items
            $ordItemData = array();
            $i=0;
            foreach($cartItems as $item){
                $ordItemData[$i]['order_id']    = $insertOrder;
                $ordItemData[$i]['pro_det_id']  = $item['id'];
                $ordItemData[$i]['product_id']  = $item['main_pro_id'];
                $ordItemData[$i]['quantity']    = $item['qty'];
                $ordItemData[$i]['sub_total']   = $item["subtotal"];
                $i++;
            }
            
            if(!empty($ordItemData)){
                // Insert order items
                $insertOrderItems = $this->Products->insertOrderItems($ordItemData);
              
                if($insertOrderItems){
                    // Remove items from the cart
                    $this->cart->destroy();
                    
                    // Return order ID
                    return $insertOrder;
                }
            }
        }
        return false;
    }
    
  
    function orderSuccess($ordID){
        // Fetch order data from the database
        $data['order'] = $this->Products->getOrder($ordID);
        
        // Load order details view
        front_common_viewloader($this->controller.'/order_success', $data);
    }
    
}
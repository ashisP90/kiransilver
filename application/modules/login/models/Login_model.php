<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends My_Model
{
	var $table = PRODUCTS;
	var $table_product_details = PRODUCT_DETAILS;
	var $table_categories = CATEGORIES;
	var $table_sub_categories = SUB_CATEGORIES;
	var $table_product_categories = PRODUCT_CATEGORIES;
	var $table_product_sub_categories = PRODUCT_SUB_CATEGORIES;
	var $ordTable  = ORDERS;
	var $ordItemsTable = ORDER_ITEMS;
	var $users = USERS;
	
	
	public function __construct()
    {
        parent::__construct();
    }
			
	
}
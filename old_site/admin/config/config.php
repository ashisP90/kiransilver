<?php 
session_start();

define ('BASE_URL', 'http://localhost/kiransilver/codes/admin/');

include('database.php');

include('functions.php');

define('PRODUCT_TYPE_READY', 1);
define('PRODUCT_TYPE_ON_ORDER', 2);

$productTypes = [
    PRODUCT_TYPE_READY => 'In Stock',
    PRODUCT_TYPE_ON_ORDER => 'By Order',
];
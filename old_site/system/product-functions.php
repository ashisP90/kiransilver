<?php
/**
 * Gets All Products
 * @global type $db
 * @param type $args
 * @return type
 */
function getProducts($args = []){
    
    global $db;
    $products = [];
    $productsQry = "SELECT * FROM product ORDER BY id DESC";
    $result = $db->query($productsQry);
    
    if($result->num_rows > 0) {
        while($row = $result->fetch_object()) {
            $products[$row->id] = $row;
        }
    }
    return $products;
}

/**
 * Gets Single Product
 * @global type $db
 * @param type $args
 * @return type
 */
function getProduct($id){
    
    global $db;
    $return = '';
    $productsQry = "SELECT * FROM product where id = $id";
    $result = $db->query($productsQry);

    if($result->num_rows > 0) {
        $return = $result->fetch_object();
    }
    return $return;
}
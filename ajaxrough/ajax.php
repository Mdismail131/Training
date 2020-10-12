<?php
include('config.php');
global $products;

$productid = $_POST['p_id'];

function fetchproduct($productid){
    global $products;
    foreach ($products as $product) {
        if ($product['name'] == $productid) {
            return $product;
        }
    }
    return false;
}

$product = fetchproduct($productid);

echo json_encode(array('product' => $product));
?>
<?php
/**
 * Header File.
 * PHP version 5
 * 
 * @category Components
 * @package  PHP
 * @author   Md Ismail <mi0718839@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  SVN: $Id$
 * @link     https://yoursite.com
 */
session_start();
$url_arr = $_SERVER['PHP_SELF'];
$url = explode('/', $url_arr);
if ($url[3] == 'products.php') {
    $title = 'Products';
}
if (isset($_POST['clear_cart'])) {
    session_unset();
    session_destroy();
}
if (isset($_POST['clear_entry'])) {
    $arr=$_SESSION['cart_products'];

    foreach ($arr as $key => $war) {
        if ($war['name'] == $_POST['name']) {
            unset($arr[$key]);
        }
    }
    $_SESSION['cart_products']=$arr;
    $cart_products = $_SESSION['cart_products'];

}
if (isset($_SESSION['cart_products']) && $_SESSION['cart_products'] != "") {

    $cart_products = $_SESSION['cart_products'];

} else {
    $cart_products = array();
}

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cart_products'])) {
        
        $say = $_SESSION['cart_products'];
        foreach ($say as $key => $val) {
            if ($val['name'] == $_POST['name']) {
                $quan = $val['qnt'];
                $prace = $val['price'];
                unset($say[$key]['qnt']);
                unset($say[$key]['price']);
                $say[$key]['qnt'] = $quan + 1;
                $say[$key]['price'] = $prace + $_POST['price'];
                $_SESSION['cart_products'] = $say;
                break;
            } 
        }
        if ($val['name'] != $_POST['name']) {
            $temp = array();
            $temp['name'] = $_POST['name'];
            $temp['qnt'] = $_POST['qnt'];
            $temp['price'] = $_POST['price'];
        }
    } else {
        $temp = array();
        $temp['name'] = $_POST['name'];
        $temp['qnt'] = $_POST['qnt'];
        $temp['price'] = $_POST['price'];
    }
    if (!empty($temp)) {
        $cart_products[] = $temp;
        $_SESSION['cart_products'] = $cart_products;
    }        
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>
       <?php echo $title;?>
    </title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="header">
        <h1 id="logo">Logo</h1>
        <nav>
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php">View Cart</a></li>
            </ul>
        </nav>
    </div>
<?php
/**
 * A Listing of Products.
 * PHP version 5
 * 
 * @category Components
 * @package  PHP
 * @author   Md Ismail <mi0718839@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  SVN: $Id$
 * @link     https://yoursite.com
 */
$title="Products";
require "header.php";
require "config.php";
?>
<div id="main">
    <div id="products">
    <?php
    foreach ($products as $values) {
        echo '<div id="product-101" class="product">';
        foreach ($values as $val) {
            echo $val;
        }
        echo '</div>';
    }
    ?>
        <!-- <div id="product-101" class="product">
            <img src="images/football.png">
            <h3 class="title"><a href="#">Product 101</a></h3>
            <span>Price: $150.00</span>
            <a class="add-to-cart" href="#">Add To Cart</a>
        </div> -->
        <!-- <div id="product-101" class="product">
            <img src="images/tennis.png">
            <h3 class="title"><a href="#">Product 102</a></h3>
            <span>Price: $120.00</span>
            <a class="add-to-cart" href="#">Add To Cart</a>
        </div>
        <div id="product-101" class="product">
            <img src="images/basketball.png">
            <h3 class="title"><a href="#">Product 103</a></h3>
            <span>Price: $90.00</span>
            <a class="add-to-cart" href="#">Add To Cart</a>
        </div>
        <div id="product-101" class="product">
            <img src="images/table-tennis.png">
            <h3 class="title"><a href="#">Product 104</a></h3>
            <span>Price: $110.00</span>
            <a class="add-to-cart" href="#">Add To Cart</a>
        </div>
        <div id="product-101" class="product">
            <img src="images/soccer.png">
            <h3 class="title"><a href="#">Product 105</a></h3>
            <span>Price: $80.00</span>
            <a class="add-to-cart" href="#">Add To Cart</a>
        </div> -->
    </div>
</div>
<?php
require 'footer.php';
?>
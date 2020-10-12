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
$siteurl="http://localhost/Training/phptask2/";
$addtocart = '<a class="add-to-cart" href="#">Add To Cart</a>';
$products = array(
                array(
                    "img_src" => "<img src='images/football.png'>",
                    "name" => '<h3 class="title"><a href="#">Product 101</a></h3>',
                    "Price" => "Price: $150.00",
                    "add" => $addtocart
                ),
                array(
                    "img_src" =>  "<img src='images/tennis.png'>",
                    "name" => '<h3 class="title"><a href="#">Product 102</a></h3>',
                    "Price" => "Price: $120.00",
                    "add" => $addtocart
                ),
                array(
                    "img_src" =>  "<img src='images/basketball.png'>",
                    "name" => '<h3 class="title"><a href="#">Product 103</a></h3>',
                    "Price" => "Price: $90.00",
                    "add" => $addtocart
                ),
                array(
                    "img_src" =>  "<img src='images/table-tennis.png'>",
                    "name" => '<h3 class="title"><a href="#">Product 104</a></h3>',
                    "Price" => "Price: $110.00",
                    "add" => $addtocart
                ),
                array(
                    "img_src" =>  "<img src='images/soccer.png'>",
                    "name" => '<h3 class="title"><a href="#">Product 105</a></h3>',
                    "Price" => "Price: $80.00",
                    "add" => $addtocart
                )
            );
?>
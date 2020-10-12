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
$products = array(
                "Electronics" => array(
                                    "Television" => array(
                                                        array(
                                                            "id" => "PR001", 
                                                            "name" => "MAX-001",
                                                            "brand" => "Samsung"
                                                            ),
                                                        array(
                                                            "id" => "PR002", 
                                                            "name" => "BIG-301",
                                                            "brand" => "Bravia"
                                                        ),
                                                        array(
                                                            "id" => "PR003", 
                                                            "name" => "APL-02",
                                                            "brand" => "Apple"
                                                        )
                                                    ),
                                    "Mobile" => array(
                                                    array(
                                                        "id" => "PR004", 
                                                        "name" => "GT-1980",
                                                        "brand" => "Samsung"
                                                    ),
                                                    array(
                                                        "id" => "PR005", 
                                                        "name" => "IG-5467",
                                                        "brand" => "Motorola"
                                                    ),
                                                    array(
                                                        "id" => "PR006", 
                                                        "name" => "IP-8930",
                                                        "brand" => "Apple"
                                                    )
                                                )
                            ),
                "Jewelry" => array(
                                "Earrings" => array(
                                                    array(
                                                        "id" => "PR007", 
                                                        "name" => "ER-001",
                                                        "brand" => "Chopard"
                                                    ),
                                                    array(
                                                        "id" => "PR008", 
                                                        "name" => "ER-002",
                                                        "brand" => "Mikimoto"
                                                    ),
                                                    array(
                                                        "id" => "PR009", 
                                                        "name" => "ER-003",
                                                        "brand" => "Bvlgari"
                                                    )
                                                ),
                                "Necklaces" => array(
                                                        array(
                                                            "id" => "PR010", 
                                                            "name" => "NK-001",
                                                            "brand" => "Piaget"
                                                        ),
                                                        array(
                                                            "id" => "PR011", 
                                                            "name" => "NK-002",
                                                            "brand" => "Graff"
                                                        ),
                                                        array(
                                                            "id" => "PR012", 
                                                            "name" => "NK-003",
                                                            "brand" => "Tiffany"
                                                            )
                                                    )
                                )
                );
// 1. List all products in this format:
// Category        Subcategory       ID          Name        Brand
// Electronics     Television       PR001       MAX-001     Samsung

echo "<table>";
echo "<pre>";
echo "<tr>";
echo "<th>CATEGORY</th>";
echo "<th>SUBCATEGORY</th>";
echo "<th>ID</th><th>NAME</th>";
echo "<th>BRAND</th>";
echo "</tr>";
foreach ($products as $categ=>$subcateg) {
    foreach ($subcateg as $key => $value) {
        foreach ($value as $key1 => $val1) {
            echo "<tr>";
            echo "<td>".$categ."</td>";
            echo "<td>".$key."</td>";
            echo "<td>".$val1['id']."</td>";
            echo "<td>".$val1['name']."</td>";
            echo "<td>".$val1['brand']."</td>";
            echo "</tr>";
        }
    }
}
echo "</pre>";
echo "</table>";

// 2. List all products in Mobile subcategory in same format as in point 1.

echo "<table>";
echo "<pre>";
echo "<tr>";
echo "<th>CATEGORY</th>";
echo "<th>SUBCATEGORY</th>";
echo "<th>ID</th><th>NAME</th>";
echo "<th>BRAND</th>";
echo "</tr>";
foreach ($products as $categ=>$subcateg) {
    foreach ($subcateg as $key => $value) {
        foreach ($value as $key1 => $val) {
            if ($key=='Mobile') {
                echo "<tr>";
                echo "<td>".$categ."</td>";
                echo "<td>".$key."</td>";
                echo "<td>".$val['id']."</td>";
                echo "<td>".$val['name']."</td>";
                echo "<td>".$val['brand']."</td>";
                echo "</tr>";
            }
        }
    }
}
echo "</pre>";
echo "</table>";

// 3. List all products with their id, name, subcategory and category<br>
// with brand name = "Samsung" like this:<br>

// Product ID:  PR001<br>
// Product Name:  MAX-001<br>
// Subcategory:  Television<br>
// Category:  Electronics<br>
foreach ($products as $categ => $subcateg) {
    foreach ($subcateg as $key => $value) {
        foreach ($value as $key1 => $val) {
            if ($val['brand']=='Samsung') {
                echo "<br>";
                echo "Product ID :  ".$val['id']."<br>";
                echo "Product Name :  ".$val['name']."<br>";
                echo "Subcategory :  ".$key."<br>";
                echo "Category :  ".$categ."<br>";
                echo "<br>";
            }
        }
    }
}

// 4. Delete product with id = PR003.
// 5. Update product name = "BIG-555" with id = PR002.

echo "<table>";
echo "<pre>";
echo "<tr>";
echo "<th>CATEGORY</th>";
echo "<th>SUBCATEGORY</th>";
echo "<th>ID</th><th>NAME</th>";
echo "<th>BRAND</th>";
echo "</tr>";
foreach ($products as $categ => $subcateg) {
    foreach ($subcateg as $key => $value) {
        foreach ($value as $key1=> $val) {
            if ($val['id']==="PR003") {
                unset($products[$categ][$key][$key1]);
            } else if ($val['id']==="PR002") {
                unset($products[$categ][$key][$key1]['name']);
                $products[$categ][$key][$key1]['name']="BIG-555";
                $val['name']="BIG-555";
                echo "<tr>";
                echo "<td>".$categ."</td>";
                echo "<td>".$key."</td>";
                echo "<td>".$val['id']."</td>";
                echo "<td><b>".$val['name']."</b></td>";
                echo "<td>".$val['brand']."</td>";
                echo "</tr>";
            } else {
                echo "<tr>";
                echo "<td>".$categ."</td>";
                echo "<td>".$key."</td>";
                echo "<td>".$val['id']."</td>";
                echo "<td>".$val['name']."</td>";
                echo "<td>".$val['brand']."</td>";
                echo "</tr>";
            }
        }
    }
}
echo "</pre>";
echo "</table>";
?>
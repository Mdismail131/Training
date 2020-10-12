<div id="product-101" class="product">
    <?php
    /**
     * Cart Items.
     * PHP version 5
     * 
     * @category Components
     * @package  PHP
     * @author   Md Ismail <mi0718839@gmail.com>
     * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
     * @version  SVN: $Id$
     * @link     https://yoursite.com
     */
    $title = "Cart";
    require "header.php";
    if (isset($cart_products) && !empty($cart_products)) {
        $total = 0;
        echo '<table>';
        echo "<tr>";     
        echo "<th>Product Name</th>";
        echo "<th>Product Quantity</th>";
        echo "<th>Product Price</th>";
        echo "</tr>";
        echo "</tr>";
        foreach ($cart_products as $val) {
            $total = $total + $val['price'];
            echo "<tr>";     
            echo "<form method='POST'>";
            echo "<td><input type='hidden' name='name' value='".$val['name']."'>
                    <h3 class='title'><a href='#'>".$val['name']."</a></h3></td>";
            echo "<td><input type='hidden' name='qnt' value='".$val['qnt']."'>".$val['qnt']."</td>";
            echo "<td><input type='hidden' name='price' value='".$val['price']."'> $".$val['price']."</td>";
            echo "<td><input type='submit' name='clear_entry' 
                value='Clear Entry'</td>";
            echo "</form>";
            echo "</tr>";            
        }
        echo '</table>';
        echo "<form method='POST'>";
        echo "<input type='submit' id='cartclear' name='clear_cart' 
               value='Clear Cart'>";
        echo "</form>";
        echo '<h3>Total: '.$total.'</h3>';
    }
    ?></div>
    
   
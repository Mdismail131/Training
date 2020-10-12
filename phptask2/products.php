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

require "header.php";
require "config.php";
?>
<div id="main">
    <div id="products">
    <?php
    
    foreach ($products as $values) {
        echo '<form method="POST"><div id="product-101" class="product">';     
        echo "<input type='hidden' name='image' value='".$values['img_src']."'>";
        echo '<img src="images/'.$values['img_src'].'" >';
        echo "<input type='hidden' name='name' value='".$values['name']."'>";
        echo '<h3 class="title"><a href="#">'.$values['name'].'</a></h3>';
        echo "<input type='hidden' name='qnt' value='1'>";
        echo "<input type='hidden' name='price' value='".$values['Price']."'>";
        echo '<p style="text-align:center;">Price: $'.$values['Price'].'</p>';
        echo $values['add'];
        
        echo '</div></form>';
    }
    ?>
    </div>
</div>
<?php
require 'footer.php';
?>
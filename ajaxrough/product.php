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

// require "header.php";

require "config.php";
?>
<link href="style.css" type="text/css" rel="stylesheet">
<div id="main">
    <div id="products">
    <?php  foreach ($products as $values): ?>
    <div class="product">
        <img src="images/<?php echo $values['img_src']; ?>" alt="">
        <h3><?php echo $values['name']; ?></h3>
        <span><?php echo $values['Price']; ?></span>
        <a href="#" data-productid="<?php echo $values['name']; ?>" class="add-to-cart"><?php echo $values['add']; ?></a>
    </div>
    <?php  endforeach; ?>
    </div>
    <div id="result"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.add-to-cart').click(function(){
            var id = $(this).data('productid');
            // console.log('clicked'+id);
            $.ajax({
                method: "POST",
                url: "ajax.php",
                data: { p_id: id},
                dataType: "json"
                })
                .done(function( msg ) {
                    console.log(msg.product);
                    $('#result').html("item added "+msg.product);
                });
        });
    });
</script>     
<?php
// require 'footer.php';
?>
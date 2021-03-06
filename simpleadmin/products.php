<?php
/**
 * Index File.
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
require "sidebar.php";
require "config.php";

if (!isset($_SESSION['user_logged_in']) ) {

    header('Location: http://localhost/Trainiing/dailyShop/simpleadmin/login.php');

}

if (isset($_GET['action'])) {

    $id = $_GET['product_id'];

    if ($_GET['action'] == 'edit' && $_GET['product_id'] != 0) {

        // echo $_GET['product_id'];
        // exit;

    } elseif ($_GET['action'] == 'delete' && $_GET['product_id'] != 0) {

        $delete_query = 'DELETE FROM `prod_table` WHERE `Product Id` = '.$id.' ';
        $result1 = mysqli_query($conn, $delete_query);
    }

}

?>
<div id="main-content"> <!-- Main Content Section with everything -->

    <noscript> <!-- Show a notification if the user has disabled javascript -->
        <div class="notification error png_bg">
            <div>
                Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
            </div>
        </div>
    </noscript>
    
    <!-- Page Head -->
<h2>Welcome <?php if (isset($_SESSION['user_logged_in'])) { 
    echo $_SESSION['user_logged_in']['name']; 
} ?></h2>
    <p id="page-intro">What would you like to do?</p>    
    <div class="clear"></div> <!-- End .clear -->    
    <div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">
        
        <h3>Content box</h3>
        
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2">Add</a></li>
        </ul>
        
        <div class="clear"></div>
        
    </div> <!-- End .content-box-header -->
        
        <div class="content-box-content">
            
            <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                
                <div class="notification attention png_bg">
                    <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                    <div>
                        This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
                    </div>
                </div>
                <table>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="bulk-actions align-left">
                                    <select name="dropdown">
                                        <option value="option1">Choose an action...</option>
                                        <option value="option2">Edit</option>
                                        <option value="option3">Delete</option>
                                    </select>
                                    <a class="button" href="#">Apply to selected</a>
                                </div>
                                
                                <div class="pagination">
                                    <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                    <a href="#" class="number" title="1">1</a>
                                    <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                                </div> <!-- End .pagination -->
                                <div class="clear"></div>
                            </td>
                        </tr>
                    </tfoot>

                    <tbody>
                    
                    <?php
                    
                    $select = "SELECT * FROM prod_table "; 
                    $result = mysqli_query($conn, $select);
                    $row = mysqli_fetch_all($result);
                    echo "<thead>";
                    echo '<tr>
                    <th><input class="check-all" type="checkbox" /></th>
                    <th>Product Id</th>
                    <th>Category Id</th>
                    <th>Product name</th>
                    <th>Product Price</th>
                    <th>Selling Price</th>
                    <th>Quantity</th>
                    <th>Short Description</th>
                    <th>Long Description</th>
                    <th>Buttons</th>
                    </tr>';
                    echo "</thead>";

                    foreach ($row as $value) {
                        echo "<tr>";
                        echo '<td><input type="checkbox" /></td>';
                        echo "<td>" . $value[0] . "</td>";
                        echo "<td>" . $value[1] . "</td>";
                        echo "<td>" . $value[2] . "</td>";
                        echo "<td>" . $value[3] . "</td>";
                        echo "<td>" . $value[4] . "</td>";
                        echo "<td>" . $value[5] . "</td>";
                        echo "<td>" . $value[6] . "</td>";
                        echo "<td>" . $value[7] . "</td>";
                        echo "<td>";
                        echo '<a href="http://localhost/Training/dailyShop/simpleadmin/products.php?action=edit&product_id='.$value[0].'" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>';
                        echo '<a href="http://localhost/Training/dailyShop/simpleadmin/products.php?action=delete&product_id='.$value[0].'" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>';
                        echo "</td>";
                        echo "</tr>";
                    }                
                    ?>
                    </tbody>
                </table>
            </div> <!-- End #tab1 -->
            
            <div class="tab-content" id="tab2">
            
                <form action="#" method="post">
                    
                    <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                        
                        <p>
                            <label>product Id</label>
                                <input class="text-input small-input" type="number" id="prod_id" name="small-input" required/>
                                <br />
                        </p>

                        <p>
                            <label>Product Name</label>
                            <input class="text-input medium-input datepicker" type="text" id="prod_name" name="medium-input" required/> 
                        </p>
                        
                        <p>
                            <label>Category</label>              
                            <select name="dropdown" class="small-input">
                                <option value="1">Men</option>
                                <option value="2">Women</option>
                                <option value="3">Kids</option>
                                <option value="4">Electronics</option>
                                <option value="5">Sports</option>
                            </select> 
                        </p>

                        <p>
                            <label>Tags</label>
                            <input type="checkbox" name="fashion" /> Fashion 
                            <input type="checkbox" name="electronics" /> Electronics
                            <input type="checkbox" name="games" /> Games
                            <input type="checkbox" name="handbag" /> Hand Bag
                            <input type="checkbox" name="laptop" /> Laptop
                            <input type="checkbox" name="headphone" /> Headphone
                        </p>

                        <p>
                            <label>Short Details</label>
                            <input class="text-input short-input" type="text" id="short-input" name="prod_short_det" required/>
                        </p>
                        
                        <p>
                            <label>Long Details</label>
                            <input class="text-input large-input" type="text" id="large-input" name="prod_det" required/>
                        </p>
                        
                        <p>
                            <label>MRP</label>
                            <input type="number" name="prod_price" required/> 
                        </p>

                        <label>Selling Price</label>
                            <input type="number" name="prod_price" required/> 
                        </p>
                        
                        <p>
                            <input class="button" type="submit" value="Submit" />
                        </p>
                        
                    </fieldset>
                    
                    <div class="clear"></div><!-- End .clear -->
                    
                </form>
                
            </div> <!-- End #tab2 -->        
            
        </div> <!-- End .content-box-content -->
        
    </div> <!-- End .content-box -->
<?php

require "footer.php";

?>
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
require "config.php";

$id = $_POST['p_id'];

$select = "SELECT * FROM prod_table "; 
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_all($result);
foreach ($row as $value) {
    if ($value['0'] == $id) {?>
    <script>alert("Id Already Exist");</script>
<?php   } else {
    
}
}
?>
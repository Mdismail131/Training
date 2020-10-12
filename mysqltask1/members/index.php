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
$title = "index";
require "../header.php";

$arr = array();

if (isset($_SESSION['data'])) {

    $arr = $_SESSION['data'];
    

}
if (isset($arr['name'])) {
    echo "<h3>welcome '".$arr['name']."'</h3>";
    echo "<a href='http://localhost/Training/mysqltask1/login.php?action=logout'>Logout </a>";
}

?>
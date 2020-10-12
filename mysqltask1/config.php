<?php
/**
 * Global settings/Elements.
 * PHP version 5
 * 
 * @category Components
 * @package  PHP
 * @author   Md Ismail <mi0718839@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  SVN: $Id$
 * @link     https://yoursite.com
 */
$siteurl="http://localhost/Training/mysqltask1/";

$conn = mysqli_connect('localhost', 'root', '', 'users');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
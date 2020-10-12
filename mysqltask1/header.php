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
session_start();
if (isset($_GET['action']) && ($_GET['action'] == 'logout')) {
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo $title; ?>
    </title>
</head>
<body>
    <div id="wrapper">
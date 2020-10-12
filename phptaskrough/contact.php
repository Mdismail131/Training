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
$title="Contact";
require "header.php";
?>
<div id="main">
    <div id="contact-form">
        <form action="" method="">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control">
            <label for="message">Message:</label>
            <textarea name="message" cols="45" rows="6" class="form-control">
            </textarea>
            <p class="submit">
                <input type="submit" name="submit" value="Submit">
            </p>
        </form>
    </div>
</div>
<?php
require 'footer.php';
?>
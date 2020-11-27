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
require "admin/DBconnection.php";
require "User.php";
$title = "Log In";
require "header.php";
if (isset($_SESSION['admin'])) {
    header('Location: http://localhost/Cab_Project/admin/admin_dashboard.php');
} elseif (isset($_SESSION['user'])) {
    header('Location: http://localhost/Cab_Project/user_dashboard.php');
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new User();
    $db = new DBconnection();

    $sql = $user->login($username, $password, $db->conn);
}
?>
<div id="login-form" class="aa-login-form">
    <form method="POST">
        <p>
            <label for="username">Username: <input type="text" 
                    name="username" required></label>
        </p>
        <p>
            <label for="password">Password: <input type="password" 
                    name="password" required></label>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit">
        </p>
    </form>
    <?php if (isset($sql)) { ?>
    <div id="result">
        <?php echo $sql?>
    </div>
    <?php } ?>
</div>
<?php
require "footer.php";
?>
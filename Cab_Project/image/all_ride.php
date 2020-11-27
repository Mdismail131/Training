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
require "admin/DBconnection.php";
require "Ride.php";
$title = "All Rides";
require "header.php";
if (!isset($_SESSION['user'])) {
    header('Location: http://localhost/Cab_Project/login.php');
}
$user = new Ride();
$db = new DBconnection();
$total = 0;
$row_user = $user->all_ride($_SESSION['user_id'], $db->conn);
?>
<?php if (isset($row_user)) { ?>
<div id="previous_approved_ride">
    <table>
        <thead>
            <tr>
                <th>Ride Date</th>
                <th>From</th>
                <th>To</th>
                <th>Total Distance</th>
                <th>Cab Type</th>
                <th>Luggage</th>
                <th>Total Fare</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($row_user as $key => $val) {
            ?>
            <tr>
            <td><?php echo $val['ride_date']?></td>
            <td><?php echo $val['from_loc']?></td>
            <td><?php echo $val['to_loc']?></td>
            <td><?php echo $val['total_distance']?></td>
            <td><?php echo $val['cab_type']?></td>
            <td><?php echo $val['luggage']?></td>
            <td><?php echo $val['total_fare']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php } else {?>
<div>
    <h1>Oops You Are New to Cedcab WELCOME <?php echo $_SESSION['user']?></h1>
</div>
<?php } ?>
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

class User
{
    // public $user_id;
    // public $user_name;
    // public $name;
    // public $date_of_signup;
    // public $mobile;
    // public $is_block;
    // public $password;
    // public $is_admin;

    function login($username, $password, $conn)
    {
        $pass = md5($password);
        $sql = "select * from `tbl_user` where `user_name` = '$username' and `password` = '$pass'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        if ($result->num_rows > 0 ) {
            if ($row['is_block'] == 0) {
                $rtrn = "You have to wait for the admin approval as you are not authorised yet.";
            } elseif ($row['is_block'] != 0 && $row['isAdmin'] == 1) {
                $_SESSION['admin'] = $username;
                header('Location: http://localhost/Cab_Project/admin/admin_dashboard.php');
            } else {
                $_SESSION['user'] = $username;
                header('Location: http://localhost/Cab_Project/user_dashboard.php');
            }
        } else {
            $rtrn = "Please provide the Correct username and password";
        }
        return $rtrn;
    }
    function signup($username, $name, $mobile,  $pass, $date, $status, $isAdmin, $conn)
    {
        $sql = "select * from `tbl_user` where `user_name` = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0 ) {
            ?>
            <script>alert("Username Already Exist");</script>
            <?php
        } else {
            $sql1 = "INSERT INTO `tbl_user`(`user_name`, `name`, `date_of_signup`, `mobile`, `is_block`, `password`, `isAdmin`) VALUES ('$username', '$name', '$date', '$mobile', '$status' , '$pass', '$isAdmin' )";
            $result1 = $conn->query($sql1);
            if (isset($result1)) {
            ?><script>alert("Successfully Signup please wait for Admin authentication");</script><?php
            } else {
            ?><script>alert("Please Provide Valid Inputs");</script><?php
            }
        }
    }
    function distinct_user($username, $conn)
    {
        $sql = "select * from `tbl_user` where `user_name` = '$username'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function update($username, $name, $mobile, $password, $curr_pass, $new_pass, $conn) 
    {
        if ($curr_pass != "" && $new_pass != "") {
            if ($password == md5($curr_pass)) {
                $pass = md5($new_pass);
                $sql = "UPDATE `tbl_user` SET `name`= '$name', `mobile`='$mobile', `password` = '$pass' WHERE `user_name` = '$username'";
                $result = $conn->query($sql);
                $rtrn = 'Your details are successfully updated';
            } else {
                $rtrn = "Incorrect current password";
            }
        } else {
            $sql = "UPDATE `tbl_user` SET `name`= '$name', `mobile`='$mobile' WHERE `user_name` = '$username'";
            $result = $conn->query($sql);
            header('Location: http://localhost/Cab_Project/user_dashboard.php');
        }
        return $rtrn;
    }
    function pick_name($conn) 
    {
        $a = array();
        $sql = "select * from `tbl_user`";
        $result = $conn->query($sql);
        if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {
                array_push($a, $row);
            }
            return $a;
        }
    }
    public function join_table($conn)
    {
        $row_user = array();
        $sql = "select * from `tbl_user` inner join `tbl_ride` on `tbl_user`.user_id = `tbl_ride`.customer_user_id";
        $result = $conn->query($sql);
        if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {
                array_push($row_user, $row);
            }
        }
        return $row_user;
    }
    public function filter_by_date($date_first, $date_Second, $conn) 
    {
        $a = array();
        $user = new User();
        $row = $user->join_table($conn);
        foreach ($row as $key => $values) {
            if ($values['ride_date'] >= $date_first && $values['ride_date'] <= $date_Second) {
                array_push($a, $row[$key]);
            }
        }
        return $a;
    }
    public function filter_by_name($name, $conn) 
    {
        $a = array();
        $user = new User();
        $row = $user->join_table($conn);
        foreach ($row as $key => $values) {
            if ($values['name'] == $name) {
                array_push($a, $row[$key]);
            }
        }
        return $a;
    }
    public function filter_by_fare($fare, $conn) 
    {
        $a = array();
        $user = new User();
        $row = $user->join_table($conn);
        foreach ($row as $key => $values) {
            if ($values['total_fare'] == $fare) {
                array_push($a, $row[$key]);
            }
        }
        return $a;
    }
}
?>

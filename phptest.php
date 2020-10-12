<?php
if (isset($_POST['submit'])) {
    $username = (isset($_POST['username'])) ? $_POST['username'] : "";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "";
    $repassword = (isset($_POST['re-password'])) ? $_POST['re-password'] : "";
    $email = (isset($_POST['email'])) ? $_POST['email'] : "";
    
    //select all data form Database table.
    $select = "SELECT * FROM user_data "; 
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_all($result);
    $search = '';
    foreach ($row as $val) {
        if ($val[1] == $username && $val[3] == $email) {
            $search = 'match found';
        } else if ($val[3] == $email) {
            $search = 'match found';
        }
    }
    if ($search == '') {
        //Insert data into a Database table.
        $insert = "INSERT INTO `user_data`( `user_name`, `password`, `Email`) 
		           VALUES ('".$username."', '".$password."', '".$email."' ) ";
        $results = mysqli_query($conn, $insert);
        if ($results) { ?>
               <script>alert("New record created successfully");</script>
        <?php }
    } else { ?>
            <script>alert("User Already Exist");</script>
    <?php }

    $_POST = array();
}
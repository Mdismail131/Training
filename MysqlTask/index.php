<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="form.js"></script>
</head>
<form name="myform" action="home.php"  method="post">
    userid <input type="text" name="userid" id="user" 
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
    password <input type="text" name="pass">
    <button type="submit">Submit</button>
</form>
</html>
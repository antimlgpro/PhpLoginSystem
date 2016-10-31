<html>
<title>Login</title>
<?php 
session_start();
session_unset(); 
session_destroy();
$notadmin = "1";
include 'Header.php';?>
<form action="Action.php" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>
</html>

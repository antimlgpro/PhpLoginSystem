<html>
<title>Registry</title>
<?php session_start();
$notadmin = "1";
include 'Header.php';?>
<form action="Create.php" method="post">
Username: <input type="text" name="newusername"><br>
Password: <input type="password" name="newpassword"><br>
<input type="submit">
</form>
</html>

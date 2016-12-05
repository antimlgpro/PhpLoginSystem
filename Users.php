<?php session_start(); 
include 'Database.php';
include 'Header.php';
$admin = SESSION["admin"];
$notadmin = "0";
$user = $_POST["user"];
$form = $_POST["Admin"];
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th >Admin</th><th >Username</th><th >Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "<tr><td >".$row["Admin"]."</td><td >".$row["username"]."</td><td > ".$row["password"]."</td></tr>";
}
}
$sql = "UPDATE users SET Admin = '$form' WHERE username='$user'";
if ($conn->query($sql) === TRUE) {
} else {echo "Error updating record: " . $conn->error;}
?>
<html>

<?php
$admin = $_SESSION["admin"];
if ($admin==0) {
echo "<script>window.location = 'index.php'</script>";
} else {
goto a;
}

?>

<?php a: ?>
<ul>
  <li><a href="admin.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="reg.php">Registry</a></li>
<li><a href="Logout.php">Logout</a></li>
  <li><a href="phpmyadmin">PhpMyAdmin</a></li>
  <li><a href="Users.php">Users</a></li> 
  <h3 style="float:right"><?php echo "Logged in as " . $_SESSION["username"];
?></h3>
</ul>
<title>Users</title>
<body>

<form action="Users.php" method="post">
Username: <br /> <input type="text" name="user"><br>
Admin: <br/ > <input type="text" name="Admin"><br>
<input type="submit" name="submit" onSubmit="window.location.reload()">
</form>
<style>
table, th, td {
   border: 1px solid black;
}
</style>
</body>
</html>


<?php
session_start();
include 'Database.php';
$user = $_SESSION["username"];
$pass = $_SESSION["password"];
$user = $_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT Admin, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

$data_user = $row["username"];
$data_pass = $row["password"];
$data_Admin = $row["Admin"];
sleep(1);
if ($data_user == $user) {
if ($data_pass == $pass) {
$_SESSION["username"] = "$user";
$_SESSION["password"] = "$pass";
$_SESSION["admin"] = "$data_Admin";
$_SESSION["sqlpass"] = "$data_pass";
$_SESSION["logged"] = "1";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($data_Admin == 1) {
goto b;
} else {
goto a;
}
a:
echo "<script>window.location = 'index.php'</script>";
b:
echo "<script>window.location = 'admin.php'</script>";
} else {
echo "Wrong password";
}
} else {
echo "Wrong username";
}
}
}
?>

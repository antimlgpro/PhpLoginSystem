<?php
session_start();
include 'Database.php';
$newuser = $_POST["newusername"];
$newpass = $_POST["newpassword"];


$sql = "INSERT INTO users (Admin, username, password) VALUES ('0', '$newuser', '$newpass')";
$_SESSION["username"] = $newuser;
$_SESSION["password"] = $newpass;
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
sleep(2);
echo "<script>window.location = 'index.php'</script>"; 



?>

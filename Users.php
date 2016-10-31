<?php session_start(); 
include 'Database.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$data_user = $row["username"];
$data_pass = $row["password"];
$data_Admin = $row["Admin"];
}
}



echo "$data_pass"; 
echo "<br>";
echo "$data_Admin"; 
echo "<br>";
echo "$data_user"; 
echo "<br>";
?>


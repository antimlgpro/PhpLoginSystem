<?php
session_start();
session_unset(); 
session_destroy();
session_start();
$_SESSION["logged"] = "1";
echo "<script>window.location = 'index.php'</script>";
?>

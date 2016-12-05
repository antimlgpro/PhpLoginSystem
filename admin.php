<html>
<title>Admin</title>
<?php session_start();
$admin = SESSION["admin"];
$notadmin = "0";
include 'Header.php';
?>
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
  <li><a href="index.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="reg.php">Registry</a></li>
<li><a href="Logout.php">Logout</a></li>
  <li><a href="phpmyadmin">PhpMyAdmin</a></li>
  <h3 style="float:right"><?php echo "Logged in as " . $_SESSION["username"];
?></h3>
</ul>
<center>
<div style="background-color:gray;color:white;height:93%;width:50%;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer arcu quam, varius sit amet diam vel, dictum volutpat nunc. Donec libero ex, aliquam vel accumsan quis, placerat sit amet nunc. Donec fermentum massa sed ex lobortis, in tempus lorem venenatis. Mauris congue elit cursus neque aliquam sollicitudin. Nulla ante libero, lobortis vel laoreet ac, consectetur in diam. In et interdum ligula. Mauris bibendum fermentum mauris et varius.

Pellentesque malesuada purus libero. Donec congue nec libero et dignissim. Morbi non tellus sit amet orci lobortis interdum. Donec dictum sem faucibus malesuada luctus. Etiam sed vehicula metus. Aenean lobortis, augue et maximus porttitor, nulla turpis egestas purus, in imperdiet augue erat non elit. Praesent non purus nec felis dignissim malesuada. Fusce eu tempor elit. Fusce libero nisi, convallis eu enim sed, porttitor ullamcorper dui.

Morbi quis dui fringilla, lacinia augue vel, sagittis nibh. Vestibulum sit amet pulvinar diam, eget dictum ligula. Nulla nec accumsan velit. Donec sagittis dictum turpis sed finibus. Vestibulum vulputate pulvinar mi nec ornare. Cras id felis elementum, rhoncus felis ac, tristique sem. Duis eleifend pharetra sem eu luctus. Vestibulum et commodo augue, at ullamcorper arcu.

Nulla convallis egestas felis, ac tristique nunc luctus eget. Cras eget mattis mauris. Nunc nulla nisl, pellentesque in porta et, viverra at augue. Suspendisse potenti. Nulla vehicula tristique volutpat. Donec elit lacus, malesuada sit amet enim quis, tempus sollicitudin metus. In in aliquam nisl. Aliquam nisi nunc, ullamcorper ac aliquet eu, hendrerit sit amet nulla. In interdum ex sem, nec auctor nisi consequat et. Pellentesque suscipit dolor vel ex posuere auctor. Cras tincidunt posuere nisi ut facilisis. Nam eget quam congue erat feugiat scelerisque ac ut dolor. Nam lobortis lectus magna, eu dignissim lorem cursus id. Etiam felis mauris, tristique ac sem quis, rutrum porta nibh. Aenean semper sapien elit, vel pretium nisi congue non.

Proin luctus orci ac arcu porta porttitor et vel nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque luctus sodales arcu. Mauris leo ex, posuere luctus mattis vitae, eleifend sit amet ligula. Aliquam pharetra rutrum arcu, sit amet venenatis magna vehicula id. Maecenas volutpat massa quis augue sollicitudin ornare. Curabitur ut feugiat velit. Nullam hendrerit erat eget lacus malesuada, quis fermentum ipsum blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum mauris a vulputate ullamcorper. Quisque fringilla massa odio, a facilisis ligula ultrices sed. Curabitur eu sem aliquet ligula aliquam placerat eu a lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam egestas felis id nisi dapibus, nec bibendum nisi egestas. Vivamus vitae felis nibh.
</div>
</html>

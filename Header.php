<html>
<img src="Images/Background.png" alt="Img" style="width:100%;height:100%;">
<?php
if ($notadmin==1) {goto c;} else {goto e;}
e:
?>
<?php if ($admin==1) : 
c:
?>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="reg.php">Registry</a></li>
  <li><a href="login.php">Logout</a></li>
  <h3 style="float:right"><?php echo "Logged in as " . $_SESSION["username"];
?></h3>
</ul>
<?php endif; ?>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}
img {
    position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
}
</style>
</html>

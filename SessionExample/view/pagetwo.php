<?php
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br/>Your Profile Page.



<br>
Want to logout? <a href="../control/logout.php">logout</a>
<br>
Want to visit page one <a href="../control/pageone.php">page one</a>
</body>
</html>